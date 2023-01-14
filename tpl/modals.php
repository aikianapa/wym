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
                    <input type="hidden" name="message" placeholder="Сообщение">
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
        <p>Ваше сообщение успешно отправлено</p>
    </div>
</div>

<div style="display: none;" id="modal-8" class="modal modal-error">
    <div class="modal-block">
        <span class="modal-title">Ошибка!</span>
        <p>Ваше сообщение не отправлено</p>
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
        <form action="">
            <wb-data>
                <div class="input-block">
                    <input type="text" name="text" placeholder="Логин">
                </div>
                <div class="input-block">
                    <input type="text" name="text" placeholder="Пароль">
                </div>
                <div class="modal-buttons">
                    <button class="primary-btn">Войти</button>
                    <a data-fancybox data-src="#modal-7" href="javascript:;" class="primary-btn primary-btn-gray">Зарегистрироваться</a>
                </div>
            </wb-data>
        </form>
    </div>
</div>
<div style="display: none;" id="modal-7" class="modal">
    <div class="modal-wrap">
        <span class="modal-title">Регистрация</span>
        <wb-var vid="{{wbNewId()}}" />
        <form action="quotes" method="POST" vid="{{_var.vid}}">
            <wb-data>
                <div class="input-block">
                    <input type="text" name="text" placeholder="Имя">
                </div>
                <div class="input-block">
                    <input type="text" name="text" placeholder="E-mail">
                </div>
                <div class="input-block">
                    <input type="text" name="text" placeholder="Должность">
                </div>
                <div class="input-block">
                    <input type="text" name="text" placeholder="Организация">
                </div>
                <div class="modal-btn">
                    <button class="primary-btn">Зарегистрироваться</button>
                </div>
                <div class="checkboxs">
                    <div class="checkbox">
                        <input type="checkbox" checked>
                        <i class="checkbox-ico"></i>
                        <p>Я согласен с политикой обработки персональных данных</p>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" checked>
                        <i class="checkbox-ico"></i>
                        <p>Я согласен подписаться на новостную рассылку</p>
                    </div>
                </div>
            </wb-data>
        </form>
    </div>
</div>

</html>