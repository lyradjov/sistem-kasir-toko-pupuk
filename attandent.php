<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Attandent</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
              <div class="card-header">
                <a href="index.php?halaman=tambah_data" class="btn btn-primary btn-xs"> Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $ambil = $koneksi->query("SELECT * FROM user ");
                      while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                        <td><?php echo $pecah['nama']?></td>
                        <td><?php echo $pecah['username']?></td>
                        <td><?php echo $pecah['password']?></td>
                        <td><?php echo $pecah['level']?></td>
                       
                        <td>
                          <a href="index.php?halaman=edit_data&id=<?php echo $pecah['id_user'] ?>" class="btn btn-warning btn-xs">Edit</a>
                          <a href="index.php?halaman=hapus_data&id=<?php echo $pecah['id_user'] ?>" class="btn btn-danger btn-xs">Hapus</a>
                          
                        </td>
                      </tr> 
                    <?php
                      }
                    ?>
                
              
                </table>
              </div>
        </div>  