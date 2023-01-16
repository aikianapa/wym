<view>

    <section class="partners">
        <div class="wrapper">
            <div class="section-top section-second">
                <h2 class="section-title">Партнеры</h2>
                <div class="section-link"><a href="[partners]">Все партнеры</a></div>
                <div class="arrows">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="partners-main">
                <div class="partners-slider swiper-container">
                    <wb-foreach wb="from=_var.partners.0.blocks&tpl=false">
                        <div class="swiper-wrapper" wb-if="'{{name}}'=='widget-partners'">
                            <wb-foreach wb="from=images&tpl=false&limit=10">
                                <div class="partners-slide swiper-slide">
                                    <a rel="nofollow" href="{{partlink}}" target="_blank"><img src="/thumbc/160x30/src{{image.0.img}}" alt="{{partname}}"></a>
                                </div>
                            </wb-foreach>
                        </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Слайдер - партнёры">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>