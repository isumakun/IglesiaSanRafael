<!DOCTYPE html>
<html>

    <?php require './head.php'; ?>
    
    <body>

        <div class="body">
            <?php require './header.php'; ?>

            <div role="main" class="main">

                <div class="slider-container rev_slider_wrapper">
                    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
                        <ul>
                            <li data-transition="fade">

                                <img src="img/slides/slide-corporate-3.jpg"  
                                     alt=""
                                     data-bgposition="center center" 
                                     data-bgfit="cover" 
                                     data-bgrepeat="no-repeat" 
                                     class="rev-slidebg">

                                <div class="tp-caption top-label"
                                     data-x="140"
                                     data-y="180"
                                     data-start="500"
                                     data-transform_in="y:[-300%];opacity:0;s:500;">Soluciones integrales</div>
                                
                                <div class="tp-caption top-label"
                                     data-x="140"
                                     data-y="210"
                                     data-start="1500"
                                     data-whitespace="nowrap"						 
                                     data-transform_in="y:[100%];s:500;"
                                     data-transform_out="opacity:0;s:500;"
                                     data-mask_in="x:0px;y:0px;">en <strong>Psicologia ocupacional</strong></div>

                                <div class="tp-caption top-label"
                                     data-x="140"
                                     data-y="240"
                                     data-start="2000"
                                     data-transform_in="y:[100%];opacity:0;s:500;">y <strong>organizacional</strong></div>

                            </li>
                            <li data-transition="fade">

                                <img src="img/slides/slide-corporate-4.jpg"  
                                     alt=""
                                     data-bgposition="center center" 
                                     data-bgfit="cover" 
                                     data-bgrepeat="no-repeat" 
                                     class="rev-slidebg">

                                <div class="tp-caption top-label"
                                     data-x="140"
                                     data-y="180"
                                     data-start="500"
                                     data-transform_in="y:[-300%];opacity:0;s:500;"><strong>Selección de personal y perfiles</strong></div>
                                
                                <div class="tp-caption top-label"
                                     data-x="140"
                                     data-y="210"
                                     data-start="1500"
                                     data-whitespace="nowrap"						 
                                     data-transform_in="y:[100%];s:500;"
                                     data-transform_out="opacity:0;s:500;"
                                     data-mask_in="x:0px;y:0px;"><strong>ocupacionales</strong> que contribuyan a una</div>

                                <div class="tp-caption top-label"
                                     data-x="140"
                                     data-y="240"
                                     data-start="2000"
                                     data-transform_in="y:[100%];opacity:0;s:500;">organización y trabajo saludable</div>

                            </li>
                            <li data-transition="fade">

                                <img src="img/slides/slide-corporate-5.jpg"  
                                     alt=""
                                     data-bgposition="center center" 
                                     data-bgfit="cover" 
                                     data-bgrepeat="no-repeat" 
                                     class="rev-slidebg">
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="home-intro" id="home-intro">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-8">
                                <p>
                                    La manera más rápida de hacer crecer su negocio con un lider en <em>Psicologia</em>
                                    <span>Contactanos y pregunta por nuestros Servicios</span>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="get-started">
                                    <a href="contact.php" class="btn btn-lg btn-primary">Llamanos Ya!</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">

                    
                </div>

            </div>

            <?php require './footer.php'; ?>
        </div>

        <!-- Vendor -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/common/common.min.js"></script>
        <script src="vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="vendor/jquery.stellar/jquery.stellar.min.js"></script>
        <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="vendor/isotope/jquery.isotope.min.js"></script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendor/vide/vide.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
        <script src="js/views/view.home.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="js/views/view.contact.js"></script>

        <!-- Theme Custom -->
        <script src="js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>

        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script>

            /*
             Map Settings
             
             Find the Latitude and Longitude of your address:
             - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
             - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
             
             */

            // Map Markers
            var mapMarkers = [{
                    address: "New York, NY 10017",
                    html: "<strong>New York Office</strong><br>New York, NY 10017",
                    icon: {
                        image: "img/pin.png",
                        iconsize: [26, 46],
                        iconanchor: [12, 46]
                    },
                    popup: true
                }];

            // Map Initial Location
            var initLatitude = 40.75198;
            var initLongitude = -73.96978;

            // Map Extended Settings
            var mapSettings = {
                controls: {
                    draggable: (($.browser.mobile) ? false : true),
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 16
            };

            var map = $("#googlemaps").gMap(mapSettings),
                    mapRef = $("#googlemaps").data('gMap.reference');

            // Create an array of styles.
            var mapColor = "#0088cc";

            var styles = [{
                    stylers: [{
                            hue: mapColor
                        }]
                }, {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{
                            lightness: 0
                        }, {
                            visibility: "simplified"
                        }]
                }, {
                    featureType: "road",
                    elementType: "labels",
                    stylers: [{
                            visibility: "off"
                        }]
                }];

            var styledMap = new google.maps.StyledMapType(styles, {
                name: "Styled Map"
            });

            mapRef.mapTypes.set('map_style', styledMap);
            mapRef.setMapTypeId('map_style');

        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-42715764-5', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="master/analytics/analytics.js"></script>

    </body>

    <!-- Mirrored from preview.oklerthemes.com/porto/4.4.0/index-corporate-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2016 16:53:36 GMT -->
</html>
