<?php

class UserLogic
{
    public static function signUp(
        string $login,
        string $name,
        string $password1,
        string $password2,
        string $gender,
        string $interes,
        string $birthday,
        string $vk,
        string $blood,
        string $factor
    ) {
        /**
         * Функция регистрации
         * Возвращает массви ошибок или null при успешной регитсрации
         */
        $error = array();
        if (empty($login)) {
            $error[] = 'логин пуст!';
        }
        if (empty($name)) {
            $error[] = 'ФИО пустое!';
        }
        if (empty($password1)) {
            $error[] = 'пароль пуст!';
        }
        if (empty($password2)) {
            $error[] = 'повторный пароль пуст!';
        }
        if (empty($gender)) {
            $error[] = 'пол пуст!';
        }
        if (empty($interes)) {
            $error[] = 'интересы пусты!';
        }
        if (empty($birthday)) {
            $error[] = 'день рождения пуст!';
        }
        if (empty($vk)) {
            $error[] = 'vk пуст!';
        }
        if (empty($blood)) {
            $error[] = 'группа крови отсутствует!';
        }
        if (empty($factor)) {
            $error[] = 'резус-фактор отсутствует!';
        }
        if (!filter_var($vk, FILTER_VALIDATE_URL)) {
            $error[] = "Некорректная ссылка!";
        }
        if(!preg_match_all("/^.*(?=.{6,})(?=.*[0-9])(?!.*[а-я])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/",$password1)){
            $error[] = "Некорректный пароль";
        }
        if ($password1 != $password2) {
            $error[] = "Пароли не совпадают !";
        }
        if (empty($error)) {
            $row = UserModel::getByLogin($login);
            if ($login == $row['login']) {
                $error[] = "Пользователь с такой почтой уже зарегистрирован!";
            }
        }
        if (empty($error)) {
            // echo "<br>Дошло до создания<br>";
            $password = md5($password1);
            UserModel::create($login, $name, $password, $gender, $interes, $birthday, $vk, $blood, $factor);
            // return array();
        }
        return $error;
    }
    public static function isAuthorized()
    {
        /**
         * True Если зашел, false если не зашел
         */
        return intval(@$_SESSION["user_id"]) > 0;
    }
    public static function current()
    {
        /**
         * Если вход выполнен возвращает юзера
         */
        if (!static::isAuthorized()) {
            return null;
        }
        $user = UserModel::getById($_SESSION["user_id"]);
        // var_dump($user);
        return $user[0][2];
    }
    public static function signOut()
    {
        /**
         * Выход из аккаунта
         */
        // unset($_SESSION["user_id"]);
        $_SESSION["user_id"] = -1;
        // session_destroy();
    }
    public static function signIn($login, $password) : string
    {
        /**
         * Вход в уже зарегестрированный аккаунт
         */
        if(static::isAuthorized()){
            return "Вход уже выполнен!";
        }
        $user = UserModel::getByLogin($login);
        echo "<br>user: " . $user;
        if(null == $user){
            return "Пользователь не существует!";
        }
        if(md5($password) != $user['password']){
            var_dump($_SESSION['count']);
            return "Неверный пароль!";
        }
        $_SESSION["user_id"] = $user["id"];
        return '';
    }
}
