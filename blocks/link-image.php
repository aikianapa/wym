<view>
    <section class="block-{{name}}">
        <div class="wrapper">
            <div class="page-bottom">
                <div class="page-contact">
                    <div class="page-contact-info">
                        <h2 class="page-contact-title" wb-if="'{{title}}'>''">{{title}}</h2>
                        <a wb-if="'{{label}}'>''" data-src="#modal-4" href="{{link}}" class="primary-btn">{{label}}</a>
                    </div>
                    <div class="page-contact-img">
                        <img wb-if="'{{image.0.img}}'==''" src="/assets/img/img-16.jpg" alt="{{title}}" class="img-fluid">
                        <img wb-if="'{{image.0.img}}'>''" src="{{image.0.img}}" alt="{{title}}" class="img-fluid" wb-if="'{{image.0.img}}' > ''" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Кнопка-ссылка и картинка справа">
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
        <div class="divider-text">Кнопка</div>
        <div class="form-group row">
            <div class="col-md-6">
                <input type="text" class="form-control" name="label" placeholder="Надпись кнопки">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="link" placeholder="Ссылка">
            </div>
        </div>

    </wb-multilang>
    <div class="divider-text">Изображение справа</div>
    <div class="form-group">
        <wb-module wb="module=filepicker&mode=single&width=250&height=100" name="image" />
    </div>
</edit>