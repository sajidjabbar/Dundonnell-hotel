<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<!-- Jquery JS -->
<script>
  $(document).ready(function() {
    $(window).on('load', function() {
      $("#preloader").fadeOut(1000);
    });
  })
  // Mobile Nav
  $('document').ready(function() {
    $('#header .canvas-icon i').click(function() {
      $("#header .mobile-header").addClass('show');
    });

    $('#header .mobile-header .cancel').click(function() {
      $("#header .mobile-header").removeClass('show');
    });
  });
  // Mobile Nav
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
</script>