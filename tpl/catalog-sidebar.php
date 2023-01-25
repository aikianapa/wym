<html>
<div class="catalog-sidebar">
    <div class="catalog-sidebar-wrap">
        <wb-foreach wb="from=_var.speed&tpl=false">
            <div class="catalog-block catalog-{{data.color}}">
                <a href="/catalog/speed/{{id}}" class="catalog-block-title">{{name}}</a>
                <ul>
                    <wb-foreach wb="from=_var.products&tpl=false" wb-filter="speed~={{id}}">
                        <li><a href="/catalog/{{wbFurlGenerate({{header}})}}" _class="active">{{header}}</a></li>
                    </wb-foreach>
                </ul>
            </div>
        </wb-foreach>
    </div>
</div>

</html>