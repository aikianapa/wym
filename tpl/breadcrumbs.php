<html>
<wb-var parent='' />
<wb-var parent="{{_parent.path}}" wb-if="'{{_parent.path}}'>''" else='/{{_form}}' />
<wb-var parent="/{{_form}}" wb-if="'{{_parent.path}}'=='' && '{{_form}}'!=='pages'" />
<wb-var parent="/{{_parent.name}}" wb-if="'{{_parent.path}}'=='' && '{{_form}}' =='pages'" />
<wb-var parent="/catalog" wb-if="'{{_parent.path}}'=='' && '{{_form}}' =='products'" />

<wb-var midcrumb='{{yongerCrumbs({{_var.parent}})}}' wb-if="'{{_var.parent}}'>'/'" else='' />

<ul class="crumbs" wb-if="'{{_route.direction}}'==''">
    <li><a href="/">Главная</a></li>
    <wb-foreach wb="from=_var.midcrumb&tpl=false">
        <li wb-if="'{{path}}' > ''">
            <a href="{{path}}">{{header}}</a>
        </li>
        <li wb-if="'{{path}}' == ''">
            {{header}}
        </li>
    </wb-foreach>
</ul>

<ul class="crumbs" wb-if="'{{_route.direction}}'>''">
    <li><a href="/">Главная</a></li>
    <li><a href="/directions">Медицинские направления</a></li>
    <li>{{_var.directions.{{_route.direction}}.name}}</li>
</ul>

</html>