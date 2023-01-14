<view>
    <section class="news">
        <div class="wrapper">
            <div class="section-top section-second">
                <h2 class="section-title">Новости и статьи</h2>
                <div class="section-link"><a href="/news">Все новости и статьи</a></div>
                <div class="arrows">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="news-slider swiper-container">
                <div class="swiper-wrapper">
                    <wb-foreach wb="tpl=false" wb-ajax="/api/v2/list/news?active=on&@sort=date:d&@limit=8">
                        <wb-var link="{{yongerFurl()}}" />
                        <div class="news-slide swiper-slide">
                            <div class="news-wrap">
                                <a href="{{_var.link}}" class="news-img"><span class="news-img-wrap" style="background-image: url(/thumbc/740x320/src{{cover.0.img}});"></span></a>
                                <a href="{{_var.link}}" wb-if="'{{type}}'=='n'" class="news-tag">Новость</a>
                                <a href="{{_var.link}}" wb-if="'{{type}}'=='a'" class="news-tag">Статья</a>
                                <span class="news-name"><a href="{{_var.link}}">{{header}}</a></span>
                                <p><a href="{{_var.link}}">{{short}}</a></p>
                            </div>
                        </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Виджет - новости и статьи">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>