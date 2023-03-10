<view>
    <section class="catalog">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title" wb-if="'{{_route.direction}}'==''">Каталог продуктов</h1>
                <h1 class="page-title" wb-if="'{{_route.direction}}'>''">{{_var.directions.{{_route.direction}}.name}}</h1>
            </div>
            <div class="catalog-row">
                <wb-include wb-tpl="catalog-sidebar.php" wb-if="'{{_route.direction}}'==''" />
                <div class="catalog-content">
                    <div class="products-row">
                        <wb-var filter="speed=[{{_route.speed}}]" wb-if="'{{_route.speed}}'>''" else="speed=[per]" />
                        <wb-var filter="directions=[{{_route.direction}}]" wb-if="'{{_route.direction}}'>''" />
                        <wb-foreach wb="from=_var.products&tpl=false" wb-filter="{{_var.filter}}">
                            <div class="product">
                                <div class="product-wrap">
                                    <wb-var sp="{{speed.0}}" wb-if="'{{_route.speed}}'==''" else="{{_route.speed}}" />
                                    <div class="product-speed speed-{{_var.speed.{{_var.sp}}.data.color}}">
                                        <span>{{_var.speed.{{_var.sp}}.name}}</span>
                                    </div>
                                    <a href="{{link}}" class="product-img"><img src="/thumbc/210x196/src{{cover.0.img}}" alt=""></a>
                                    <div class="product-info">
                                        <span class="product-name"><a href="{{link}}">{{header}}</a></span>
                                        <p>{{short}}</p>
                                        <a href="{{link}}" class="more-btn">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </wb-foreach>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>

<edit header="Каталог товаров">

</edit>