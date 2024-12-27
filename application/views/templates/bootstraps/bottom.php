
      
      <footer class="section footer-classic bg-default">
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
    <script src="<?php echo base_url() ?>assets_tv/js/videojs-contrib-hls.js"></script>
    <script src="<?php echo base_url() ?>assets_tv/js/video.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets_tv/js/terabytee.mins.js"></script> -->

  </body>

  <script>
    // var player_1 = videojs("hls-example-1");
    // player_1.play();

    $('.nav-link').click(function(){
        var myId = $(this).attr('id');
        var keys = $(this).data('key');
        
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
        
        $("#frame-1").attr("src","https://www.youtube.com/embed/xI0N1WUk840?autoplay=1&mute=1");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");

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
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?autoplay=1&mute=1");
        $("#frame-3").attr("src","");

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
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?autoplay=1&mute=1");

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