<?php require('partial/head.php'); ?>
<?php require('partial/nav.php'); ?>

<div class="container mt-5">
  <h1>Halaman Daftar User</h1>
  <h3>Daftar User</h3>
  <a href="tambah.php" class="btn btn-primary">Tambah Data User</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($accounts as $account) :  ?>
        <tr>
          <th scope="row"></th>
          <td><?= $account["username"]; ?></td>
          <td><?= $account["email"]; ?></td>
          <td><?= $account["password"]; ?></td>
          <td>
            <a href="ubah.php?id=<?= $account['id']; ?>">Ubah</a> |
            <a href="hapus.php?id=<?=$account['id'];?>" onclick="return confirm('Hapus Data?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<?php require('partial/footer.php'); ?>