<edit header="Наша команда">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div wb="module=bsform">
        <label>Заголовок</label>
        <textarea name="title" rows="auto" class="form-control" placeholder="Заголовок"></textarea>
        <label>Текст</label>
        <textarea name="text" rows="auto" class="form-control" placeholder="Текст"></textarea>
        <div class="row">
            <div class="col-sm-3">
                <wb-module wb="module=filepicker&mode=single&width=200&height=150" name="image" />
            </div>
            <div class="col-sm-9">
                <label>Имя</label>
                <input name="fullname" class="form-control" placeholder="Имя">
                <label>Должность</label>
                <input name="position" class="form-control" placeholder="Должность">
                <label>Эл.почта</label>
                <input name="email" type="email" class="form-control" placeholder="Эл.почта">
            </div>
        </div>
        <div class="divider-text">Наша команда</div>
        <wb-multiinput name="team">
            <div class="col-sm-3">
                <wb-module wb="module=filepicker&mode=single&width=200&height=150" name="t_image" />
            </div>
            <div class="col-sm-9">
                <label>Имя</label>
                <input name="t_fullname" class="form-control" placeholder="Имя">
                <label>Должность</label>
                <input name="t_position" class="form-control" placeholder="Должность">
                <label>Эл.почта</label>
                <input name="t_email" type="email" class="form-control" placeholder="Эл.почта">
            </div>
        </wb-multiinput>
    </div>
</edit>

<view>
    <section class="page catalog">
        <div class="wrapper">
            <div class="team-content">
                <div class="team-main">
                    <div class="team-main-img"><img src="/thumbc/1286x740/src/{{image.0.img}}" alt=""></div>
                    <div class="team-main-info">
                        <span class="team-tit" style="white-space:pre-line;">{{title}}</span>
                        <p style="white-space:pre-line;">{{text}}</p>
                        <span class="team-name">{{fullname}}</span>
                        <span class="team-sub">{{position}}</span>
                        <span class="team-mail" style="white-space:nowrap;">@: {{email}}</span>
                    </div>
                </div>
            </div>
            <div class="team-row">
                <wb-foreach wb="from=team&tpl=false">
                    <div class="team-col" wb-if="'{{t_fullname}}'>''">
                        <div class="team-wrap">
                            <div class="team-img"><img src="/thumbc/466x512/src/{{t_image.0.img}}" alt=""></div>
                            <div class="team-info">
                                <span class="team-name">{{t_fullname}}</span>
                                <span class="team-sub">{{t_position}}</span>
                                <span class="team-mail" style="white-space:nowrap;">@: {{t_email}}</span>
                            </div>
                        </div>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </section>
</view>