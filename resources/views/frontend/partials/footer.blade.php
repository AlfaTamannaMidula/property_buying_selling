

<div class="footer-area">

    <div class=" footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>About us </h4>
                        <div class="footer-title-line"></div>

                        <img src="assets/img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                        <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                        <ul class="footer-adress">
                            <li><i class="pe-7s-map-marker strong"> </i> Uttara,Bangladesh</li>
                            <li><i class="pe-7s-mail strong"> </i>propertybuyingselling@company.com</li>
                            <li><i class="pe-7s-call strong"> </i> 22222222222</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Quick links </h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-menu">
                            <li><a href="{{route('post.all')}}">Properties</a>  </li>
                            <li><a href="{{route('user.submit.post.form')}}">Submit property </a></li>
                            <li><a href="{{route('contact.details')}}">Contact us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Last News</h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-blog">
                            <li>

                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">Add news functions </a></h6>
                                    <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                </div>
                            </li>

                            <br>

                            <li>


                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">Add news functions </a></h6>
                                    <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                </div>
                            </li>

                            <br>

                            <li>

                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">Add news functions </a></h6>
                                    <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer news-letter">
                        <h4>Stay in touch</h4>
                        <div class="footer-title-line"></div>
                        <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>




                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copy text-center">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <span> <a href="http://www.KimaroTec.com">Alfa Tamanna Midula</a> , 17103035 </span>
                </div>
                <div class="bottom-menu pull-right">
                    <ul>
                        <li><a class="wow fadeInUp animated" href="{{route('homepage')}}" data-wow-delay="0.2s">Home</a></li>
                        <li><a class="wow fadeInUp animated" href="{{route('post.all')}}" data-wow-delay="0.3s">Property</a></li>

                        <li><a class="wow fadeInUp animated" href="{{route('contact.details')}}" data-wow-delay="0.6s">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('frontend')}}/assets/js/modernizr-2.6.2.min.js"></script>

<script src="{{asset('frontend')}}/assets/js/jquery-1.10.2.min.js"></script>
<script src="{{asset('frontend')}}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap-select.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap-hover-dropdown.js"></script>

<script src="{{asset('frontend')}}/assets/js/easypiechart.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/jquery.easypiechart.min.js"></script>

<script src="{{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>

<script src="{{asset('frontend')}}/assets/js/wow.js"></script>

<script src="{{asset('frontend')}}/assets/js/icheck.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/price-range.js"></script>


<script src="{{asset('frontend')}}/assets/js/jquery.ba-cond.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/jquery.slitslider.js"></script>

<script src="{{asset('frontend')}}/assets/js/main.js"></script>

<script type="text/javascript">
    $(function () {

        var Page = (function () {

            var $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function (slide, pos) {

                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');

                    }
                }),
                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    $nav.each(function (i) {

                        $(this).on('click', function (event) {

                            var $dot = $(this);

                            if (!slitslider.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slitslider.jump(i + 1);
                            return false;

                        });

                    });

                };

            return {init: init};

        })();

        Page.init();

        /**
         * Notes:
         *
         * example how to add items:
         */

        /*

         var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

         // call the plugin's add method
         ss.add($items)

         */

    });
</script>
</body>



</html>
