<view>
    <section class="catalog buy-second">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title" wb-if="'{{title}}'==''">{{_parent.header}}</h1>
                <h1 class="page-title" wb-if="'{{title}}'>''">{{title}}</h1>
            </div>
            <div class="buy-row">
                <wb-foreach wb="from=images&tpl=false">
                    <div class="buy-col">
                        <div class="buy-wrap">
                            <div class="buy-logo">
                                <a href="{{wblink}}" target="_blank">
                                    <img src="/thumbc/300x80/src{{image.0.img}}" alt="{{whname}}">
                                </a>
                            </div>
                            <span class="buy-name" wb-if="'{{whname}}'>''">{{whname}}</span>
                            <span class="buy-txt" wb-if="'{{whaddr}}'>''">{{whaddr}}</span>
                            <a href="tel:+{{text2tel({{whphone}})}}" wb-if="'{{whphone}}'>''" class="buy-tel">{{whphone}}</a>
                        </div>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </section>
</view>

<edit header="Где купить">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row mb-1">
        <label class="col-form-label col-sm-4 col-xl-3">Заголовок</label>
        <div class="col-sm-8 col-xl-9">
            <input class="form-control" type="text" name="title" placeholder="Где купить">
        </div>
    </div>
    <hr class="my-1">
    <wb-multiinput name="images">
        <div class="col-sm-4 col-lg-3">
            <div class="form-group">
                <input name="image" wb="module=filepicker&mode=single&original=false&ext=png,jpg,jpeg,gif,svg,webp&width=300&height=120" wb-path="/uploads/documents/{{_parent.id}}" />
            </div>
        </div>
        <div class="col-sm-8 pl-4 col-lg-9">
            <div class="form-group row mb-1">
                <label class="col-form-label col-sm-3">Название</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="whname">
                </div>
            </div>
            <div class="form-group row mb-1">
                <label class="col-form-label col-sm-3">Адрес</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="whaddr">
                </div>
            </div>
            <div class="form-group row mb-1">
                <label class="col-form-label col-sm-3">Ссылка и телефон</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" name="whlink" placeholder="Ссылка">
                </div>
                <div class="col-sm-4">
                    <input class="form-control" type="tel" wb-mask="+7 (999) 999-99-99" name="whphone" placeholder="Телефон">
                </div>
            </div>
        </div>
        <hr class="col my-1">
    </wb-multiinput>
</edit>