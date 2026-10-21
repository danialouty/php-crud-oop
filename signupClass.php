<?php

class Signupcontr{
 private $username;
 private $password;
 private $pwdrepeat;    
 private $email;

public function __construct($username, $password, $email){
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;

}
}