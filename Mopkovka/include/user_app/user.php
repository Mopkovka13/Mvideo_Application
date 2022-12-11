<?php
class UserModel extends DatabaseConnection
{
    private static $tableName = "user";
    private static $colum = array('id', 'login', 'name', 'password', 'gender', 'interest', 'birthday', 'vk', 'blood', 'fac');
    public static function create(
        string $login,
        string $name,
        string $password,
        string $gender,
        string $interes,
        string $birthday,
        string $vk,
        string $blood,
        string $factor
    ) {
        $query = sprintf(
            "INSERT INTO `%s` (`login`, `name`, `password`, `gender`, `interest`, `birthday`, `vk`, `blood`, `fac`) " .
                "VALUE ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d')",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($login),
            self::getInstance()->connection()->real_escape_string($name),
            self::getInstance()->connection()->real_escape_string($password),
            self::getInstance()->connection()->real_escape_string($gender),
            self::getInstance()->connection()->real_escape_string($interes),
            self::getInstance()->connection()->real_escape_string($birthday),
            self::getInstance()->connection()->real_escape_string($vk),
            self::getInstance()->connection()->real_escape_string($blood),
            self::getInstance()->connection()->real_escape_string($factor)
        );
        // echo $query;
        self::getInstance()->connection()->query($query);
        // if (!self::getInstance()->connection()->error) {
        //     printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        // }
    }
    public static function getByLogin(string $login)
    {
        /**
         * Возвращает массив содержащий запись по логину
         */
        $query = sprintf(
            "SELECT * FROM `%s` WHERE `login` = '%s'",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($login)
        );
        $user = self::getInstance()->connection()->query($query);
        $user = $user->fetch_assoc();
        if (!$user) {
            return null;
        }
        return $user;
    }
    public static function getByVk(string $vk)
    {
        $query = sprintf(
            "SELECT * FROM `%s` WHERE `login` = '%s'",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($vk)
        );
        $user = self::getInstance()->connection()->query($query);
        $user = $user->fetch_all();
        if (count($user) == 0) {
            return null;
        }
        return $user;
    }
    public static function getById($id)
    {
        $query = sprintf(
            "SELECT * FROM `%s` WHERE `id` = %d",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($id)
        );
        $user = self::getInstance()->connection()->query($query);
        $user = $user->fetch_all();
        if (count($user) == 0) {
            return null;
        }
        return $user;
    }
    public static function blockAccount($login)
    {
        $query = sprintf(
            "UPDATE `%s` SET `blocked` = '1' WHERE 'login' = %s",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($login)
        );
        self::getInstance()->connection()->query($query);
    }
}
