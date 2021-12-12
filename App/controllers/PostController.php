<?php
include_once "App/models/PostModel.php";
class PostController
{
    protected $postController;

    public function __construct()
    {
        $this->postController = new PostModel();
    }

    public function showByIdUser()
    {
        if (isset($_SESSION["userName"])) {
            $posts = $this->postController->getByIdUser($_SESSION["userName"]->id);
            include_once "App/views/post/list.php";
        }

    }

    public function createPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/views/post/create.php";
        } else {
            try {
                if (isset($_FILES["UpToFile"])) {
                    $targetFolder = "uploads/";
                    $imageName = time() . basename($_FILES["UpToFile"]["name"]);
                    $targetFile = $targetFolder . $imageName;
                    move_uploaded_file($_FILES["UpToFile"]["tmp_name"], $targetFile);
                    $_REQUEST['image'] = $imageName;
                } else {
                    echo "file ảnh trống";
                }
                $this->postController->createPost($_REQUEST);
                header("location:index.php?page=post-list");
            } catch (Exception $e) {
                echo "Can't add new user! Please check again." . $e->getMessage();
            }

        }
    }

    public function delete()
    {
        if (isset($_REQUEST["id"])) {
            $this->postController->delete($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    public function showFormUpdate()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postController->getById($_REQUEST);
            include_once "App/views/post/update.php";
        }
    }

    public function detail()
    {
        $post = $this->postController->getById($_REQUEST);
        include_once "App/views/post/detail.php";
    }

    public function update()
    {
        if (isset($_REQUEST["id"])) {
            $post = $this->postController->getById($_REQUEST);
            $_REQUEST['image'] = $post->image;
            if (isset($_FILES["UpToFile"])) {
                $targetFolder = "uploads/";
                $imageName = time() . basename($_FILES["UpToFile"]["name"]);
                $targetFile = $targetFolder . $imageName;
                if( move_uploaded_file($_FILES["UpToFile"]["tmp_name"], $targetFile)){
                    $_REQUEST['image'] = $imageName;
                };
            }
            $this->postController->updatePost($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    public function search($request)
    {
        $posts = $this->postController->searchPost($request["searchPost"], $_SESSION["userName"]->id);
        include_once "App/views/post/list.php";
    }

    public function showAdmin() {
        include_once "App/views/post/admin-details.php";
    }
}