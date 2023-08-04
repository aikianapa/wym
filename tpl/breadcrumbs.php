<html>
<wb-var parent='' />
<wb-var parent="{{_parent.path}}" wb-if="'{{_parent.path}}'>''" else='/{{_form}}' />
<wb-var parent="/{{_form}}" wb-if="'{{_parent.path}}'=='' && '{{_form}}'!=='pages'" />
<wb-var parent="/{{_parent.name}}" wb-if="'{{_parent.path}}'=='' && '{{_form}}' =='pages'" />
<wb-var parent="/catalog" wb-if="'{{_parent.path}}'=='' && '{{_form}}' =='products'" />

<wb-var midcrumb='{{yongerCrumbs({{_var.parent}})}}' wb-if="'{{_var.parent}}'>'/'" else='' />

<ul class="crumbs" wb-if="'{{_route.direction}}'==''" itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/">
            <span itemprop="name">Главная</span>
        </a>
        <meta itemprop="position" content="1" />
    </li>
    <wb-foreach wb="from=_var.midcrumb&tpl=false">
        <li wb-if="'{{path}}' > ''" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="{{path}}">
                <span itemprop="name">{{header}}</span>
            </a>
            <meta itemprop="position" content="{{1 + _ndx}}" />
        </li>
        <li wb-if="'{{path}}' == ''" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">{{header}}</span>
            <meta itemprop="position" content="{{1 + _ndx}}" />
        </li>
    </wb-foreach>
</ul>

<ul class="crumbs" wb-if="'{{_route.direction}}'>''" itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/">
            <span itemprop="name">Главная</span>
        </a>
        <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/directions">
            <span itemprop="name">Медицинские направления</span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name">{{_var.directions.{{_route.direction}}.name}}</span>
        <meta itemprop="position" content="3" />
    </li>
</ul>

</html>