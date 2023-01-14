<view>
    <div class="wrapper">
        <div class="partners-all">
            <div class="partners-block">
                <span class="section-title" wb-if="'{{title}}'==''">Документы</span>
                <span class="section-title" wb-if="'{{title}}'>''">{{title}}</span>
                <div class="partners-row">
                    <wb-foreach wb="from=images&tpl=false">
                        <div class="partners-col">
                            <div class="partners-wrap">
                                <a data-fancybox="gallery" href="{{image.0.img}}" class="partners-wrap-img">
                                    <img loading="lazy" src="/thumbc/450x630/src{{image.0.img}}" alt="{{certname}}">
                                </a>
                                <span class="partners-name">{{certname}}</span>
                                <span class="partners-txt text-break">{{certtext}}</span>
                            </div>
                        </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Виджет - документы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-form-label">Заголовок</label>
        <input class="form-control" type="text" name="title" placeholder="Документы">
    </div>
    <wb-multiinput name="images">
        <div class="col-sm-4 col-lg-2">
            <div class="form-group">
                <input name="image" wb="module=filepicker&mode=single&original=false&ext=png,jpg,jpeg,gif,webp&width=300&height=300" wb-path="/uploads/documents/{{_parent.id}}" />
            </div>
        </div>
        <div class="col-sm-8 col-lg-10">
            <div class="form-group">
                <label class="col-form-label">Название</label>
                <input class="form-control" type="text" name="certname">
            </div>
            <div class="form-group">
                <label class="col-form-label">Описание</label>
                <textarea class="form-control" rows="auto" name="certtext"></textarea>
            </div>
        </div>
    </wb-multiinput>
</edit>