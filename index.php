<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="App/asset/login.css" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php

session_start();
include_once "App/controllers/AuthController.php";
include_once "App/controllers/UserController.php";
include_once "App/controllers/PostController.php";

$authController = new AuthController();
$userController = new UserController();
$postController = new PostController();

$page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
$searchPost = isset($_REQUEST["searchPost"]) ? $_REQUEST["searchPost"] : null;

switch ($page) {
    case "user-list":
        $userController->showUsers();
        break;
    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormLogin();
        } else {
            $authController->login($_REQUEST);
        }
        break;
    case "logout":
        $authController->logout();
        break;
    case "create-user":
        $userController->create();
        break;
    case "delete-user" :
        $userController->delete();
        break;
    case "detail-user":
        $userController->detail();
        break;
    case "update-user":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $userController->showFormUpdate();
        } else {
            $userController->update();
        }
        break;
    case "post-list":
        $postController->showByIdUser();
        break;
    case "create-post":
        $postController->createPost();
        break;
    case "delete-post":
        $postController->delete();
        break;
    case "update-post":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $postController->showFormUpdate();
        } else {
            $postController->update();
        }
        break;
    case "detail-post":
        $postController->detail();
        break;
    case "detail-admin":
        $postController->showAdmin();
        break;
    default:
        if ($searchPost !== null) {
            $postController->search($_REQUEST);
        } else {
            header("location:index.php?page=login");
        }
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
