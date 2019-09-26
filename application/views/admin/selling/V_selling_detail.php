        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Riwayat Penjualan</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Riwayat Penjualan
          </div>
          <div class="card-body">
            <table class="table table-borderless">
							<tr>
								<td><span>Nomor Transaksi : </span></td>
								<td><span>Nama Admin : </span></td>
								<td><span>Tanggal : </span></td>
							</tr>
							<tr>
								<td><h4 class="ml-3 border-bottom">TSX12423121</h4></td>
								<td><h4 class="ml-3 border-bottom">Sarah Jelek</h4></td>
								<td><h4 class="ml-3 border-bottom">20/12/2099</h4></td>
							</tr>
            </table>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Jual</th>
                    <th>Harga Jual (Rp)</th>
                    <!-- <th>Aksi</th> -->
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th colspan="4">Total Harga (Rp)</th>
                    <th colspan="1">50000,..</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1; foreach($sellingid as $row){ ?>
                    <tr>
                      <td width="5%"><?php echo $i?></td>
                      <td><?php echo $row->medicine_code;?></td>
                      <td><?php echo $row->medicine_name;?></td>
                      <td><?php echo $row->selling_amount?></td>
                      <td><?php echo $row->price;?></td>
                    </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        