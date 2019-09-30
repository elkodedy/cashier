        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Produk</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Produk
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Category</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Category</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1; foreach($product as $row){ ?>
                    <tr>
                      <!-- <td width="5%"><?php //echo $i?></td> -->
                      <td><?php echo $row->medicine_code;?></td>
                      <td><?php echo $row->medicine_name;?></td>
                      <td>Rp. <?php echo $row->single_purchase_price;?></td>
                      <td>Rp. <?php echo $row->single_selling_price;?></td>
                      <td>
                        <?php $caty = $this->M_product->get_category($row->medicine_id);?>
                        <?php $j=1; foreach($caty as $cat){ ?>
                          "<?php echo $cat->category_name;?>" 
                        <?php $j++; } ?>
                      </td>
                      <td width="10%">
                        <div>
                          <a class="btn btn-primary" href="<?php echo site_url("admin/product/product_detail?id=".$row->medicine_id."")?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
                          <a class="btn btn-warning" href="<?php echo site_url("admin/product/product_edit?id=".$row->medicine_id."")?>"><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                        </div>
                      </td>
                    </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
              <div class="float-right pt-3">
                <a class="btn btn-primary" href="<?php echo site_url("admin/product/product_add")?>"><i class='fa fa-plus-circle'></i> Tambah</a>
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

