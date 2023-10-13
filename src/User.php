<?php

namespace xpressxd;

class User
{
    private static ?User $instance = null;

    private static array $data_keys = [
        'id',
        'login',
        'password',
        'email',
        'display_name',
        'tagline',
        'description',
        'signature',
        'referral_code',
        'profile_image',
    ];

    private array $data;

    protected function __construct()
    {
        $this->data = $_SESSION['User'] ?? [];
    }

    function __destruct()
    {
        $_SESSION['User'] = $this->data;
    }

    public static function getInstance(): User
    {
        if(self::$instance === null) {
            self::$instance = new User();
        }
        return self::$instance;
    }

    public static function isLoggedIn():bool
    {
        return self::getInstance()->data['isLoggedIn'] ?? false;
    }

    public static function logIn($login, $password): bool
    {
        if(self::isLoggedIn()){
            return true;
        }
        $conn = Database::getDbConnection();
        $statement = $conn->prepare("SELECT * FROM " . Database::USER_TABLE . " WHERE login=?");
        $statement->execute([$login]);
        if(!($result = $statement->get_result()) || $result->num_rows == 0) {
            return false;
        }
        $data = $result->fetch_assoc();
        if(!password_verify($password,$data['password'])) {
            return false;
        }
        self::getInstance()->data = array_merge($data, ['isLoggedIn' => true]);
        return true;
    }

    public static function getUserData(): ?array
    {
        return self::getInstance()->data;
    }

    public static function logOut(): void
    {
        self::getInstance()->data = [];
    }

    public static function pageGuard(): void
    {
        if(!self::isLoggedIn())
        {
            header('Location: /');
        }
    }

    public static function updateUserData($data): bool
    {
        $steril_data = array_intersect_key(array_filter($data), array_flip(self::$data_keys));
        self::getInstance()->data = array_merge(self::getInstance()->data, $steril_data);
        $data = self::getInstance()->data;
        $conn = Database::getDbConnection();
        $table = Database::USER_TABLE;
        $statement_query = <<<EOD
        UPDATE $table SET display_name=?, tagline=?, signature=?, referral_code=?, profile_image=?, description=? WHERE id=?
        EOD;
        $statement = $conn->prepare($statement_query);
        $statement->execute([
            $data['display_name'],
            $data['tagline'],
            $data['signature'],
            $data['referral_code'],
            $data['profile_image'],
            $data['description'],
            $data['id'],
            ]);
        if(!($result = $statement->get_result()) || $result->affected_rows == 0) {
            return false;
        }
        return true;
    }
}