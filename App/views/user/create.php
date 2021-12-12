<!--<form action="" method="post" enctype="multipart/form-data">-->
<!--    <input type="text" name="name" placeholder="Nhập name">-->
<!--    <input type="text" name="email" placeholder="Nhập email">-->
<!--    <input type="password" name="password" placeholder="Nhập password">-->
<!--    <input type="date" name="birthday" placeholder="Nhập birthday">-->
<!--    <select name="address">-->
<!--        <option value="Hà Nội">Hà Nội</option>-->
<!--        <option value="Đà Nẵng">Đà Nẵng</option>-->
<!--        <option value="Sài Gòn">Sài Gòn</option>-->
<!--        <option value="Quảng Nam">Quảng Nam</option>-->
<!--        <option value="Nghệ An">Nghệ An</option>-->
<!--        <option value="Hà Tĩnh">Hà Tĩnh</option>-->
<!--    </select>-->
<!--    <input type="text" name="person_Detail" placeholder="Nhập person_Detail">-->
<!--    <input type="file" name="UpToFile">-->
<!--    <button>Create</button>-->
<!--    <a href="index.php?page=user-list">Quay lại</a>-->
</form method="post" enctype="multipart/form-data">
<div class="col-md-12"  style="margin-top: 50px">
    <div class="container">
        <div class="panel panel-primary">
            <h2 class="panel-heading">Add New User</h2>
            <div class="panel-body">
                <form enctype="multipart/form-data"  method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nhập tên user">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Địa chỉ</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="address">
                            <option>Hà Nội</option>
                            <option>Đà Nẵng</option>
                            <option>Sài Gòn</option>
                            <option>Quảng Nam</option>
                            <option>Nghệ An</option>
                            <option>Hà Tĩnh</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Nhập tên user">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="password" placeholder="Nhập password">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Hình ảnh</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UpToFile">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ngày tháng năm sinh</label><br>
                        <input type="date" class="form-control-file" name="birthday">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mô tả</label>
                        <textarea type="text" name="personal_Details"  class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <br><br>
                    <button class="btn btn-success">Create</button>
                    <a type="button" class="btn btn-primary" href="index.php?page=user-list">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>