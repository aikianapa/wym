(() => {
    var api = "/api/v2"
    var form = "materials"
    var size = 10
    var base = api + `/list/${form}?&@size=${size}&@sort=date:d`
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
                wbapp.post(`${base}`, {}, function (data) {
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
            switchHome(ev) {
                let id = $(ev.node).parents('[data-id]').attr('data-id');
                let home = '';
                ev.get('home') == 'on' ? home = '' : home = 'on';
                wbapp.post(`/api/v2/update/${form}/` + id, {
                    home: home
                }, function (res) {
                    if (res.home !== undefined) ev.set('home', res.home)
                })
            },
            filter(ev) {
                let base = this.get("base");
                let filter = {}
                $(list.el).find('.search :input').each(function () {
                    if ($(this).attr('name') == 'filter') {
                        let val = $(this).val()
                        filter['$or'] = [
                            { header: { '$like': val } }
                        ]
                    }
                    if ($(this).attr('name') == 'role') {
                        let role = $(this).val()
                        role == '*' ? null : filter.role = role
                    }
                })

                wbapp.post(`${base}`, { filter: filter }, function (data) {
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