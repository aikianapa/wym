<view>
    <section class="catalog card">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title">Каталог продуктов</h1>
            </div>
            <div class="catalog-row">
                <wb-include wb-tpl="catalog-sidebar.php" />
                <div class="catalog-content">
                    <div class="card-top">
                        <div class="card-img"><img src="/thumbc/600x600/src{{_parent.cover.0.img}}" alt=""></div>
                        <div class="card-info">
                            <h2 class="card-title" wb-if="'{{title}}'>''">{{title}}</h2>
                            <p class="text-break">{{text}}</p>



                            <img src="{{image.0.img}}" alt="">
                            <div class="card-table">
                                <table>
                                    <wb-foreach wb="from=props&tpl=false">
                                        <tr wb-if="'{{prop_name}}'>'' OR '{{prop_value}}'>''">
                                            <td class="prop-name">{{prop_name}}</td>
                                            <td class="prop-value">{{prop_value}}</td>
                                        </tr>
                                    </wb-foreach>
                                </table>
                            </div>

                            <div class="card-link" wb-if="'{{file.0.img}}'>''">
                                <a href="{{file.0.img}}" download="{{_parent.header}}.pdf">
                                    <img src="/assets/img/icons/pdf.svg" alt="">
                                    <wb-var info="{{fileinfo({{file.0.img}})}}" />
                                    <span>Скачать PDF-каталог</span>({{_var.info.size}})
                                </a>
                            </div>
                            <div class="card-link" wb-if="'{{file1.0.img}}'>''">
                                <a href="{{file1.0.img}}" download="{{_parent.header}}.pdf">
                                    <img src="/assets/img/icons/pdf.svg" alt="">
                                    <wb-var info="{{fileinfo({{file1.0.img}})}}" />
                                    <span>Скачать инструкцию</span>({{_var.info.size}})
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <div class="card-content">
                            <span class="card-sub">Применение</span>
                            {{descr}}
                            <div class="card-row">
                                <div class="card-col" wb-if="'{{video}}'>''">
                                    <wb-var cover="/assets/img/img-17.jpg" wb-if="'{{video_cover}}'==''" else="{{video_cover.0.img}}" />
                                    <a data-fancybox href="{{video}}" class="link-youtube card-col-img" loading="lazy" style="background-image: url({{_var.cover}});"></a>
                                </div>
                                <div class="card-col" wb-if="'{{gallery}}'>''">
                                    <div class="card-items">
                                        <wb-foreach wb="from=gallery&tpl=false">
                                            <div class="card-item">
                                                <a data-fancybox="gallery" href="{{img}}" class="card-item-wrap" style="background-image: url(/thumbc/466x260/src{{img}});"></a>
                                            </div>
                                        </wb-foreach>
                                    </div>
                                </div>
                            </div>

                            <span class="card-sub" wb-if="{{codes.0.type}}'>''">Каталожные номера моделей</span>
                            <div class="card-table" wb-if="'{{codes.0.type}}'>''">
                                <table>
                                    <thead>
                                        <tr>
                                            <wb-foreach wb="from=codes&tpl=false">
                                                <th>{{type}}</th>
                                            </wb-foreach>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <wb-foreach wb="from=codes&tpl=false">
                                                <td style="vertical-align:baseline">
                                                    <wb-var codes='{{explode(",",{{list}})}}' />
                                                    <wb-foreach wb="from=_var.codes&tpl=false">
                                                        <p>{{_val}}</p>
                                                    </wb-foreach>
                                                </td>
                                            </wb-foreach>
                                    </tbody>
                                </table>
                            </div>
                            <p class="text-break" wb-if="'{{sample}}'>''">{{sample}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Описание продукта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <ul class="nav nav-tabs" id="productTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="home" aria-selected="true">Описание</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#media" role="tab" aria-controls="profile" aria-selected="false">Медиа</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#catnum" role="tab" aria-controls="contact" aria-selected="false">Каталожные номера</a>
        </li>
    </ul>
    <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="productTabContent">
        <div class="tab-pane fade show active" id="descr" role="tabpanel" aria-labelledby="home-tab">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Заголовок</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="title" placeholder="Заголовок">
                </div>
            </div>
            <div class="row">
                <div class="mt-2 col-12">
                    <textarea name="text" class="form-control" rows="7"></textarea>
                </div>
            </div>
            <div class="divider-text">
                Характеристики
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <input name="image" wb="module=filepicker&mode=single&original=false&ext=jpg,jpeg,gif,png,webp&width=150&height=100" wb-path="/uploads/products/{{_parent.id}}" />
                </div>
                <div class="col-sm-9">
                    <wb-multiinput name="props">
                        <div class="col"><input class="form-control" name="prop_name"></div>
                        <div class="col"><input class="form-control" name="prop_value"></div>
                    </wb-multiinput>
                </div>
            </div>
            <div class="divider-text">
                Каталог, инструкция и текст
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label">PDF каталог</label>
                    <input name="file" wb="module=filepicker&mode=single&original=false&ext=pdf&width=150&height=100" wb-path="/uploads/products/{{_parent.id}}" />
                </div>
                <div class="col-sm-3">
                    <label class="col-form-label">Инструкция</label>
                    <input name="file1" wb="module=filepicker&mode=single&original=false&ext=pdf&width=150&height=100" wb-path="/uploads/products/{{_parent.id}}" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <div class="divider-text">Описание</div>
                    <wb-module wb="module=editor" name="descr" />
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="profile-tab">
            <div class="form-group row">
                <div class="col-4">
                    <div class="divider-text">Видео</div>
                    <div class="form-group">
                        <label class="col-form-label">Ссылка на видео</label>
                        <input class="form-control" type="text" name="video" placeholder="Ссылка на видео">
                        <label class="col-form-label">Обложка видео</label>
                        <input name="video_cover" wb="module=filepicker&mode=single&original=false&ext=png,jpg,jpeg,gif,webp&width=400&height=400" wb-path="/uploads/products/{{_parent.id}}" />
                    </div>
                </div>
                <div class="col-8">
                    <div class="divider-text">Галерея изображений</div>
                    <input name="gallery" wb="module=filepicker&original=false&ext=png,jpg,jpeg,gif,webp&width=200&height=100" wb-path="/uploads/products/{{_parent.id}}" />
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="catnum" role="tabpanel" aria-labelledby="contact-tab">
            <wb-multiinput name="codes">
                <div class="col-md-4">
                    <input name="type" class="form-control" placeholder="Тип продукта" />
                </div>
                <div class="col-md-8">
                    <input name="list" class="form-control" wb-module="tagsinput" />
                </div>
            </wb-multiinput>
            <div class="form-group row">
                <div class="col-12">
                    <label class="col-form-label">Аннотация</label>
                    <textarea name="sample" class="form-control" rows="auto"></textarea>
                </div>
            </div>
        </div>
    </div>
</edit>