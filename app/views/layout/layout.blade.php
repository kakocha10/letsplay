<!DOCTYPE html>
<html lang=”en”>
    <head>
        <meta charset="UTF-8" />
            <style type="text/css" title="currentStyle">
        @import "./css/layout.css";
    </style>
    <script type="text/javascript" src="<?php echo asset('js/jquery.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/layout.css')?>" type="text/css"> 
        <title>
            Go
        </title>
    </head>
    <body>
        @include("layout.header")
        <div class="content">
            <div class="container">
                @yield("content")
            </div>
        </div>
    </body>
</html>