
        <!-- baris 2 -->
        <div class="row justify-content-center">
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="display-4 font-weight-bold">
                  <span class="small">Rp. </span><?php $i=1; foreach($sum_purchase_transaction as $row_p){} ?>
                    <?php echo number_format($row_p->total_price) ?>
                </div>
                <div class="mr-5">Total Pembelian (Modal)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('/admin/purchase/purchase_history')?>">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <!-- <div class="col-1"></div> -->
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-money-bill-wave"></i>
                </div>
                <div class="display-4 font-weight-bold">
                  <span class="small">Rp. </span><?php $i=1; foreach($sum_selling_transaction as $row_s){} ?>
                    <?php echo number_format($row_s->total_price) ?>
                </div>
                <div class="mr-5">Total Penjualan (Omset)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('/admin/selling')?>">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-history"></i>
                </div>
                <div class="display-4 font-weight-bold">
                  <span class="small">Rp. </span>
                  <?php echo number_format($row_s->total_price - $row_p->total_price) ?>
                </div>
                <div class="mr-5">Untung Bersih (Profit)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('/admin/purchase')?>">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>