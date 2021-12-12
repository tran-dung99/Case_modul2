<?php
include_once "App/models/UserModel.php";
class AuthController
{
  protected $authController ;
  public function __construct()
  {
      $this->authController = new UserModel();
  }

  public function showFormLogin() {
      include_once "App/views/auth/login.php";
  }

  public function login($request) {
      $email = $request["email"];
      $password = $request["password"];
      if($this->authController->checkLogin($email,$password)) {
          $_SESSION["userName"] = $this->authController->getByEmail($_REQUEST);
          $_SESSION["post"] = $this->authController->getByEmail($_REQUEST);
          header("location:index.php?page=post-list");
      }else{
          header("location:index.php?page=login");
      }
  }

  public function logout() {
      session_destroy();
      header("location:index.php?page=login");
  }
}