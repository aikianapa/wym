<view>
    <section class="block-{{name}}">
        <div class="wrapper">
            <div class="aboutUs-bottom">
                <span class="aboutUs-t">{{title}}</span>
                <div class="aboutUs-row">
                    <wb-foreach wb="from=links&tpl=false">
                        <div class="aboutUs-col" wb-if="'{{link}}'>'' OR '{{label}}'>''">
                            <a href="{{link}}" class="aboutUs-img">
                                <span wb-if="'{{image.0.img}}'==''" class="aboutUs-img-wrap" style="background-image: url(/assets/img/img-12.jpg);"></span>
                                <span wb-if="'{{image.0.img}}'>''" class="aboutUs-img-wrap" style="background-image: url({{image.0.img}});"></span>
                            </a>
                            <span class="aboutUs-name"><a href="{{link}}">{{label}}</a></span>

                        </div><!-- col -->
                    </wb-foreach>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Список ссылок с картинкой">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="form-group row">
            <label class="form-control-label col-md-3">Заголовок</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="title" placeholder="Заголовок">
            </div>
        </div>
        <wb-multiinput name="links">
            <div class="col-md-3"><wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image" /></div>
            <div class="col-md-9">
                <div class="row">
                    <div class="mb-1 col-12"><input type="text" class="form-control" name="label" placeholder="Надпись"></div>
                    <div class="mb-1 col-12"><input type="text" class="form-control" name="link" placeholder="Ссылка"></div>
                </div>
            </div>
        </wb-multiinput>
    </wb-multilang>
</edit>