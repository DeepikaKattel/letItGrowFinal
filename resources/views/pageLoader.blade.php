<!DOCTYPE html>
<html>
<head>
    <title>Loader</title>
    <link rel="stylesheet" href="{{asset('css/pageLoader.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.0.0.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>
    <div class="hourglass"></div>
</body>
<script> 
        $(document).ready(function() {
          window.onload = function () {
          $('.hourglass').fadeOut(500, function(){ $('.hourglass').remove(); } );
          }
          });
    </script> 
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>
