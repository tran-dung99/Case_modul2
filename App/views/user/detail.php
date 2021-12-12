
<div class="row">
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Thông tin chi tiết</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-chart-area">
                        <div class="col-md-3">
                            <img width="250px" height="200px" style="overflow: hidden" src="<?php echo "uploads/".($user->image!==null?$user->image:"default.png") ?>" alt="ERROR">
                        </div>
                        <div class="col-md-9">
                            <h3><?php echo$user->name?></h3>
                            <p style="font-style: italic"><?php echo $user->email?></p>
                            <fieldset>
                                <legend>Thông tin chi tiết</legend>
                                <p>Ngày sinh: <?php echo $user->birthday  ?></p>
                                <p>Địa chỉ: <?php echo $user->address ?></p>
                                <p><?php echo $user->personal_Details ?></p>
                            </fieldset>
                            <a href="index.php?page=user-list" type="button" class="btn btn-success">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>