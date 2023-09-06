<view>
    <section class="materials">
        <div class="wrapper">
            <div class="materials-all">
                <div class="materials-main">
                    <div class="section-top">
                        <h2 class="section-title">Научные материалы</h2>
                        <div class="section-link"><a href="[materials]">Перейти в научные материалы</a></div>
                    </div>
                    <wb-var materials wb-api="/api/v2/list/materials?active=on&home=on&@sort=date:d" />
                    <div class=" materials-row">
                        <div class="materials-col-2">
                            <div class="materials-grid">
                                <wb-foreach wb="from=_var.materials&tpl=false&limit=12">
                                    <div class="materials-grid-item">
                                        <div class="materials-card">
                                            <a href="{{link}}" class="materials-img">
                                                <span class="materials-img-wrap" style="background-image: url(/thumbc/780x230/src{{cover[0].img}});"></span>
                                            </a>
                                            <a href="{{link}}" class="materials-tag">{{tag}}</a>
                                            <span class="materials-name"><a href="{{link}}">{{header}}</a></span>
                                            <p><a href="#">{{descr}}</a></p>
                                        </div>
                                    </div>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="materials-sidebar">
                    <div class="section-top">
                        <h2 class="section-title">Мероприятия</h2>
                        <div class="section-link"><a href="/news#listEvents">Перейти</a></div>
                    </div>
                    <wb-var events wb-api="/api/v2/list/events?active=on&@limit=3&@sort=date:d" />
                    <div class="materials-sidebar-wrap">
                        <div class="materials-items">
                            <wb-foreach wb="from=_var.events">
                                <a href="{{link}}" class="materials-items-img">
                                    <span class="materials-items-img-wrap" style="background-image: url(/thumbc/338x160/src{{cover.0.img}});"></span>
                                </a>
                                <div class="materials-item">
                                    <div class="materials-item-data">
                                        <wb-var date='{{explode(" ",datetext({{date}}))}}' />
                                        {{_var.date.0}}<span>{{_var.date.1}}</span>
                                    </div>
                                    <span class="materials-item-name"><a href="{{link}}">{{header}}</a></span>
                                    <p><a href="{{link}}">{{short}}</a></p>
                                </div>
                            </wb-foreach>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Виджет - материалы, видео, мероприятия">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>