<?php 
require_once "../User.php";
$user = new User();
$listUser = $user->view();

if(!empty($_GET['id'])){
    $user->delete($_GET['id']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <h1 class="text-center">Aplikasi Sederhana</h1>
    <div class="container">
        <?php  
              if (empty($_GET['alert'])) {
                echo "";
              } elseif ($_GET['alert'] == 1) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        </button>
                        <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
                      </div>";
              } elseif ($_GET['alert'] == 2) {
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        </button>
                        <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data user berhasil disimpan.
                      </div>";
              } elseif ($_GET['alert'] == 3) {
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        </button>
                        <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data user berhasil diubah.
                      </div>";
              } elseif ($_GET['alert'] == 4) {
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        </button>
                        <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data user berhasil dihapus.
                      </div>";
              }
              ?>
        <div class="row justify-content-flex-end">
            <div class="col-6">
            <h2 class="text-left">List User</h2>
            </div>
            <div class="col-6 text-end">
            <a class="btn btn-primary" href="FormUser.php" role="button">Add User</a>
            </div>
        </div>   
        <div class="row mt-3">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($listUser as $key => $usr){?>
                    <tr>
                    <th scope="row"><?php echo $key+1 ?></th>
                    <td><?php echo $usr['username'] ?></td>
                    <td><?php echo $usr['email'] ?></td>
                    <td><?php 
                        if($usr['level'] == 0){
                            echo "Administrator";
                        }else if($usr['level'] == 1){
                            echo "User";
                        }else if($usr['level'] == 0){
                            echo "Developer";
                        } else{
                            echo "Not Found";
                        } 
                        ?>
                    </td>
                    <td><?php 
                        if($usr['department'] == 0){
                            echo "Staff";
                        }else if($usr['department'] == 1){
                            echo "Supervisor";
                        }else if($usr['department'] == 0){
                            echo "Manager";
                        }else if($usr['department'] == 1){
                            echo "Director";
                        }else{
                            echo "Not Found";
                        } 
                        ?>        
                    </td>
                    <td>
                        <a href="FormUser.php?id=<?php echo $usr['id_user'] ?>" class="btn btn-primary btn-sm">Edit</a>
                         <a class="btn btn-danger btn-sm" href="ViewUser.php?id=<?php echo $usr['id_user'];?>" onclick="return confirm('Anda yakin ingin menghapus user <?php echo $usr['username']; ?>?');">
                            Hapus
                          </a>
                    </td>
                    </tr>
                  <?php
                  }
                  ?>
            </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html> 
<?php

?>