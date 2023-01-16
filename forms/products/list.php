<html>
<div id="yongerSpace">
    <div id="{{_form}}List">
        <nav class="nav navbar navbar-expand-md col">
            <h3 class="tx-bold tx-spacing--2 order-1">Продукция</h3>

            <a href="#" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'modals'}" class="ml-auto order-2 float-right btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/users-15.svg" /> Добавить продукт
            </a>
        </nav>
        <div class="yonger-nested m-2 p-2">
            <div class="bg-light p-3 mb-2 rounded search">
                <div class="row">
                    <div class="col-6">
                        <input type="search" class="form-control" name="filter" placeholder="{{_lang.search}}" on-change="filter">
                    </div>
                    <div class="col-6">
                        <select class="form-control" name="speed" wb-select2 placeholder="Скорость потока" on-change="filter">
                            <option value="*">Все</option>
                            <wb-foreach wb="table=catalogs&item=speed&from=tree.data&tpl=false">
                                <option value="{{id}}" wb-if="'{{active}}'=='on'">{{name}}</option>
                            </wb-foreach>
                        </select>
                    </div>
                </div>
            </div>

            <ul class="list-group">
                {{#each result}}
                    <li class="list-group-item d-flex align-items-center" data-id="{{.id}}">
                        <div class="wd-40p">{{.header}}</div>
                        <div class="wd-30p tx-11">{{.phone}}<br>{{.email}}</div>
                        <div class="wd-10p">{{.role}}</div>
                        <div class="text-right wd-20p">
                            <div class="custom-control custom-switch d-inline">
                                {{#if .active == "on"}}
                                    <span class="cursor-pointer d-inline" on-click="switch">
                                        <svg class="mi mi-power-turn-on-square.1" size="24" stroke="82C43C" wb-on wb-module="myicons"></svg>
                                    </span>
                                {{/if}}
                                {{#if .active == ""}}
                                    <span class="cursor-pointer d-inline" on-click="switch">
                                        <svg class="mi mi-power-turn-on-square" size="24" stroke="FC5A5A" wb-on wb-module="myicons"></svg>
                                    </span>
                                {{/if}}
                            </div>
                            <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/products/edit/{{.id}}','html':'modals'}" class="d-inline">
                                <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232">
                            </a>
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
<script language="javascript" src="/forms/products/list.js"></script>

</html>