<html>
<div class="modal effect-scale show removable" id="modalPagesEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">

                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <div class="row">
                    <div class="col-12 mb-5">
                        <form id="{{_form}}EditForm">
                            <div wb-if="'{{active}}'==''">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <h3 class="tx-center">{{fullname}}</h3>
                                        <p>{{position}}</p>
                                        <p class="tx-center tx-18">Открыть доступ пользователю и выслать на электронную почту пароль для доступа</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="input-group col-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="my-addon">Задать пароль доступа</span>
                                        </div>
                                        <input type="text" name="setpass" class="form-control" minlength="8" value="{{wbPasswordGenerate(8)}}" required>
                                    </div>
                                </div>
                            </div>
                            <div wb-if="'{{active}}'=='on'">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <h3 class="tx-center">{{fullname}}</h3>
                                        <p class="tx-center tx-18">Закрыть пользователю доступ к материалам.</p>
                                    </div>
                                </div>
                                <wb-data>
                                    <input type="hidden" name="active" value="" />
                                </wb-data>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <button type="button" class="cms btn-close btn btn-danger" data-dismiss="modal">
                    <svg wb-module="myicons" class="mi mi-interface-essential-107 size-20" stroke="FFFFFF"></svg>&nbsp;
                    Отмена
                </button>
                <button type="button" class="cms btn-save btn btn-primary" wb-save="{'table':'{{_form}}','item':'{{_id}}','form':'#{{_form}}EditForm' }">
                    <svg wb-module="myicons" class="mi mi-floppy-save size-20" stroke="FFFFFF"></svg>&nbsp;
                    <span wb-if="'{{active}}'=='on'">Закрыть доступ</span>
                    <span wb-if="'{{active}}'==''">Открыть доступ</span>
                </button>
            </div>
        </div>
    </div>
</div>

</html>