<view>
    <section class="page event">
        <wb-var type="новость" wb-if="'{{type}}'=='n'" else="статья" />
        <div class="wrapper" itemscope itemtype="https://schema.org/Article">
            <div class="page-top">
                <h1 class="page-title" itemprop="name">{{_parent.header}}</h1>
                <div class="page-row">
                    <a href="/news" class="news-tag">{{ucfirst({{_var.type}})}}</a>
                    <span class="page-date" itemprop="datePublished"><i class="hb-ico date-ico"></i>{{datetext({{_parent.date}})}}</span>
                </div>
            </div>
            <div class="event-all">
                <div class="event-img" style="background-image: url({{_parent.cover.0.img}});"></div>
                <div class="event-row">
                    <div class="event-sidebar">
                        <div class="event-news">
                            <wb-foreach wb="table=news&tpl=false&limit=1&sort=date:d" wb-filter="active=on&type=n">
                                <a href="{{yongerFurl()}}" class="news-tag">Последняя {{_var.type}}</a>
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
                                <a href="{{_parent.prevnext.prev}}" class="link-more"><span>Предыдущая <i>{{_var.type}}</i></span></a>
                                <a href="{{_parent.prevnext.next}}" class="link-more link-more-second"><span>Следующая <i>{{_var.type}}</i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Содержимое новости">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label>Новость / Статья</label>
        <select class="form-control" type="text" name="type" wb-select2>
            <option value="n">Новость</option>
            <option value="a">Статья</option>
        </select>
    </div>
    <div class="form-group">
        <label>Короткий текст</label>
        <textarea name="short" class="form-control" rows="auto"></textarea>
    </div>
    <div class="form-group">
        <wb-module wb="module=editor" name="text" />
    </div>
</edit>