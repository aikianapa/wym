<view>
    <section class="about">
        <wb-var item="{{_current}}" />
        <div class="wrapper">
            <h2 class="section-title">Инфузионные помпы</h2>
            <div class="allTabs">
                <wb-var dir wb-api="/api/v2/read/catalogs/speed" />
                <div class="about-top">
                    <ul class="about-list tab-list">
                        <wb-foreach wb="from=_var.dir.tree.data&tpl=false">
                            <wb-var active="active" wb-if="'{{_idx}}'=='0'" else="" />
                            <li><a href="#tab-{{_ndx}}" class="{{_var.active}}">{{name}}</a></li>
                        </wb-foreach>
                    </ul>
                </div>
                <wb-foreach wb="from=_var.dir.tree.data&tpl=false">
                    <wb-var active="tab-active" wb-if="'{{_idx}}'=='0'" else="" />
                    <wb-var id="{{id}}" />
                    <div class="tab tab-{{_ndx}} {{_var.active}}" id="tab-{{_ndx}}">
                        <div class="about-content">
                            <div class="about-img">
                                <wb-var flds="{{pumpsFlds({{_ndx}})}}" />
                                <wb-foreach wb="from=_var.flds&tpl=false">
                                    <div class="about-md" id="{{fld}}">
                                        <i class="hb-ico close-ico"></i>
                                        <span class="about-md-title">{{_var.item.{{_var.id}}_{{fld}}_title}}</span>
                                        <p>{{_var.item.{{_var.id}}_{{fld}}_text}}</p>
                                    </div>
                                </wb-foreach>
                                <wb-include wb-tpl="pumps-tab-{{_ndx}}.php" />
                            </div>
                            <div class="about-info">
                                <span class="about-title">{{_var.item.{{_var.id}}_title}}</span>
                                <p class="text-break">{{_var.item.{{_var.id}}_text}}</p>
                                <div class="about-actions">
                                    <div class="about-link">
                                        <a href="/catalog" class="link-more">Подробнее о моделях</a>
                                    </div>
                                    <a href="/directions" class="primary-btn">Медицинские направления</a>
                                </div>

                                <wb-foreach wb="from=_var.item.{{_var.id}}_feedback&tpl=false">
                                    <blockquote>
                                        <div class="blockquote-top" wb-if="'{{bq_title}}'>'' OR '' > '{{bq_text}}'">
                                            <div class="blockquote-user" wb-if="'{{avatar.0.img}}'>''"><img src="/thumbc/60x60/src{{avatar.0.img}}" alt=""></div>
                                            <span class="blockquote-name">{{bq_title}}</span>
                                        </div>
                                        <p class="text-break">{{bq_text}}</p>
                                    </blockquote>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </section>
</view>

<edit header="Виджет - Помпы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-var dir wb-api="/api/v2/read/catalogs/speed" />
    <ul class="nav nav-tabs" id="tabsSpeed" role="tablist">
        <wb-foreach wb="from=_var.dir.tree.data&tpl=false">
            <wb-var active="active" wb-if="'{{_idx}}'=='0'" else="" />
            <li class="nav-item">
                <a class="nav-link {{_var.active}}" id="{{id}}-tab" data-toggle="tab" href="#{{id}}" role="tab" aria-controls="{{id}}" aria-selected="true">{{name}}</a>
            </li>
        </wb-foreach>
    </ul>
    <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="tabsSpeedContent">
        <wb-foreach wb="from=_var.dir.tree.data&tpl=false">
            <wb-var active="active" wb-if="'{{_idx}}'=='0'" else="" />
            <wb-var id="{{id}}" />
            <wb-var item="{{_post.item}}" />
            <div class="tab-pane fade show {{_var.active}}" id="{{id}}" role="tabpanel" aria-labelledby="{{id}}-tab">
                <div class="form-group row">
                    <label class="col-sm-3">Заголовок таба</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="{{_var.id}}_title" value="{{_var.item.{{_var.id}}_title}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3">Текст таба</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="auto" name="{{_var.id}}_text" value="{{_var.item.{{_var.id}}_text}}"></textarea>
                    </div>
                </div>
                <div class="divider-text">Отзывы</div>
                <wb-multiinput name="{{_var.id}}_feedback" class="p-2 bg-light rounded-10 align-items-center" value="{{_var.item.{{_var.id}}_feedback}}">
                    <div class="col-sm-3">
                        <input name="avatar" wb="module=filepicker&mode=single&original=false&width=150&height=150" wb-path="/uploads/blocks/widget/pumps">
                    </div>
                    <div class="col-sm-9">
                        <input class="mb-2 form-control" type="text" name="bq_title" placeholder="Заголовок отзыва">
                        <textarea class="form-control" rows="auto" name="bq_text" placeholder="Текст отзыва"></textarea>
                    </div>
                </wb-multiinput>
                <div class="divider-text">Всплывающие окна</div>
                <wb-var flds="{{pumpsFlds({{_ndx}})}}" />
                <wb-foreach wb="from=_var.flds&tpl=false">
                    <div class="mb-1 form-group row">
                        <label class="col-sm-2 tx-center">
                            <img src="/thumb/100x100/src{{img}}" class="img-fluid" />
                        </label>
                        <div class="col-sm-10">
                            <input class="mb-2 form-control" type="text" name="{{_var.id}}_{{fld}}_title" value="{{_var.item.{{_var.id}}_{{fld}}_title}}" placeholder="Заголовок окна">
                            <textarea class="form-control" rows="auto" name="{{_var.id}}_{{fld}}_text" value="{{_var.item.{{_var.id}}_{{fld}}_text}}" placeholder="Текст окна"></textarea>
                        </div>
                        <hr class="py-0 my-1 col-12">
                    </div>
                </wb-foreach>
            </div>
        </wb-foreach>
    </div>
</edit>