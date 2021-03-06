        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Stok Obat</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-12 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-warehouse"></i>
                </div>
                <div class="display-3 font-weight-bold">
                <?php $i=1; foreach($stockk as $row){} ?>
                  <?php echo $row->stock ?>
                </div>
                <div class="mr-5">Stok Produk</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('/admin/stock')?>"></a>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Stok Obat
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Code Produk</th>
                    <th>Nama Obat</th>
                    <th>Stok Gudang</th>
                    <th>Terjual</th>
                    <th>Kadaluarsa/Rusak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Code Produk</th>
                    <th>Nama Produk</th>
                    <th>Stok Gudang</th>
                    <th>Terjual</th>
                    <th>Kadaluarsa/Rusak</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1; foreach($stock as $row){ ?>
                    <tr>
                      <!-- <td width="5%"><?php //echo $i?></td> -->
                      <td><?php echo $row->medicine_code;?></td>
                      <td><?php echo $row->medicine_name;?></td>
                      <td><?php echo $row->stock;?></td>
                      <td><?php echo $row->sold;?></td>
                      <td><?php echo $row->expired;?></td>
                      <td width="10%">
                        <div>
                          <a class="btn btn-primary" href="<?php echo site_url("admin/stock/stock_detail?id=".$row->medicine_id."")?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
                          <a class="btn btn-warning" href="<?php echo site_url("admin/stock/stock_edit?id=".$row->medicine_id."")?>"><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                        </div>
                      </td>
                    </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        