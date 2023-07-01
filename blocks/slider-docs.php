<view>
    <section class="purpose">
        <div class="wrapper">
            <wb-var imgs="0" />
            <div class="purpose-wrap">
                <div class="purpose-info">
                    <h2 class="section-title" wb-if="'{{title}}'>''">{{title}}</h2>
                    <span class=" purpose-subtitle" wb-if="'{{subtitle}}'>''">{{subtitle}}</span>
                    <p wb-if="'{{text}}'>''">{{text}}</p>
                </div>

                <wb-foreach wb="from=_var.partners.0.blocks&tpl=false">
                    <div class="purpose-sl slider" wb-if="'{{name}}'=='widget-docs'">
                        <div class="purpose-slider swiper-container">
                            <div class="swiper-wrapper">
                                <wb-foreach wb="from=images&tpl=false">
                                    <div class="purpose-slide swiper-slide" wb-if="'{{image.0.img}}'==''">
                                        <wb-var imgs="{{_var.imgs +1}}" />
                                        <a data-fancybox="gallery" href="{{image.0.img}}">
                                            <img loading="lazy" src="/thumbc/292x400/src{{image.0.img}}" alt="{{certname}}">
                                        </a>
                                    </div>
                                </wb-foreach>
                            </div>
                        </div>
                        <div class="swiper-button-prev" wb-if="'{{_var.imgs}}'>'0'"></div>
                        <div class="swiper-button-next" wb-if="'{{_var.imgs}}'>'0'"></div>
                    </div>
                </wb-foreach>

                <div class="purpose-sl text" wb-if="'{{_var.imgs}}'=='0'">
                    <wb-jq wb="$dom->find('.purpose-sl.slider')->remove();$dom->find('.purpose-info p')->remove()" />
                    {{text}}
                </div>
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