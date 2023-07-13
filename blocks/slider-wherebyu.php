<view>
    <wb-foreach wb="from=_var.wherebuy.0.blocks&tpl=false">
        <section class="buy" wb-if="'{{name}}'=='wherebuy'">
            <div class="wrapper">
                <div class="section-top section-second">
                    <div class="buy-sectionTop">
                        <h2 class="section-title" wb-if="'{{_parent.title}}'==''">Где купить</h2>
                        <h2 class="section-title" wb-if="'{{_parent.title}}'>''">{{_parent.title}}</h2>
                        <p wb-if="'{{_parent.text}}'>''">{{_parent.text}}</p>
                    </div>
                    <div class="section-link"><a href="[wherebuy]">Все магазины</a></div>
                    <div class="arrows arrows-dark">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="buy-slider swiper-container">
                    <div class="swiper-wrapper">
                        <wb-foreach wb="from=images&tpl=false&limit=10">
                            <div class="buy-slide swiper-slide">
                                <div class="buy-wrap">
                                    <div class="buy-logo">
                                        <a href="{{wblink}}" target="_blank"><img src="/thumbc/src{{image.0.img}}" alt="{{whname}}"></a>
                                    </div>
                                    <span class="buy-name" wb-if="'{{whname}}'>''">{{whname}}</span>
                                    <span class="buy-txt" wb-if="'{{whaddr}}'>''">{{whaddr}}</span>
                                    <a href="tel:+{{text2tel({{whphone}})}}" wb-if="'{{whphone}}'>''" class="buy-tel">{{whphone}}</a>
                                </div>
                            </div>
                        </wb-foreach>
                    </div>
                </div>
            </div>
        </section>
    </wb-foreach>
</view>

<edit header="Слайдер - Где купить">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div>
        <label>Заголовок</label>
        <input name="title" class="form-control" placeholder="Где купить">
        <label>Текст</label>
        <textarea name="text" rows="auto" class="form-control" placeholder="Текст"></textarea>
    </div>
</edit>