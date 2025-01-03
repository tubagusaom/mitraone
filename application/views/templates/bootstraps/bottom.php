
      
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
    <!-- <script src="<?php echo base_url() ?>assets_tv/js/terabytee.mins.js"></script> -->

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

    $('.nav-link').click(function(){
        var myId = $(this).attr('id');
        var keys = $(this).data('key');

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        // alert(keys);

        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");
          
        // myId.addClass("active");
        // myId.addClass("show");

        $('.column_tb').each(function() {
          var codex     = $(this).data('code');
          var myAnchor  = 'myAnchor-'+codex;

          const array = [codex];
          if ((array.includes(keys))) {
            // alert(`${keys} exists in the array.`);
            videojs("hls-example-" + keys).play();
            videojs("hls-example-" + keys).removeClass('video-bg');
          }
          
          if (!(array.includes(keys))) {
            // alert(`${array} does not exist in the array.`);
            videojs("hls-example-" + array).pause();
            $('#myAnchor-'+array).removeClass("active");
            $('#myAnchor-'+array).removeClass("show");
          }

          // alert(codex);
          
        });

      });
    

      // $('#corner-1').click(function(){

      //   $("#frame-1").attr("src","https://www.youtube.com/embed/xI0N1WUk840?autoplay=1&mute=1");
      //   $("#frame-2").attr("src","");
      //   $("#frame-3").attr("src","");

      //   $('.column_tb').each(function() {
      //     var codex1 = $(this).data('code');
      //     videojs("hls-example-" + codex1).pause();

      //     $('#myAnchor-'+codex1).removeClass("active");
      //     $('#myAnchor-'+codex1).removeClass("show");

      //     $('#tabs-2-'+codex1).removeClass("active");
      //     $('#tabs-2-'+codex1).removeClass("show");
      //   });

      //   $('#tabs-2-5').addClass("active");
      //   $('#tabs-2-5').addClass("show");

      //   $('#tabs-2-6').removeClass("active");
      //   $('#tabs-2-6').removeClass("show");
      //   $('#tabs-2-7').removeClass("active");
      //   $('#tabs-2-7').removeClass("show"); 

      // });

      // $('#corner-2').click(function(){

      //   $("#frame-1").attr("src","");
      //   $("#frame-2").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?autoplay=1&mute=1");
      //   $("#frame-3").attr("src","");

      //   $('.column_tb').each(function() {
      //     var codex2 = $(this).data('code');
      //     videojs("hls-example-" + codex2).pause();

      //     $('#myAnchor-'+codex2).removeClass("active");
      //     $('#myAnchor-'+codex2).removeClass("show");

      //     $('#tabs-2-'+codex2).removeClass("active");
      //     $('#tabs-2-'+codex2).removeClass("show");
      //   });

      //   $('#tabs-2-6').addClass("active");
      //   $('#tabs-2-6').addClass("show");

        
      //   $('#tabs-2-5').removeClass("active");
      //   $('#tabs-2-5').removeClass("show");
      //   $('#tabs-2-7').removeClass("active");
      //   $('#tabs-2-7').removeClass("show"); 

      // });

      // $('#corner-3').click(function(){

      //   $("#frame-1").attr("src","");
      //   $("#frame-2").attr("src","");
      //   $("#frame-3").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?autoplay=1&mute=1");

      //   $('.column_tb').each(function() {
      //     var codex3 = $(this).data('code');
      //     videojs("hls-example-" + codex3).pause();

      //     $('#myAnchor-'+codex3).removeClass("active");
      //     $('#myAnchor-'+codex3).removeClass("show");

      //     $('#tabs-2-'+codex3).removeClass("active");
      //     $('#tabs-2-'+codex3).removeClass("show");
      //   });

      //   $('#tabs-2-7').addClass("active");
      //   $('#tabs-2-7').addClass("show");
        
      //   $('#tabs-2-5').removeClass("active");
      //   $('#tabs-2-5').removeClass("show");
      //   $('#tabs-2-6').removeClass("active");
      //   $('#tabs-2-6').removeClass("show"); 

      // });


    var player1 = videojs("hls-example-1");
    var player2 = videojs("hls-example-2");
    var player3 = videojs("hls-example-3");
    var player4 = videojs("hls-example-4");

    $('#corner-1').click(function(){
        player1.pause();
        player2.pause();
        player3.pause();
        player4.pause();

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","https://www.youtube.com/embed/xI0N1WUk840?autoplay=1&mute=1");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");

        $("#frame-21").attr("src","");
        $("#frame-22").attr("src","");
        $("#frame-23").attr("src","");
        $("#frame-24").attr("src","");

        $('#tabs-2-5').addClass("active");
        $('#tabs-2-5').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
        $('#tabs-2-4').removeClass("active");
        $('#tabs-2-4').removeClass("show");
        $('#tabs-2-6').removeClass("active");
        $('#tabs-2-6').removeClass("show");
        $('#tabs-2-7').removeClass("active");
        $('#tabs-2-7').removeClass("show");
        
        $('#tabs-2-21').removeClass("active");
        $('#tabs-2-21').removeClass("show");
        $('#tabs-2-22').removeClass("active");
        $('#tabs-2-22').removeClass("show");
        $('#tabs-2-23').removeClass("active");
        $('#tabs-2-23').removeClass("show");
        $('#tabs-2-24').removeClass("active");
        $('#tabs-2-24').removeClass("show");
        
        $('#myAnchor-1').removeClass("active");
        $('#myAnchor-1').removeClass("show");
        $('#myAnchor-2').removeClass("active");
        $('#myAnchor-2').removeClass("show");
        $('#myAnchor-3').removeClass("active");
        $('#myAnchor-3').removeClass("show");
        $('#myAnchor-4').removeClass("active");
        $('#myAnchor-4').removeClass("show");
    });

    $('#corner-2').click(function(){
        player1.pause();
        player2.pause();
        player3.pause();
        player4.pause();

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?autoplay=1&mute=1");
        $("#frame-3").attr("src","");

        $("#frame-21").attr("src","");
        $("#frame-22").attr("src","");
        $("#frame-23").attr("src","");
        $("#frame-24").attr("src","");

        $('#tabs-2-6').addClass("active");
        $('#tabs-2-6').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
        $('#tabs-2-4').removeClass("active");
        $('#tabs-2-4').removeClass("show");
        $('#tabs-2-5').removeClass("active");
        $('#tabs-2-5').removeClass("show");
        $('#tabs-2-7').removeClass("active");
        $('#tabs-2-7').removeClass("show");
        
        $('#tabs-2-21').removeClass("active");
        $('#tabs-2-21').removeClass("show");
        $('#tabs-2-22').removeClass("active");
        $('#tabs-2-22').removeClass("show");
        $('#tabs-2-23').removeClass("active");
        $('#tabs-2-23').removeClass("show");
        $('#tabs-2-24').removeClass("active");
        $('#tabs-2-24').removeClass("show");
        
        $('#myAnchor-1').removeClass("active");
        $('#myAnchor-1').removeClass("show");
        $('#myAnchor-2').removeClass("active");
        $('#myAnchor-2').removeClass("show");
        $('#myAnchor-3').removeClass("active");
        $('#myAnchor-3').removeClass("show");
        $('#myAnchor-4').removeClass("active");
        $('#myAnchor-4').removeClass("show");
    });

    $('#corner-3').click(function(){
        player1.pause();
        player2.pause();
        player3.pause();
        player4.pause();

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?autoplay=1&mute=1");

        $("#frame-21").attr("src","");
        $("#frame-22").attr("src","");
        $("#frame-23").attr("src","");
        $("#frame-24").attr("src","");

        $('#tabs-2-7').addClass("active");
        $('#tabs-2-7').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
        $('#tabs-2-4').removeClass("active");
        $('#tabs-2-4').removeClass("show");
        $('#tabs-2-5').removeClass("active");
        $('#tabs-2-5').removeClass("show");
        $('#tabs-2-6').removeClass("active");
        $('#tabs-2-6').removeClass("show");
        
        $('#tabs-2-21').removeClass("active");
        $('#tabs-2-21').removeClass("show");
        $('#tabs-2-22').removeClass("active");
        $('#tabs-2-22').removeClass("show");
        $('#tabs-2-23').removeClass("active");
        $('#tabs-2-23').removeClass("show");
        $('#tabs-2-24').removeClass("active");
        $('#tabs-2-24').removeClass("show");
        
        $('#myAnchor-1').removeClass("active");
        $('#myAnchor-1').removeClass("show");
        $('#myAnchor-2').removeClass("active");
        $('#myAnchor-2').removeClass("show");
        $('#myAnchor-3').removeClass("active");
        $('#myAnchor-3').removeClass("show");
        $('#myAnchor-4').removeClass("active");
        $('#myAnchor-4').removeClass("show");
    });




    $('#x-21').click(function(){

      // alert('coming soon');

      $(window).scrollTop($('#tabs-2').offset().top-300);

      $("#frame-21").attr("src","https://www.youtube.com/embed/xI0N1WUk840?si=Ijk0jv-SG1n_6MSE?autoplay=1&mute=1");

      $("#frame-1").attr("src","");
      $("#frame-2").attr("src","");
      $("#frame-3").attr("src","");

      $("#frame-22").attr("src","");
      $("#frame-23").attr("src","");
      $("#frame-24").attr("src","");

      $('#tabs-2-21').addClass("active");
      $('#tabs-2-21').addClass("show");

      $('#tabs-2-22').removeClass("active");
      $('#tabs-2-22').removeClass("show");
      $('#tabs-2-23').removeClass("active");
      $('#tabs-2-23').removeClass("show");
      $('#tabs-2-24').removeClass("active");
      $('#tabs-2-24').removeClass("show");

      $('#tabs-2-1').removeClass("active");
      $('#tabs-2-1').removeClass("show");
      $('#tabs-2-2').removeClass("active");
      $('#tabs-2-2').removeClass("show");
      $('#tabs-2-3').removeClass("active");
      $('#tabs-2-3').removeClass("show");
      $('#tabs-2-4').removeClass("active");
      $('#tabs-2-4').removeClass("show");
      $('#tabs-2-5').removeClass("active");
      $('#tabs-2-5').removeClass("show");
      $('#tabs-2-6').removeClass("active");
      $('#tabs-2-6').removeClass("show");
      $('#tabs-2-7').removeClass("active");
      $('#tabs-2-7').removeClass("show");
        
      $('#myAnchor-1').removeClass("active");
      $('#myAnchor-1').removeClass("show");
      $('#myAnchor-2').removeClass("active");
      $('#myAnchor-2').removeClass("show");
      $('#myAnchor-3').removeClass("active");
      $('#myAnchor-3').removeClass("show");
      $('#myAnchor-4').removeClass("active");
      $('#myAnchor-4').removeClass("show");
    });

    $('#x-22').click(function(){

      $(window).scrollTop($('#tabs-2').offset().top-300);

      $("#frame-22").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?si=qqb78IG2z5xnFXJz?autoplay=1&mute=1");

      $("#frame-1").attr("src","");
      $("#frame-2").attr("src","");
      $("#frame-3").attr("src","");

      $("#frame-21").attr("src","");
      $("#frame-23").attr("src","");
      $("#frame-24").attr("src","");

      $('#tabs-2-22').addClass("active");
      $('#tabs-2-22').addClass("show");

      $('#tabs-2-21').removeClass("active");
      $('#tabs-2-21').removeClass("show");
      $('#tabs-2-23').removeClass("active");
      $('#tabs-2-23').removeClass("show");
      $('#tabs-2-24').removeClass("active");
      $('#tabs-2-24').removeClass("show");

      $('#tabs-2-1').removeClass("active");
      $('#tabs-2-1').removeClass("show");
      $('#tabs-2-2').removeClass("active");
      $('#tabs-2-2').removeClass("show");
      $('#tabs-2-3').removeClass("active");
      $('#tabs-2-3').removeClass("show");
      $('#tabs-2-4').removeClass("active");
      $('#tabs-2-4').removeClass("show");
      $('#tabs-2-5').removeClass("active");
      $('#tabs-2-5').removeClass("show");
      $('#tabs-2-6').removeClass("active");
      $('#tabs-2-6').removeClass("show");
      $('#tabs-2-7').removeClass("active");
      $('#tabs-2-7').removeClass("show");
        
      $('#myAnchor-1').removeClass("active");
      $('#myAnchor-1').removeClass("show");
      $('#myAnchor-2').removeClass("active");
      $('#myAnchor-2').removeClass("show");
      $('#myAnchor-3').removeClass("active");
      $('#myAnchor-3').removeClass("show");
      $('#myAnchor-4').removeClass("active");
      $('#myAnchor-4').removeClass("show");
    });

    $('#x-23').click(function(){

      $(window).scrollTop($('#tabs-2').offset().top-300);

      $("#frame-23").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?si=vO8I5Jkqh8Xvx8W5?autoplay=1&mute=1");

      $("#frame-1").attr("src","");
      $("#frame-2").attr("src","");
      $("#frame-3").attr("src","");

      $("#frame-21").attr("src","");
      $("#frame-22").attr("src","");
      $("#frame-24").attr("src","");

      $('#tabs-2-23').addClass("active");
      $('#tabs-2-23').addClass("show");

      $('#tabs-2-21').removeClass("active");
      $('#tabs-2-21').removeClass("show");
      $('#tabs-2-22').removeClass("active");
      $('#tabs-2-22').removeClass("show");
      $('#tabs-2-24').removeClass("active");
      $('#tabs-2-24').removeClass("show");

      $('#tabs-2-1').removeClass("active");
      $('#tabs-2-1').removeClass("show");
      $('#tabs-2-2').removeClass("active");
      $('#tabs-2-2').removeClass("show");
      $('#tabs-2-3').removeClass("active");
      $('#tabs-2-3').removeClass("show");
      $('#tabs-2-4').removeClass("active");
      $('#tabs-2-4').removeClass("show");
      $('#tabs-2-5').removeClass("active");
      $('#tabs-2-5').removeClass("show");
      $('#tabs-2-6').removeClass("active");
      $('#tabs-2-6').removeClass("show");
      $('#tabs-2-7').removeClass("active");
      $('#tabs-2-7').removeClass("show");
        
      $('#myAnchor-1').removeClass("active");
      $('#myAnchor-1').removeClass("show");
      $('#myAnchor-2').removeClass("active");
      $('#myAnchor-2').removeClass("show");
      $('#myAnchor-3').removeClass("active");
      $('#myAnchor-3').removeClass("show");
      $('#myAnchor-4').removeClass("active");
      $('#myAnchor-4').removeClass("show");
    });

    $('#x-24').click(function(){

      $(window).scrollTop($('#tabs-2').offset().top-300);

      $("#frame-24").attr("src","https://www.youtube.com/embed/DOR2ABmKXvs?si=tegO4AycW0j55QB_?autoplay=1&mute=1");

      $("#frame-1").attr("src","");
      $("#frame-2").attr("src","");
      $("#frame-3").attr("src","");

      $("#frame-21").attr("src","");
      $("#frame-22").attr("src","");
      $("#frame-23").attr("src","");

      $('#tabs-2-24').addClass("active");
      $('#tabs-2-24').addClass("show");

      $('#tabs-2-21').removeClass("active");
      $('#tabs-2-21').removeClass("show");
      $('#tabs-2-22').removeClass("active");
      $('#tabs-2-22').removeClass("show");
      $('#tabs-2-23').removeClass("active");
      $('#tabs-2-23').removeClass("show");

      $('#tabs-2-1').removeClass("active");
      $('#tabs-2-1').removeClass("show");
      $('#tabs-2-2').removeClass("active");
      $('#tabs-2-2').removeClass("show");
      $('#tabs-2-3').removeClass("active");
      $('#tabs-2-3').removeClass("show");
      $('#tabs-2-4').removeClass("active");
      $('#tabs-2-4').removeClass("show");
      $('#tabs-2-5').removeClass("active");
      $('#tabs-2-5').removeClass("show");
      $('#tabs-2-6').removeClass("active");
      $('#tabs-2-6').removeClass("show");
      $('#tabs-2-7').removeClass("active");
      $('#tabs-2-7').removeClass("show");
        
      $('#myAnchor-1').removeClass("active");
      $('#myAnchor-1').removeClass("show");
      $('#myAnchor-2').removeClass("active");
      $('#myAnchor-2').removeClass("show");
      $('#myAnchor-3').removeClass("active");
      $('#myAnchor-3').removeClass("show");
      $('#myAnchor-4').removeClass("active");
      $('#myAnchor-4').removeClass("show");
    });

  </script>


</html>