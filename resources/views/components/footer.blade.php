   <!-- footer start -->
   <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{asset('/')}}img/logo2.png" alt="wmc location" class="img-fluid">
                                </a>
                            </div>
                            <p>
                                    <a href="#">info@wmclocations.com</a> <br>
                                    Netherlands, Amsterdam

                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/wmclocations/?igshid=16l96vvo67d0">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="{{asset('/all')}}"> locations</a></li>
                                <li><a href="{{asset('/')}}">Search Locations</a></li>
                                <li><a href="{{asset('/home')}}">My Account</a></li>
                                <li><a href="{{asset('/login')}}">Login & Register</a></li>
                                <li><a href="https://worldmediacrew.com/" class="text-warning">Become Crew members</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Partner program
                            </h3>
                            <ul>
                                <li><a href="{{asset('/about')}}">About</a></li>
                                <li><a href="{{asset('/contact')}}"> Contact</a></li>
                                <li><a href="{{asset('/contact')}}">Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Partner program
                            </h3>
                            <ul>
                                <li><a href="{{asset('/about')}}">About</a></li>
                                <li><a href="{{asset('/register')}}">Become a renter</a></li>
                                <li><a href="{{asset('/contact')}}"> Contact</a></li>
                                <li><a href="{{asset('/contact')}}">Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright WMC Locations All rights reserved | developed by DFAM Digital Agency
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  <!-- Bootstrap core JavaScript -->

  <!--<script src="{{asset('/')}}vendor/jquery/jquery.min.js"></script>-->
  <!--<script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

  @yield('footer')
    <!-- JS here -->
    <script src="{{asset('/')}}js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="{{asset('/')}}js/popper.min.js"></script>
    <script src="{{asset('/')}}js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}js/owl.carousel.min.js"></script>
    <script src="{{asset('/')}}js/isotope.pkgd.min.js"></script>
    <script src="{{asset('/')}}js/ajax-form.js"></script>
    <script src="{{asset('/')}}js/waypoints.min.js"></script>
    <script src="{{asset('/')}}js/jquery.counterup.min.js"></script>
    <script src="{{asset('/')}}js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/')}}js/scrollIt.js"></script>
    <script src="{{asset('/')}}js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('/')}}js/wow.min.js"></script>
    <script src="{{asset('/')}}js/nice-select.min.js"></script>
    <script src="{{asset('/')}}js/jquery.slicknav.min.js"></script>
    <script src="{{asset('/')}}js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{asset('/')}}js/slick.min.js"></script>

    <script  src="{{asset('/')}}/js/stripe.js"></script>


    <!--contact js-->
    <script src="{{asset('/')}}js/contact.js"></script>
    <script src="{{asset('/')}}js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('/')}}js/jquery.form.js"></script>
    <script src="{{asset('/')}}js/jquery.validate.min.js"></script>
    <script src="{{asset('/')}}js/mail-script.js"></script>


    <script src="{{asset('/')}}js/main.js"></script>
    <script src="{{asset('/')}}js/city-search.js"></script>

	<!-- JQUERY STEP -->
	<script src="{{asset('/')}}js/jquery.steps.js"></script>

	<!-- DATE-PICKER -->
{{--	<script src="{{asset('/')}}booker/vendor/date-picker/js/datepicker.js"></script>--}}
{{--	<script src="{{asset('/')}}booker/vendor/date-picker/js/datepicker.en.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>
    
    <script>
            $(document).ready(function(){
                $('#formica').submit(function(e){

                    let company = $('#company').val();
                    let tel = $('#tel').val();
                    let add = $('#add').val();
                    let country = $('#sel_depart').val();
                    let zip = $('#zip').val();

                    let companym = document.getElementById('comp-mistake');
                    let telm = document.getElementById('tel-mistake');
                    let addm = document.getElementById('add-mistake');
                    let citym = document.getElementById('city-mistake');
                    
                    let errors = [];

                    let phone =/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
                    

                    if(company == "")
                    {
                        errors.push = "Mistake";
                        $('#company').css('border-color','red');
                        e.preventDefault();
                    }
                    
                        
                    if(tel == "")
                    {
                        errors.push = "Mistake";
                        $('#tel').css('border-color','red');
                        e.preventDefault();
                    }
                    else if(!tel.match(phone))
                    {
                        telm.innerHTML = "Phone nummber is invalid";
                        errors.push = "Mistake phone";
                    }
                       
                    if(add == "")
                    {
                        errors.push = "Mistake";
                        $('#add').css('border-color','red');
                        e.preventDefault();
                    }

                    if(country == "")
                    {
                        errors.push = "Mistake";
                        $('#sel_depart').css('border-color','red');
                        e.preventDefault();
                    }

                    if(zip == "")
                    {
                        errors.push = "Mistake";
                        $('#zip').css('border-color','red');
                        e.preventDefault();
                    }

                    if(errors.length==0)
                    {
                            
                        return true;
                        
                            
                    }


                    
                });
            });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="{{asset('/')}}js/select2.js"></script>
    <script src="{{asset('/')}}js/roomscripts.js"></script>
  
       
  
        
	<script src="{{asset('/')}}js/main.js"></script>
    
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 1000,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);
               
                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value andjicamax">' + $('#slider').slider('values', 1) +
            'k</span>');
            console.log( $("#minval").val(ui.values[0]));
    </script>
