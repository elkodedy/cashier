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
              <form>
                <div class="form-group">
                    <div class="form-group">
                      <label for="id">Id Produk</label>
                      <input type="text" id="id" class="form-control" placeholder=" Masukan Id Produk" required value="<?php echo $row->medicine_id ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="name">Nama Produk</label>
                      <input type="text" id="id" class="form-control" placeholder=" Masukan Nama Produk" required value="<?php echo $row->medicine_name ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="produsen">Produsen</label>
                      <input type="text" id="produsen" class="form-control" placeholder=" Masukan Produsen" required value="<?php echo $row->producer ?>">
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="children_dosage">Dosis Untuk Anak-anak</label>
                        <input type="text" id="children_dosage" class="form-control" placeholder=" Masukan Dosis Untuk Anak-anak" required value="<?php echo $row->children_dosage ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="adult_dosage">Dosis Untuk Dewasa</label>
                        <input type="text" id="adult_dosage" class="form-control" placeholder=" Masukan Dosis Untuk Dewasa" required value="<?php echo $row->adult_dosage ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="purchase_price">Harga Beli</label>
                        <input type="text" id="purchase_price" class="form-control" placeholder=" Masukan Harga Beli" required value="Rp. <?php echo $row->single_purchase_price ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="selling_price">Harga Jual</label>
                        <input type="text" id="selling_price" class="form-control" placeholder=" Masukan Harga Jual" required value="Rp. <?php echo $row->single_selling_price ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="description">Deskripsi</label>
                      <textarea rows="3" type="text" id="description" class="form-control" placeholder=" Masukan Deskripsi" value="<?php echo $row->description ?>"><?php echo $row->description ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-group float-lg-right">
                    <button class="btn btn-secondary" type="button"><i class="fa fa-caret-left"></i> Batal</button>
                    <a class="btn btn-primary" href=""><i class="fa fa-save"></i> Simpan</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>