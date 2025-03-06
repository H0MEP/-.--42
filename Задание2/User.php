<?php

class User {
    private $username;
    private $password;
    private $birthday;

    public function __construct($username, $password, DateTime $birthday) {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = $birthday;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getBirthday() {
        return $this->birthday;
    }
}