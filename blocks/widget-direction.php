<view>
    <div class="wrapper page-top">
        <h1 class="page-title">Медицинские направления</h1>
    </div>
    <div class="wrapper">
        <div class="direction-wrap">
            <wb-foreach wb="table=catalogs&item=directions&from=tree.data&tpl=false">
                <div class="direction-item-info direction-item-info-{{_ndx}}" id="direction-{{_ndx}}">
                    <i class="hb-ico close-ico"></i>
                    <span class="direction-item-tit">{{name}}</span>
                    <p class="text-break">{{data.text}}</p>
                    <ul>
                        <wb-foreach wb="from=_var.products&tpl=false" wb-filter="directions~={{id}}">
                            <li class="green-cr" _class="blue-cr green-cr">
                                <a href="/catalog/{{wbFurlGenerate({{header}})}}">{{header}}</a>
                            </li>
                        </wb-foreach>
                    </ul>
                </div>
            </wb-foreach>
            <div class="direction-main"><img src="/assets/img/Illustation.png" alt=""></div>
            <div class="direction-items">
                <wb-foreach wb="table=catalogs&item=directions&from=tree.data&tpl=false">
                    <div class="direction-item direction-item-{{_ndx}}">
                        <div class="direction-item-imgs" data-direction="direction-{{_ndx}}">
                            <div class="direction-item-img-1"><img src="/assets/img/Building_1/img-1.png" alt=""></div>
                            <div class="direction-item-img-2"><img src="/assets/img/Building_1/img-2.png" alt=""></div>
                            <div class="direction-item-img-3"><img src="/assets/img/Building_1/img-3.png" alt=""></div>
                        </div>
                    </div>
                </wb-foreach>
                <div class="direction-lg"><img src="/assets/img/lg.png" alt=""></div>
            </div>
            <div class="direction-mob">
                <div class="direction-slider slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-1">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_1/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_1/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_1/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-2">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_2/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_2/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_2/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-3">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_3/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_3/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_3/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-4">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_4/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_4/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_4/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-5">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_5/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_5/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_5/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-6">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_6/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_6/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_6/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                        <div class="direction-slide swiper-slide">
                            <span class="direction-slide-tit">Анестезиология и реаниматология</span>
                            <div class="direction-slide-img">
                                <div class="direction-item-imgs direction-item-imgs-7">
                                    <div class="direction-item-img-1"><img src="/assets/img/Building_7/img-1.png" alt=""></div>
                                    <div class="direction-item-img-2"><img src="/assets/img/Building_7/img-2.png" alt=""></div>
                                    <div class="direction-item-img-3"><img src="/assets/img/Building_7/img-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="direction-slide-btn">
                                <a href="#" class="more-btn" data-direction="direction-1">Подробнее</a>
                            </div>
                        </div><!-- slide -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Виджет - Медицинские направления">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="alert alert-info">
        Виджет автоматически формируется на основе справочника медицинских направлений и каталога продукции.
    </div>
    <button class="btn btn-primary" type="button" data-ajax="{'url':'/cms/ajax/form/catalogs/edit/directions','html':'modals.editDirections'}">
        Редактировать медицинские направления
    </button>
    <modals class="editDirections"></modals>
</edit>