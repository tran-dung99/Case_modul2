<?php
include_once "App/models/UserModel.php";

class UserController
{
    protected $userController;

    public function __construct()
    {
        $this->userController = new UserModel();
    }

    public function showUsers()
    {
        $users = $this->userController->getAll();
        include_once "App/views/user/list.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/views/user/create.php";
        } else {
            try {
                if (isset($_FILES["UpToFile"])) {
                    $targetFolder = "uploads/";
                    $imageName = time() . basename($_FILES["UpToFile"]["name"]);
                    $targetFile = $targetFolder . $imageName;
                    move_uploaded_file($_FILES["UpToFile"]["tmp_name"], $targetFile);
                    $_REQUEST['image'] = $imageName;
                }
                $this->userController->createUser($_REQUEST);
                header("location:index.php?page=user-list");
            } catch (Exception $e) {
                echo "Can't add new user! Please check again." . $e->getMessage();
            }
        }
    }

    public function delete()
    {
        if (isset($_REQUEST["id"])) {
            $this->userController->delete($_REQUEST);
            header("location:index.php?page=user-list");
        }
    }

    public function detail()
    {
        if (isset($_REQUEST["id"])) {
            $user = $this->userController->getById($_REQUEST);
            include_once "App/views/user/detail.php";
        }
    }

    public function showFormUpdate()
    {
        if (isset($_REQUEST['id'])) {
            $user = $this->userController->getById($_REQUEST);
            include_once "App/views/user/update.php";
        }
    }

    public function update()
    {
        if (isset($_REQUEST["id"])) {
            $user = $this->userController->getById($_REQUEST);
            $_REQUEST['image'] = $user->image;
            if (isset($_FILES["UpdateToFile"])) {
                $targetFolder = "uploads/";
                $imageName = time() . basename($_FILES["UpdateToFile"]["name"]);
                $targetFile = $targetFolder . $imageName;
               if( move_uploaded_file($_FILES["UpdateToFile"]["tmp_name"], $targetFile)){
                   $_REQUEST['image'] = $imageName;
               };
            }
            $this->userController->updateUser($_REQUEST);
            header("location:index.php?page=user-list");
        }
    }

}