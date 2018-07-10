   window.onscroll = displaymyheader;
        window.onload = displaymyheader;
        window.onresize = displaymyheader;
        function displaymyheader() {
            var ww = window.innerWidth;
            var wh = window.innerHeight;
            var hw = $(".headere").width();
            var hh = $(".headere").height()+180;
            var off = window.pageYOffset;
            if (off > hh) {
                if (ww > hw) {
                    $(".headere").show();
                    $(".headere").css({"position": "fixed", "top": "0"});
} else {

                    $(".headere").hide();
                    $(".headere").css({"position": "static"});
                }
            }
            else {
                $(".headere").hide();
                 $(".headere").css({ "position": "static" });
            }
        }