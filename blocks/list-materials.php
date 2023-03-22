<view>
    <section class="">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title">Научные материалы</h1>
            </div>

            <wb-var vid="{{wbNewId()}}" />
            <div vid="{{_var.vid}}" wb-off>
                <div class="materials-grid">
                    <div class="materials-grid-item" v-for="item in materials.result" :key="item.id">
                        <div class="materials-card">
                            <a :href="item.link" class="materials-img">
                                <span class="news-date">25.09.2023</span>
                                <span class="materials-img-wrap" :style="{ 'background-image': 'url(/thumbc/740x320/src' + item.cover[0].img + ')' }"></span>
                            </a>
                            <a :href="item.link" class="materials-tag">{{item.tag}}</a>
                            <span class="materials-name"><a :href="item.link">{{item.header}}</a></span>
                            <p><a :href="item.link">{{item.descr}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="materials-btn button-middle" v-if="materials.pages > materials.page" v-on:click="more(materials.page+1)">
                    <a href="javascript:;" class="primary-btn">Загрузить еще</a>
                </div>
            </div>
            <script type="module">
                import {
                    createApp
                } from '/assets/js/vue.esm.js'
                createApp({
                    data() {
                        return {
                            materials: {
                                result: {},
                                page: 1,
                                pages: 1
                            }
                        }
                    },
                    methods: {
                        more(page = 1) {
                            let size = '6'
                            let url = "/api/v2/list/materials?active=on&@sort=date:d&@size=" + size + "&@page=" + page
                            let that = this;
                            let odd = true
                            fetch(url)
                                .then((response) => {
                                    return response.json();
                                })
                                .then((data) => {
                                    that.materials.page = data.page
                                    that.materials.pages = data.pages
                                    Object.entries(data.result).forEach(([key, value]) => {
                                        that.materials.result[key] = value
                                    });
                                });
                        }
                    },
                    mounted() {
                        this.more()
                    }
                }).mount("[vid={{_var.vid}}]")
            </script>
        </div>
    </section>
</view>

<edit header="Список материалов">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>