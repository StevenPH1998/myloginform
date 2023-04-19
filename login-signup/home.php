<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
    <style>
        body {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        img {
            width: 100%;
            height: 100%;
        }
        #text {
            font-size: 80px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .flash-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgb(0, 0, 0);
  animation: flash 2s ease-in-out infinite;
}
@keyframes flash {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
    </style>
            <script src="js/rainyday.min.js"></script>
            <script>
                function run() {
                    var image = document.getElementById('background');
                    image.onload = function () {
                        var engine = new RainyDay({
                            image: this
                        });
                        engine.rain([
                            [3, 6, 7]
                        ], 100);
                    };
                    image.crossOrigin = 'anonymous';
                    image.src = 'background.jpg';
                }
                var flashScreen = document.querySelector('.flash-screen');

function toggleFlash() {
  flashScreen.classList.toggle('flash');
}

setInterval(toggleFlash, 1000);
            </script>
</head>
<body onload="run();">
<div style="position: relative;">
    <img id="background" alt="" src="" />
    <div class="flash-screen" style="z-index: 4000;"></div>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
        <div class="shadow w-450 p-3 text-center" style="z-index: 4000;">
            <h3 class="display-4 typewriter" id="text" >Hello, <?=$_SESSION['fname']?> </h3>
            <a href="logout.php" class="btn btn-warning">Logout</a>
            <a href="music-player/index.html" class="btn btn-warning">Listen to Music</a>
        </div>
    </div>
</div>
<h4 class="typewriter"></h4>
</body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>