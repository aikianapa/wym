(() => {
    var api = "/api/v2"
    var form = "products"
    var size = 20
    var base = api + `/list/${form}?&@size=${size}&@sort=_sort`
    var list = new Ractive({
        el: `#${form}List`,
        template: $(`#${form}List`).html(),
        data: {
            base: base,
            result: [],
            pagination: [],
            user: wbapp._session.user,
            filter: {},
            sort: false
        },
        on: {
            init() {
                let base = this.get("base");
                wbapp.post(`${base}`, {}, function (data) {
                    list.fire("setData", null, data)
                })
            },
            setData(ev, data) {
                list.set("result", data.result);
                list.set("pagination", data.pagination);
                list.set("page", data.page);
                list.set("pages", data.pages);
                if (list.get('sort') == true) {
                    $(`#${form}List .list-group`).sortable("destroy");
                    list.set("sort", false);
                }
                let filter = list.get('filter')
                if (list.get('sort') == false && Object.keys(filter).length == 0) {
                    list.set("sort", true);
                    $(`#${form}List .list-group`).sortable({
                        update: function (ev, line) {
                            let data = {}
                            $(ev.target).children().each(function (i, li) {
                                data[i] = $(li).data('id')
                            })
                            wbapp.post(`/api/v2/func/${form}/sort`, data)
                        }
                    });
                }
                document.getElementById(`${form}List`).scrollIntoView()
            },
            setPage(ev) {
                let page = $(ev.node).attr("data-page");
                this.fire("loadPage", page)
                return false
            },
            switch(ev) {
                let id = $(ev.node).parents('[data-id]').attr('data-id');
                let active = '';
                ev.get('active') == 'on' ? active = '' : active = 'on';
                wbapp.post(`/api/v2/update/${form}/` + id, {
                    active: active
                }, function (res) {
                    if (res.active !== undefined) ev.set('active', res.active)
                })
            },
            filter(ev) {
                let base = this.get("base");
                let filter = {}
                $(list.el).find('.search :input').each(function () {
                    let val = $(this).val()
                    if (val > '' && $(this).attr('name') == 'filter') {
                        filter['$or'] = [
                            { header: { '$like': val } }
                        ]
                    }
                    if ($(this).attr('name') == 'speed') {
                        let speed = $(this).val()
                        speed == '*' ? null : filter.speed = {'$like':speed}
                    }
                })
                this.set('filter', filter)
                console.log(filter);
                wbapp.post(`${base}`, { filter: filter }, function (data) {
                    list.fire("setData", null, data)
                })
            },
            remove(ev) {
                let id = $(ev.node).parents('[data-id]').attr('data-id');
                let result = list.get("result")
                let page = list.get("page") * 1
                let pages = list.get("pages") * 1
                delete result[id]
                if (Object.keys(result).length == 0 && pages > 0 && page >= pages) page--
                wbapp.post(`${api}/delete/${form}/${id}`, {}, function (data) {
                    if (data.error == false) {
                        list.fire("loadPage", page)
                    }
                });
            },
            loadPage(ev, page) {
                wbapp.post(`${base}&@page=${page}`, {}, function (data) {
                    list.fire("setData", null, data)
                })
            }
        }
    })
    $(document).undelegate(`#${form}EditForm`, 'wb-form-save');
    $(document).delegate(`#${form}EditForm`, 'wb-form-save', function (ev, res) {
        if (res.params.item !== undefined && res.data !== undefined) {
            list.set("result." + res.data.id, res.data);
        }
    })
})($)