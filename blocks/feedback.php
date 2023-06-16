<view>
    <wb-var title="{{title}}" wb-if="'{{title}}'>''" else="Свяжитесь с нами" />
    <wb-var text="{{text}}" wb-if="'{{text}}'>''" else="Оставьте свое сообщение и мы ответим на него в самое ближайшее время" />
    <wb-var img="/thumbc/450x600/src/assets/img/img-13.jpg" wb-if="'{{image.0.img}}'==''" else="/thumbc/450x600/src{{image.0.img}}" />
    <section class="contactUs">
        <div class="wrapper">
            <div class="contactUs-wrap">
                <div class="contactUs-img"><img src="{{_var.img}}" alt=""></div>
                <div class="contactUs-form">
                    <wb-var vid="{{wbNewId()}}" />
                    <form action="quotes" method="POST" vid="{{_var.vid}}">
                        <wb-data>
                            <div class=" contactUs-top">
                                <h2 class="section-title">{{_var.title}}</h2>
                                <p>{{_var.text}}</p>
                            </div>
                            <div class="input-block">
                                <input type="text" name="name" placeholder="Ваше имя" required>
                            </div>
                            <div class="input-block">
                                <input type="text" name="phone" placeholder="Телефон" required>
                            </div>
                            <div class="input-block">
                                <input type="text" name="email" placeholder="E-mail">
                            </div>
                            <div class="input-block">
                                <textarea name="message" placeholder="Текст сообщения"></textarea>
                            </div>
                            <div class="contactUs-bottom">
                                <button class="primary-btn" type="submit" :disabled="!approve">Отправить</button>
                                <div class="checkbox">
                                    <input type="checkbox" checked v-model="approve">
                                    <i class="checkbox-ico"></i>
                                    <p>Я согласен с политикой обработки персональных данных</p>
                                </div>
                            </div>
                        </wb-data>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="module">
        import {
            createApp
        } from '/assets/js/vue.esm.js'
        createApp({
            data() {
                return {
                    approve: true
                }
            }
        }).mount("[vid={{_var.vid}}]")
    </script>
</view>

<edit header="Свяжитесь с нами">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="row">
        <div class="col-sm-4">
            <input name="image" wb="module=filepicker&mode=single&width=300&height=500" wb-path="/uploads/blocks/feedback">
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control" type="text" name="title" placeholder="Свяжитесь с нами">
            </div>
            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control" rows="auto" name="text" placeholder="Оставьте свое сообщение и мы ответим на него в самое ближайшее время"></textarea>
            </div>
        </div>
    </div>
</edit>