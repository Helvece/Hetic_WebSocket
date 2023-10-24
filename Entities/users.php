<?php

namespace Entities;

class User extends BaseEntity{

  private $id_user;
  private $user_name;
  private $hash_pw;
  private $profils_picture;
  private $token;

  public function __construct($Id,$Name,$Password,$Pp,$Token){
    $this->id_user = $Id;
    $this->user_name = $Name;
    $this->hash_pw = $Password;
    $this->profils_picture = $Pp;
    $this->token = $Token;
  }

  public function getId_user() {
    return $this->id_user;
  }

  public function getUser_name() {
    return $this->user_name;
  }

  public function getHash_pw() {
    return $this->hash_pw;
  }

  public function getProfils_picture() {
    return $this->profils_picture;
  }

  public function getToken() {
    return $this->token;
  }

  public function setId_user(int $id_user): void
  {
      $this->id_user = $id_user;
  }

  public function setUser_name(string $user_name): void
  {
      $this->user_name = $user_name;
  }

  public function setHash_pw(string $hash_pw): void
  {
      $this->hash_pw = $hash_pw;
  }

  public function setProfils_picture(string $profils_picture): void
  {
      $this->profils_picture = $profils_picture;
  }

  public function setToken(string $token): void
  {
      $this->token = $token;
  }
}


