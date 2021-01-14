        <style>
          /*the container must be positioned relative:*/
          .autocomplete {
            position: relative;
            /* display: inline-block; */
          }
          .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
          }

          .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff; 
            border-bottom: 1px solid #d4d4d4; 
          }

          /*when hovering an item:*/
          .autocomplete-items div:hover {
            background-color: #e9e9e9; 
          }

          /*when navigating through the items using the arrow keys:*/
          .autocomplete-active {
            background-color: DodgerBlue !important; 
            color: #ffffff; 
          }
        </style>
        
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Pembelian</li>
        </ol>

        <!-- Ubah Pengguna -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Pembelian Produk
          </div>
          <div class="card-body row">
            <div class=""></div>
            <div class="col-12">
              <form action="<?php echo base_url('admin/purchase/purchase'); ?>" method="post">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="`purchase_transaction_number">Nomor Transaksi</label>
                        <input autocomplete="off" type="text" name="purchase_transaction_number" class="form-control" placeholder="Masukan Nomor Transaksi" value="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-grou">
                        <label for="supplier_id">Supplier</label>
                        <select name="supplier_id" id="supplier_id" class="form-control">
                          <option value="" disabled selected>--Pilih Supplier--</option>
                          <?php $i=1; foreach($supplier as $row){ ?>
                            <option value="<?php echo $row->supplier_id ?>"><?php echo $row->supplier_name ?></option>
                          <?php $i++; } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="date">Tanggal Pembelian</label>
                        <?php date_default_timezone_set("Asia/Makassar"); ?>
                        <input autocomplete="off" type="datetime-local" name="date" class="form-control" placeholder="Masukkan Tanggal" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <hr>
                </div>
                <div class="table-responsive">
                  <table class="table table-borderless" id="tarnsaction-table" width="100%">
                    <thead>
                      <tr>
                        <!-- <th>No</th> -->
                        <th width="">No</th>
                        <th width="25%">Kode Produk</th>
                        <th width="30%">Nama Produk</th>
                        <th width="">Harga (Rp)</th>
                        <th width="">Jumlah</th>
                        <th width="">Sub Total (Rp)</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr class="border-top">
                        <th colspan="2"><button class="btn btn-primary" id="add_list" type="button"><i class='fa fa-plus-circle' onclick="addCart()"></i> Tambah Produk</button></th>
                        <th colspan="1" class="" style="text-align: right; font-size: 30px;">Total : </th>
                        <th colspan="2">
                          <input autocomplete="off" type="number" name="" class="form-control" style="text-align: right; font-size: 30px;" readonly placeholder="" value="">
                        </th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody class="purchase-cart" id="purchase-cart">
                      <tr class='cart-row'>
                        <td>
                          <span class="cart-num">1.</span>
                        </td>
                        <td class="autocomplete myInput cart cart-medicine_code">
                          <input autocomplete="off" type="text" name="medicine_code[]" width="100%" class="form-control auto-input" placeholder="Masukkan Kode/Nama Produk" value="" required onkeyup="add_row_list($(this).parent().parent().index())">
                        </td>
                        <td class="autocomplete myInput cart cart-medicine_name">
                          <input autocomplete="off" type="text" name="medicine_name[]" class="form-control medicine-name" placeholder="" value="" readonly>
                        </td>
                        <td class="cart cart-single_purchase_price">
                          <input autocomplete="off" type="number" name="single_purchase_price[]" class="form-control" placeholder="" value="">
                        </td>
                        <td class="cart cart-purchase_amount">
                          <input autocomplete="off" type="number" name="purchase_amount[]" class="form-control" placeholder="" value="">
                        </td>
                        <td class="cart cart-price">
                          <input autocomplete="off" type="number" name="price[]" class="form-control" placeholder="" value="" readonly>
                        </td>
                        <td class="cart cart-button">
                          <button class="btn btn-danger" type="button" onclick="delete_cart($(this).parent().parent().index())"><abbr title="Hapus"><i class="fa fa-trash"></i></abbr></button>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <hr>
                </div>
                <div class="form-group">
                  <span class="float-lg-right">
                    <button class="btn btn-secondary" type="reset" onclick="window.location.href='<?php echo base_url('admin/purchase');?>'"><i class="fa fa-caret-left"></i> Batal</button>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-money-bill-wave"></i> Beli</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Data pengguna siap digunakan setelah pendaftaran selesai</div>
        </div>

        <script src="<?php echo base_url('assets/jquery/jquery.js') ?>"></script>
        <script>
          var medicine_code = [<?php $i=1; foreach($medicine_list as $row){echo ('"'.$row->medicine_code.'",');} ?>];
          var medicine_name = [<?php $i=1; foreach($medicine_list as $row){echo ('"'.$row->medicine_name.'",');} ?>];
         
          function add_row_list(i){
            console.log(i);
            m_code = $('.auto-input')[i].value;
            $('.medicine-name')[i].value = m_code;
          }
        </script>
        <!-- --------------------------------------------------------------------- -->
        <script src="<?php echo base_url('assets/js/myjs.js') ?>"></script>