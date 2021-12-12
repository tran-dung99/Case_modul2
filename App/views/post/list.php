<?php
include_once "App/views/layout/header.php";
?>
<p>
<div class="card" style="width: 18rem;float: left;padding: 20px;margin-left: 50px;border-color: #FFFFFF">
    <img width="150px" height="150px" style="overflow: hidden;border-radius: 50%;margin: auto"
         src="<?php echo "uploads/" . ($_SESSION["userName"]->image !== null ?$_SESSION["userName"]->image : "null.png") ?>">
    <div class="card-body" style="margin: auto">
        <h5 class="card-title" "><?php echo $_SESSION["userName"]->name ?></h5>
        <span class="card-text"><?php echo $_SESSION["userName"]->email ?></span><br>
        <span class="card-text"><?php echo $_SESSION["userName"]->birthday ?></span><br>
        <span class="card-text"><?php echo $_SESSION["userName"]->address ?></span><br><br>
        <a href="index.php?page=detail-admin" class="btn btn-primary">Chi tiết</a>
    </div>
</div>
<div class="container" style="float: left">
    <div class="row">
<?php if (isset($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="card col-3 ml-5 mt-3">
            <img width="250px" height="150px" style="overflow: hidden"
                 src="<?php echo "uploads/" . ($post->image !== null ? $post->image : "null.png") ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post->title ?></h5>
                <p class="card-text"><?php echo $post->category ?></p>
                <p class="card-text"><?php echo $post->post_time ?></p>
                <div class="action-group">

                    <a type="button" class="btn btn-success"
                       href="index.php?page=detail-post&id=<?php echo $post->id ?>">Đọc thêm</a>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <?php echo "ERROR" ?>
<?php endif; ?>
    </div>
</div>
</p>



<!--<table class="table table-hover">-->
<!--    <thead style="background-color: darkgreen;color: #FFFFFF">-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>IMAGE</th>-->
<!--        <th>TITLE</th>-->
<!--        <th>CATEGORY</th>-->
<!--        <th>POST TIME</th>-->
<!--        <th>USER ID</th>-->
<!--        <th colspan="3">ACTION</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //if (isset($posts)): ?>
<!--        --><?php //foreach ($posts as $post): ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $post->id ?><!--</td>-->
<!--                <td><img width="150px" height="100px" style="overflow: hidden"-->
<!--                         src="--><?php //echo "uploads/" . ($post->image !== null ? $post->image : "null.png") ?><!--"></td>-->
<!--                <td>--><?php //echo $post->title ?><!--</td>-->
<!--                <td>--><?php //echo $post->category ?><!--</td>-->
<!--                <td>--><?php //echo $post->post_time ?><!--</td>-->
<!--                <td>--><?php //echo $post->user_id ?><!--</td>-->
<!--                <td><a type="button" class="btn btn-danger"-->
<!--                       onclick="return confirm('Are you sure want to delete this post?')"-->
<!--                       href="index.php?page=delete-post&id=--><?php //echo $post->id ?><!--">Delete</a></td>-->
<!--                <td><a type="button" class="btn btn-success"-->
<!--                       href="index.php?page=detail-post&id=--><?php //echo $post->id ?><!--">Detail</a></td>-->
<!--                <td><a type="button" class="btn btn-primary"-->
<!--                       href="index.php?page=update-post&id=--><?php //echo $post->id ?><!--">Update</a></td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--    --><?php //else: ?>
<!--        --><?php //echo "ERROR" ?>
<!--    --><?php //endif; ?>
<!--    </tbody>-->
<!--</table>-->






