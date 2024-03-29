<view>
    <section class="page event">
        <wb-var type="мероприятие" />
        <div class="wrapper" itemscope itemtype="https://schema.org/Article">
            <div class="page-top">
                <h1 class="page-title" itemprop="name">{{_parent.header}}</h1>
                <div class="page-row">
                    <a href="/events" class="news-tag">{{ucfirst({{_var.type}})}}</a>
                    <span class="page-date" itemprop="datePublished"><i class="hb-ico date-ico"></i>{{datetext({{_parent.date}})}}</span>
                </div>
            </div>
            <div class="event-all">
                <div class="event-img" style="background-image: url({{_parent.cover.0.img}});"></div>
                <div class="event-row">
                    <div class="event-sidebar">
                        <div class="event-news">
                            <wb-foreach wb="from=_var.lastevent" wb-filter="active=on">
                                <a href="{{yongerFurl()}}" class="news-tag">Последнее {{_var.type}}</a>
                                <span class="event-tit">{{header}}</span>
                                <p>{{short}}</p>
                            </wb-foreach>
                        </div>
                        <wb-include wb-tpl="contact-block.php" />
                    </div>
                    <div class="event-content">
                        <div class="event-block" itemprop="description">
                            {{text}}
                        </div>
                        <div class="event-bottom">
                            <wb-include wb-tpl="share.php" />
                            <div class="pagination">
                                <a href="{{_parent.prevnext.prev}}" class="link-more"><span>Предыдущее <i>{{_var.type}}</i></span></a>
                                <a href="{{_parent.prevnext.next}}" class="link-more link-more-second"><span>Следующее <i>{{_var.type}}</i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Содержимое мероприятия">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label>Короткий текст</label>
        <textarea name="short" class="form-control" rows="auto"></textarea>
    </div>
    <div class="form-group">
        <wb-module wb="module=editor" name="text" />
    </div>
</edit>