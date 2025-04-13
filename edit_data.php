<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php
    $ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id]' ");
    $pecah = $ambil->fetch_assoc(); 
?>
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control"  value="<?php echo $pecah['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input name="username" type="text" class="form-control" value="<?php echo $pecah['username'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="text" class="form-control"  value="<?php echo $pecah['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select  class="form-control" name="level">
                        <option value=""><?php echo $pecah['level'] ?>(Pilihan Awal)</option>
                        
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                    </select>
                  </div>
               
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ubah" type="" class="btn btn-primary btn-xs">Ubah</button>
                  <a href="index.php?halaman=attandent" class="btn btn-danger btn-xs">Kembali</a>
                </div>
              </form>
              <?php
                if (isset($_POST['ubah'])) {
                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];

                    $koneksi->query("UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE id_user='$_GET[id]'  ");

                
                ?>
                <script type="text/javascript">
                    window.location.href='index.php?halaman=attandent';
                </script>
                <?php

                }
                
              ?>

            </div>
        </div>
    </div>