<view>
    <section class="appeal">
        <wb-var title="{{title}}" wb-if="'{{title}}'>''" else="Проконсультируем вас по любым вопросам о нашей продукции" />
        <wb-var text="{{text}}" wb-if="'{{text}}'>''" else="Закажите обратный звонок и мы перезвоним в удобное для вас время" />
        <wb-var button="{{button}}" wb-if="'{{button}}'>''" else="Перезвоните мне" />
        <div class="wrapper">
            <div class="appeal-wrap">
                <div class="appeal-info">
                    <h2 class="appeal-title">{{_var.title}}</h2>
                    <p class="text-break">{{_var.text}}</p>
                </div>
                <a data-fancybox data-src="#modal-2" href="javascript:;" class="border-btn border-btn-ico border-btn-white"><i class="hb-ico tel-white-ico"></i>{{_var.button}}</a>
            </div>
        </div>
    </section>
</view>

<edit header="Перезвоните мне (модаль)">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control" type="text" name="title" placeholder="Проконсультируем вас по любым вопросам о нашей продукции">
            </div>
            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control" rows="auto" name="text" placeholder="Закажите обратный звонок и мы перезвоним в удобное для вас время"></textarea>
            </div>
            <div class="form-group">
                <label>Кнопка</label>
                <input class="form-control" type="text" name="button" placeholder="Перезвоните мне">
            </div>
        </div>
    </div>
</edit>