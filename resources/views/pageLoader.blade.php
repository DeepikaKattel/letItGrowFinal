<!DOCTYPE html>
<html>
<head>
    <title>Loader</title>
    <link rel="stylesheet" href="{{asset('css/pageLoader.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.0.0.js')}}"></script>
</head>
<body>
    <div class="loader-wrapper">
        <div class="loading">
            Let<span style="color: #4c6792"></span><span style="color:  rgba(40, 215, 226)">IT</span> <span  style="color: #4c6792">Grow</span>
        </div>
        <div class="frame">
            <div class="frame1" id="frame1"></div>
            <div class="frame2" id="frame2"></div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(window).on("load", function(){
        $(".loader-wrapper").fadeOut('8000');
    });
</script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>
