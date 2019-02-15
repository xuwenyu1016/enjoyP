<?php exit;?>0015772584681885eebeb20b57d25c8bdb0c32e9ab55s:1429:"a:2:{s:8:"template";s:1365:"
<script type="text/javascript" src="/public/assets/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/assets/lib/jquery-ui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/assets/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/assets/lib/swiper.min.js"></script>

<script src="http://releases.flowplayer.org/7.0.4/flowplayer.min.js"></script>
<script src="http://releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>

<script>

    var swiper = new Swiper('.swiper-container',{
        speed:800,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        },
    });

    $(function() {
        $("img.lazyload").lazyload()});

    function modaldemo(){
        $("#modal-demo").modal("show")
    }

    function modaldemo1(){
        $("#modal-demo1").modal("show");

    }




    $(document).ready(function () {
        $('#player1').click(function(){
            $(this).trigger('play');
            $(this).trigger('pause');
        });

        $('#modal-demo1 .close').click(function(){
            $('#player1').trigger('pause');
        })
    });
</script>

</body>

</html>
";s:12:"compile_time";i:1545722468;}";