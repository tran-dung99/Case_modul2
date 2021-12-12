<!--<form action=""method="post" enctype="multipart/form-data">-->
<!--    <input type="text" name="name" value="--><?php //echo $user->name ?><!--">-->
<!--    <input type="text" name="email" value="--><?php //echo $user->email ?><!--">-->
<!--    <input type="password" name="password" value="--><?php //echo $user->password ?><!--">-->
<!--    <input type="date" name="birthday" value="--><?php //echo $user->birthday ?><!--">-->
<!--    <select class="form-control" id="exampleFormControlSelect1" name="address">-->
<!--        <option --><?php //echo $user->address == "Hà Nội"?"selected":null ?><!-- value="Hà Nội">Hà Nội</option>-->
<!--        <option --><?php //echo $user->address == "Đà Nẵng"?"selected":null ?><!-- value="Đà Nẵng">Đà Nẵng</option>-->
<!--        <option --><?php //echo $user->address == "Sài Gòn"?"selected":null ?><!-- value="Sài Gòn">Sài Gòn</option>-->
<!--        <option --><?php //echo $user->address == "Quảng Nam"?"selected":null ?><!-- value="Quảng Nam">Quảng Nam</option>-->
<!--        <option --><?php //echo $user->address == "Nghệ An"?"selected":null ?><!-- value="Nghệ An">Nghệ An</option>-->
<!--        <option --><?php //echo $user->address == "Hà Tĩnh"?"selected":null ?><!-- value="Hà Tĩnh">Hà Tĩnh</option>-->
<!--    </select>-->
<!--    <input type="text" name="personal_Details"  value="--><?php //echo $user->personal_Details ?><!--">-->
<!--    <img style="width: 100px;height: 100px"  src="--><?php //echo "uploads/".($user->image!==null?$user->image:"default.png") ?><!--" alt="Can't load this image">-->
<!--    <input type="file" name="UpdateToFile">-->
<!--    <button>Update</button>-->
<!--    <a href="index.php?page=user-list">Quay lại</a>-->
<!--</form>-->



<div class="row" style="margin-top: 50px">
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Chi tiết bài viết</h3>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="panel-body">
                        <div id="morris-chart-area">
                            <div class="col-md-3">
                                <img style="width: 100px;height: 100px"  src="<?php echo "uploads/".($user->image!==null?$user->image:"default.png") ?>" alt="Can't load this image">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UpdateToFile">
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $user->name ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Address</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="address">
                                        <option <?php echo $user->address == "Hà Nội"?"selected":null ?> value="Hà Nội">Hà Nội</option>
                                        <option <?php echo $user->address == "Đà Nẵng"?"selected":null ?> value="Đà Nẵng">Đà Nẵng</option>
                                        <option <?php echo $user->address == "Sài Gòn"?"selected":null ?> value="Sài Gòn">Sài Gòn</option>
                                        <option <?php echo $user->address == "Quảng Nam"?"selected":null ?> value="Quảng Nam">Quảng Nam</option>
                                        <option <?php echo $user->address == "Nghệ An"?"selected":null ?> value="Nghệ An">Nghệ An</option>
                                        <option <?php echo $user->address == "Hà Tĩnh"?"selected":null ?> value="Hà Tĩnh">Hà Tĩnh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Email</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $user->email ?>">                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Ngày sinh</label><br>
                                    <input type="date" class="form-control-file" name="birthday" value="<?php echo $user->birthday ?>">
                                </div>
                                <label for="exampleFormControlFile1">User_id</label><br>
                                <input type="number" name="user_id" value="<?php echo $user->id ?>" readonly>
                                <br><br>
                                <button class="btn btn-success" type="submit">Update</button>
                                <a type="button" class="btn btn-primary" href="index.php?page=user-list">Quay lại</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
