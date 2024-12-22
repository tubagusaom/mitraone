
<section class="section section-tb bg-default text-center">
        <div id="ctnHeader" class="container">
          <!-- <h6 class="text-gray-600">TV streaming from multiple channels</h6>
          <h2>TV STREAMING</h2> -->
          <!--Bootstrap tabs-->
          <div class="tabs-custom tabs-vertical tabs-video" id="tabs-2">
            <!--Tab panes-->

            <!-- <script>
              flowplayer(function (api) {
              api.on("load", function (e, api, video) {
                $("#vinfo").text(api.engine.engineName + " engine playing " + video.type);
              }); });
            </script> -->

            <style>

              .tab-column {
                margin: 0 30px 0 30px!important;
              }
              @media (max-width: 560px) {
                .tab-column {
                  margin-top: -15px!important;
                }
              }
              @media (min-width: 561px) {
                .tab-column {
                  padding-top: 10px!important;
                }
              }
              @media (max-width: 900px) {
                .tab-column {
                  max-width: 93%!important;
                }
              }
              @media (min-width: 901px) {
                .tab-column {
                  max-width: 100%!important;
                }
              }

              .column_tb {
                float: left!important;
                place-items: center!important;
                width: 25%!important;
                padding-bottom: 5px!important;
                /* background-color: rgba(34, 45, 79, 0.2); */
                /* height: 300px; */
                /* border: 1px solid #000; */
              }


              .column_tb_3 {
                  /* place-items: center!important; */
                  width: 33%!important;
                  margin: 23px 0!important;
                  /* border: 1px solid #000; */
              }

              @media (max-width: 512px) {
                  .column_tb_3 {
                      margin: 13px 0 -4 0 !important;
                      padding: 0 15px!important;
                  }
              }

              .column_tb_3 img {
                  max-width: 95px!important;
              }

              .image_center {
                  display: block!important;
                  margin: auto!important;
              }
            </style>

            <div class="tab-column">
              <div class="row">
                <div class="column_tb_3">
                  <a href="javascript:void(0)">
                    <img style="float:left" src="<?=base_url()?>assets_tv/images/tv/energy_corner.png" alt=""/>
                  </a>
                </div>
                <div class="column_tb_3">
                  <a href="javascript:void(0)">
                    <img class="image_center" src="<?=base_url()?>assets_tv/images/tv/mitra_corner.png" alt=""/>
                  </a>
                </div>
                <div class="column_tb_3">
                  <a href="javascript:void(0)">
                    <img style="float:right" src="<?=base_url()?>assets_tv/images/tv/umkm_corner.png" alt=""/>
                  </a>
                </div>
              </div>
            </div>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-2-1">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9 ">
                  <!-- <iframe width="886" height="668" src="//www.youtube.com/embed/zraegy4MqRA?si=_F7cjsNc1Baa7Dq9" allowfullscreen=""></iframe> -->
                  <!-- <iframe width="886" height="668" src="https://v10.siar.us/rctv/live/playlist.m3u8" allowfullscreen=""></iframe> -->

                    <!-- <iframe width="886" height="668" src="https://sindikasi.inews.id/embed/video/YWdlbnQ9ZGVza3RvcCZ1cmw9aHR0cHMlM0ElMkYlMkZlbWJlZC5yY3RpcGx1cy5jb20lMkZsaXZlJTJGcmN0aSUyRmluZXdzaWQmaGVpZ2h0PTEwMCUyNSZ3aWR0aD0xMDAlMjU=" allowfullscreen=""></iframe> -->

                    <video
                      id="hls-example-1"
                      class="video-js vjs-default-skin"
                      width="2000"
                      height="400"
                      controls
                      poster="<?=base_url()?>assets_tv/images/tv/poster_blue_idtv.png"
                    >
                      <source
                        type="application/x-mpegURL"
                        src="https://b1world.beritasatumedia.com/Beritasatu/B1World_1280x720.m3u8?aux=eroz_brebes.m3u8"
                      />

                      <!-- source
                        Radar Lampung TV - http://103.140.188.211:1935/radarlampungtv/myStream/playlist.m3u8
                        Cirebon TV - https://v10.siar.us/rctv/live/playlist.m3u8
                        Dubai Sports 2 - http://dmitwlvvll.cdn.mangomolo.com/dubaisportshd/smil:dubaisportshd.smil/chunklist_b1600000.m3u8
                        Dubai Sports 3 - http://dmitwlvvll.cdn.mangomolo.com/dubaisportshd5/smil:dubaisportshd5.smil/chunklist_b1600000.m3u8
                        Arirang - https://amdlive-ch01-ctnd-com.akamaized.net/arirang_1ch/smil:arirang_1ch.smil/chunklist_b2256000_sleng.m3u8
                        Berita Satu World - https://b1world.beritasatumedia.com/Beritasatu/B1World_1280x720.m3u8?aux=eroz_brebes.m3u8
                        Spacetoon - https://streams.spacetoon.com/live/stchannel/smil:livesmil.smil/playlist.m3u8
                        UGTV Gunadarma - https://cdn.gunadarma.ac.id/streams/ugtv/ingestugtv.m3u8
                        xxx - xxx
                      source -->

                      <!-- <source
                        src="http://103.140.188.211:1935/radarlampungtv/myStream/playlist.m3u8"
                        src="https://v10.siar.us/rctv/live/playlist.m3u8"
                        type="application/x-mpegURL"
                      /> -->
                    </video>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-2">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9 ">
                    <video
                      id="hls-example-2"
                      class="video-js vjs-default-skin"
                      width="2000"
                      height="400"
                      controls
                      poster="<?=base_url()?>assets_tv/images/tv/poster_blue_rctv.png"
                    >
                      <source
                        type="application/x-mpegURL"
                        src="https://v10.siar.us/rctv/live/playlist.m3u8"
                      />
                    </video>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-3">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9 ">
                    <video
                      id="hls-example-3"
                      class="video-js vjs-default-skin"
                      width="2000"
                      height="400"
                      controls
                      poster="<?=base_url()?>assets_tv/images/tv/poster_blue_ugtv.png"
                    >
                      <source
                        type="application/x-mpegURL"
                        src="https://cdn.gunadarma.ac.id/streams/ugtv/ingestugtv.m3u8"
                      />
                    </video>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-4">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9 ">
                    <video
                      id="hls-example-4"
                      class="video-js vjs-default-skin"
                      width="2000"
                      height="400"
                      controls
                      poster="<?=base_url()?>assets_tv/images/tv/poster_blue_spacetoon.png"
                    >
                      <source
                        type="application/x-mpegURL"
                        src="https://streams.spacetoon.com/live/stchannel/smil:livesmil.smil/playlist.m3u8"
                      />
                    </video>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      
      <!-- <section class="section" data-lightgallery="group"> -->
        <div class="tab-column">
            <div class="row">
              <div class="column_tb">
                <div class="nav nav-tabs">
                  <div class="nav-item" role="presentation">
                    <a id="myAnchor-1" class="nav-link active" href="#tabs-2-1" data-toggle="tab">
                      <div class="nav-video">
                        <figure class="nav-video-figure">
                          <img src="<?=base_url()?>assets_tv/images/tv/id_tv.png" alt=""/>
                        </figure>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="column_tb" role="presentation">
                <div class="nav nav-tabs">
                  <div class="nav-item" role="presentation">
                    <a id="myAnchor-3" class="nav-link" href="#tabs-2-2" data-toggle="tab">
                      <div class="nav-video">
                        <figure class="nav-video-figure">
                          <img src="<?=base_url()?>assets_tv/images/tv/rctv.png" alt=""/>
                        </figure>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="column_tb" role="presentation">
                <div class="nav nav-tabs">
                  <div class="nav-item" role="presentation">
                    <a id="myAnchor-2" class="nav-link" href="#tabs-2-3" data-toggle="tab">
                      <div class="nav-video">
                        <figure class="nav-video-figure">
                          <img src="<?=base_url()?>assets_tv/images/tv/ugtv.png" alt=""/>
                        </figure>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="column_tb" role="presentation">
                <div class="nav nav-tabs">
                  <div class="nav-item" role="presentation">
                    <a id="myAnchor-4" class="nav-link" href="#tabs-2-4" data-toggle="tab">
                      <div class="nav-video">
                        <figure class="nav-video-figure">
                          <img src="<?=base_url()?>assets_tv/images/tv/spacetoon.png" alt=""/>
                        </figure>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- </section> -->

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