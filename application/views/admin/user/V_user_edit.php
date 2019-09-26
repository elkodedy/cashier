        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Pengguna</li>
        </ol>

        <!-- Ubah Pengguna -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Ubah Pengguna
          </div>
          <div class="card-body row">
            <div class="col-1"></div>
            <div class="col-10">
              <form action="<?php echo base_url('admin/user/user_update'); ?>" method="post">
                <?php foreach($userid as $row){}?>
                <div class="form-group">
                    <div class="form-group">
                      <!-- <label for="user_id">Id Pengguna</label> -->
                      <input type="hidden" id="user_id" name="user_id" class="form-control" placeholder="Masukkan Id Pengguna" value="<?php echo $row->user_id ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="registration_id">Nomor Registrasi</label>
                      <input type="text" id="user_id" name="registration_id" class="form-control" placeholder="Masukkan Id Pengguna" value="<?php echo $row->registration_id ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" required value="<?php echo $row->name ?>">
                    </div>                                                
                    <span class='text-danger'><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Masukkan No Telepon" required value="<?php echo $row->phone ?>">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="created_on">Terdaftar Pada</label>
                            <input type="date" id="created_on" name="created_on" class="form-control" placeholder="Masukkan Terdaftar Pada" readonly required value="<?php echo date("Y-m-d",$row->created_on) ?>">
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                              <option value="Aktif" <?php if($row->status == 'Aktif') echo 'selected' ?>>Aktif</option>
                              <option value="Non-aktif" <?php if($row->status == 'Non-aktif') echo 'selected' ?>>Non-aktif</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="group">Grup</label><br>
                            <!-- <label for="status" class="radio-inline mycheckbox">
                              <input class="" name="status" <?php //if($row->user_id == 'admin') echo 'selected' ?> type="radio">
                              <span class="mycheckmark"></span>
                              Admin  
                            </label>
                            <label for="status" class="radio-inline mycheckbox">
                              <input name="status" <?php //if($row->user_id == 'kasir') echo 'selected' ?> type="radio">
                              <span class="mycheckmark"></span>
                              Kasir
                            </label> -->
                            <select name="group" id="group" class="form-control" required>
                              <option value="1" <?php if($row->group_name == "Admin") echo "selected" ?>>Admin</option>
                              <option value="2" <?php if($row->group_name == "Kasir") echo "selected" ?>>Kasir</option>
                            </select>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                    <label for="address" >Alamat</label>
                    <textarea type="text" id="address" name="address" class="form-control" placeholder="Masukkan Alamat" required value="<?php echo $row->address ?>"><?php echo $row->address ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal<?php echo $row->user_id;?>"><i class="fa fa-trash"></i> Hapus Akun</button>
                    <span class="float-lg-right">
                      <button class="btn btn-secondary" type="reset" onclick="window.location.href='<?php echo base_url('admin/user');?>'"><i class="fa fa-caret-left"></i> Batal</button>
                      <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                    </span>
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
            Ubah Username dan Password
          </div>
          <div class="card-body row">
            <div class="col-1"></div>
            <div class="col-10">
              <form action="<?php echo base_url('admin/user/user_password_update'); ?>" method="post">
                <div class="form-group">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="hidden" id="user_id" name="user_id" class="form-control" placeholder="Masukkan Id Pengguna" value="<?php echo $row->user_id ?>" readonly>
                      <input type="username" id="username" name="username" class="form-control" placeholder="Masukkan Username" value="<?php echo $row->username ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password Baru">
                            <span class='text-danger'><?php echo form_error('password'); ?></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="confirmnewpassword">Konfirmasi Password Baru</label>
                            <input type="password" id="confirmnewpassword" name="confirmnewpassword" class="form-control" placeholder="Konfirmasi Password Baru">
                            <span class='text-danger'><?php echo form_error('confirmnewpassword'); ?></span>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-group float-lg-right">
                    <button class="btn btn-secondary" type="reset" onclick="window.location.href='<?php echo base_url('admin/user');?>'"><i class="fa fa-caret-left"></i> Batal</button>
                    <button class="btn btn-primary" href="" type="submit"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Terakhir di ubah pada <?php echo date("Y-m-d", $row->last_update) ?></div>
        </div>

        <!-- Delete Modal -->
        <form action="<?php echo base_url('admin/user/user_delete'); ?>" method="post">
          <div class="modal fade" id="deleteModal<?php echo $row->user_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Menghapus <?php echo $row->name ?> ?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <input type="hidden" id="user_id" name="user_id" class="form-control" placeholder="Masukkan Id Pengguna" value="<?php echo $row->user_id ?>" readonly>
                <div class="modal-body">Pilih "Hapus" untuk menghapus !</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-caret-left"></i> Batal</button>
                  <button class="btn btn-danger" href="" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </form>