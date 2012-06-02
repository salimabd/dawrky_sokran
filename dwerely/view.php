<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.2.1.js" type="text/javascript"> </script>
        <script src="js/cylce.js" type="text/javascript"> </script>
        <script>
            $(document).ready(function () {
                $("#slider").cycle({
                    fx:'fade',
                    speed:2000,
                    timeout : 5000
                });
  
     
            });
        </script>
    </head>
    <body>

        <div id="header">
            <div id="header_cont">
                <div id="three_color"></div>
                <div class="clear"></div>
                <img src ="images/logo.png" id="logo"/>
            </div>

        </div>
        <div id="content">
            <div id="silder_cont">
                <div id="slider">
                    <img src="images/slider_img.png"/>
                    <img src="images/lands_img.jpg"/>
                </div>
            

            <img id="seperator" src="images/sample.png"/>
            <div class="conent_view"></div>
            <div id="desc_">
                <div id="words">
                    <p> كلام كلام كلام </p>
                </div>
                
                    <img id="map" src="images/map.jpg"/>
                
            </div>
            <div class="conent_view"></div>
               
        </div>
</div>

        <div id="footer">
            <div id="red_bg"></div>


        </div>





    </body>
</html>
