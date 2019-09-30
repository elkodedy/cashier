   <!-- <?php echo validation_errors(); ?> -->
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Produk</li>
        </ol>

        <!-- Ubah Pengguna -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Produk
          </div>
          <div class="card-body row">
            <div class="col-1"></div>
            <div class="col-10">
              <form action="<?php echo base_url('admin/product/product_insert'); ?>" method="post">
                <div class="form-group">
                  <div class="form-group">
                    <!-- <label for="medicine_id">Id Produk</label> -->
                    <input type="hidden" id="medicine_id" name="medicine_id" class="form-control" placeholder="Masukan Id Produk" readonly value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="medicine_code">Kode Produk</label>
                    <?php date_default_timezone_set("Asia/Makassar"); ?>
                    <input type="text" id="medicine_code" name="medicine_code" class="form-control" placeholder="Masukan Kode Produk" readonly value="<?php echo ('OB'.time().rand(10,99)) ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="medicine_name">Nama Produk<span class='text-danger'>*</span></label>
                    <input type="text" id="medicine_name" name="medicine_name" class="form-control" placeholder="Masukan Nama Produk" value="<?php echo set_value('medicine_name'); ?>">
                  </div>
                  <span class='text-danger'><?php echo form_error('medicine_name'); ?></span>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="producer">Produsen</label>
                    <input type="text" id="producer" name="producer" class="form-control" placeholder="Masukan Produsen" value="<?php echo set_value('producer'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="children_dosage">Dosis Untuk Anak-anak</label>
                        <input type="text" id="children_dosage" name="children_dosage" class="form-control" placeholder="Masukan Dosis Untuk Anak-anak" value="<?php echo set_value('children_dosage'); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="adult_dosage">Dosis Untuk Dewasa</label>
                        <input type="text" id="adult_dosage" name="adult_dosage" class="form-control" placeholder="Masukan Dosis Untuk Dewasa" value="<?php echo set_value('adult_dosage'); ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="single_purchase_price">Harga Beli (Rp)<span class='text-danger'>*</span></label>
                        <input type="number" id="single_purchase_price" name="single_purchase_price" class="form-control" placeholder="Masukan Harga Beli" value="<?php echo set_value('single_purchase_price'); ?>">
                      </div>
                      <span class='text-danger'><?php echo form_error('single_purchase_price'); ?></span>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="single_selling_price">Harga Jual (Rp)<span class='text-danger'>*</span></label>
                        <input type="number" id="single_selling_price" name="single_selling_price" class="form-control" placeholder="Masukan Harga Jual" value="<?php echo set_value('single_selling_price'); ?>">
                      </div>
                      <span class='text-danger'><?php echo form_error('single_selling_price'); ?></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="medicine_description">Deskripsi</label>
                    <textarea rows="3" type="text" id="medicine_description" name="medicine_description" class="form-control" placeholder="Masukan Deskripsi" value="<?php echo set_value('medicine_description'); ?>"><?php echo set_value('medicine_description'); ?></textarea>
                  </div>
                  <span class='text-danger'><?php echo form_error('medicine_description'); ?></span>
                </div>
                <div class="form-group">
                  <span class="float-lg-right">
                    <button class="btn btn-secondary" type="reset" onclick="window.location.href='<?php echo base_url('admin/product');?>'"><i class="fa fa-caret-left"></i> Batal</button>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus-circle"></i> Tambah</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Data pengguna siap digunakan setelah pendaftaran selesai</div>
        </div>
