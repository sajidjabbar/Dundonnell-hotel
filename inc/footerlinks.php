<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--<script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.6.1/dist/lazyload.min.js"></script>-->

<!--<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<!--<script src="js/script.js"></script>-->
<!-- slick slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- slick slider js -->

<!-- boostrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<script type="text/javascript" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
<!--  <script type="text/javascript" src="script.js"></script>-->
<script src="js/cascade-slider.js"></script>
<!-- boostrap -->
<!-- about slider js -->
<script>
    $('#cascade-slider').cascadeSlider({
        responsive: true,
    });
</script>
<!-- about slider js -->

<script>
    $(window).on("load", function() {
        // console.log("test");
        $("#preloader").fadeOut(1000);
    });
    $('document').ready(function() {
        $('.nav-icons .canvas-icon i').click(function() {
            $("#header .mobile-header").addClass('show');
        });

        $('#header .mobile-header .cancel').click(function() {
            $("#header .mobile-header").removeClass('show');
        });
    });
    $('.slide-this').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    $('.img-wrapper-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('document').ready(function() {
        $('.canvas-icon i').click(function() {
            $("#header .mobile-header").addClass('show');
        });

        $('#header .mobile-header .cancel').click(function() {
            $("#header .mobile-header").removeClass('show');
        });
    });
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })
    $('.slide-thisss').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    var acc = document.getElementsByClassName("accordiontwo");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
<script>
    $(function() {
        $('.slide-up a').click(function() {
            $('html, body').animate({
                scrollTop: $('.footer').offset().top
            }, 'slow ');
            return false;
        });
    });
</script>
<script>
    $(".increment-quantity,.decrement-quantity").on("click", function(ev) {
        var currentQty = $('input[name="quantity"]').val();
        var qtyDirection = $(this).data("direction");
        var newQty = 0;

        if (qtyDirection == "1") {
            newQty = parseInt(currentQty) + 1;
        } else if (qtyDirection == "-1") {
            newQty = parseInt(currentQty) - 1;
        }

        // make decrement disabled at 1
        if (newQty == 1) {
            $(".decrement-quantity").attr("disabled", "disabled");
        }

        // remove disabled attribute on subtract
        if (newQty > 1) {
            $(".decrement-quantity").removeAttr("disabled");
        }

        if (newQty > 0) {
            newQty = newQty.toString();
            $('input[name="quantity"]').val(newQty);
        } else {
            $('input[name="quantity"]').val("1");
        }
    });
</script>
<script>
    // $(".dundon-btn").click(function() {
    //     $("section.booking-form-sec").css("display", "none");
    //     $("section.booking-form-sec").css("display", "none");
    // });
    // $(".dundon-btn").click(function() {
    //     $("section.booking-page-main").css("display", "block");
    //     $("section.booking-form-sec").this(".m");
    // });
    $('document').ready(function() {
        $('.dundon-btn').click(function() {
            $(".booking-page-main").removeClass('hide')
            $('.boking-slider-wrappers').addClass('hide')
        });
    });
    //     var glide = new Glide('.glide-slie .glide', {
    //   type: 'carousel',
    //   perView: 3
    // })
    //
    // glide.mount()
</script>
<script>
        $('.img-wrapper-slider90').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.img-wrapper-slider2').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>