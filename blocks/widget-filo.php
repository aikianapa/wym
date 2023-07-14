<view>
    <section class="block-{{name}}">
        <div class="wrapper">
            <div class="aboutUs-wrap">
                <span class="aboutUs-tit">{{title}}</span>
                <div class="aboutUs-circle aboutUs-circle-1"><span>{{str1}}</span></div>
                <div class="aboutUs-circle aboutUs-circle-2"><span>{{str2}}</span></div>
                <div class="aboutUs-circle aboutUs-circle-3"><span>{{str3}}</span></div>
            </div>
        </div>
    </section>
</view>

<edit header="Виджет - три круга">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="form-group row">

            <label class="form-control-label col-md-3">Заголовок</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="title" placeholder="Заголовок">
            </div>
        </div>
        <div class="form-group row">
            <label class="form-control-label col-md-3">Надпись 1</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="str1" placeholder="Надпись (зелёный круг)">
            </div>
        </div>
        <div class="form-group row">
            <label class="form-control-label col-md-3">Надпись 2</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="str2" placeholder="Надпись  (синий круг)">
            </div>
        </div>
        <div class="form-group row">
            <label class="form-control-label col-md-3">Надпись 3</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="str3" placeholder="Надпись  (красный круг)">
            </div>
        </div>
    </wb-multilang>
</edit>