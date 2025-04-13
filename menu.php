<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Hidangan</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
              <div class="card-header">
                <a href="index.php?halaman=tambah_data" class="btn btn-primary btn-xs"> Tambah Menu</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Menu</th>
                    <th>Harga Menu</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    
                        <tr>
                       <td></td>
                       <td></td>
                       <td></td>
                       
                       
                        <td>
                          <a href="index.php?halaman=edit_data&id=<?php echo $pecah['id_user'] ?>" class="btn btn-warning btn-xs">Edit</a>
                          <a href="index.php?halaman=hapus_data&id=<?php echo $pecah['id_user'] ?>" class="btn btn-danger btn-xs">Hapus</a>
                          
                        </td>
                      </tr> 
                    
                      
                    
                
              
                </table>
              </div>
        </div>  