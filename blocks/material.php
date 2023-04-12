<view>
    <section class="event">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title">{{_parent.header}}</h1>
                <div class="page-row">
                    <a href="{{_route.url}}" class="news-tag">{{_parent.tag}}</a>
                    <span class="page-date"><i class="hb-ico date-ico"></i>{{datetext({{_parent.date}})}}</span>
                </div>
                <wb-include wb-tpl="allow-message.php" />
            </div>
            <div class="event-all">
                <div class="event-slider swiper-container slider" wb-if="'{{_parent.materials}}' != 'video'">
                    <div class="swiper-wrapper">
                        <wb-foreach wb="from=images&tpl=false" wb-if="'{{count({{images}})}}' > '0'">
                            <div class="event-slide swiper-slide">
                                <div class="event-img" style="background-image: url({{img}});"></div>
                            </div>
                        </wb-foreach>
                        <div class="event-slide swiper-slide" wb-if="'{{count({{images}})}}' == ''">
                            <div class="event-img" style="background-image: url({{_parent.cover.0.img}});"></div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <wb-var video_cover="{{video_cover.0.img}}" wb-if="'{{video_cover.0.img}}'>''" else="{{_parent.cover.0.img}}" />

                <a data-fancybox="" wb-if="'{{_parent.materials}}' == 'video' && '{{_sess.user.role}}'>''" href="{{video}}" class="link-youtube event-img" style="background-image: url({{_var.video_cover}});"></a>
                <a data-fancybox="" wb-if="'{{_parent.materials}}' == 'video' && '{{_sess.user.role}}'==''" data-src="#modal-6" href=" #" class="link-youtube event-img" style="background-image: url({{_var.video_cover}});"></a>
            </div>

            <div class="event-row">
                <div class="event-sidebar">
                    <div class="event-news" wb-if="'{{_parent.materials}}' != 'video'">
                        <wb-foreach wb="table=materials&tpl=false&limit=1&sort=date:d" wb-filter="active=on&materials!=video&id!={{_parent.id}}">
                            <a href="{{yongerFurl()}}" class="news-tag">{{tag}}</a>
                            <span class="event-tit">{{header}}</span>
                            <p>{{descr}}</p>
                        </wb-foreach>
                    </div>
                    <div class="event-news" wb-if="'{{_parent.materials}}' == 'video'">
                        <wb-foreach wb="table=materials&tpl=false&limit=1&sort=date:d" wb-filter="active=on&materials=video&id!={{_parent.id}}">
                            <a href="{{yongerFurl()}}" class="news-tag">{{tag}}</a>
                            <span class="event-tit">{{header}}</span>
                            <p>{{descr}}</p>
                        </wb-foreach>
                    </div>
                </div>
                <div class="event-content">
                    <wb-var hide="event-text" wb-if="'{{_sess.user.role}}'==''" else="" />
                    <div class="{{_var.hide}}">
                        <div class="event-block">
                            {{text}}
                        </div>
                    </div>
                    <div class="event-content" wb-if="'{{pdf.0.img}}'>'' && '{{_sess.user.role}}'>''">
                        <iframe class="material w-100 b-0" src="{{pdf.0.img}}#toolbar=1&view=Fit" onload="iframeHeight()">
                        </iframe>
                    </div>
                    <wb-include wb-tpl="allow-message.php" />
                    <div class="event-bottom">
                        <wb-include wb-tpl="share.php" />
                        <div class="pagination">
                            <a href="{{_parent.prevnext.prev}}" class="link-more"><span>Предыдущая <i>статья</i></span></a>
                            <a href="{{_parent.prevnext.next}}" class="link-more link-more-second"><span>Следующая <i>статья</i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</view>

<edit header="Научный материал">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <wb-module wb="module=editor" name="text" />
    </div>
    <wb-var hidevideo="d-none" wb-if="'{{_parent.materials}}' !== 'video'" else="" />
    <wb-var hideimage="d-none" wb-if="'{{_parent.materials}}' == 'video'" else="" />
    <div class="{{_var.hidevideo}}">
        <div class="divider-text">Видеозапись</div>
        <div class="form-group">
            <label class="col-form-label">Ссылка на видео</label>
            <input class="form-control" type="text" name="video" placeholder="Ссылка на видео">
            <label class="col-form-label">Обложка видео</label>
            <input name="video_cover" wb="module=filepicker&mode=single&original=false&ext=png,jpg,jpeg,svg,gif,webp&width=800&height=200" wb-path="/uploads/materials/{{_parent.id}}" />
        </div>
    </div>
    <div class="{{_var.hideimage}}">
        <div class="divider-text">Изображения для слайдшоу</div>
        <wb-module wb="module=filepicker&original=false&width=250&height=100" wb-path="/uploads/materials/{{_var.id}}" wb-ext="jpg,jpeg,gif,png,webp,svg" name="images">
        </wb-module>
        <div class="divider-text">PDF файл</div>
        <wb-module wb="module=filepicker&original=false&width=250&height=100" wb-path="/uploads/materials/{{_var.id}}" wb-ext="pdf" name="pdf">
        </wb-module>
    </div>
</edit>