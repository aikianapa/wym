<view>
    <wb-foreach wb="from=_var.wherebuy.0.blocks&tpl=false">
        <section class="buy" wb-if="'{{name}}'=='wherebuy'">
            <div class="wrapper">
                <div class="section-top section-second">
                    <h2 class="section-title">Где купить</h2>
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
                                        <a href="{{wblink}}" target="_blank"><img src="/thumbc/297x78/src{{image.0.img}}" alt="{{whname}}"></a>
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
</edit>