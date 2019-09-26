        <!-- Breadcrumbs--> 
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Produk</li>
        </ol>

        <!-- Detail Produk -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Detail Produk
          </div>
          <div class="card-body row">
            <?php foreach($productid as $row){}?>
            <div class="col-1"></div>
            <div class="col-10">
              <form action="<?php echo base_url('admin/product/product_update'); ?>" method="post">
                <div class="form-group">
                    <div class="form-group">
                      <!-- <label for="medicine_id">Id Produk</label> -->
                      <input type="hidden" id="medicine_id" name="medicine_id" class="form-control" placeholder="Masukan Id Produk" readonly value="<?php echo $row->medicine_id ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="medicine_code">Kode Produk</label>
                      <input type="text" id="medicine_code" name="medicine_code" class="form-control" placeholder="Masukan Kode Produk" readonly value="<?php echo $row->medicine_code ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="medicine_name">Nama Produk</label>
                      <input type="text" id="medicine_name" name="medicine_name" class="form-control" placeholder="Masukan Nama Produk" required value="<?php echo $row->medicine_name ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="producer">Produsen</label>
                      <input type="text" id="producer" name="producer" class="form-control" placeholder="Masukan Produsen" required value="<?php echo $row->producer ?>">
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="children_dosage">Dosis Untuk Anak-anak</label>
                        <input type="text" id="children_dosage" name="children_dosage" class="form-control" placeholder="Masukan Dosis Untuk Anak-anak" required value="<?php echo $row->children_dosage ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="adult_dosage">Dosis Untuk Dewasa</label>
                        <input type="text" id="adult_dosage" name="adult_dosage" class="form-control" placeholder="Masukan Dosis Untuk Dewasa" required value="<?php echo $row->adult_dosage ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="single_purchase_price">Harga Beli (Rp)</label>
                        <input type="text" id="single_purchase_price" name="single_purchase_price" class="form-control" placeholder="Masukan Harga Beli" required value="Rp. <?php echo $row->single_purchase_price ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="single_selling_price">Harga Jual (Rp)</label>
                        <input type="text" id="single_selling_price" name="single_selling_price" class="form-control" placeholder="Masukan Harga Jual" required value="Rp. <?php echo $row->single_selling_price ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="medicine_description">Deskripsi</label>
                      <textarea rows="3" type="text" id="medicine_description" name="medicine_description" class="form-control" placeholder="Masukan Deskripsi" value="<?php echo $row->description ?>"><?php echo $row->medicine_description ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal<?php echo $row->medicine_id;?>"><i class="fa fa-trash"></i> Hapus Akun</button>
                  <span class="float-lg-right">
                    <button class="btn btn-secondary" type="reset" onclick="window.location.href='<?php echo base_url('admin/product');?>'"><i class="fa fa-caret-left"></i> Batal</button>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Terakhir di ubah pada <?php echo date("Y-m-d", $row->last_update) ?></div>
        </div>


        <!-- Delete Modal -->
        <form action="<?php echo base_url('admin/product/product_delete'); ?>" method="post">
          <div class="modal fade" id="deleteModal<?php echo $row->medicine_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Menghapus <?php echo $row->medicine_name ?> ?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <input type="hidden" id="medicine_id" name="medicine_id" class="form-control" placeholder="Masukkan Id Pengguna" value="<?php echo $row->medicine_id ?>" readonly>
                <div class="modal-body">Pilih "Hapus" untuk menghapus !</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-caret-left"></i> Batal</button>
                  <button class="btn btn-danger" href="" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </form>