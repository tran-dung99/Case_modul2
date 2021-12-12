<div class="row">
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
                            <img width="250px" height="200px" src="<?php echo "uploads/".($post->image!== null?$post->image:"null.png") ?>">

                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UpToFile">
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="<?php echo $post->title ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Category</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="category" >
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
                                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"> <?php echo $post->content ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Note</label>
                                <textarea type="text" name="note"  class="form-control" id="exampleFormControlTextarea1" rows="2"><?php echo $post->note ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Thời gian</label><br>
                                <input type="date" class="form-control-file" name="post_time" value="<?php echo $post->post_time ?>">
                            </div>
                            <label for="exampleFormControlFile1">User_id</label><br>
                            <input type="number" name="user_id" value="<?php echo $post->user_id ?>" readonly>
                            <br><br>
                            <button class="btn btn-success" type="submit">Update</button>
                            <a type="button" class="btn btn-primary" href="index.php?page=post-list">Quay lại</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


