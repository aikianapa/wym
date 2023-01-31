<view>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer-top">
                <div class="footer-row">
                    <div class="footer-col">
                        <div class="footer-logo">
                            <a href="/"><img src="/assets/img/logo-white.svg" alt=""></a>
                        </div>
                        <p>© 1996-{{date("Y")}}. Все права защищены.</p>
                        <ul class="footer-social">
                            <li><a href="{{_var.contact_whatsapp}}" target="_blank"><i class="hb-ico whatsapp-ico"></i></a></li>
                            <li><a href="{{_var.contact_telegram}}" target="_blank"><i class="hb-ico telegram-ico"></i></a></li>
                            <li><a href="{{_var.contact_vk}}" target="_blank"><i class="hb-ico vk-ico"></i></a></li>
                            <li><a href="{{_var.contact_ok}}" target="_blank"><i class="hb-ico ok-ico"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <ul class="footer-list">
                            <wb-foreach wb="from=_var.menu&tpl=false">
                                <li><a href="{{path}}">{{menu_title}}</a></li>
                            </wb-foreach>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <div class="footer-tel"><a href="tel:{{text2tel({{_var.contact_phone}})}}">{{superTel({{_var.contact_phone}})}}</b></a></div>
                        <div class="footer-mail"><a href="mailto:{{_var.contact_email}}">{{_var.contact_email}}</a></div>
                        <p>{{_var.contact_address}}</p>
                        <p>{{_var.contact_worktime}}</p>
                    </div>
                    <div class="footer-buttons">
                        <a fancyfix href="#modal-1" class="primary-btn">Задать вопрос</a>
                        <a fancyfix href="#modal-2" class="border-btn border-btn-white">Перезвоните мне</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-row">
                    <div class="footer-col">
                        <p>{{_var.contact_org}}</p>
                    </div>
                    <div class="footer-col">
                        <div class="footer-link"><a href="/sitemap">Карта сайта</a></div>
                    </div>
                    <div class="footer-col">
                        <div class="footer-link"><a href="/politics">Политика конфиденциальности</a></div>
                    </div>
                    <div class="footer-created">
                        <a href="https://idees.ru/" target="_blank"><img src="/assets/img/created.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <wb-include wb-tpl="modals.php" />
    <a href="#" class="call-fix"></a>
    <script defer src="/engine/js/jquery.min.js"></script>
    <script defer src="/engine/js/wbapp.js" wb-if='in_array("{{_route.name}}",["contacts"])'></script>
    <script defer src="/assets/js/scripts.min.js"></script>
    <script defer src="/forms/quotes/quotes.js"></script>
    <script defer src="/forms/users/users.js"></script>
</view>

<edit header="Подвал сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>