<?php require('partial/head.php'); ?>
<?php require('partial/nav.php'); ?>

<div class="container mt-5">
    <h1>Ubah Data Mahasiswa</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $account['id']; ?>"> 
                <div class="mb-3 w-25">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= $account['username']; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email"  value="<?= $account['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?= $account['password']; ?>">
                </div>
                <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
            </form>
        </div>
    </div>

</div>

<?php require('partial/footer.php'); ?>