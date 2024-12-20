<style media="screen">
  .tdn {
    text-decoration: none !important;
    font-family: "Open Sans", Arial, sans-serif;
    font-weight: bold !important;
  }
</style>

<div class="header-container container">
  <div class="header-row">
    <div class="header-column">
      <div class="header-logo">
        <a href="<?= base_url() ?>">
          <img alt="Porto" width="76" height="56" src="<?= base_url() ?>assets/img/logo_transparent.png">
        </a>
      </div>
    </div>
    <div class="header-column">
      <div class="row">
        <div class="cart-area">

          <div class="custom-block">
            <!-- <i class="fa fa-phone"></i> -->
            <span class="a-tb-wa">
              <i class="fa fa-whatsapp" style="font-size:14px;">
                <a class="tdn" href="https://api.whatsapp.com/send?phone=6287814091972&text=Hai%20Homemin ,%20tolong%20bantu%20saya :)" target="_blank" title="WA">
                  <font style="color:#1c2a5f;">+62 878-1409-1972</font>
                </a>
              </i>
            </span>

            <span class="split"></span>

            <!-- <span>
              <i class="fa fa-whatsapp">
                <a class="a-tb-wa" href="https://api.whatsapp.com/send?phone=6281113801802&text=Hai%20Homemin ,%20tolong%20bantu%20saya :)" target="_blank" title="WA">+62811 1380 1802</a>
              </i>
            </span> -->

            <span class="a-tb-wa">
              <i class="fa fa-whatsapp" style="font-size:14px;">
                <a class="tdn" href="https://api.whatsapp.com/send?phone=6281230222470&text=Hai%20Homemin ,%20tolong%20bantu%20saya :)" target="_blank" title="WA">
                  <font style="color:#1c2a5f;"> +62 812-3022-2470</font>
                </a>
              </i>
              <span>

                <span class="split"></span>

                <a class="tdn" href="https://www.homedepo.co.id/about/" target="_blank">
                  <font style="color:#1c2a5f;"> TENTANG KAMI </font>
                </a>
          </div>

          <?php if (isset($nama_user)) { ?>

            <!-- <div class="cart-dropdown">
              <a href="#" class="cart-dropdown-icon">
                <i class="fa fa-user-circle-o"></i>
                <span class="cart-info" style="top:45%;">
                </span>
              </a>

              <div class="cart-dropdownmenu right">
                <div class="dropdownmenu-wrapper">
                  <div class="cart-totals" style="text-align:left;">
                    <span>
                      <a href="<?= base_url() ?>buyer"><i class="fa fa-user"></i> Saya</a>
                    </span>
                  </div>
                  <div class="cart-totals" style="text-align:left;">
                    <span>
                      <a href="<?= base_url() ?>users/logout"><i class="fa fa-sign-out"></i> Keluar</a>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->



            <div class="cart-dropdown">
              <a href="<?= base_url() ?>buyer/keranjang" class="cart-dropdown-icon">
                <i class="minicart-icon" style="color:#1c2a5f"></i>
                <span class="cart-info" style="top:45%;">
                  <span class="cart-qty" style="color:#fff;">
                    <?= $total_keranjang ?>
                  </span>
                  <!-- <span class="cart-text">item(s)</span> -->
                </span>
              </a>

              <!-- <div class="cart-dropdownmenu right">
              <div class="dropdownmenu-wrapper">
                <div class="cart-totals">
                  Lihat <span>Keranjang</span>
                </div>
              </div>
            </div> -->

            </div>



          <?php } else { ?>

            <!-- <div class="cart-dropdown">
            <a href="#" class="cart-dropdown-icon" id="login-btn" data-toggle="modal" data-target="#myModal" title="Login / Masuk">
              <i class="fa fa-sign-in"></i>
              <span class="cart-info" style="top:45%;font-size:12px;">
              </span>
            </a>
          </div> -->

            <div class="cart-dropdown">
              <a href="#" id="login-btn" data-toggle="modal" data-target="#myModal" class="cart-dropdown-icon">
                <i class="minicart-icon" style="color:#1c2a5f"></i>
                <span class="cart-info" style="top:45%;">
                  <span class="cart-qty" style="color:#fff;">
                    0
                  </span>
                  <!-- <span class="cart-text">item(s)</span> -->
                </span>
              </a>

              <!-- <div class="cart-dropdownmenu right">
              <div class="dropdownmenu-wrapper">
                <div class="cart-totals">
                  Lihat <span>Keranjang</span>
                </div>
              </div>
            </div> -->

            </div>

          <?php } ?>

          <!-- <div class="cart-dropdown">
            <a href="#" class="cart-dropdown-icon">
              <i class="minicart-icon"></i>
              <span class="cart-info">
                <span class="cart-qty">2</span>
                <span class="cart-text">item(s)</span>
              </span>
            </a>

            <div class="cart-dropdownmenu right">
              <div class="dropdownmenu-wrapper">
                <div class="cart-products">
                  <div class="product product-sm">
                    <a href="#" class="btn-remove" title="Remove Product">
                      <i class="fa fa-times"></i>
                    </a>
                    <figure class="product-image-area">
                      <a href="demo-shop-8-product-details.html" title="Product Name" class="product-image">
                        <img src="<?= base_url() ?>assets/img/demos/products/thumbs/cart-product1.jpg" alt="Product Name">
                      </a>
                    </figure>
                    <div class="product-details-area">
                      <h2 class="product-name"><a href="demo-shop-8-product-details.html" title="Product Name">Blue Women Top</a></h2>

                      <div class="cart-qty-price">
                        1 X
                        <span class="product-price">$65.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="product product-sm">
                    <a href="#" class="btn-remove" title="Remove Product">
                      <i class="fa fa-times"></i>
                    </a>
                    <figure class="product-image-area">
                      <a href="demo-shop-8-product-details.html" title="Product Name" class="product-image">
                        <img src="<?= base_url() ?>assets/img/demos/products/thumbs/cart-product1.jpg" alt="Product Name">
                      </a>
                    </figure>
                    <div class="product-details-area">
                      <h2 class="product-name"><a href="demo-shop-8-product-details.html" title="Product Name">Blue Women Top</a></h2>

                      <div class="cart-qty-price">
                        1 X
                        <span class="product-price">$65.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="product product-sm">
                    <a href="#" class="btn-remove" title="Remove Product">
                      <i class="fa fa-times"></i>
                    </a>
                    <figure class="product-image-area">
                      <a href="demo-shop-8-product-details.html" title="Product Name" class="product-image">
                        <img src="<?= base_url() ?>assets/img/demos/products/thumbs/cart-product1.jpg" alt="Product Name">
                      </a>
                    </figure>
                    <div class="product-details-area">
                      <h2 class="product-name"><a href="demo-shop-8-product-details.html" title="Product Name">Blue Women Top</a></h2>

                      <div class="cart-qty-price">
                        1 X
                        <span class="product-price">$65.00</span>
                      </div>
                    </div>
                  </div>

                  <div class="product product-sm">
                    <a href="#" class="btn-remove" title="Remove Product">
                      <i class="fa fa-times"></i>
                    </a>
                    <figure class="product-image-area">
                      <a href="demo-shop-8-product-details.html" title="Product Name" class="product-image">
                        <img src="<?= base_url() ?>assets/img/demos/products/thumbs/cart-product2.jpg" alt="Product Name">
                      </a>
                    </figure>
                    <div class="product-details-area">
                      <h2 class="product-name"><a href="demo-shop-8-product-details.html" title="Product Name">Black Utility Top</a></h2>

                      <div class="cart-qty-price">
                        1 X
                        <span class="product-price">$39.00</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="cart-totals">
                  Total: <span>$104.00</span>
                </div>

                <div class="cart-actions">
                  <a href="demo-shop-8-cart.html" class="btn btn-primary">View Cart</a>
                  <a href="demo-shop-8-checkout.html" class="btn btn-primary">Checkout</a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

        <!-- <div class="header-search">
          <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
          <form action="<?= base_url() ?>search/show/" method="GET">

            <div class="header-search-wrapper">

              <input type="text" class="form-control" name="q" id="Qword" placeholder="Cari..." required>
              <input type="hidden" name="rftb" value="true">

              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>

            </div>

          </form>
        </div> -->

        <!-- <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
          <i class="fa fa-bars"></i>
        </a> -->
      </div>
    </div>
  </div>
</div>