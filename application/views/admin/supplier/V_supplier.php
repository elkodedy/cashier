        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Supplier</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Supplier
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Id</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Id</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <?php $i=1; foreach($supplier as $row){ ?>
                  <tbody>
                      <tr>
                        <!-- <td width="5%"><?php //echo $i?></td> -->
                        <td><?php echo $row->supplier_id;?></td>
                        <td><?php echo $row->supplier_name;?></td>
                        <td><?php echo $row->phone;?></td>
                        <td><?php echo $row->address;?></td>
                        <td width="10%">
                          <div>
                            <a class="btn btn-primary" href="" data-toggle="modal" data-target="#logoutModal<?php echo $row->supplier_id;?>"><abbr title='Detail'><i class='fa fa-info-circle'></i></abbr></a>
                            <a class="btn btn-warning" href="" data-toggle="modal" data-target="#logoutEditModal<?php echo $row->supplier_id;?>"><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                          </div>
                        </td>
                      </tr>
                  </tbody>

                  <!-- Detail Modal-->
                  <?php echo form_open_multipart('admin/patient/insert'); ?>
                    <div class="modal fade" id="logoutModal<?php echo $row->supplier_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Supplier</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <?php echo $row->supplier_name;?><br>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="email" id="id" class="form-control" placeholder="Id Supplier" disabled value="<?php echo $row->supplier_id ?>">
                                <label for="id">Id Supplier</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="text" id="name" class="form-control" placeholder="Nama Supplier" disabled value="<?php echo $row->supplier_name ?>">
                                <label for="name">Nama Supplier</label>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                  <input type="text" id="phone" class="form-control" placeholder="No Telepon" disabled value="<?php echo $row->phone ?>">
                                  <label for="phone">No Telepon</label>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input rows="4" type="text" id="address" class="form-control" placeholder="Alamat" disabled value="<?php echo $row->address ?>">
                                <label for="address">Alamat</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea rows="4" type="text" id="description" class="form-control" placeholder="Deskripsi" disabled value="<?php echo $row->description ?>"><?php echo $row->description ?></textarea>
                                <!-- <input type="text" id="description" class="form-control" placeholder="Deskripsi" disabled value="<?php //echo $row->description ?>"> -->
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a class="btn btn-primary" href="<?php echo site_url('/admin/supplier')?>"><i class="fa fa-caret-left"></i> Kembali</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php echo form_close(); ?>
                  <!-- Edit Modal-->
                  <?php echo form_open_multipart('admin/patient/insert'); ?>
                    <div class="modal fade" id="logoutEditModal<?php echo $row->supplier_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Supplier</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <?php echo $row->supplier_name;?><br>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="email" id="id" class="form-control" placeholder="Id Supplier" required value="<?php echo $row->supplier_id ?>">
                                <label for="id">Id Supplier</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="text" id="name" class="form-control" placeholder="Nama Supplier" required value="<?php echo $row->supplier_name ?>">
                                <label for="name">Nama Supplier</label>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                  <input type="text" id="phone" class="form-control" placeholder="No Telepon" required value="<?php echo $row->phone ?>">
                                  <label for="phone">No Telepon</label>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input rows="4" type="text" id="address" class="form-control" placeholder="Alamat" required value="<?php echo $row->address ?>">
                                <label for="address">Alamat</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea rows="4" type="text" id="description" class="form-control" placeholder="Deskripsi" required value="<?php echo $row->description ?>"><?php echo $row->description ?></textarea>
                                <!-- <input type="text" id="description" class="form-control" placeholder="Deskripsi" disabled value="<?php //echo $row->description ?>"> -->
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a class="btn btn-secondary" href="<?php echo site_url('/admin/supplier')?>"><i class="fa fa-caret-left"></i> Kembali</a>
                            <a class="btn btn-primary" href="<?php echo site_url('/admin/supplier')?>"><i class="fa fa-save"></i> Simpan</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php echo form_close(); ?>
                <?php $i++; } ?>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        