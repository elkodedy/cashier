     
        
         <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Riwayat Pembelian</li>
        </ol>  

        <!-- baris 2 -->
        <div class="row">
          <div class="col-lg-12 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="display-3 font-weight-bold">
                  <span class="small">Rp. </span><?php $i=1; foreach($sum_purchase_transaction as $row){} ?>
                    <?php echo number_format($row->total_price) ?>
                </div>
                <div class="mr-5">Total Pembelian</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('/admin/purchase/purchase_history')?>"></a>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Riwayat Pembelian
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>No Transaksi</th>
                    <th>Nama Pengguna</th>
                    <th>Supplier</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>No Transaksi</th>
                    <th>Nama Pengguna</th>
                    <th>Supplier</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1; foreach($purchase_history as $row){ ?>
                    <tr>
                      <!-- <td width="5%"><?php echo $i?></td> -->
                      <td><?php echo $row->purchase_transaction_number;?></td>
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->supplier_name;?></td>
                      <td><?php echo date("Y-m-d",$row->date)?></td>
                      <td><?php echo $row->total_price;?></td>
                      <td>
                        <div width="10%">
                          <a class="btn btn-primary" href="<?php echo site_url("admin/purchase/purchase_history_detail?id=".$row->purchase_transaction_id."")?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
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

        