<?php require('partial/head.php') ?>
<?php require('partial/nav.logreg.php') ?>

<div class="container my-4">
    <div id="loginbox" style="margin: auto; margin-top: 150px;" class="mainbox col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info card p-4">
            <div class="panel-heading">
                <h1 class="panel-title">Login.</h1>
                <div class="panel-title">Silahkan Masukan Username dan Password anda.</div>
            </div>
            <div style="padding-top:30px;" class="panel-body">
                <?php if($err){ ?>
                    <div id="login-alert" class="alert alert-danger col-sm-12">
                        <ul><?php echo $err ?></ul>
                    </div>
                <?php } ?>
                <form id="loginform" class="form-horizontal" action="" method="post" role="form">
                    <div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="login-username" type="text" class="form-control" name="username" value="<?php echo $username?>" placeholder="username">
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="d-flex justify-content-between input-group">
                        <div class="checkbox">
                            <label for="login-remember">
                                <input id="login-remember" type="checkbox" name="ingatpass" value="1" 
                                <?php if($ingatpass == '1') echo "checked" ?>> Ingat Password
                            </label>
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="login" class="btn btn-success" value="Login"/>
                        </div>
                        <br>
                        <p>Belum Terdaftar?<a class="<?= uriIs(BASE_URL . '/registrasi.php');?>" href="registrasi.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('partial/footer.php'); ?>