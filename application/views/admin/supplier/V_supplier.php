<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Admin</a>
  </li>
  <li class="breadcrumb-item active">Supplier</li>
</ol>
<!-- Icon Cards-->
<div class="row">
  <div class="col-lg-12 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-handshake"></i>
        </div>
        <div class="display-4 font-weight-bold	">
          <?php echo $suppliers ?>
        </div>
        <div class="mr-5">Supplier</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="%"></a>
    </div>
  </div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <!-- <div class="card-body-icon">
      <i class="fas fa-fw fa-handshake"></i>
    </div> -->
    <!-- <div class="display-4 font-weight-bold pb-3"> -->
      <i class="fas fa-table"></i>
      Supplier
    <!-- </div> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <!-- <th>No</th> -->
            <th>Id</th>
            <th>Nama</th>
            <th>No. Telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <!-- <th>No</th> -->
            <th>Id</th>
            <th>Nama</th>
            <th>No. Telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <?php $i=1; foreach($supplier as $row){ ?>
          <tbody>
            <tr>
              <!-- <td width="5%"><?php //echo $i?></td> -->
              <td><?php echo $row->supplier_id;?></td>
              <td><?php echo $row->supplier_name;?></td>
              <td><?php echo $row->phone;?></td>
              <td><?php echo $row->address;?></td>
              <td width="10%">
                <div>
                  <a class="btn btn-primary" href="" data-toggle="modal" data-target="#logoutModal<?php echo $row->supplier_id;?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
                  <a class="btn btn-warning" href="" data-toggle="modal" data-target="#logoutEditModal<?php echo $row->supplier_id;?>"><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                </div>
              </td>
            </tr>
          </tbody>

          <!-- Detail Modal-->
          <form action=""></form>
            <div class="modal fade" id="logoutModal<?php echo $row->supplier_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Supplier</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <?php echo $row->supplier_name;?><br>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="email" id="id" class="form-control" placeholder="Id Supplier" disabled value="<?php echo $row->supplier_id ?>">
                        <label for="id">Id Supplier</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="name" class="form-control" placeholder="Nama Supplier" disabled value="<?php echo $row->supplier_name ?>">
                        <label for="name">Nama Supplier</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="phone" class="form-control" placeholder="No Telepon" disabled value="<?php echo $row->phone ?>">
                          <label for="phone">No Telepon</label>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input rows="4" type="text" id="address" class="form-control" placeholder="Alamat" disabled value="<?php echo $row->address ?>">
                        <label for="address">Alamat</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea rows="4" type="text" id="description" class="form-control" placeholder="Deskripsi" disabled value="<?php echo $row->description ?>"><?php echo $row->description ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a class="btn btn-primary" href="<?php echo site_url('/admin/supplier')?>"><i class="fa fa-caret-left"></i> Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <!-- Edit Modal-->
          <div class="modal fade" id="logoutEditModal<?php echo $row->supplier_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="<?php echo base_url('admin/supplier/supplier_update')?>" method="post">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <?php echo $row->supplier_name;?><br>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="hidden" id="supplier_id" name="supplier_id" class="form-control" placeholder="Id Supplier" required value="<?php echo $row->supplier_id ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Nama Supplier" required value="<?php echo $row->supplier_name ?>">
                        <label for="name">Nama Supplier<span class='text-danger'>*</span></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="No Telepon" value="<?php echo $row->phone ?>">
                        <label for="phone">No Telepon<span class='text-danger'>*</span></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input rows="4" type="text" id="address" name="address" class="form-control" placeholder="Alamat" value="<?php echo $row->address ?>">
                        <label for="address">Alamat</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea rows="4" type="text" id="description" name="description" class="form-control" placeholder="Deskripsi" value="<?php echo $row->description ?>"><?php echo $row->description ?></textarea>
                        <!-- <input type="text" id="description" class="form-control" placeholder="Deskripsi" disabled value="<?php //echo $row->description ?>"> -->
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a class="btn btn-secondary" href="<?php echo site_url('/admin/supplier')?>"><i class="fa fa-caret-left"></i> Kembali</a>
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal<?php echo $row->supplier_id;?>"><i class="fa fa-trash"></i> Hapus Akun</button>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        
          <!-- Delete Modal -->
          <div class="modal fade" id="deleteModal<?php echo $row->supplier_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="<?php echo base_url('admin/supplier/supplier_delete'); ?>" method="post">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Menghapus <?php echo $row->supplier_name ?> ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <input type="hidden" id="supplier_id" name="supplier_id" class="form-control" placeholder="Masukkan Id Supplier" value="<?php echo $row->supplier_id ?>" readonly>
                  <div class="modal-body">Pilih "Hapus" untuk menghapus !</div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-caret-left"></i> Batal</button>
                    <button class="btn btn-danger" href="" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php $i++; } ?>
      </table>
      <div class="float-right pt-3">
        <a class="btn btn-primary" href="" data-toggle="modal" data-target="#addModal"><i class='fa fa-plus-circle'></i> Tambah</a>
      </div>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


<!-- Add Modal-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/supplier/supplier_insert')?>" method="post">
          <div class="form-group">
            <div class="form-group">
              <input type="hidden" id="supplier_id" name="supplier_id" class="form-control" placeholder="Id Supplier" required>
              <!-- <label for="supplier_id">Id Supplier</label> -->
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="name">Nama Supplier<span class='text-danger'>*</span></label>
              <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Nama Supplier" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="phone">No Telepon<span class='text-danger'>*</span></label>
              <input type="text" id="phone" name="phone" class="form-control" placeholder="No Telepon">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" id="address" name="address" class="form-control" placeholder="Alamat">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea rows="4" type="text" id="description" name="description" class="form-control" placeholder="Deskripsi"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" href="<?php echo site_url('/admin/supplier')?>"><i class="fa fa-caret-left"></i> Kembali</a>
          <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>