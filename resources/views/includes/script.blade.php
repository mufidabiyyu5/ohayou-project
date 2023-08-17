{{-- <script src="{{Url('frontend/bootstrap/js/bootstrap.js')}}"></script> --}}
<script defer src="{{Url('frontend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{Url('frontend/js/typewriter.min.js')}}"></script>
<script>
        var typewriter = new TypeWriter("typewriter", {
            strings: ["Kaos", "Kemeja", "Jaket", "Sweater", "Topi", "Totebag"],
            // speed: 100,
            delay: 1000,
        });

        typewriter.start();
</script>
<script src="{{url('frontend/js/jquery/jquery.js')}}"></script>
<script src="{{url('frontend/js/xZoom-master/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomwidth: 500,
            title: false,
            tint: "#333",
            xoffset: 15
        });
    });
</script>
<script src="{{url('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
<script>
  AOS.init();
</script>
<script>
    const myNav = document.getElementById('mynav');
        window.onscroll = function () {
            if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
                myNav.classList.add("nav-colored");
                myNav.classList.remove("nav-transparent");
            }
            else {
                myNav.classList.add("nav-transparent");
                myNav.classList.remove("nav-colored");
            }
        };
</script>
<script>
    document.querySelectorAll(".nav-link").forEach((link) => {
        if (link.href === window.location.href) {
            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        }
    });
</script>
<script>
    setInterval(function(){
        $('input')
        .eq( ( $('input:checked').index() + 1 ) % 3 )
        .prop( 'checked', true );
    },3000);
</script>