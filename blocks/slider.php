<view>
    <section class="main">
        <div class="wrapper">
            <div class="main-slider swiper-container">
                <div class="swiper-wrapper">
                    <wb-foreach wb="from=slider&tpl=false">
                        <wb-var button="Подробнее" wb-if="'{{button}}' == ''" else="{{button}}" />
                        <wb-var image="/assets/img/slide-1.jpg" wb-if="'{{image.0.img}}' == ''" else="{{image.0.img}}" />
                        <div class="main-slide swiper-slide">
                            <div class="main-wrap" style="background-image: url({{_var.image}});">
                                <div class="main-info">
                                    <h2 class="main-title">{{title}}</h2>
                                    <p>{{text}}</p>
                                    <a wb-if="'{{link}}'==''" fancyfix href="#modal-1" class="primary-btn">{{_var.button}}</a>
                                    <a wb-if="'{{link}}'> ''" href="{{link}}" class="primary-btn">{{_var.button}}</a>
                                </div>
                            </div>
                        </div>
                    </wb-foreach>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</view>

<edit header="Слайдер">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="slider">
        <div class="col-sm-4">
            <input name="image" wb="module=filepicker&mode=single&width=400&height=200" wb-path="/uploads/blocks/slider">
        </div>
        <div class="col-sm-8">
            <div class="mb-1 form-group">
                <textarea name="title" class="form-control tx-bold" rows="auto" placeholder="Заголовок"></textarea>
            </div>
            <div class="mb-1 form-group">
                <textarea name="text" class="form-control" rows="auto" placeholder="Текст"></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control tx-bold" type="text" name="button" placeholder="Подробнее">
                </div>
                <div class="col">
                    <input class="form-control" type="text" wb="module=yonger&mode=pageselect" name="link" placeholder="Ссылка">
                </div>
            </div>
        </div>
    </wb-multiinput>
</edit>