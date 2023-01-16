<html>
<div id="yongerSpace">
    <div id="{{_form}}List">
        <nav class="nav navbar navbar-expand-md col">
            <h3 class="tx-bold tx-spacing--2 order-1">Пользователи</h3>
        </nav>
        <div class="yonger-nested m-2 p-2">
            <div class="bg-light p-3 mb-2 rounded search">
                <div class="row">
                    <div class="col-6">
                        <input type="search" class="form-control" name="filter" placeholder="{{_lang.search}}" on-change="filter">
                    </div>
                    <div class="col-6">
                        <select class="form-control" name="active" on-change="filter">
                            <option value="*">Все</option>
                            <option value="a">Активные</option>
                            <option value="o">Не активные</option>
                        </select>
                    </div>
                </div>
            </div>

            <ul class="list-group">
                {{#each result}}
                    <li class="list-group-item d-flex align-items-center" data-id="{{.id}}">
                        <div class="wd-40p">{{.fullname}}<br><a href="mailto:{{.email}}" class="tx-11">{{.email}}</a></div>
                        <div class="wd-40p tx-11">{{.org}}</div>
                        <div class="text-right wd-20p">
                            {{#if .active == "on"}}
                                <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/users/approve/{{.id}}','html':'modals'}" class="d-inline">
                                    <svg class="mi mi-power-turn-on-square.1" size="24" stroke="82C43C" wb-on wb-module="myicons"></svg>
                                </a>
                            {{/if}}
                            {{#if .active == ""}}
                                <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/users/approve/{{.id}}','html':'modals'}" class="d-inline">
                                    <svg class="mi mi-power-turn-on-square" size="24" stroke="FC5A5A" wb-on wb-module="myicons"></svg>
                                </a>
                            {{/if}}
                            <div class="dropdown dropright d-inline">
                                <a class="cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="mi mi-trash-delete-bin.2 d-inline" size="24" stroke="dc3545" wb-on wb-module="myicons"></svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" on-click="remove">
                                        <span class="fa fa-trash tx-danger"></span> Удалить</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="fa fa-close tx-primary"></span> Отмена</a>
                                </div>
                            </div>
                        </div>
                    </li>
                {{/each}}
            </ul>
            {{#~/pages }} {{#if ~/pages != 1 }}
                    <nav>
                        <ul class="pagination justify-content-center mg-b-0 mg-t-10">
                            {{#each pagination}} {{#if ~/page == .page}}
                                    <li class="page-item active">
                                        <a class="page-link" data-page="{{.page}}" on-click="setPage" href="#">
                                            {{.label}}
                                        </a>
                                    </li>
                                {{/if}} {{#if ~/page != .page}}
                                    <li class="page-item">
                                        <a class="page-link" data-page="{{.page}}" on-click="setPage" href="#">
                                            {{#if .label == "prev"}}
                                                <img src="/module/myicons/interface-essential-181.svg?size=18&stroke=0168fa" class="d-inline">{{/if}} {{#if .label == "next"}}
                                                <img src="/module/myicons/interface-essential-35.svg?size=18&stroke=0168fa" class="d-inline">{{/if}} {{#if .label != "prev"}}{{#if .label != "next"}}{{.label}}{{/if}}{{/if}}
                                        </a>
                                    </li>
                                {{/if}} {{/each}}
                        </ul>
                    </nav>
                {{/if}} {{/pages}}
        </div>
    </div>
</div>
<script language="javascript">
    (() => {
        var api = "/api/v2"
        var form = "users"
        var size = 20
        var base = api + `/list/${form}?&isgroup!=on&role=user&@size=${size}&@sort=_created:d`
        var list = new Ractive({
            el: `#${form}List`,
            template: $(`#${form}List`).html(),
            data: {
                base: base,
                result: [],
                pagination: [],
                user: wbapp._session.user
            },
            on: {
                init() {
                    let base = this.get("base");
                    wbapp.post(`${base}`, {}, function(data) {
                        list.set("result", data.result);
                        list.set("pagination", data.pagination);
                        list.set("page", data.page);
                        list.set("pages", data.pages);
                    })
                },
                setData(ev, data) {
                    list.set("result", data.result);
                    list.set("pagination", data.pagination);
                    list.set("page", data.page);
                    list.set("pages", data.pages);
                },
                setPage(ev) {
                    let page = $(ev.node).attr("data-page");
                    this.fire("loadPage", page)
                    return false
                },
                switch (ev) {
                    let id = $(ev.node).parents('[data-id]').attr('data-id');
                    let active = '';
                    ev.get('active') == 'on' ? active = '' : active = 'on';
                    wbapp.post(`/api/v2/update/${form}/` + id, {
                        active: active
                    }, function(res) {
                        if (res.active !== undefined) ev.set('active', res.active)
                    })
                },
                filter(ev) {
                    let base = this.get("base");
                    let filter = {
                        isgroup: {
                            '$ne': 'on'
                        },
                        role: 'user'
                    }
                    $(list.el).find('.search :input').each(function() {
                        if ($(this).attr('name') == 'filter') {
                            let val = $(this).val()
                            filter['$or'] = [{
                                    fullname: {
                                        '$like': val
                                    }
                                },
                                {
                                    email: {
                                        '$like': val
                                    }
                                }
                            ]
                        }
                        if ($(this).attr('name') == 'active') {
                            let active = $(this).val()
                            active == '*' && filter.active !== undefined ? delete filter['active'] : null
                            active == 'a' ? filter.active = 'on' : null
                            active == 'o' ? filter.active = '' : null
                            console.log(filter.active);
                        }
                    })
                    wbapp.post(`${base}`, {
                        filter: filter
                    }, function(data) {
                        list.set("result", data.result);
                        list.set("pagination", data.pagination);
                        list.set("page", data.page);
                        list.set("pages", data.pages);
                    })
                },
                remove(ev) {
                    let id = $(ev.node).parents('[data-id]').attr('data-id');
                    let result = list.get("result")
                    let page = list.get("page") * 1
                    let pages = list.get("pages") * 1
                    delete result[id]
                    if (Object.keys(result).length == 0 && pages > 0 && page >= pages) page--
                    wbapp.post(`${api}/delete/${form}/${id}`, {}, function(data) {
                        if (data.error == false) {
                            list.fire("loadPage", page)
                        }
                    });
                },
                loadPage(ev, page) {
                    wbapp.post(`${base}&@page=${page}`, {}, function(data) {
                        list.fire("setData", null, data)
                    })
                }
            }
        })
        $(document).undelegate(`#${form}EditForm`, 'wb-form-save');
        $(document).delegate(`#${form}EditForm`, 'wb-form-save', function(ev, res) {
            $(`#${form}EditForm`).parents('.modal').modal('hide')
            if (res.params.item !== undefined && res.data !== undefined) {
                list.set("result." + res.data.id, res.data);
            }
        })
    })($)
</script>
<wb-lang>
    [ru]
    users = Пользователи
    search = Поиск пользователя
    create = Создать пользователя
    roles = Роли
    [en]
    users = Users
    search = Search user
    create = Create user
    roles = Roles
</wb-lang>

</html>