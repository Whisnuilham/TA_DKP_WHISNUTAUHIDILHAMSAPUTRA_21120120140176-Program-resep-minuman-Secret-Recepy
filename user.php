<?php
  class user{
    protected $email;
    protected $password;
    protected $userData;

    public function __construct($email, $password){
      $this->userData=[
        
        (object)[
          'username' => 'Whisnu Tauhid Ilham Saputra',
          'email' => "admin@gmail.com",
          'password' => "admin",
          'role' => "admin"
        ],
       
      ];
      $this->email = $email;
      $this->password = $password;
    }

    protected function auth(){
      foreach($this->userData as $key => $value){
        if($value->email == $this->email && $value->password == $this->password ){
          return $value;
        }
      }
      return false;
    }

    public function login(){
      $isUser = $this->auth();
      if($isUser){
        return $data = $isUser->username;
      } else {
        return false;
      }
    }
  }
?>