<view>
    <section class="catalog">
        <div class="wrapper">
            <div class="page-top">
                <h1 class="page-title">Каталог продуктов</h1>
            </div>
            <div class="catalog-row">
                <wb-include wb-tpl="catalog-sidebar.php" />
                <div class="catalog-content">
                    <div class="products-row">
                        <wb-var filter="directions=[{{_route.direction}}]" wb-if="'{{_route.direction}}'>''" else="" />
                        <wb-foreach wb="from=_var.products&tpl=false" wb-filter="{{_var.filter}}">
                            <div class="product">
                                <div class="product-wrap">
                                    <div class="product-speed speed-green"><span>{{tag}}</span></div>
                                    <a href="{{link}}" class="product-img"><img src="/assets/img/product-1.png" alt=""></a>
                                    <div class="product-info">
                                        <span class="product-name"><a href="{{link}}">{{header}}</a></span>
                                        <p>Одноразовая эластомерная помпа для проведения антибактериальной терапии.</p>
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