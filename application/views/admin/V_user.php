        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Pengguna</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Pengguna
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Grup</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Grup</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1; foreach($user as $row){ ?>
                    <tr>
                      <td width="5%"><?php echo $i?></td>
                      <td><?php echo $row->user_id;?></td>
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->phone;?></td>
                      <td><?php echo $row->group_name;?></td>
                      <td><?php echo $row->status;?></td>
                      <td width="10%">
                        <div>
                          <a class="btn btn-primary" href=""><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
                          <a class="btn btn-warning" href=""><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                        </div>
                      </td>
                    </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
              <div class="float-right pt-3">
                <a class="btn btn-primary" href=""><i class='fa fa-plus-circle'></i> Tambah</a>
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        