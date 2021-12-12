<div class="col-md-12">
    <div class="container">
    <div class="panel panel-primary">
        <h2 class="panel-heading">Add New Post</h2>
        <div class="panel-body">
            <form enctype="multipart/form-data"  method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập Title">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                        <option>Cuộc sống</option>
                        <option>Chính trị</option>
                        <option>Thời sự</option>
                        <option>Tình yêu</option>
                        <option>Khoa học-Kỹ thuật</option>
                        <option>Lịch sử</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Note</label>
                    <textarea type="text" name="note"  class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Hình ảnh</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UpToFile">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Thời gian</label><br>
                    <input type="date" class="form-control-file" name="post_time">
                </div>
                <input type="number" name="user_id" value="<?php echo $_SESSION["userName"]->id ?>" readonly><br><br>
                <button class="btn btn-success">Create</button>
                <a type="button" class="btn btn-primary" href="index.php?page=post-list">Quay lại</a>
            </form>
        </div>
    </div>
    </div>
</div>
