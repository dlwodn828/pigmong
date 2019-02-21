<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <!-- Le styles -->  
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
</head>
<body>

    <div class="container">
        <div id="content">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#red" data-toggle="tab">Red</a></li>
                <li><a href="#orange" data-toggle="tab">Orange</a></li>
                <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
                <li><a href="#green" data-toggle="tab">Green</a></li>
                <li><a href="#blue" data-toggle="tab">Blue</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="red">
                    <h1>Red</h1>
                    <p>red red red red red red</p>
                </div>
                <div class="tab-pane" id="orange">
                    <h1>Orange</h1>
                    <p>orange orange orange orange orange</p>
                </div>
                <div class="tab-pane" id="yellow">
                    <h1>Yellow</h1>
                    <p>yellow yellow yellow yellow yellow</p>
                </div>
                <div class="tab-pane" id="green">
                    <h1>Green</h1>
                    <p>green green green green green</p>
                </div>
                <div class="tab-pane" id="blue">
                    <h1>Blue</h1>
                    <p>blue blue blue blue blue</p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#tabs').tab();
            });
        </script>    
    </div> <!-- container -->


    <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.js"></script>

</body>
</html>