<view>
    <section class="page article pt-0">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title">Мероприятия</h1>
            </div>
            <div class="article-content" id="listEvents">
                <wb-var vid="{{wbNewId()}}" />
                <div class="article-block" vid="{{_var.vid}}" wb-off>
                    <div class="news-row">
                        <div class="news-col" v-for="item in news.result" :key="item.id">
                            <div class="news-wrap">
                                <a :href="item.link" class="news-img"><span class="news-img-wrap" :style="{ 'background-image': 'url(/thumbc/740x320/src' + item.cover[0].img + ')' }"></span></a>
                                <a :href="item.link" class="news-tag">Мероприятие</a>
                                <span class="news-name"><a :href="item.link">{{item.header}}</a></span>
                                <p><a :href="item.link">{{item.short}}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="button-middle" v-if="news.pages > news.page" v-on:click="more(news.page+1)">
                        <a href="javascript:;" class="primary-btn">Загрузить еще</a>
                    </div>
                </div>

                <script type="module">
                    import {
                        createApp
                    } from 'vue'
                    createApp({
                        data() {
                            return {
                                news: {}
                            }
                        },
                        methods: {
                            more(page = 1) {
                                let size = '{{size}}'
                                size == '' ? size = 8 : null;
                                let url = "/api/v2/list/events?active=on&@sort=date:d&@size=" + size + "&@page=" + page
                                let that = this;
                                fetch(url)
                                    .then((response) => {
                                        return response.json();
                                    })
                                    .then((data) => {
                                        if (page == 1) {
                                            that.news = data
                                        } else {
                                            Object.entries(data.result).forEach(([key, value]) => {
                                                that.news.result[key] = value
                                                that.news.page = page
                                            });
                                        }

                                    });
                            }
                        },
                        mounted() {
                            this.more()
                        }
                    }).mount("[vid={{_var.vid}}]")
                </script>
            </div>
        </div>
    </section>
</view>

<edit header="Список мероприятий">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-auto">Количество записей на страницу</label>
        <div class="col-auto">
            <input class="form-control" type="number" name="size" placeholder="8">
        </div>
    </div>
</edit>