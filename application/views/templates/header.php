<html>
<head>
    <title>portal news</title>
    <link rel="shortcut icon" href="<?php echo base_url('images/' . $setting['logo']) ?>"/>
    <!-- <link rel="stylesheet" type="text/css" href="<?php /*echo base_url('bootstrap/css/bootstrap.min.css') */ ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/user/reset.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/user/grid.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/user/prettyPhoto.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css') ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300,700' rel='stylesheet'
          type='text/css'>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var map;
        var geocoder;
        var centerChangedLast;
        var reverseGeocodedLast;
        var currentReverseGeocodeResponse;

        function initialize() {
            var latlng = new google.maps.LatLng(<?php echo $setting['longitute']?>, <?php echo $setting['latitude']?>);
            var myOptions = {
                zoom: 10,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            geocoder = new google.maps.Geocoder();

            /*var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: "Hello World!"
            });*/

            <?php foreach($address_location as $location) { ?>
                setMarkers(map, <?php echo $location['latitude']?>, <?php echo $location['longitude']?>);
               /*var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $location['longitude']?>, <?php echo $location['latitude']?>),
                map: map,
                title: "Hello World!"
            });*/
         <?php } ?>

        }

    </script>
    <script type="text/javascript">
        /*function map_markers() {

            var myOptions = {
                center: new google.maps.LatLng(26.5333, 86.7333),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            };
            var map = new google.maps.Map(document.getElementById("default"),
                myOptions);


            <?php foreach($address_location as $location) {?>
                setMarkers(map, '<?php echo $location['latitude'] ?>', '<?php echo $location['longitude'] ?>');
            <?php } ?>


        } */


        function setMarkers(map, lat, long) {
            var marker, i

            var lat = lat;
            var long = long;

            /*latlngset = new google.maps.LatLng(lat, long);

            var marker = new google.maps.Marker({
                map: map, title: loan, position: latlngset
            });
            map.setCenter(marker.getPosition())


            /*var content = "Loan Number:he " '</h3>' + "Address:hi "

            var infowindow = new google.maps.InfoWindow()

            google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                return function () {
                    infowindow.setContent(content);
                    infowindow.open(map, marker);
                };
            })(marker, content, infowindow));*/

            var contentString = 'test';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var myLatLng = new google.maps.LatLng(lat, long);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }

    </script>

</head>

<body onload="initialize()">

<div id="wrapper">
    <div id="topheader">
        <div class="grid_1 alpha"><a href="<?php echo base_url('front_controller') ?>" id="logo"><img
                    src="<?php echo base_url('images/portal.png') ?>"/></a></div>
        <div class="grid_2 omega fr">
            <div class="search-box fr">
                <form>
                    <input type="text" value="Search .." name="" class="search fl"/>

                    <div class="btn-search fr">
                        <input type="submit" value="" class="icon-search"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="nav-desires">
            <ul id="primary-nav" class="horizontal-nav unselectable">
                <li>
                    <a class="primary <?php echo ($this->uri->segment(2) == '') ? 'active_nav' : '' ?>"
                       href="<?php echo base_url('portalnews') ?>">Home</a>
                </li>
                <?php foreach ($content_news as $new) {
                    if ($new['header'] == 'on' && $new['type'] == 'content') { ?>
                        <li>
                            <a class="primary <?php echo ($new['slug'] == $this->uri->segment(3)) ? 'active_nav' : '' ?>"
                               href="<?php echo base_url('portalnews/about_us/' . $new['slug']) ?>"><?php echo $new['title'] ?></a>
                        </li>
                    <?php }
                } ?>
                <li><a class="primary <?php echo ($this->uri->segment(2) == 'news') ? 'active_nav' : '' ?>"
                       href="<?php echo base_url('portalnews/news/') ?>">News</a>
                    <ul>
                        <?php foreach ($content_news as $new) {
                            if ($new['header'] == 'on' && $new['type'] == 'news') { ?>
                                <li class="headline">
                                    <a class="<?php echo ($new['slug'] == $this->uri->segment(3)) ? 'active_nav' : '' ?>"
                                       href="<?php echo base_url('portalnews/news/' . $new['slug']) ?>"><?php echo $new['title'] ?></a>
                                </li>
                            <?php }
                        } ?>
                    </ul>
                </li>

                <li id="product_div_dropdown">
                    <a class=" product primary <?php echo ($this->uri->segment(2) == 'product_services') ? 'active_nav' : '' ?>"
                       href="javascript:void(0);">Product & Services</a>

                    <div class="tabs-wrapper">
                        <ul class="tabs">
                            <?php foreach ($categories as $category) { ?>
                                <li>
                                    <a href="#<?php echo $category['id'] ?>"><?php echo $category['category'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tabs-container">
                            <?php foreach ($categories as $category) { ?>
                                <div id="<?php echo $category['id'] ?>" class="tab-content ">
                                    <?php foreach ($product as $products) {
                                        if ($products['category_id'] == $category['id']) { ?>
                                            <a href="#" title="">
                                                <img
                                                    src="<?php echo base_url('images/tatamotors/' . $products['images']) ?>"
                                                    style="height:55px;width:75px" alt="">
                                                <span><?php echo $products['vehicle_name'] ?></span>
                                            </a>
                                        <?php }
                                    } ?>
                                    <div class="book_a_test_drive">
                                        <a href="#" class="btn btn-primary"> Book a Test Drive </a>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="btn btn-primary"> View All </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </li>

                <li><a class="primary <?php echo ($this->uri->segment(2) == 'contact') ? 'active_nav' : '' ?>"
                       href="<?php echo base_url('portalnews/network') ?>">Network</a>
                </li>

                <li>
                    <a class="primary <?php echo ($this->uri->segment(2) == 'contact') ? 'active_nav' : '' ?>"
                       href="<?php echo base_url('portalnews/contact') ?>">Media</a>
                    <ul>
                        <li class="headline"><a href="javascript:void(0);">Downloads</a>
                            <ul>
                                <li class="headline-child"><a href="#">Video</a></li>
                            </ul>
                        </li>
                        <li class="headline"><a href="#"> Gallery</a></li>
                    </ul>
                </li>

                <li><a class="primary <?php echo ($this->uri->segment(2) == 'contact') ? 'active_nav' : '' ?>"
                       href="<?php echo base_url('portalnews/contact') ?>">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clear">

        </div>
        <div class="clear">

        </div>
    </div>

