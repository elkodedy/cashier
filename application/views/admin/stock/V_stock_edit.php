        <!-- Breadcrumbs--> 
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Stok Produk</li>
        </ol>

        <!-- Detail Produk -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Detail Stok Produk
          </div>
          <div class="card-body row">
            <?php foreach($stockid as $row){}?>
            <div class="col-1"></div>
            <div class="col-10">
              <form>
                <div class="form-group">
                    <div class="form-group">
                      <label for="id">Id Produk</label>
                      <input type="text" id="id" class="form-control" placeholder="Id Produk" required value="<?php echo $row->medicine_id ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="name">Nama Produk</label>
                      <input type="text" id="id" class="form-control" placeholder="Nama Produk" required value="<?php echo $row->medicine_name ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="stock">Stok Gudang</label>
                      <input type="text" id="stock" class="form-control" placeholder="Stok Gudang" required value="<?php echo $row->stock ?>">
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="sold">Terjual</label>
                        <input type="text" id="sold" class="form-control" placeholder="Terjual" required value="<?php echo $row->sold ?>">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="expired">Kadaluarsa / Rusak</label>
                        <div class="form-group">
                          <input type="text" id="expired" class="form-control" placeholder="Kadaluarsa / Rusak" required value="<?php echo $row->expired ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                        <label for="expired">Tambah</label>
                        <button class="btn btn-primary pl-4 pr-4"> + </button>
                        <!-- <input type="number" id="expired" class="form-control" placeholder="" required value="<?php echo $row->expired ?>"> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group float-lg-right">
                    <a class="btn btn-primary" href="<?php echo site_url('/admin/product')?>"><i class="fa fa-caret-left"></i> Kembali</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>