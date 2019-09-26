        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Riwayat Pembelian</li>
        </ol>

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
                  <?php $i=1; foreach($purchase_histori as $row){ ?>
                    <tr>
                      <!-- <td width="5%"><?php echo $i?></td> -->
                      <td><?php echo $row->purchase_transaction_number;?></td>
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->supplier_name;?></td>
                      <td><?php echo date("Y-m-d",$row->date)?></td>
                      <td><?php echo $row->total_price;?></td>
                      <td>
                        <div width="10%">
                          <a class="btn btn-primary" href="<?php echo site_url("admin/purchase_histori/purchase_histori_detail?id=".$row->purchase_transaction_id."")?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
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

        