<!doctype html>
<html lang="en">

<head>
    <!-- paksa ke https -->

    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo $head['html'] ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/public/'); ?>css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/public/'); ?>css/slick-theme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <title>Straming</title>
</head>
<style>
    .navbar {
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%);
    }

    .hide {
        display: none;
    }

    .list-streaming {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .content-panel {
        height: 4em;
        width: 8em;
        margin: .2em .7em;
    }

    .content-panel {
        height: 4em;
        width: 8em;
        margin: .2em .7em;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 5px;
    }



    .advertising .content-panel {
        width: 350px;
        height: 250px;
        text-align: center;
        margin: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 0px;
    }

    .advertising-hide .content-panel-hide {
        width: 728px;
        height: 90px;
        text-align: center;
        margin: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .containers {
        padding: 0 5%;
    }

    .slick-arrow {
        background-color: #fff;
        z-index: 997;
        color: #333;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 20%;
        cursor: pointer;
        font-size: 1.2em;
        border-radius: 50%;
        padding: 0;
        width: 2em;
        height: 2em;
        text-align: center;
    }

    .slick-arrow i {
        position: relative;
        top: .3em;
    }

    .slick-arrow.prev-arrow {
        left: -10px;
    }

    .slick-arrow.next-arrow {
        right: -10px
    }

    .slick-list {
        position: relative;

        display: block;
        overflow: hidden;

        margin: 0;
        padding: 0;
    }

    .embed-responsive {
        height: 500px;
    }

    .stream-data {
        background-color: #cecece;
        margin-right: 1em;
        border-radius: 10px;
        width: 150px;
        text-align: center;
    }

    .flex {
        display: flex;
        justify-content: space-between;

    }

    .flex-ads {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -moz-flex;
        display: -webkit-flex;
        display: flex;
        display: flex;
        justify-content: center;
        width: 750px;
        margin: 0 auto;

    }

    @media (max-width: 1500px) {


        .advertising .content-panel {
            width: 100%;
        }

        .flex-ads {
            flex-direction: column;
        }

    }


    @media (max-width: 1200px) {}


    @media (max-width: 1500px) {

        .advertising .content-panel {
            width: 100%;
        }


    }

    @media (max-width: 987px) {

        .advertising .content-panel {
            width: 350px;
        }

        .advertising {
            margin-top: 2em;
        }
    }

    @media (max-width: 763px) {
        .advertising-hide .content-panel-hide {
            width: 370px;
            height: 45px;
        }

    }

    @media (max-width: 565px) {
        .slick-arrow.prev-arrow {
            left: -10px;
        }

        .slick-arrow.next-arrow {
            right: -2px
        }

        .embed-responsive {
            height: 300px;
        }

        .advertising-hide .content-panel-hide {
            width: 230px;
            height: 25px;
        }


    }

    @media (max-width: 437px) {}
</style>

<body>

    <div class="wrap">
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-expand-lg navbar-light navbar-inverse">
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url('uploads/' . $brand['img']) ?>" alt="" style="width: 120px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php foreach ($menu as $menuKey => $menuValue) { ?>
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="<?php echo $menuValue['link'] ?>" style="font-weight: 900"><?php echo $menuValue['title'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!-- Navbar End -->
        <div style="clear: both;height: 2em;"></div>

        <div style="min-height:90vh;">
            <div class="containers" style="background-color: #eee3;">
                <ul class="list-streaming">
                    <?php foreach ($dataLiveAll as $dataLiveAllKey => $dataLiveAllValue) { ?>
                        <div>
                            <li style="width:100%;display:inline-block">
                                <a href="<?php echo base_url('Live/chanel/') . $dataLiveAllValue['pkey'] ?>">
                                    <div class="content-panel" style="background-image:url(<?php echo base_url('uploads/') . $dataLiveAllValue['img'] ?>)"></div>
                                </a>
                            </li>
                        </div>
                    <?php } ?>
                </ul>
            </div>


            <div style="clear: both;height: 4em;"></div>
            <!-- Jumbotron -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-3" style="text-align: center;">
                            <div class="advertising">
                                <div class="row">
                                    <?php for ($i = 3; $i <= 5; $i++) { ?>
                                        <?php if (!empty($ads[$i])) { ?>
                                            <div class="col-sm-12 py-1">
                                                <div class="content-panel"><a href="<?php echo $ads[$i]['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $ads[$i]['img']) ?>" alt="" class="rounded "></a></div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 embed-responsive embed-responsive-4by3" style="text-align: center;">
                            <div class="movetovideojs " style="width: 100%;text-align: center;display: scroll;position:fixed;bottom: 50px;margin: 0 auto;z-index: 103;">
                                <?php if (!empty($dataLive['linkads']) && !empty($dataLive['ads'])) { ?>
                                    <div id="ads-hide1" class="advertising-hide hide">
                                        <div style="text-align:right;padding-right:3em;"><a href="#" id="close-ads" onclick="closeAds()" style="cursor:pointer;"><img src="https://3.bp.blogspot.com/-ZZSacDHLWlM/VhvlKTMjbLI/AAAAAAAAF2M/UDzU4rrvcaI/s1600/btn_close.gif" style=""></a></div>
                                        <div class="row">
                                            <div id="image-ads-1" class="list-ads col py-1">
                                                <div class="content-panel-hide">
                                                    <a href="<?php echo $dataLive['linkads'] ?>" target="_blank"><img src="<?php echo base_url('uploads/') . $dataLive['ads'] ?>" alt="AdsLive" style="width: 100%;border-radius: 10px;border-style: solid;border-color:yellow"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <video autoplay="true" id="my-video" class="video-js embed-responsive-item" controls preload="auto" poster="<?php echo base_url('uploads/') . $dataLive['img'] ?>" data-setup="{}">
                                <source src="<?php echo $dataLive['link'] ?>" type="application/x-mpegURL" />
                            </video>
                        </div>
                        <div class="col-lg-3" style="text-align: center;">
                            <div class="advertising">
                                <div class="row">
                                    <?php for ($i = 0; $i <= 2; $i++) { ?>
                                        <?php if (!empty($ads[$i])) { ?>
                                            <div class="col-sm-12 py-1">
                                                <div class="content-panel"><a href="<?php echo $ads[$i]['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $ads[$i]['img']) ?>" alt="" class="rounded "></a></div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?php echo $content['content'] ?>
                </div>
            </div>
            <!-- Jumbotron End-->
        </div>


        <footer id="section5" class="footer" style="padding: 2em;text-align: center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col heading">
                        <span>Power by NobarTV.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer   -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo base_url('asset/public/'); ?>js/slick.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function closeAds() {
            $('.list-ads').hide();
            $('#close-ads').hide();
        }

        $(document).ready(function() {

            var options = {
                playbackRates: [1, 1.5, 2],
                muted: true,
            };

            video = videojs('my-video', options);

            $('.movetovideojs').appendTo($('#my-video'));

            video.on('fullscreenchange', function() {

                if (this.isFullscreen_) {

                    $('#ads-hide1 ').show();
                    $('#close-ads').show();
                    $('.list-ads').show();
                    // $('#image-ads-0 , #image-ads-1 , #image-ads-2').show();

                    function showHide() {
                        setTimeout(() => {
                            $('#close-ads').show();
                            $('.list-ads').show();

                            // $('#image-ads-0 , #image-ads-1 , #image-ads-2').show();
                            setTimeout(() => {
                                $('#close-ads').hide();
                                $('.list-ads').hide();

                                // $('#image-ads-0 , #image-ads-1 , #image-ads-2').hide();

                                showHide();
                            }, 900000);

                        }, 900000);

                    }

                    showHide();

                } else {

                    $('#ads-hide1').hide();
                    $('.list-ads').hide();
                    $('#close-ads').hide();
                    // $('#image-ads-0 , #image-ads-1 , #image-ads-2').hide();
                }

            });




        });
    </script>
    <script type="text/javascript">
        $('.list-streaming').slick({
            dots: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 3,
            variableWidth: true,
            centerMode: false,
            nextArrow: '<div class="slick-arrow next-arrow"><i class="fa fa-chevron-right"></i></div>',
            prevArrow: '<div class="slick-arrow prev-arrow"><i class="fa fa-chevron-left"></i></div>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
        // setInterval(function() {
        //     Swal.fire(
        //         'Good job!',
        //         'You clicked the button!',
        //         'success'
        //     )
        // }, 5000);
    </script>
    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
    <div class="row" style="position: fixed;bottom: 50px;margin-left: 10%;margin-right: 10%;display: none;" id="sticky-ad">
        <button class="text-light close-ads" aria-label="Close this ad" style="position: absolute; width: 28px; height: 28px; top: -28px; right: 0; border: none; border-radius: 12px 0 0 0;background: none;">X</button>
        <div class="col-sm-6 py-1">
            <a href="#" target="_blank"><img src="<?php echo base_url('uploads/1648544918.png') ?>" class="" alt="Ads" style="width: 100%;border-radius: 10px;border-style: solid;border-color:yellow"></a>
        </div>
    </div>
</body>

</html>