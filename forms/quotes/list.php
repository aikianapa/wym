<html>
<div class="m-3" id="yongerQuotes">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">{{_lang.quotes}}</h3>
        <!--a href="#" data-ajax="{'url':'/cms/ajax/form/quotes/edit/_new','html':'modals'}" class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> {{_lang.newQuote}}
        </a-->
    </nav>

    <table class="table table-striped table-hover tx-15">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Номер</th>
                <th>Клиент</th>
                <th>Статус</th>
                <th></th>
            </tr>
        </thead>
        <wb-var status="{'new':'Новая','ready':'Обработанная','done':'Завершённая'}"/>
        <tbody id="quotesList">
            <wb-foreach wb="table=quotes&sort=_created:d&render=server&bind=cms.list.quotes&size={{_sett.page_size}}" wb-filter="{'_site' : {'$in': [null,'{{_sett.site}}']}}">
                <tr>
                    <td>{{wbDate("d.m.y H:i",{{_created}})}}</td>
                    <td>{{number}}</td>
                    <td>
                        {{name}}
                        <div class="tx-12">{{phone}} / {{email}}</div>
                    </td>
                    <td>{{_var.status.{{status}}}}</td>
                    <td>
                        <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/quotes/edit/{{id}}','html':'modals'}" class="d-inline">
                            <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232">
                        </a>
                        <a href="javascript:" data-ajax="{'url':'/ajax/rmitem/quotes/{{id}}','update':'cms.list.quotes','html':'modals'}" class="d-inline">
                            <img src="/module/myicons/trash-delete-bin.2.svg?size=24&stroke=323232" class="d-inline">
                        </a>
                    </td>
                </tr>
            </wb-foreach>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>
<script wb-app>

</script>
<wb-lang>
    [ru]
    quotes = Заявки
    search = Поиск
    newQuote = Новая заявка
    [en]
    quotes = Quotes
    search = Search
    newQuote = New quote
</wb-lang>

</html>