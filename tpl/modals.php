<html>
<div style="display: none;" id="modal-1" class="modal modal-big">
    <div class="modal-wrap">
        <div class="modal-top">
            <span class="modal-title">Задать вопрос</span>
            <p>Оставьте свое сообщение и мы ответим на него в самое ближайшее время</p>
        </div>
        <wb-var vid="{{wbNewId()}}" />
        <form action="quotes" method="POST" vid="{{_var.vid}}">
            <wb-data>
                <div class="inputs-row">
                    <div class="input-col-33">
                        <div class="input-block">
                            <input type="text" name="name" placeholder="Имя">
                        </div>
                    </div>
                    <div class="input-col-33">
                        <div class="input-block">
                            <input type="text" name="phone" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="input-col-33">
                        <div class="input-block">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                    </div>
                </div>
                <div class="input-block">
                    <textarea name="message" placeholder="Текст сообщения"></textarea>
                </div>
                <div class="modal-bottom">
                    <button class="primary-btn" type="submit" :disabled="!approve">Отправить</button>
                    <div class="checkbox">
                        <input type="checkbox" v-model="approve" checked v-model="approve">
                        <i class="checkbox-ico"></i>
                        <p>Я согласен с политикой обработки персональных данных</p>
                    </div>
                </div>
            </wb-data>
        </form>
        <script type="module">
            import {
                createApp
            } from 'vue'
            createApp({
                data() {
                    return {
                        approve: true
                    }
                }
            }).mount("[vid={{_var.vid}}]")
        </script>
    </div>
</div>
<div style="display: none;" id="modal-2" class="modal">
    <div class="modal-wrap">
        <div class="modal-top">
            <span class="modal-title">Перезвоните мне</span>
            <p>Сообщите нам свой номер телефона и мы перезвоним Вам</p>
        </div>
        <wb-var vid="{{wbNewId()}}" />
        <form action="quotes" method="POST" vid="{{_var.vid}}">
            <wb-data>
                <div class="input-block">
                    <input type="text" name="name" placeholder="Имя">
                </div>
                <div class="input-block">
                    <input type="text" name="phone" placeholder="Телефон">
                </div>
                <div class="input-block">
                    <input type="hidden" name="message" placeholder="Сообщение" value="Перезвоните мне">
                </div>
                <div class="modal-bottom">
                    <button class="primary-btn" type="submit" :disabled="!approve">Отправить</button>
                    <div class="checkbox">
                        <input type="checkbox" checked v-model="approve">
                        <i class="checkbox-ico"></i>
                        <p>Я согласен с политикой обработки персональных данных</p>
                    </div>
                </div>
            </wb-data>
        </form>
        <script type="module">
            import {
                createApp
            } from 'vue'
            createApp({
                data() {
                    return {
                        approve: true
                    }
                }
            }).mount("[vid={{_var.vid}}]")
        </script>
    </div>
</div>
<div style="display: none;" id="modal-3" class="modal modal-done">
    <div class="modal-block">
        <span class="modal-title">Спасибо!</span>
        <div class="msg">
            <p>Ваше сообщение успешно отправлено</p>
        </div>
    </div>
</div>

<div style="display: none;" id="modal-8" class="modal modal-error">
    <div class="modal-block">
        <span class="modal-title">Ошибка!</span>
        <div class="msg">
            <p>Ваше сообщение не отправлено</p>
        </div>
    </div>
</div>

<div style="display: none;" id="modal-4" class="modal modal-big">
    <div class="modal-wrap">
        <div class="modal-top">
            <span class="modal-title">Свяжитесь с нами</span>
            <p>Оставьте свое сообщение и мы ответим на него в самое ближайшее время</p>
        </div>
        <wb-var vid="{{wbNewId()}}" />
        <form action="quotes" method="POST" vid="{{_var.vid}}">
            <wb-data>
                <div class="inputs-row">
                    <div class="input-col-33">
                        <div class="input-block">
                            <input type="text" name="name" placeholder="Имя">
                        </div>
                    </div>
                    <div class="input-col-33">
                        <div class="input-block">
                            <input type="text" name="phone" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="input-col-33">
                        <div class="input-block">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                    </div>
                </div>
                <div class="input-block">
                    <textarea name="message" placeholder="Текст сообщения"></textarea>
                </div>
                <div class="modal-bottom">
                    <button class="primary-btn" type="submit" :disabled="!approve">Отправить</button>
                    <div class="checkbox">
                        <input type="checkbox" checked v-model="approve">
                        <i class="checkbox-ico"></i>
                        <p>Я согласен с политикой обработки персональных данных</p>
                    </div>
                </div>
            </wb-data>
        </form>
        <script type="module">
            import {
                createApp
            } from 'vue'
            createApp({
                data() {
                    return {
                        approve: true
                    }
                }
            }).mount("[vid={{_var.vid}}]")
        </script>
    </div>
