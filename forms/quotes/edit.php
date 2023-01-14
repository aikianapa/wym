<html>
<div class="modal fade effect-scale show removable" id="modalQuotesEdit" data-backdrop="static" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>{{_lang.quote}}</h5>
                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal"
                    aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <form class="row" method="post" id="{{_form}}EditForm">
                    <div class="col-lg-6">
                        <h5>{{_lang.info}}</h5>
                        <div class="form-group">
                            <label class="form-control-label">{{_lang.date}}</label>
                            <input type="datetime" wb-module="datetimepicker" name="_created" class="form-control"
                                placeholder="{{_lang.date}}" required>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label">{{_lang.name}}</label>
                                <input type="text" name="name" class="form-control" placeholder="{{_lang.name}}"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Сайт</label>
                                <input type="text" name="site" class="form-control" placeholder="Сайт">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label">{{_lang.email}}</label>
                                <input type="email" name="email" class="form-control" placeholder="{{_lang.email}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-control-label">{{_lang.phone}}</label>
                                <input type="text" name="phone" class="form-control" placeholder="{{_lang.phone}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Город</label>
                                <input type="text" name="city" class="form-control" placeholder="Город">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Компания</label>
                                <input type="text" name="subject" class="form-control" placeholder="Компания">
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="form-control-label">Бюджет</label>
                                <input type="text" name="budget" class="form-control" placeholder="Бюджет">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Тип проекта</label>
                            <wb-data wb="table=catalogs&item=projects&field=tree">
                                <select name="project" class="form-control" wb-select2 multiple>
                                    <wb-foreach wb-from="data">
                                        <option value="{{_id}}" selected
                                            wb-if="'{{in_array({{_id}},{{_parent._parent.project}})}}'=='1'">
                                            {{name}}</option>
                                        <option value="{{_id}}"
                                            wb-if="'{{in_array({{_id}},{{_parent._parent.project}})}}'!='1'">
                                            {{name}}</option>
                                    </wb-foreach>
                                </select>
                            </wb-data>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Источник</label>
                            <wb-data wb="table=catalogs&item=sources&field=tree">
                                <select name="source" class="form-control" wb-select2 multiple>
                                    <wb-foreach wb-from="data">
                                        <option value="{{_id}}" selected
                                            wb-if="'{{in_array({{_id}},{{_parent._parent.source}})}}'=='1'">
                                            {{name}}</option>
                                        <option value="{{_id}}"
                                            wb-if="'{{in_array({{_id}},{{_parent._parent.source}})}}'!='1'">
                                            {{name}}</option>
                                    </wb-foreach>
                                </select>
                            </wb-data>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h5>Задача</h5>
                            <textarea name="task" rows="auto" class="form-control" placeholder="Задача"
                                required></textarea>
                        </div>
                        <h5>{{_lang.appends}}</h5>
                        <div>
                            <wb-module name="file" wb="{
                                'module':'filepicker',
                                'mode':'multi',
                                'original': true
                                }" />
                        </div>

                        <h5>{{_lang.actions}}</h5>
                        <div class="form-group">
                            <a href="#" class="btn btn-outline-primary my-2">Обработать</a>
                            <a href="#" class="btn btn-outline-primary my-2">Назначить ответственного</a>
                            <a href="#" class="btn btn-outline-primary my-2">Пометить как дубль</a>
                            <a href="#" class="btn btn-outline-danger my-2">Пометьть как спам</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<wb-lang>
    [ru]
    date = Дата
    name = Имя
    email = Эл.почта
    phone = Телефон
    quote = Заявка
    subject = Тема
    msg = Обращение
    info = Информация
    appends = Вложения
    actions = Действия
</wb-lang>

</html>