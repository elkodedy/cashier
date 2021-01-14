        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Pengguna</li>
        </ol>

        <!-- baris 2 -->
        <div class="row">
          <div class="col-lg-12 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i>
                </div>
                <div class="display-4 font-weight-bold">
                    <?php echo $users ?>
                </div>
                <div class="mr-5">Pengguna</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#"></a>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
              <!-- <div class="card-body-icon">
                <i class="fas fa-fw fa-user"></i>
              </div>
              <div class="display-4 font-weight-bold pb-3">
                <i class="fas fa-table"></i>
                Pengguna
              </div> -->
            <i class="fas fa-table"></i>
            Pengguna
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- <th>No</!-->
                    <th>Nomor Registrasi</th>
                    <th>Nama</th>
                    <th>Grup</th>
                    <th>No. Telp</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Nomor Registrasi</th>
                    <th>Nama</th>
                    <th>Grup</th>
                    <th>No. Telp</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1; foreach($user as $row){ ?>
                    <tr>
                      <!-- <td width="5%"><?php// echo $i?></td> -->
                      <td><?php echo $row->registration_id;?></td>
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->group_name;?></td>
                      <td><?php echo $row->phone;?></td>
                      <td><?php echo $row->status;?></td>
                      <td width="10%">
                        <div>
                          <a class="btn btn-primary" href="<?php echo site_url("admin/user/user_detail?id=".$row->user_id."")?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
                          <a class="btn btn-warning" href="<?php echo site_url("admin/user/user_edit?id=".$row->user_id."")?>"><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                        </div>
                      </td>
                    </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
              <div class="float-right pt-3">
                <a class="btn btn-primary" href="<?php echo site_url("admin/user/user_add")?>"><i class='fa fa-plus-circle'></i> Tambah</a>
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        