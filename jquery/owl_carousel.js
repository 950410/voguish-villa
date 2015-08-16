
$(document).ready(function() {

    $("#owl-demo").owlCarousel({
        slideSpeed: 300,
        singleItem: true,
        autoPlay:true

    });

    $("#owl-demo-news").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });


});