<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs;
window.errors = [];
// No BACK button on first screen
if($(".show").hasClass("first-screen")) {
$(".prev").css({ 'display' : 'none' });
}``

// Next button
$('.next-button').on('click', function(){
if(window.errors.length>0)
{
    window.errors = [];
    return false;
}
       current_fs = $(this).parent().parent();
       next_fs = $(this).parent().parent().next();

       $(".prev").css({ 'display' : 'block' });

       $(current_fs).removeClass("show");
       $(next_fs).addClass("show");

       $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

       current_fs.animate({}, {
           step: function() {

               current_fs.css({
                   'display': 'none',
                   'position': 'relative'
               });

               next_fs.css({
                   'display': 'block'
               });
           }
       });



});

// Previous button
$(".prev").click(function(){

current_fs = $(".show");
previous_fs = $(".show").prev();

$(current_fs).removeClass("show");
$(previous_fs).addClass("show");

$(".prev").css({ 'display' : 'block' });

if($(".show").hasClass("first-screen")) {
$(".prev").css({ 'display' : 'none' });
}

$("#progressbar li").eq($(".card2").index(current_fs)).removeClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

previous_fs.css({
'display': 'block'
});
}
});
});

});

/* card */
$('#bologna-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})


(function (factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define([
            'jquery',
            './blueimp-gallery'
        ], factory);
    } else {
        factory(
            window.jQuery,
            window.blueimp.Gallery
        );
    }
}(function ($, Gallery) {
    'use strict';

    $.extend(Gallery.prototype.options, {
        useBootstrapModal: true
    });

    var close = Gallery.prototype.close,
        imageFactory = Gallery.prototype.imageFactory,
        videoFactory = Gallery.prototype.videoFactory,
        textFactory = Gallery.prototype.textFactory;

    $.extend(Gallery.prototype, {

        modalFactory: function (obj, callback, factoryInterface, factory) {
            if (!this.options.useBootstrapModal || factoryInterface) {
                return factory.call(this, obj, callback, factoryInterface);
            }
            var that = this,
                modalTemplate = this.container.children('.modal'),
                modal = modalTemplate.clone().show()
                    .on('click', function (event) {
                        // Close modal if click is outside of modal-content:
                        if (event.target === modal[0] ||
                                event.target === modal.children()[0]) {
                            event.preventDefault();
                            event.stopPropagation();
                            that.close();
                        }
                    }),
                element = factory.call(this, obj, function (event) {
                    callback({
                        type: event.type,
                        target: modal[0]
                    });
                    modal.addClass('in');
                }, factoryInterface);
            modal.find('.modal-title').text(element.title || String.fromCharCode(160));
            modal.find('.modal-body').append(element);
            return modal[0];
        },

        imageFactory: function (obj, callback, factoryInterface) {
            return this.modalFactory(obj, callback, factoryInterface, imageFactory);
        },

        videoFactory: function (obj, callback, factoryInterface) {
            return this.modalFactory(obj, callback, factoryInterface, videoFactory);
        },

        textFactory: function (obj, callback, factoryInterface) {
            return this.modalFactory(obj, callback, factoryInterface, textFactory);
        },

        close: function () {
            this.container.find('.modal').removeClass('in');
            close.call(this);
        }

    });

}));


