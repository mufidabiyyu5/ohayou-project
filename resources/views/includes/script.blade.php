<script src="{{Url('Project/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{Url('Project/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{Url('Project/js/typewriter.min.js')}}"></script>
<script>
        var typewriter = new TypeWriter("typewriter", {
            strings: ["Kaos", "Kemeja", "Jaket", "Sweater", "Topi", "Totebag"],
            // speed: 100,
            delay: 1000,
        });

        typewriter.start();
</script>
<script src="{{url('Project/js/node_modules/jquery/dist/jquery.js')}}"></script>
<script src="{{url('Project/js/xZoom-master/dist/xzoom.min.js')}}"></script>
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