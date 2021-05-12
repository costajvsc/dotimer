<?php
class User {
    private $id_user;
    private $email;
    private $password;

    public function getIDUser() : int
    {
        return $this->id_user;
    }

    public function setIDUser(int $id_user) : void
    {
        $this->id_user = $id_user;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
}
?>