/*
 * Bootstrap Image Gallery JS Demo 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://www.opensource.org/licenses/MIT
 */

/*jslint unparam: true */
/*global blueimp, $ */

$(function () {
    'use strict';

    // Load demo images from flickr:
    $.ajax({
        // Flickr API is SSL only:
        // https://code.flickr.net/2014/04/30/flickr-api-going-ssl-only-on-june-27th-2014/
        url: 'https://api.flickr.com/services/rest/',
        data: {
            format: 'json',
            method: 'flickr.interestingness.getList',
            api_key: '7617adae70159d09ba78cfec73c13be3' // jshint ignore:line
        },
        dataType: 'jsonp',
        jsonp: 'jsoncallback'
    }).done(function (result) {
        var linksContainer = $('#links'),
            baseUrl;
        // Add the demo images as links with thumbnails to the page:
        $.each(result.photos.photo, function (index, photo) {
            baseUrl = 'https://farm' + photo.farm + '.static.flickr.com/' +
                photo.server + '/' + photo.id + '_' + photo.secret;
            $('<a/>')
                .append($('<img>').prop('src', baseUrl + '_s.jpg'))
                .prop('href', baseUrl + '_b.jpg')
                .prop('title', photo.title)
                .attr('data-gallery', '')
                .appendTo(linksContainer);
        });
    });

    $('#borderless-checkbox').on('change', function () {
        var borderless = $(this).is(':checked');
        $('#blueimp-gallery').data('useBootstrapModal', !borderless);
        $('#blueimp-gallery').toggleClass('blueimp-gallery-controls', borderless);
    });

    $('#fullscreen-checkbox').on('change', function () {
        $('#blueimp-gallery').data('fullScreen', $(this).is(':checked'));
    });

    $('#image-gallery-button').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#links a'), $('#blueimp-gallery').data());
    });

    $('#video-gallery-button').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery([
            {
                title: 'Sintel',
                href: 'https://archive.org/download/Sintel/sintel-2048-surround_512kb.mp4',
                type: 'video/mp4',
                poster: 'https://i.imgur.com/MUSw4Zu.jpg'
            },
            {
                title: 'Big Buck Bunny',
                href: 'https://upload.wikimedia.org/wikipedia/commons/7/75/' +
                    'Big_Buck_Bunny_Trailer_400p.ogg',
                type: 'video/ogg',
                poster: 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/' +
                    'Big.Buck.Bunny.-.Opening.Screen.png/' +
                    '800px-Big.Buck.Bunny.-.Opening.Screen.png'
            },
            {
                title: 'Elephants Dream',
                href: 'https://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/' +
                    'Elephants_Dream_%28high_quality%29.ogv/' +
                    'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
                type: 'video/webm',
                poster: 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/' +
                    'Elephants_Dream_s1_proog.jpg/800px-Elephants_Dream_s1_proog.jpg'
            },
            {
                title: 'LES TWINS - An Industry Ahead',
                type: 'text/html',
                youtube: 'zi4CIXpx7Bg'
            },
            {
                title: 'KN1GHT - Last Moon',
                type: 'text/html',
                vimeo: '73686146',
                poster: 'https://secure-a.vimeocdn.com/ts/448/835/448835699_960.jpg'
            }
        ], $('#blueimp-gallery').data());
    });

});
    </script>
<script>
function goBack() {
    window.history.back();
  }
</script>



</body>

</html>
