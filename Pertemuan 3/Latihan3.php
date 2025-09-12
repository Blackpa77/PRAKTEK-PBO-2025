<?php
class User
{
    public $username;
    public $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login($inputUsername, $inputPassword)
    {
        if ($inputUsername === $this->username && $inputPassword === $this->password) {
            echo "Login berhasil!\n";
        } else {
            echo "Gagal! Username atau password salah.\n";
        }
    }
}

$user = new User("admin", "12345");


$user->login("admin", "12345");
// Output: Login berhasil!


$user->login("admin", "salah");
// Output: Gagal! Username atau password salah.