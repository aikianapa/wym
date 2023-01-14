<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Мероприятия</h3>
        <div class="ml-auto order-2 float-right">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/events/edit/_new','html':'modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить мероприятие
            </a>
        </div>
    </nav>

    <div class="yonger-nested mb-1">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'header': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>


        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>Дата</td>
                    <td>Заголовок</td>
                    <td>Теги</td>
                    <td class="text-center">На главной</td>
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="{{_form}}List">
                <wb-foreach wb="{'table':'{{_form}}',
                            'render':'server',
                            'bind':'cms.list.{{_form}}',
                            'sort':'date:d',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site' : {'$in': [null,'{{_sett.site}}']}}
                }">
                    <tr class="bg-transparent">
                        <td data-ajax="{'url':'/cms/ajax/form/events/edit/{{_id}}','html':'modals'}">
                            <span class="tx-13 tx-inverse tx-semibold mg-b-0">{{date}}</span>
                        </td>
                        <td class="w-25">
                            {{header}}
                        </td>
                        <td class="w-25">
                            <wb-foreach wb="call=explode(',','{{blocks.seo.lang.{{_sess.lang}}.keywords}}')">
                                <small class="d-flex-inline p-1 mr-1 bg-light text-dark"
                                    wb-if="'{{_val}}'>''">{{_val}}</small>
                            </wb-foreach>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="home"
                                    id="{{_form}}SwitchItemHome{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'home','silent':true})">
                                <label class="custom-control-label" for="{{_form}}SwitchItemHome{{_idx}}">&nbsp;</label>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="active"
                                    id="{{_form}}SwitchItemActive{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active','silent':true})">
                                <label class="custom-control-label"
                                    for="{{_form}}SwitchItemActive{{_idx}}">&nbsp;</label>
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/events/edit/{{_id}}','update':'cms.list.{{_form}}','html':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{_id}}','update':'cms.list.{{_form}}','html':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/trash-delete-bin.2.svg" width="24"
                                    height="24"></a>
                        </td>
                    </tr>
                </wb-foreach>
            </tbody>
        </table>
    </div>
</div>
    <script wb-app>
    wbapp.loadStyles(['/engine/lib/js/nestable/nestable.css']);
    wbapp.loadScripts(['/engine/lib/js/nestable/nestable.min.js'], '', function() {
    })
    </script>
</html>