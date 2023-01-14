<view>
    <div class="page-top wrapper">
        <h1 class="page-title" wb-if="'{{title}}'==''">{{_parent.header}}</h1>
        <h1 class="page-title" wb-if="'{{title}}' >''">{{title}}</h1>
    </div>
</view>

<edit header="Только заголовок страницы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-form-label">Заголовок</label>
        <input class="form-control" type="text" name="title" placeholder="{{_parent.header.{{_sess.lang}}}}">
    </div>
</edit>