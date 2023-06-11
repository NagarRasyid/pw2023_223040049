<?php 
define('BASE_URL', '/pw2023_223040049/tubes/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('Koneksi ke Database gagal');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Function Registrasi
function registrasi($data) {
  $conn =  koneksi();
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = mysqli_real_escape_string($conn,$data['password']);
  $confirm_password = mysqli_real_escape_string($conn,$data['confirm_password']);

  $query = "SELECT username
            FROM user
            WHERE username = '$username'";
  // Cek Username Terdaftar
  if(query($query)) {
    echo "<script>
          alert('Username `$username` Sudah Terdaftar')
          </script>";
    return false;
  }
  // Cek Email Terdaftar
  $query = "SELECT email
            FROM user
            WHERE email = '$email'";
  // Cek Username Terdaftar
  if(query($query)) {
    echo "<script>
          alert('Email `$email` Sudah Terdaftar')
          </script>";
    return false;
  }
  // Cek Password Sesuai / Tidak
  if($password !== $confirm_password) {
    echo "<script>
          alert('Konfirmasi Password Tidak Sesuai')
          </script>";
    return false;
  }
  $error = true;

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO user
            VALUES (null,'$username','$email','$password')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// Function Login
function login($data) {
  $conn = koneksi();
  $username = htmlspecialchars($data ['username']);
  $password = htmlspecialchars($data['password']);

  $query = "SELECT * 
            FROM user 
            WHERE username = '$username'";
  if(query($query) === 1 ) {
    //cek password
    if(password_verify($password, $query['password'])) {
      // set session
      $_SESSION['login'] = true;

      //jika admin
      if($query['status'] == 'admin') {
        $_SESSION['status'] = 'admin';
        header("Location: admin/index.php");
        exit;
      }else {
        //jika user
        $_SESSION['status'] = 'user';
        header("Location: index.php");
        exit;
      }
    }
  }
  //cookie
  if(isset($_COOKIE['cookie_username'])) {
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $query = "SELECT * FROM user WHERE username = '$cookie_username'";
    if($query['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn);
}

function tambah($data)
{
  $conn =  koneksi();
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = mysqli_real_escape_string($conn,$data['password']);

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO
            user
            VALUES (null,'$username','$email','$password')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function hapus($id) {
  $conn = koneksi();
  $query = "DELETE FROM user WHERE id= $id";

  mysqli_query($conn, $query) or die (mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn =  koneksi();
  $id = htmlspecialchars($data['id']);
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = mysqli_real_escape_string($conn,$data['password']);

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "UPDATE
            user
            SET
            username = '$username',
            email = '$email',
            password = '$password'
            WHERE 
            id = $id 
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}



function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
?>