
<?php
if(isset($_SESSION["userName"])) {
    $userName = $_SESSION["userName"];
}else{
    header("location:index.php?page=login");
}
?>
<!--<nav class="navbar navbar-expand-lg navbar-light .navbar-fixed-top"  style="background-color: rgba(36,38,41,.8)">-->
<!--    <p class="navbar-brand" style="font-family: Noto Serif,Georgia,serif; color: #fff;font-size: 2em;-->
<!--    font-weight: bold;">-->
<!--        Blog tình yêu cuộc sống-->
<!--    </p>-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!---->
<!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--        <ul class="navbar-nav mr-auto">-->
<!--            <li class="nav-item">-->
<!--            </li>-->
<!---->
<!--            <li class="nav-item dropdown" style="margin-left: 900px">-->
<!--                <a  class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    --><?php //echo $userName->name ?>
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                    <a class="dropdown-item" href="index.php?page=user-list">User list</a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="index.php?page=logout">Logout</a>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!---->
<!--    </div>-->
<!--</nav>-->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(36,38,41,.8)">
    <div class="container-fluid">
        <div class="navbar-header" style="margin-left: 10px">
            <p class="navbar-brand" style="font-family: Georgia,serif; color: #fff;font-size: 2em;">Blog về tình yêu cuộc sống </p>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php?page=user-list">user list</a></li>
<!--            <li><a href="#">Page 1</a></li>-->
<!--            <li><a href="#">Page 2</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
<!--            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
            <li><a href="index.php?page=logout"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
        </ul>
    </div>
</nav>


<nav class="navbar navbar-light bg-light justify-content-between" style="margin-top: 100px;background-color: white">
    <a  type="button" class="btn btn-primary" href="index.php?page=create-post">Create new Blog</a>
    <form class="form-inline">
        <input name="searchPost" class="form-control mr-sm-2" type="search" placeholder="Nhập từ khóa" aria-label="Search">
        <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>