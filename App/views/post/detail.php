
<div class="row">
    <div class="container">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Chi tiết bài viết</h3>
            </div>
            <div class="panel-body">
                <div id="morris-chart-area">
                    <div class="col-md-3">
                    <img width="250px" height="200px" src="<?php echo "uploads/".($post->image!== null?$post->image:"null.png") ?>">
                    </div>
                    <div class="col-md-9">
                        <h3><?php echo $post->title?></h3>
                        <p style="font-style: italic"><?php echo $post->post_time?></p>
                        <fieldset>
                            <legend>Content</legend>
                            <p><?php echo $post->content ?></p>
                        </fieldset>
                        <div class="action-group">
                        <a href="index.php?page=post-list" type="button" class="btn btn-success">Quay lại</a>
                        <a type="button" class="btn btn-danger"
                           onclick="return confirm('Are you sure want to delete this post?')"
                           href="index.php?page=delete-post&id=<?php echo $post->id ?>">Delete</a>
                        <a type="button" class="btn btn-primary"
                           href="index.php?page=update-post&id=<?php echo $post->id ?>">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
