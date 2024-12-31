
<section class="section section-banner" href="#">
<!-- <section style="background-image: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url(<?=base_url()?>assets_tv/images/banner/banner_tb.png);"> -->
  <!-- <img src="<?=base_url()?>assets_tv/images/banner/foreground-01-1600x310.png" srcset="<?=base_url()?>assets_tv/images/banner/foreground-01-1600x310.png 1x, <?=base_url()?>assets_tv/images/banner/foreground-01-3200x620.png 2x" alt="" width="1600" height="310"> -->
  
        <!-- <div class=""> -->
        <div class="owl-carousel owl-carousel-bio" data-loop="true" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="2" data-xl-items="3" data-xxl-items="4" data-autoplay="true" data-dots="false" data-nav="true" data-stage-padding="0" data-margin="0" data-nav-text="[&quot;prev&quot;,&quot;next&quot;]">

          <div class="box-bio">
            <div class="box-bio-body">
              <a href="https://youtu.be/DOR2ABmKXvs?si=y2S-r58j9t3bkUK2" target="_blank">
                <img class="slide-tb" src="<?=base_url()?>assets_tv/images/slide/slide_umkm.png" alt="">
              </a>
            </div>
          </div>

          <div class="box-bio">
            <div class="box-bio-body">
            <a href="https://youtu.be/9Vy3Id48cKY?si=Gpj8uBgMsh8D2sLi" target="_blank">
                <img class="slide-tb" src="<?=base_url()?>assets_tv/images/slide/slide_energi.png" alt="">
              </a>
            </div>
          </div>
          
          <div class="box-bio">
            <div class="box-bio-body">
            <a href="https://youtu.be/DOR2ABmKXvs?si=y2S-r58j9t3bkUK2" target="_blank">
                <img class="slide-tb" src="<?=base_url()?>assets_tv/images/slide/slide_umkm.png" alt="">
              </a>
            </div>
          </div>
          
          <div class="box-bio">
            <div class="box-bio-body">
              <a href="https://youtu.be/9Vy3Id48cKY?si=Gpj8uBgMsh8D2sLi" target="_blank">
                <img class="slide-tb" src="<?=base_url()?>assets_tv/images/slide/slide_energi.png" alt="">
              </a>
            </div>
          </div>

          <div class="box-bio">
            <div class="box-bio-body">
            <a href="https://youtu.be/DOR2ABmKXvs?si=y2S-r58j9t3bkUK2" target="_blank">
                <img class="slide-tb" src="<?=base_url()?>assets_tv/images/slide/slide_umkm.png" alt="">
              </a>
            </div>
          </div>

        </div>
        <!-- </div> -->

