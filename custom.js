$(function () {

    function initMap() {

        var location = new google.maps.LatLng(18.521053,-77.860226);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var markerImage = 'img/marker.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

        var contentString = '<div class="info-window">' +
                '<h3>AM Gestion</h3>' +
                '<div class="info-content">' +
                '<p>Created by former expatriates to assist companies who are willing to set up business in Jamaica, facilitating a better understanding of the Island. Created to assist and offer vital support and information to foreign companies and their expatriates.</p>' +
                '</div>' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });

        [
    {
    
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": 43.400000000000006
            },
            {
                "lightness": 37.599999999999994
            },
            {
                "gamma": 1
            },
            {
                "hue": "#ffbb00"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-1"
            },
            {
                "lightness": "13"
            },
            {
                "gamma": 1
            },
            {
                "hue": "#00b1ff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#008eff"
            },
            {
                "saturation": -61.8
            },
            {
                "lightness": 45.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 51.19999999999999
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 52
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -13.200000000000003
            },
            {
                "lightness": 2.4000000000000057
            },
            {
                "gamma": 1
            },
            {
                "color": "#004c88"
            }
        ]
    }
]
        map.set('styles', styles);


    }

    google.maps.event.addDomListener(window, 'load', initMap);
});

$(window).scroll(function(){
    $(".header-wrap").css("opacity", 1 - $(window).scrollTop() / 200);
    });

$(window).scroll(function(){
    $(".header-wrap-about").css("opacity", 1 - $(window).scrollTop() / 200);
    });

(function($) {
  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

var win = $(window);

var allMods = $(".container, .container-fluid-sub, .background-blue, .cover, .cover-about, .contact-center");

allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible"); 
  } 
});

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-in"); 
    } 
  });
  
});

window.onload = function() {
    // similar behavior as an HTTP redirect
    window.location.replace("http://amgestionjm.com/Garfield/Portfolio");
}
