<?php
//include_once "App/views/layout/header.php";
//?>
<h2>Danh sách Admin</h2>
<hr>
<?php
if(isset($_SESSION["userName"])) {
    $userName = $_SESSION["userName"];
}else{
    header("location:index.php?page=login");
}
?>
<a type="button" class="btn btn-success" href="index.php?page=post-list">Post List</a>
<br><br>
<a type="button" class="btn btn-success" href="index.php?page=create-user">Create New User</a>

<table class="table table-striped" >\

    <thead style="background-color: #DE6262; color: #FFFFFF;font-family: '.VnArial NarrowH'">
    <tr>
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>BIRTHDAY</th>
        <th>ADDRESS</th>
        <th colspan="3">ACTION</th>
    </tr>
    </thead>
    <tbody>
    <?php if(isset($users)): ?>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user->id ?></td>
        <td ><img width="100px" height="100px" style="overflow: hidden" src="<?php echo "uploads/".($user->image!==null?$user->image:"default.png") ?>" alt="Can't load this image"></td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->birthday ?></td>
        <td><?php echo $user->address ?></td>
        <td><a type="button" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this user?')" href="index.php?page=delete-user&id=<?php echo $user->id ?>">Delete</a></td>
        <td><a type="button" class="btn btn-primary" href="index.php?page=detail-user&id=<?php echo $user->id ?>">Detail</a></td>
        <td><a type="button" class="btn btn-warning" href="index.php?page=update-user&id=<?php echo $user->id ?>">Update</a></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <?php echo "ERROR" ?>
    <?php endif; ?>
    </tbody>
</table>
