<?php require('partial/head.php') ?>
<?php require('partial/nav.logreg.php') ?>

<div class="container my-4">
    <div id="registerbox" style="margin: auto; margin-top: 150px;" class="mainbox col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info card p-4" >
            <div class="panel-heading">
                <h1 class="panel-title">Registrasi.</h1>
                <div class="panel-title">Buat Akun untuk Website ini.</div>
            </div>
            <div style="padding-top:30px;" class="panel-body">
                <?php if(isset($error) ) { ?>
                    <div id="register-alert" class="alert alert-danger col-sm-12">
                        <ul>Username Sudah Terdaftar</ul>
                    </div>
                <?php } ?>
                <form id="registerform" class="form-horizontal" action="" method="post" role="form">
                <div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="register-username" type="text" class="form-control" name="username" placeholder="username">
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="register-email" type="text" class="form-control" name="email" placeholder="email">
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input id="register-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="confirm password">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="register" class="btn btn-success" value="Sign In"/>
                        </div>
                    </div>
                    <br>
                        <p>Sudah Terdaftar?<a class="<?= uriIs(BASE_URL . '/login.php');?>" href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('partial/footer.php'); ?>