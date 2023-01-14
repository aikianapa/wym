<view>
    <section class="contacts block-{{name}}">
        <div class="wrapper">
            <div class="page-top">
                <h1 wb-if="header > ''" class="page-title">{{header}}</h1>
            </div>
            <div class="politics-content">
                <wb-var mrg="mr-{{imgmrg}}" wb-if=" '{{imgpos}}' == 'left'" />
                <wb-var mrg="ml-{{imgmrg}}" wb-if=" '{{imgpos}}' == 'right'" />
                <img data-src="{{image.0.img}}" alt="header" class="img-fluid w-{{imgwidth}} float-{{imgpos}} mb-{{imgmrg}} {{_var.mrg}}" wb-if="'{{image.0.img}}' > ''" />
                {{text}}
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
        <div class="form-group row">
            <div class="col-lg-8">
                <div class="form-group row">
                    <label class="col-md-6 form-control-label">Картинка</label>
                    <div class="col-md-6">
                        <select class="form-control" name="imgpos">
                            <option value="none">{{_lang.block}}</option>
                            <option value="left">{{_lang.left}}</option>
                            <option value="right">{{_lang.right}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-6 form-control-label">Отступ</label>
                    <div class="col-md-6">
                        <select class="form-control" name="imgmrg">
                            <option value="1">1pt</option>
                            <option value="2">2pt</option>
                            <option value="3">3pt</option>
                            <option value="4">4pt</option>
                            <option value="5">5pt</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-6 form-control-label">Ширина</label>
                    <div class="col-md-6">
                        <select class="form-control" name="imgwidth">
                            <option value="25">25%</option>
                            <option value="50">50%</option>
                            <option value="75">75%</option>
                            <option value="100">100%</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image" />
            </div>
        </div>
    </wb-multilang>
    <wb-lang>
        [ru]
        header = Блок контента
        name = "Заголовок блока"
        active = "Отображать блок"
        template = Шаблон
        block = Блок
        left = Слева
        right = Справа
        [ут]
        header = Content block
        name = "Block name"
        active = "Show block"
        template = Template
        block = Block
        left = Left
        right = Right
    </wb-lang>
</edit>