</div>
<div style="display: none;" id="modal-5" class="modal">
    <div class="modal-wrap">
        <div class="modal-middle">
            <span class="modal-title">Являетесь ли вы работником сферы здравоохранения?</span>
            <ul class="modal-list">
                <li><a href="#" class="primary-btn">Да</a></li>
                <li><a href="#" class="primary-btn primary-btn-gray">Нет</a></li>
            </ul>
        </div>
    </div>
</div>
<div style="display: none;" id="modal-6" class="modal">
    <div class="modal-wrap">
        <span class="modal-title">Авторизация</span>
        <wb-var vid="{{wbNewId()}}" />
        <form action="/api/v2/login" method="POST" vid="{{_var.vid}}" onsubmit="javascript:return false;">
            <wb-data>
                <div class="input-block">
                    <input type="text" name="login" placeholder="Логин">
                </div>
                <div class="input-block">
                    <input type="text" name="password" placeholder="Пароль">
                </div>
                <div class="modal-buttons">
                    <button class="primary-btn" v-on:click="submit">Войти</button>
                    <a data-fancybox data-src="#modal-7" v-on:click="close" class="primary-btn primary-btn-gray cursor-pointer">Зарегистрироваться</a>
                </div>
            </wb-data>
        </form>
        <script type="module">
            import {
                createApp
            } from 'vue'
            createApp({
                data() {
                    return {

                    }
                },
                methods: {
                    submit(ev) {
                        ev.preventDefault()
                        let form = $(ev.target).parents('form');
                        let url = form.attr('action')
                        let data = new URLSearchParams(new FormData(form[0]));
                        let method = form.attr('method') ? form.attr('method').toUpperCase() : 'POST';
                        fetch(url, {
                                method: method,
                                body: data
                            })
                            .then(function(response) {
                                return response.json()
                            }).then(function(data) {
                                if (data.login == true && data.error == false) {
                                    document.location.reload()
                                } else {
                                    $(form).find('input').addClass('input-error')
                                    setTimeout(function() {
                                        form.find('input').removeClass('input-error')
                                    }, 1500)
                                }
                            });

                    },
                    close() {
                        $.fancybox.close({
                            src: '#modal-6'
                        });
                    }
                }
            }).mount("[vid={{_var.vid}}]")
        </script>
    </div>
</div>
<div style="display: none;" id="modal-7" class="modal">
    <div class="modal-wrap">
        <span class="modal-title">Регистрация</span>
        <wb-var vid="{{wbNewId()}}" />
        <form action="reg" method="POST" vid="{{_var.vid}}">
            <wb-data>
                <div class="input-block">
                    <input type="text" name="fullname" placeholder="Имя" required1>
                </div>
                <div class="input-block">
                    <input type="text" name="email" placeholder="E-mail" required1>
                </div>
                <div class="input-block">
                    <input type="text" name="position" placeholder="Должность" requred1>
                </div>
                <div class="input-block">
                    <input type="text" name="org" placeholder="Организация" required1>
                </div>
                <div class="modal-btn">
                    <button class="primary-btn" type="submit" :disabled="!approve">Зарегистрироваться</button>
                </div>
                <div class="checkboxs">
                    <div class="checkbox">
                        <input type="checkbox" checked v-model="approve">
                        <i class="checkbox-ico"></i>
                        <p>Я согласен с политикой обработки персональных данных</p>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="subscribe" checked>
                        <i class="checkbox-ico"></i>
                        <p>Я согласен подписаться на новостную рассылку</p>
                    </div>
                </div>
            </wb-data>
        </form>
        <script type="module">
            import {
                createApp
            } from 'vue'
            createApp({
                data() {
                    return {
                        approve: true
                    }
                }
            }).mount("[vid={{_var.vid}}]")
        </script>
    </div>
</div>

</html>