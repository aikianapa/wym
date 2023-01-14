<view>
    <div class="wrapper">
        <div class="page-bottom">
            <div class="page-post">
                <wb-var img="/assets/img/img-15.jpg" wb-if="'{{image.0.img}}'==''" else="{{image.0.img}}" />
                <a href="#" class="page-post-img" style="background-image: url({{_var.img}});"></a>
                <div class="page-post-info">
                    <span class="page-post-name" wb-if="'{{title}}'>''"><a href="#">Woo Young Medical</a></span>
                    <span class="page-post-subtitle" wb-if="'{{subtitle}}'>''">Наша цель – стать лучшей компанией в мире</span>
                    <p class="text-break" wb-if="'{{text}}'>''">{{text}}</p>
                    <a wb-if="'{{link}}'>''" href="{{link}}" class="link-more">
                        <span wb-if="'{{button}}'==''">Подробнее</span>
                        <span wb-if="'{{button}}'>''">{{button}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Блок - картинка, текст, ссылка">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="row">
        <div class="col-md-4">
            <input name="image" wb="module=filepicker&mode=single&width=500&height=300" wb-path="/uploads/blocks/common">
        </div>
        <div class="col-md-8">
            <div class="form-group row">
                <label class="col-sm-3">Заголовок</label>
                <div class="col">
                    <input class="form-control" type="text" name="title" placeholder="Заголовок">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3">Подзаголовок</label>
                <div class="col">
                    <input class="form-control" type="text" name="subtitle" placeholder="Подзаголовок">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3">Текст</label>
                <div class="col">
                    <textarea class="form-control" rows="auto" name="text" placeholder="Оставьте свое сообщение и мы ответим на него в самое ближайшее время"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3">Кнопка</label>
                <div class="col">
                    <input class="form-control" type="text" name="button" placeholder="Подробнее">
                </div>
                <div class="col">
                    <input class="form-control" type="text" name="link" placeholder="Ссылка">
                </div>
            </div>
        </div>
    </div>
</edit>