        <footer class="section footer light-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="contact-details">
                            <img width="300px" src="images/logo2.png">
                            <p>E-posta: <a href="mailto:#">uzunlar@uzunlar-insaat.com</a></p>
                            <p>Telefon: +90 534 678 32 21</p>
                            <ul class="list-inline social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <p><strong>Tüm Hakları Sakldır © 2021 uzunlar-insaat.com </strong>
                        </div><!-- end details -->
                    </div><!-- end light-footer -->
                </div><!-- end row -->    
            </div><!-- end container -->
        </footer><!-- end footer -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/progress.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/revslider.js"></script>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
            var tpj = jQuery;

            var revapi8;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_8_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_8_1");
                } else {
                    revapi8 = tpj("#rev_slider_8_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style:"zeus",
                                enable:true,
                                hide_onmobile:true,
                                hide_under:600,
                                hide_onleave:true,
                                hide_delay:200,
                                hide_delay_mobile:1200,
                                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align:"left",
                                    v_align:"center",
                                    h_offset:30,
                                    v_offset:0
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"center",
                                    h_offset:30,
                                    v_offset:0
                                }
                            }
                        },
                        gridwidth: 800,
                        gridheight: 700,
                        lazyType: "single",
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            }); /*ready*/
        </script>

</body>
</html>