
<div class="row" style="margin-top: 100px;margin-left: 100px">
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div id="morris-chart-area">
                        <div class="col-md-3">
                            <img width="250px" height="200px" style="overflow: hidden" src="<?php echo "uploads/".($_SESSION["userName"]->image!==null?$_SESSION["userName"]->image:"default.png") ?>" alt="ERROR">
                        </div>
                        <div class="col-md-9">
                            <h3><?php echo$_SESSION["userName"]->name?></h3>
                            <p style="font-style: italic"><?php echo $_SESSION["userName"]->email?></p>
                            <fieldset>
                                <legend>Thông tin chi tiết</legend>
                                <p>Ngày sinh: <?php echo $_SESSION["userName"]->birthday  ?></p>
                                <p>Địa chỉ: <?php echo $_SESSION["userName"]->address ?></p>
                                <p><?php echo $_SESSION["userName"]->personal_Details ?></p>
                            </fieldset>
                            <a href="index.php?page=post-list" type="button" class="btn btn-success">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
