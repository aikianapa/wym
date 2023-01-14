<html>
<div class="catalog-sidebar">
    <div class="catalog-sidebar-wrap" wb-tree="item=speed&children=false">
        <div class="catalog-block catalog-{{data.color}}">
            <span class="catalog-block-title">{{name}}</span>
            <ul>
                <wb-foreach wb="from=_var.products&tpl=false" wb-filter="speed~={{id}}">
                    <li><a href="/catalog/{{wbFurlGenerate({{header}})}}" _class="active">{{header}}</a></li>
                </wb-foreach>
            </ul>
        </div>
    </div>
</div>
</html>