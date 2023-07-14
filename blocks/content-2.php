<view>
    <section class="block-{{name}}">

        <div class="wrapper">
            <div class="aboutUs-block">
                <div class="aboutUs-block-info">
                    <span class="aboutUs-block-tit" wb-if="'{{title}}'>''">{{title}}</span>
                    <span class="aboutUs-block-sub" wb-if="'{{subtitle}}'>''">{{subtitle}}</span>
                    <div wb-if="'{{text}}'>''">{{text}}</div>
                </div>
                <div class="aboutUs-block-img"><img src="{{image.0.img}}" alt="{{header}}" class="img-fluid" wb-if="'{{image.0.img}}' > ''" /></div>

            </div>
        </div>
    </section>
</view>
<edit header="Блок контента (картинка справа)">
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
        <div class="form-group row">

            <label class="form-control-label col-md-3">Подзаголовок</label>
            <div class="col-md-9">
                <textarea type="text" class="form-control" name="subtitle" placeholder="Подзаголовок"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <wb-module wb="{'module':'editor'}" name="text" />
            </div>
        </div>
    </wb-multilang>
    <div class="form-group">
        <wb-module wb="module=filepicker&mode=single&width=250&height=100" name="image" />
    </div>
</edit>