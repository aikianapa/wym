<view>
    <div class="header-bg"></div>
    <wb-var products wb-api="/api/v2/list/products?active=on&@sort=_sort@return=id,header,_form,directions,link" />
    <wb-var clist wb-api="/api/v2/list/pages?active=on&name=contacts&@return=blocks" />
    <wb-var partners wb-api="/api/v2/list/pages?active=on&path=&name=partners&@return=blocks" />
    <wb-var wherebuy wb-api="/api/v2/list/pages?active=on&path=&name=wherebuy&@return=blocks" />
    <wb-foreach wb="from=_var.clist.0.blocks&tpl=false">
        <wb-var contact_phone="{{phone}}" wb-if="'{{name}}'=='contacts'" />
        <wb-var contact_org="{{org}}" wb-if="'{{name}}'=='contacts'" />
        <wb-var contact_phone="{{phone}}" wb-if="'{{name}}'=='contacts'" />
        <wb-var contact_email="{{email}}" wb-if="'{{name}}'=='contacts'" />
        <wb-var contact_address="{{address}}" wb-if="'{{name}}'=='contacts'" />
        <wb-var contact_worktime="{{worktime}}" wb-if="'{{name}}'=='contacts'" />
        <wb-var contact_whatsapp="{{whatsapp}}" wb-if="'{{name}}'=='whatsapp'" />
        <wb-var contact_telegram="{{telegram}}" wb-if="'{{name}}'=='telegram'" />
        <wb-var contact_vk="{{vk}}" wb-if="'{{name}}'=='vk'" />
        <wb-var contact_ok="{{ok}}" wb-if="'{{name}}'=='ok'" />
    </wb-foreach>
    <wb-var clist='' />
    <header class="header">
        <div class="wrapper">
            <div class="header-top">
                <i class="header-bar"></i>
                <div class="header-logo">
                    <a href="/"><img src="/assets/img/logo.svg" alt=""></a>
                </div>
                <ul class="header-social">
                    <li><a href="#"><i class="hb-ico whatsapp-c-ico"></i></a></li>
                    <li><a href="#"><i class="hb-ico telegram-c-ico"></i></a></li>
                    <li><a href="#"><i class="hb-ico vk-c-ico"></i></a></li>
                    <li><a href="#"><i class="hb-ico ok-c-ico"></i></a></li>
                </ul>
                <ul class="header-actions">
                    <li><a href="mailto:{{_var.contact_email}}"><span class="action-cr"><i class="hb-ico mail-ico"></i></span><span>{{_var.contact_email}}</span></a></li>
                    <li><a href="tel:{{text2tel({{_var.contact_phone}})}}"><span class="action-cr"><i class="hb-ico tel-ico"></i></span><span>{{superTel({{_var.contact_phone}})}}</span></a></li>
                </ul>
            </div>
            <wb-var menu="{{yongerSiteMenu()}}" />
            <div class="header-bottom">
                <ul class="header-menu">
                    <wb-foreach wb="from=_var.menu&tpl=false">
                        <wb-var sub="sub" wb-if="'{{count({{children}})}}'>'0'" else="" />
                        <li class="drop" wb-if="_var.sub == 'sub'">
                            <a href="{{path}}" class="arrow-link">{{menu_title}}</a>
                            <ul class="drop-list drop-list-small">
                                <wb-foreach wb="from=children">
                                    <li wb-if="'{{_idx}}'>0"><a href="{{path}}">{{header}}</a></li>
                                </wb-foreach>
                            </ul>
                        </li>
                        <li class="drop" wb-if="'{{name}}' == 'catalog'">
                            <a href="{{path}}" class="arrow-link">{{menu_title}}</a>
                            <ul class="drop-list drop-list-small">
                                <wb-foreach wb="from=_var.products&tpl=false">
                                    <li><a href="{{link}}">{{header}}</a></li>
                                </wb-foreach>
                            </ul>
                        </li>
                        <li wb-if="_var.sub == '' && '{{name}}' !== 'catalog'">
                            <a href="{{path}}">{{menu_title}}</a>
                        </li>
                    </wb-foreach>
                </ul>
            </div>
        </div>
    </header>
    <div class="directory">
        <div class="wrapper">
            <div class="directory-all">
                <div class="directory-row">
                    <div class="directory-col">
                        <span class="directory-tit">Каталог продуктов</span>
                        <ul>
                            <wb-foreach wb="from=_var.products&tpl=false">
                                <li><a href="{{link}}">{{header}}</a></li>
                            </wb-foreach>
                        </ul>
                    </div>
                    <div class="directory-col">
                        <span class="directory-tit">Медицинские направления</span>
                        <ul wb-tree="item=directions&children=false">
                            <li><a href="/direction/{{id}}">{{name}}</a></li>
                        </ul>
                    </div>
                    <div class="directory-col">
                        <span class="directory-tit">Информация</span>
                        <ul>
                            <wb-foreach wb="from=_var.menu&tpl=false">
                                <li wb-if="!in_array('{{name}}',['catalog','directions'])">
                                    <a href="{{path}}">{{menu_title}}</a>
                                </li>
                            </wb-foreach>
                        </ul>
                    </div>
                </div>
                <div class="directory-main">
                    <div class="materials-items">
                        <a class="materials-items-img"><span class="materials-items-img-wrap" style="background-image: url(img/img-12.jpg);"></span></a>
                        <div class="materials-item">
                            <div class="materials-item-data">
                                25<span>сентября</span>
                            </div>
                            <span class="materials-item-name"><a href="#">Конференция «Безопасность фармакотерапии»</a></span>
                            <p><a href="#">Цены на нашу продукцию делают её доступной для широкого круга потребителей.</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="header-social">
                <li><a href="{{_var.contact_whatsapp}}"><i class="hb-ico whatsapp-c-ico"></i></a></li>
                <li><a href="{{_var.contact_telegram}}"><i class="hb-ico telegram-c-ico"></i></a></li>
                <li><a href="{{_var.contact_vk}}"><i class="hb-ico vk-c-ico"></i></a></li>
                <li><a href="{{_var.contact_ok}}"><i class="hb-ico ok-c-ico"></i></a></li>
            </ul>
        </div>
    </div>
</view>

<edit header="Шапка сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>