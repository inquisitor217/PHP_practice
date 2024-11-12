<?php
class User {
    private $name;
    private $surname;
    private $email;
    private $sex;
    private $password;

    public function __construct($name,$surname,$email,$sex,$password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->sex = $sex;
        $this->password = $password;
    }

    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getSex() {
        return $this->sex;
    }
    public function getPassword()
    {
        return $this->password;
    }

    // это для того, чтобы получить все данные (без пароля)
    public function getUserData() {
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'sex'=>$this->sex
        ];
    }
}

// получаем из формы html
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $password = $_POST['password'];

    $user = new User($name, $surname, $email, $sex, $password);

    print_r($user->getUserData());
}
?>