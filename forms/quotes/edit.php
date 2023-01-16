<html>
<div class="modal fade effect-scale show removable" id="modalQuotesEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>{{_lang.quote}} {{number}}</h5>
                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <form class="row" method="post" id="{{_form}}EditForm">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-control-label">{{_lang.date}}</label>
                            <input type="datetime" wb-module="datetimepicker" value="{{_created}}" class="form-control" placeholder="{{_lang.date}}" readonly>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-6">
                                <label class="form-control-label">{{_lang.name}}</label>
                                <input type="text" name="name" class="form-control" placeholder="{{_lang.name}}" required>
                            </div>
                            <div class="form-group col-6">
                                <label class="form-control-label">Статус</label>
                                <select name="status" class="form-control" wb-select2>
                                    <option value="new">Новая</option>
                                    <option value="ready">Обработанная</option>
                                    <option value="done">Завершённая</option>
                                </select>
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
                            <div class="form-group col-12">
                                <textarea name="message" class="form-control" placeholder="Сообщение" rows="auto"></textarea>
                            </div>
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