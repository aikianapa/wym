<view>
    <section class="purpose">
        <div class="wrapper">
            <div class="purpose-wrap">
                <div class="purpose-info">
                    <h2 class="section-title" wb-if="'{{title}}'>''">{{title}}</h2>
                    <span class=" purpose-subtitle" wb-if="'{{subtitle}}'>''">{{subtitle}}</span>
                    <p wb-if="'{{text}}'>''">{{text}}</p>
                </div>

                <wb-foreach wb="from=_var.partners.0.blocks&tpl=false">
                    <div class=" purpose-sl slider" wb-if="'{{name}}'=='widget-docs'">
                        <div class="purpose-slider swiper-container">
                            <div class="swiper-wrapper">
                                <wb-foreach wb="from=images&tpl=false">
                                    <div class="purpose-slide swiper-slide">
                                        <a data-fancybox="gallery" href="{{image.0.img}}">
                                            <img loading="lazy" src="/thumbc/292x400/src{{image.0.img}}" alt="{{certname}}">
                                        </a>
                                    </div>
                                </wb-foreach>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </section>
</view>

<edit header="Слайдер - докумены">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-form-label">Заголовок</label>
        <input class="form-control" type="text" name="title" placeholder="Заголовок">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Подзаголовок</label>
        <input class="form-control" type="text" name="subtitle" placeholder="Подзаголовок">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Текст</label>
        <textarea class="form-control" rows="auto" name="text" placeholder="Текст">
    </div>
</edit>