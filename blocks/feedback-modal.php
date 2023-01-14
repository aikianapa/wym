<view>
    <div class="wrapper">
        <wb-var vid="{{wbNewId()}}" />
        <wb-var title="{{title}}" wb-if="'{{title}}'>''" else="Свяжитесь с нами" />
        <wb-var text="{{text}}" wb-if="'{{text}}'>''" else="Оставьте свое сообщение и мы ответим на него в самое ближайшее время" />
        <wb-var img="/thumbc/740x230/src/assets/img/img-16.jpg" wb-if="'{{image.0.img}}'==''" else="/thumbc/740x230/src{{image.0.img}}" />
        <div class="page-contact">
            <div class="page-contact-info">
                <h2 class="page-contact-title">{{_var.title}}</h2>
                <p>{{_var.text}}</p>
                <a data-fancybox data-src="#modal-4" href="javascript:;" class="primary-btn">Написать сообщение</a>
            </div>
            <div class="page-contact-img"><img src="{{_var.img}}" alt=""></div>
        </div>
    </div>
</view>

<edit header="Свяжитесь с нами (модаль)">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="row">
        <div class="col-sm-4">
            <input name="image" wb="module=filepicker&mode=single&width=500&height=300" wb-path="/uploads/blocks/feedback">
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control" type="text" name="title" placeholder="Свяжитесь с нами">
            </div>
            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control" rows="auto" name="text" placeholder="Оставьте свое сообщение и мы ответим на него в самое ближайшее время"></textarea>
            </div>
        </div>
    </div>
</edit>