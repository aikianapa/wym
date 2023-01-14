<html>
<div class="modal effect-scale show removable" id="modalPagesEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xxl" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>Редактирование материала</h5>
                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <div class="row">
                    <div class="col-5 col-lg-4 scroll-y modal-h">
                        <form id="{{_form}}EditForm">
                            <wb-var id="{{id}}" wb-if="'{{id}}'>''" else="{{wbNewId()}}" />
                            <input name="id" value="{{_var.id}}" type="hidden" />
                            <div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="divider-text my-0">Обложка</div>
                                        <wb-module wb="module=filepicker&mode=single&original=false&width=800&height=300" 
                                        wb-path="/uploads/materials/{{_var.id}}" 
                                        wb-ext="jpg,jpeg,gif,png,webp,svg"
                                        name="cover">
                                        </wb-module>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <label class="col-md-4">
                                        <input name="active" wb-module="swico" data-size="36">
                                    </label>
                                    <div class="col">
                                        <input name="header" class="form-control" placeholder="Заголовок" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">

                                    <label class="col-form-label col-md-4">Дата</label>
                                    <div class="col-md-8">
                                        <input type="datepicker" name="date" class="form-control" wb="module=datetimepicker" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-md-4">Тип материала</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="materials" wb-select2 placeholder="Серия">
                                            <wb-foreach wb="table=catalogs&item=materials&from=tree.data&tpl=false">
                                                <option value="{{id}}" wb-if="'{{active}}'=='on'">{{name}}</option>
                                            </wb-foreach>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-12">
                                        <textarea rows="auto" name="descr" class="form-control" placeholder="Короткое описание" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <wb-module wb="module=yonger&mode=structure" />
                        </form>
                    </div>

                    <div class="col-7 col-lg-8 scroll-y modal-h">
                        <div id="yongerBlocksForm">
                            <form method="post">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>

<div class="modal effect-slide-in-right left w-50" id="modalPagesEditBlocks" data-backdrop="true" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i></i>
                <i class="fa fa-close cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body p-0 pb-5 scroll-y">
                <div class="list-group" id="{{_form}}EditFormListBlocks">
                    <wb-foreach wb="from=_null&render=client&bind=yonger.blocks">
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)" data-name="{{name}}" onclick="yonger.yongerPageBlockAdd('{{id}}')">
                            <span>{{name}}</span>
                            <span class="d-block tx-11 text-muted">{{header}}</span>
                        </a>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </div>
</div>
<wb-lang>
    [ru]
    main = Основное
    prop = Вставки кода
    seo = Оптимизация
    images = Изображения
    visible = Отображать
    header = Заголовок
    [en]
    main = Main
    prop = Code injection
    seo = SEO
    images = Images
    visible = Visible
    header = Header
</wb-lang>

</html>