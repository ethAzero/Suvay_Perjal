<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/maps/google.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets') ?>/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url('assets') ?>/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url('assets') ?>/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?= base_url('assets') ?>/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/css/google-roboto-300-700.css" rel="stylesheet" />
    <style>
        .main-panel-optimize {
            width: 100%;
        }

        .main-panel-optimize>.content {
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-panel main-panel-optimize">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">room</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Survay Perlengkapan Jalan</h4>
                                    <div id="customSkinMap" class="map"></div>
                                </div>
                                <button onclick="getLocation()">Try It</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?= base_url('assets') ?>/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/js/material.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?= base_url('assets') ?>/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url('assets') ?>/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?= base_url('assets') ?>/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?= base_url('assets') ?>/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('assets') ?>/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?= base_url('assets') ?>/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?= base_url('assets') ?>/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?= base_url('assets') ?>/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?= base_url('assets') ?>/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="<?= base_url('assets') ?>/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?= base_url('assets') ?>/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?= base_url('assets') ?>/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url('assets') ?>/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?= base_url('assets') ?>/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?= base_url('assets') ?>/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url('assets') ?>/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script>
    $(document).ready(function() {
        initSmallGoogleMaps();
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        //x.innerHTML = "Latitude: " + position.coords.latitude +
        //    "<br>Longitude: " + position.coords.longitude;
        alert(position.coords.latitude + ',' + position.coords.longitude);
    }

    function initVectorMap() {
        var mapData = {
            "AU": 760,
            "BR": 550,
            "CA": 120,
            "DE": 1300,
            "FR": 540,
            "GB": 690,
            "GE": 200,
            "IN": 200,
            "RO": 600,
            "RU": 300,
            "US": 2920,
        };

        $('#worldMap').vectorMap({
            map: 'world_mill_en',
            backgroundColor: "transparent",
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#e4e4e4',
                    "fill-opacity": 0.9,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 0
                }
            },

            series: {
                regions: [{
                    values: mapData,
                    scale: ["#AAAAAA", "#444444"],
                    normalizeFunction: 'polynomial'
                }]
            },
        });
    };

    function initGoogleMaps() {
        var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
        var mapOptions = {
            zoom: 13,
            center: myLatlng,
            scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
            styles: [{
                "featureType": "water",
                "stylers": [{
                    "saturation": 43
                }, {
                    "lightness": -11
                }, {
                    "hue": "#0088ff"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "hue": "#ff0000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 99
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#808080"
                }, {
                    "lightness": 54
                }]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ece2d9"
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ccdca1"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#767676"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#b8cb93"
                }]
            }, {
                "featureType": "poi.park",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.sports_complex",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.medical",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.business",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }]

        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: "Hello World!"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
    };

    function initSmallGoogleMaps() {

        // Custom Skin & Settings Map
        var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
        var mapOptions = {
            zoom: 13,
            center: myLatlng,
            scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
            disableDefaultUI: true, // a way to quickly hide all controls
            zoomControl: true,
            styles: [{
                "featureType": "water",
                "stylers": [{
                    "saturation": 43
                }, {
                    "lightness": -11
                }, {
                    "hue": "#0088ff"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "hue": "#ff0000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 99
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#808080"
                }, {
                    "lightness": 54
                }]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ece2d9"
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ccdca1"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#767676"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#b8cb93"
                }]
            }, {
                "featureType": "poi.park",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.sports_complex",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.medical",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.business",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }]

        }

        var map = new google.maps.Map(document.getElementById("customSkinMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: "Custom Skin & Settings Map!"
        });

        marker.setMap(map);



        // Satellite Map
        var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
        var mapOptions = {
            zoom: 3,
            scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        }

        var map = new google.maps.Map(document.getElementById("satelliteMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: "Satellite Map!"
        });

        marker.setMap(map);


    };
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/maps/google.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->

</html>