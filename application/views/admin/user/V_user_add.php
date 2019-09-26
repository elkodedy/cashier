   <?php echo validation_errors(); ?>
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
            Tambah Pengguna
          </div>
          <div class="card-body row">
            <div class="col-1"></div>
            <div class="col-10">
              <form action="<?php echo base_url('admin/user/user_insert'); ?>" method="post">
                <div class="form-group">
                    <div class="form-group">
                      <h4>Data Diri Pengguna</h4> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="registration_id">Nomor Registrasi</label>
                      <input type="text" id="registration_id" name="registration_id" class="form-control" placeholder="Masukkan Nomor Registrasi" value="<?php echo ('RI'.time().rand(10,99)) ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" value="<?php echo set_value('name'); ?>">
                    </div>                                                
                    <span class='text-danger'><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="ktp_number">Nomor KTP</label>
                      <input type="text" name="ktp_number" id="ktp_number" class="form-control" placeholder="Nomor KTP" value="<?php echo set_value('ktp_number'); ?>">
                    </div>                                                
                    <span class='text-danger'><?php echo form_error('ktp_number'); ?></span>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Masukkan No Telepon" value="<?php echo set_value('phone'); ?>">
                            <span class='text-danger'><?php echo form_error('phone'); ?></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="created_on">Terdaftar Pada</label>
                            <input type="date" id="created_on" name="created_on" class="form-control" placeholder="Masukkan Terdaftar Pada" readonly  value="<?php echo date("Y-m-d", time()) ?>">
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="status">Status</label>
                            <label>Grup</label><br>
                            <div class="form-group  pt-3">
                              <input name="status" type="radio" class="radio" value="Aktif" required>
                              <label for="status" class="radio-inline">Aktif</label>
                              <input name="status" type="radio" class="radio ml-3" value="Non-aktif" required>
                              <label for="status" class="radio-inline">Non-aktif</label>
                            </div>
                            <!-- <select name="status" id="status" class="form-control" >
                              <option value="aktif">Aktif</option>
                              <option value="non-aktif">Non-aktif</option>
                            </select> -->
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label >Grup</label><br>
                            <div class="form-group pt-3">
                              <input name="group" type="radio" class="radio" value="1" required>
                              <label for="group" class="radio-inline">Admin</label>
                              <input name="group" type="radio" class="radio ml-3" value="2" required>
                              <label for="group" class="radio-inline">Kasir</label>
                            </div>
                            <!-- <select name="group" id="group" class="form-control" >
                              <option value="1">Admin</option>
                              <option value="2">Kasir</option>
                            </select> -->
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="address" >Alamat</label>
                      <textarea type="text" id="address" name="address" class="form-control" placeholder="Masukkan Alamat" value=""><?php echo set_value('address'); ?></textarea>
                      <span class='text-danger'><?php echo form_error('address'); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <hr>
                      <h4>Akun Pengguna</h4> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="username" id="username" name="username" class="form-control" placeholder="Masukkan Username" value="<?php echo set_value('username'); ?>">
                      <span class='text-danger'><?php echo form_error('username'); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password Baru" >
                            <span class='text-danger'><?php echo form_error('password'); ?></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="confirmnewpassword">Konfirmasi Password Baru</label>
                            <input type="password" id="confirmnewpassword" name="confirmnewpassword" class="form-control" placeholder="Konfirmasi Password Baru" >
                            <span class='text-danger'><?php echo form_error('confirmnewpassword'); ?></span>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-group float-lg-right">
                    <button class="btn btn-secondary" type="reset" onclick="window.location.href='<?php echo base_url('admin/user');?>'"><i class="fa fa-caret-left"></i> Batal</button>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus-circle"></i> Tambah</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Data pengguna siap digunakan setelah pendaftaran selesai</div>
        </div>
