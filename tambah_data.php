<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputPassword1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select  class="form-control" name="level">
                        <option>--Pilih Level--</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                    </select>
                  </div>
               
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary btn-xs">Submit</button>
                  <a href="index.php?halaman=attandent" class="btn btn-danger btn-xs">Kembali</a>
                </div>
              </form>
              <?php
                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];

                    $koneksi->query("INSERT INTO user (nama,username,password,level) VALUES ('$nama','$username','$password','$level')");

                
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