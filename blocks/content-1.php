<view>
    <section class="contacts block-{{name}}">

        <div class="wrapper">
            <div class="aboutUs-content">
                <div class="aboutUs-top">
                    <span class="aboutUs-title">{{header}}</span>
                    <p>{{text}}</p>
                    <img src="{{image.0.img}}" alt="{{header}}" class="img-fluid" wb-if="'{{image.0.img}}' > ''" />
                </div>
            </div>
        </div>
    </section>
</view>
<edit header="{{_lang.header}}">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="form-group row">

            <label class="form-control-label col-md-3">{{_lang.name}}</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="header" placeholder="{{_lang.name}}">
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
    <wb-lang>
        [ru]
        header = "Блок контента (картинка внизу)"
        name = "Заголовок блока"
        active = "Отображать блок"
        template = Шаблон
        block = Блок
        left = Слева
        right = Справа
        [en]
        header = "Content block (bottom image)"
        name = "Block name"
        active = "Show block"
        template = Template
        block = Block
        left = Left
        right = Right
    </wb-lang>
</edit>