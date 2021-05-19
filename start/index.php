<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Choose your character</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="import-css/bootstrap.min.css">
        <script src="jquery.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
    </head>
    <body>
        
        <!--<div class=introcontainer>
            <div class="intro">
                <?php require("mov/vid.php")?>
    
            </div>
            <script src="jquery-1.11.2.min.js"></script>
            <script src="moment.js"></script>
            <script src="jquery.countdown.min.js"></script>
            <script>
                $(document).ready(function () {
                    var nowPlus30Seconds = moment().add('10', 'seconds').format('YYYY/MM/DD HH:mm:ss');

                        $('.count1').countdown(nowPlus30Seconds)
                        .on('update.countdown', function (event) { $(this).html(event.strftime('%Y : %D : %H : %M : %S')); })
                        .on('finish.countdown', function () { $('#intro').hide(); });
                        });
            </script>
        </div>-->
        <div class="maycontainer"><!--column-->
        <div class="card" style="width:400px">
            <h1 id="h1header">Sjåfør</h1>
            <img class="card-img-top" src="avatar.png" alt="Card image" style="width:100%">
            <div class="card-body">
            <h4 class="card-title">Lynx</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <!--<button id='choice' class="btn btn-primary stretched-link" onclick="hidehidden()">Hello</button>-->
            <a onclick="hidehidden()" class="btn btn-primary stretched-link" id="choice4">drikker du ikke?</a>
                <div id="hidden" style="display: none"><p class="card-text">You can't see this</p></div>
            </div>
        </div>
    </div>

</div>

<div id="secret-overlay">
    <div id="secret-content">
        <h1>You've found a secret!</h1>
        <br>
        <a href="secret.html" style="text-decoration: none;">What could it be?</a>
        <br>
        <a style="text-decoration: none; font-size: 10px; cursor: pointer;" onclick="hide()"> Actually, take me back</a>
    </div>
</div>

<style>
    body{background-color: #252525;}
    div#header {
        margin: 0;
        position: absolute;
        top: 30%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)}
        #header{color: grey;}
        
        div#May {
            margin: 0;
            position: absolute;
            top: 45%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)}
            #May-hello{color: grey;}
            </style>
<script src="actions.js"></script>
</body>
</html>