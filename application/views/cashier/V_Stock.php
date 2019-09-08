        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Kasir</a>
          </li>
          <li class="breadcrumb-item active">Stok Obat</li>
        </ol>

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
                    <th>Id Obat</th>
                    <th>Nama Obat</th>
                    <th>Harga Pokok</th>
                    <th>Harga Jual</th>
                    <th>Stok Gudang</th>
                    <th>Terjual</th>
                    <th>Kadaluarsa/Rusak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id Obat</th>
                    <th>Nama Obat</th>
                    <th>Harga Pokok</th>
                    <th>Harga Jual</th>
                    <th>Stok Gudang</th>
                    <th>Terjual</th>
                    <th>Kadaluarsa/Rusak</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                    $data = $this->M_stock->displayrecords();
                    $i=1;
                    foreach($data as $row){
                      echo "<tr>";
                        echo "<td>".$row->medicine_id."</td>";
                        echo "<td>".$row->medicine_name."</td>";
                        echo "<td>Rp. ".$row->single_purchase_price."</td>";
                        echo "<td>Rp. ".$row->single_selling_price."</td>";
                        echo "<td>".$row->stock."</td>";
                        echo "<td>".$row->sold."</td>";
                        echo "<td>".$row->expired."</td>";
                        echo "<td>
                                <div>
                                  <a class=\"btn btn-primary\" href=".">Detail</a>
                                  <a class=\"btn btn-warning\" href=".">Edit</a>
                                  <a class=\"btn btn-danger\" href=".">Hapus</a>
                                </div>
                              </td>";
                      echo "</tr>";
                      $i++;
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        