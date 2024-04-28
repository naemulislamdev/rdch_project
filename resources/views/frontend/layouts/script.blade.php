<script>
    $(document).ready(function() {
        $(".navbar-light .dmenu").hover(
            function() {
                $(this).find(".sm-menu").first().stop(true, true).slideDown(150);
            },
            function() {
                $(this).find(".sm-menu").first().stop(true, true).slideUp(105);
            }
        );
    });

    $(document).ready(function() {
        $(".megamenu").on("click", function(e) {
            e.stopPropagation();
        });
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
<script>
    window.onscroll = function() { stickyHeader() };

    const header = document.getElementById("header");
    const sticky = header.offsetTop;

    function stickyHeader() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>
