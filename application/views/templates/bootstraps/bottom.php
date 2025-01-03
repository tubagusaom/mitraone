
      
      <footer class="section footer-classic bg-terabytee">
        <div class="container">
          <div class="row row-15">
            <div class="col-sm-12">
              <p class="rights">
                <span>MitraOne TV</span>
                <!-- <span>&nbsp;</span> -->
                <span>&copy;</span>
                <span class="copyright-year"></span>
                <!-- <span>&nbsp;</span> -->
                <!-- <span>&nbsp;-&nbsp;</span>
                <span>Design by <a href="https://www.terabytee.my.id/" target="_blank">terabytee</a></span> -->
                <!-- <a href="https://www.terabytee.my.id/">terabytee</a> -->
                <span style="float: right;">Design by <a href="https://www.terabytee.my.id/" target="_blank">terabytee</a></span>
              </p>
            </div>

            <!-- <div class="col-sm-4">
              <div class="footer-contact">
                <span>&nbsp;-&nbsp;</span>
                <span>Design by <a href="https://www.terabytee.my.id/" target="_blank">terabytee</a></span>
              </div>
            </div> -->
        </div>
      </footer>
    </div>

    <!-- Theme Custom -->
    <script src="<?= base_url() ?>assets_tv/js/core.min.js"></script>
    <script src="<?= base_url() ?>assets_tv/js/script.js"></script>

    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets_tv/js/videojs-contrib-hls.js"></script> -->
    <script src="<?php echo base_url() ?>assets_tv/js/video.min.js"></script>
    <script src="<?php echo base_url() ?>assets_tv/js/tera..01.min.js"></script>

  </body>

  <script>

owl = $(".owl-carousel");
  owl.owlCarousel({
      loop:true,
      nav:false,
      autoplay:true,
      // autoplaySpeed:1000,
      autoplayTimeout: 3000,
      autoplaySpeed: 400,
      navSpeed: 400,
      dots:false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:3
        },
        1200:{
          items:3
        }
      }
  });

    // var player_1 = videojs("hls-example-1");
    // player_1.play();

  </script>


</html>