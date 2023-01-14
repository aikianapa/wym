<view>
    <div class="wrapper">
        <div class="page-top">
            <h1 class="page-title">Карта сайта</h1>
        </div>
        <div class="politics-content">
            <ul>
                <li><a href="/">Главная</a></li>
                <wb-foreach wb="from=_var.menu&tpl=false">
                    <wb-var sub="sub" wb-if="'{{count({{children}})}}'!==''" else="" />
                    <li wb-if="_var.sub == ''>
                        <a href=" {{path}}">{{menu_title}}</a>
                    </li>
                    <li wb-if="_var.sub > ''">
                        <a href=" {{path}}">{{menu_title}}</a>
                        <ul>
                            <wb-foreach wb="from=children&tpl=false">
                                <li wb-if="'{{_idx}}'>0">
                                    <a href="{{path}}">{{menu_title}}</a>
                                </li>
                            </wb-foreach>
                        </ul>
                    </li>
                    <li wb-if="'{{attach}}' > ''">
                        <ul>
                            <wb-foreach wb="table={{attach}}&tpl=false">
                                <li wb-if="'{{active}}'=='on'">
                                    <a wb-if="'{{_form}}'!=='products'" href="{{yongerFurl()}}">{{header}}</a>
                                    <a wb-if="'{{_form}}' =='products'" href="{{link}}">{{header}}</a>
                                </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </wb-foreach>
            </ul>
        </div>
    </div>
</view>

<edit header="Карта сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>