<?php

use Nahid\JsonQ\Jsonq;

class usersClass extends cmsFormsClass
{
    public function profile()
    {
        $out = $this->app->getForm('users', 'profile');
        $out->find('[name=phone]')->attr('disabled', true);
        $out->fetch();
        $out->find('[name=phone]')->removeAttr('name');
        echo $out;
    }

    public function beforeItemShow(&$item)
    {
        $item['phone'] = $this->app->phoneFormat($item['phone']);
    }

    public function afterItemRead(&$item)
    {
        isset($item['phone']) ? null : $item['phone'] = '';
        $item['phone'] = preg_replace('/[^0-9]/', '', $item['phone']);
        return $item;
    }

    public function beforeItemSave(&$item)
    {
        if (isset($item['setpass'])) {
            $this->setpass($item);
        }
    }

    public function setpass(&$item)
    {
        $item['active'] = 'on';
        $item['password'] = wbPasswordMake($item['setpass']);
        $msg = $this->app->fromString('<html><div class="mail"></div></html>');
        $msg->find('.mail')->prepend('<h3>Доступ к материалам сайта ' . $this->app->route->host . '</h3>');
        $subj = $msg->find('.mail > h3')->text();
        $msg->find('.mail')->prepend("
            Добрый день!<br>
            Вам открыт доступ к материалам сайта {$this->app->route->host}.<br>
            Для авторизации, в качестве логина, используйте ваш адрес электронной почты {$item['email']} и пароль: {$item['setpass']}<br>
            С наилучшими пожеланиями, Woo Young Mediacal
        ");
        $from = $this->app->vars('_sett.email') . ';' . 'Woo Young Mediacal';
        $sent = $item['email'] . ';' . $item['fullname'];
        $res = $this->app->mail($from, $sent, $subj, $msg->html());
        unset($item['setpass']);
    }

    public function reg()
    {
        header("Content-type:application/json");
        $_POST = json_decode(file_get_contents('php://input'), true);
        if (!filter_var($this->app->vars('_post.email'), FILTER_VALIDATE_EMAIL)) {
            return json_encode(['error' => true, 'msg' => 'Недопустимый адрес электронной почты']);
        }
        $user = array_pop($this->app->itemList('users', ['filter' => ['email' => $this->app->vars('_post.email')]])['list']);
        if ($user) {
            return json_encode(['error' => true, 'msg' => 'Пользователь уже зарегистрирован']);
        }
        $user = [
            'fullname' => $this->app->vars('_post.fullname'),
            'email' => $this->app->vars('_post.email'),
            'org' => $this->app->vars('_post.org'),
            'position' => $this->app->vars('_post.position'),
            'subscribe' => $this->app->vars('_post.subscribe'),
            'role' => 'user',
            'active' => ''
        ];

        $user = $this->app->itemSave('users', $user, true);
        if (!$user) {
            return json_encode(['error' => true, 'msg' => 'Ошибка! Пользователь не зарегистрирован. Попробуйте повторить регистрацию чуть позже.']);
        }
        return json_encode(['error' => false, 'msg' => 'Пользователь успешно зарегистрирован. Активация учётной записи произойдёт после проверки нашими специалистами. Пароль доступа прийдёт на указанный адрес электронной почты.']);
    }
}
?>