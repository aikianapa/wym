<view>
    <div class="partners-block wrapper">
        <span class="section-title" wb-if="'{{title}}'==''">Партнёры</span>
        <span class="section-title" wb-if="'{{title}}'>''">{{title}}</span>
        <div class="partners-items">
            <wb-foreach wb="from=images&tpl=false">
                <div class="partners-item">
                    <a href="{{partlink}}" class="partners-item-wrap">
                        <img src="/thumb/160x30/src{{image.0.img}}" alt="{{partname}}">
                    </a>
                </div>
            </wb-foreach>
        </div>
    </div>
</view>

<edit header="Виджет - партнёры">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-form-label">Заголовок</label>
        <input class="form-control" type="text" name="title" placeholder="Партнёры">
    </div>
    <wb-multiinput name="images">
        <div class="col-sm-4 col-lg-2">
            <div class="form-group">
                <input name="image" wb="module=filepicker&mode=single&original=false&ext=png,jpg,jpeg,gif,webp,svg&width=300&height=300" wb-path="/uploads/partners/{{_parent.id}}" />
            </div>
        </div>
        <div class="col-sm-8 col-lg-10">
            <div class="form-group">
                <label class="col-form-label">Название</label>
                <input class="form-control" type="text" name="partname">
            </div>
            <div class="form-group">
                <label class="col-form-label">Ссылка</label>
                <input class="form-control" type="text" name="partlink">
            </div>
        </div>
    </wb-multiinput>
</edit>