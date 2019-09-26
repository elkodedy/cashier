        <!-- Breadcrumbs--> 
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Pengguna</li>
        </ol>

        <!-- Detail Pengguna -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Detail Pengguna
          </div>
          <div class="card-body row">
            <?php foreach($userid as $row){}?>
            <div class="col-1"></div>
            <div class="col-10">
              <form>
                <div class="form-group">
                    <div class="form-group">
                      <label for="registration_id">Nomor Registrasi</label>
                      <input type="text" id="user_id" name="registration_id" class="form-control" placeholder="Masukkan Id Pengguna" value="<?php echo $row->registration_id ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="name" id="id" class="form-control" placeholder="Nama" disabled value="<?php echo $row->name ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input type="text" id="phone" class="form-control" placeholder="No Telepon" disabled value="<?php echo $row->phone ?>">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="created_on">Terdaftar Pada</label>
                            <input type="date" id="created_on" class="form-control" placeholder="Terdaftar Pada" disabled value="<?php echo date("Y-m-d",$row->created_on) ?>">
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" disabled>
                              <option value="aktif" <?php if($row->status == 'Aktif') echo 'selected' ?>>Aktif</option>
                              <option value="non-aktif" <?php if($row->status == 'Non-aktif') echo 'selected' ?>>Non-aktif</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="group">Grup</label>
                            <select name="group" id="group" class="form-control" disabled>
                              <option value="admin" <?php if($row->group_name == 'Admin') echo 'selected' ?>>Admin</option>
                              <option value="kasir" <?php if($row->group_name == 'Kasir') echo 'selected' ?>>Kasir</option>
                            </select>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="address" >Alamat</label>
                      <textarea type="text" id="address" class="form-control" placeholder="Alamat" disabled value="<?php echo $row->address ?>"><?php echo $row->address ?></textarea>
                    </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Terakhir di ubah pada <?php echo date("Y-m-d", $row->last_update) ?></div>
        </div>

        <!-- password -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Username
          </div>
          <div class="card-body row">
            <div class="col-1"></div>
            <div class="col-10">
              <form>
                <div class="form-group">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="username" id="username" class="form-control" placeholder="Username" disabled value="<?php echo $row->username ?>">
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-group float-lg-right">
                    <a class="btn btn-primary" href="<?php echo site_url('/admin/user')?>"><i class="fa fa-caret-left"></i> Kembali</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Terakhir di ubah pada <?php echo date("Y-m-d", $row->last_update) ?></div>
        </div>
        