</section>

      <section class="section section-tb bg-default text-center">
        <div id="ctnHeader" class="container">
          <!-- <h6 class="text-gray-600">TV streaming from multiple channels</h6>
          <h2>TV STREAMING</h2> -->

          <style>
            .pb-tab{
              padding-bottom: 10px!important;
            }
          </style>


          <div class="tab-column pb-tab">
              <div class="row">
                <div class="column_tb_3">
                  <a id="corner-1" href="javascript:void(0)">
                    <img style="float:left!important" src="<?=base_url()?>assets_tv/images/tv/energy_corner.png" alt=""/>
                  </a>
                </div>
                <div class="column_tb_3">
                  <a id="corner-2" href="javascript:void(0)">
                    <img class="image_center" src="<?=base_url()?>assets_tv/images/tv/mitra_corner.png" alt=""/>
                  </a>
                </div>
                <div class="column_tb_3">
                  <a id="corner-3" href="javascript:void(0)">
                    <img style="float:right!important" src="<?=base_url()?>assets_tv/images/tv/umkm_corner.png" alt=""/>
                  </a>
                </div>
              </div>
            </div>

          <!--Bootstrap tabs-->
          <div class="tabs-custom tabs-vertical tabs-video" id="tabs-2">
            <!--Tab panes-->


            <div class="tab-content">

              <div class="tab-pane show active" id="tabs-2-5">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-1" class="frame-video" width="660" height="365" src="https://www.youtube.com/embed/xI0N1WUk840" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-6">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-2" class="frame-video" width="660" height="365" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-7">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-3" class="frame-video" width="660" height="365" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
              
              <?php
                // $url_host = [];
                foreach ($live_tv as $key => $value) {
                  // $external_url = $value->link_video;
                  // $url_host = substr(strrchr($external_url, "."), 1);

                  // echo $url_host;

                  // if($url_host == 'm3u8'){
              ?>

              <div class="tab-pane fade" id="tabs-2-<?=$value->code_video?>">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                    <video
                      id="hls-example-<?=$value->code_video?>"
                      class="video-js vjs-default-skin"
                      width="2000"
                      height="400"
                      controls
                      autoplay
                      poster="<?=base_url()?>assets_tv/images/tv/<?=$value->poster_video?>"
                    >
                      <source
                        type="application/x-mpegURL"
                        src="<?=$value->link_video?>"
                      />
                    </video>
                </div>
              </div>

              <?php
                // }else {
              ?>

                <!-- <div class="tab-pane" id="tabs-2-<?=$value->code_video?>">
                  <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                    <iframe id="frame-<?=$value->code_video?>" class="frame-video" width="660" height="365" src="<?=$value->link_video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div> -->

              <?php
                //  }
                }
              ?>

              <!-- <div id="texter"></div> -->

            </div>
          </div>
        </div>
      </section>
      
      <!-- <section class="section" data-lightgallery="group"> -->
        <div class="tab-column">
            <div class="row">

            <?php
              foreach ($live_tv as $keys => $value_tv) {
            ?>  
            
              <div class="column_tb" role="presentation" data-code="<?=$value_tv->code_video?>">
                <div class="nav nav-tabs">
                  <div class="nav-item" role="presentation">
                    <a id="myAnchor-<?=$value_tv->code_video?>" class="nav-link" href="#tabs-2-<?=$value_tv->code_video?>" data-toggle="tab" data-key="<?=$value_tv->code_video?>" data-name="<?=$value_tv->nama_video?>" data-url="<?=$value_tv->link_video?>" data-poster="<?=$value_tv->poster_video?>" data-logo="<?=$value_tv->logo_video?>">
                      <div class="nav-video">
                        <figure class="nav-video-figure">
                          <img src="<?=base_url()?>assets_tv/images/tv/<?=$value_tv->logo_video?>" alt=""/>
                        </figure>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <?php } ?>

            </div>
          </div>
          <!-- </section> -->

          <style>
            /* #eventsyoutube {
                pointer-events: none;
            } */
          </style>

          <?php
            // if(fmod($no,2)==1)
            // {$warna="ghostwhite";}
            // else
            // {$warna="whitesmoke";}
          ?>

          <!-- <div class="tab-column pb-tab">
              <div class="row">
                <div class="column_tb_2">
                  <a id="x-1" href="javascript:void(0)">
                    <img style="float:left!important" src="<?=base_url()?>assets_tv/images/tv/energy_corner.png" alt=""/>
                    <iframe style="float:right!important" id="eventsyoutube" class="ifr_center" width="160" height="85" src="https://www.youtube.com/embed/DOR2ABmKXvs?si=tegO4AycW0j55QB_?rel=0&amp;controls=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                  </a>
                </div>
                <div class="column_tb_2">
                  <a id="x-2" href="javascript:void(0)">
                    <img class="image_center" src="<?=base_url()?>assets_tv/images/tv/mitra_corner.png" alt=""/>
                    <iframe style="float:left!important" id="eventsyoutube" class="ifr_center" width="160" height="85" src="https://www.youtube.com/embed/DOR2ABmKXvs?si=tegO4AycW0j55QB_?rel=0&amp;controls=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                  </a>
                </div>
                <div class="column_tb_2">
                  <a id="x-3" href="javascript:void(0)">
                    <img style="float:right!important" src="<?=base_url()?>assets_tv/images/tv/umkm_corner.png" alt=""/>
                    <iframe style="float:right!important" id="eventsyoutube" class="ifr_center" width="160" height="85" src="https://www.youtube.com/embed/DOR2ABmKXvs?si=tegO4AycW0j55QB_?rel=0&amp;controls=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                  </a>
                </div>
              </div>
            </div> -->

      <!--<section class="section" data-lightgallery="group">-->
      <!--  <div class="row no-gutters">-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-01-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-05-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">Dream Village</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-02-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-06-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">ULTRA MUSIC FESTIVAL</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-03-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-07-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">electric Zoo</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-04-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-08-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">life in color festival</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->
      

      <!-- breaking news -->
      <section class="section section-xl bg-default text-center">
        <div class="container">
          <h6 class="text-gray-600">from MitraOne tv news</h6>
          <h2 class="text-gray-600">breaking news</h2>
          <div class="row row-125">
            <div class="col-md-6 col-lg-4">
              <article class="post-classic">
                <figure class="post-classic-figure"><a href="#"><img src="<?=base_url()?>assets_tv/images/breaking_news.png" alt="" width="346" height="130"/></a></figure>
                <div class="post-classic-content">
                  <time class="post-classic-time" datetime="2019-09-19">Aug 17, 2024</time>
                  <h5 class="post-classic-title"><a href="#">Issues Gas National</a></h5><a class="post-classic-link" href="#">read more</a>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <article class="post-classic">
                <figure class="post-classic-figure"><a href="#"><img src="<?=base_url()?>assets_tv/images/breaking_news.png" alt="" width="346" height="130"/></a></figure>
                <div class="post-classic-content">
                  <time class="post-classic-time" datetime="2019-09-19">Aug 17, 2024</time>
                  <h5 class="post-classic-title"><a href="#">Industry gas price polemic</a></h5><a class="post-classic-link" href="#">read more</a>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <article class="post-classic">
                <figure class="post-classic-figure"><a href="#"><img src="<?=base_url()?>assets_tv/images/breaking_news.png" alt="" width="346" height="130"/></a></figure>
                <div class="post-classic-content">
                  <time class="post-classic-time" datetime="2019-09-19">Aug 17, 2024</time>
                  <h5 class="post-classic-title"><a href="#">Energy Security for Industry</a></h5><a class="post-classic-link" href="#">read more</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>