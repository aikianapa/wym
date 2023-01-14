<view>
    <section class="contacts">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title">Контакты</h1>
            </div>
            <div class="contacts-row">
                <div class="contacts-info">
                    <ul class="header-actions">
                        <li><a href="tel:{{text2tel({{_var.contact_phone}})}}"><span class="action-cr"><i class="hb-ico tel-ico"></i></span><span>{{superTel({{_var.contact_phone}})}}</b></span></a></li>
                        <li><a href="mailto:{{_var.contact.email}}"><span class="action-cr"><i class="hb-ico mail-ico"></i></span><span>{{_var.contact_email}}</span></a></li>
                        <li><span class="action-cr"><i class="hb-ico located-ico"></i></span><span>{{_var.contact_address}}</span></li>
                        <li><span class="action-cr"><i class="hb-ico time-ico"></i></span><span>{{_var.contact_worktime}}</span></li>
                    </ul>
                    <span class="contacts-title">Реквизиты</span>
                    <p>ИНН {{inn}} <br>ОГРН {{ogrn}} <br>БИК {{bik}}</p>
                </div>
                <div class="contacts-main">
                    <div class="contacts-map">
                        <div class="map" id="map">
                            <div wb-module="yamap" zoom="{{yamap.0.zoom}}" height="343" style="height:343px;">
                                <wb-foreach wb="from=yamap">
                                    <geopos value="{{geopos}}" title="{{address}}"></geopos>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Контакты">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="form-group row">
                <label class="col-3">Наименование</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="org">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Телефон</label>
                <div class="col-9">
                    <input class="form-control" wb-mask="8 (999) 999-99-99" type="tel" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Эл.почта</label>
                <div class="col-9">
                    <input class="form-control" type="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Адрес</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="address">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Время работы</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="worktime">
                </div>
            </div>
            <div class="divider-text">Реквизиты</div>
            <div class="form-group row">
                <label class="col-3">ИНН</label>
                <div class="col-9">
                    <input class="form-control" type="number" name="inn">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">ОГРН</label>
                <div class="col-9">
                    <input class="form-control" type="number" name="ogrn">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">БИК</label>
                <div class="col-9">
                    <input class="form-control" type="number" name="bik">
                </div>
            </div>
            <div class="divider-text">Соцсети</div>
            <div class="form-group row">
                <label class="col-3">WhatsApp</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="whatsapp">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Telegram</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="telegram">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Vkontakte</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="vk">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Odnoklassniki</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ok">
                </div>
            </div>
            <div class="divider-text">Карта</div>
            <div class="form-group">
                <input name="yamap" wb="module=yamap" width="100%" height="343">
            </div>
        </div>
    </div>
</edit>