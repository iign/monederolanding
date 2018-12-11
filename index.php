<!DOCTYPE html>
<html lang="en">
<head>
  <title>MONEDEROsmart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#50e3c2">
    <meta name="msapplication-TileColor" content="#36423f">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


  <div class="size1 bg0 where1-parent">
    <!-- Slanted section -->
    <?php
        $n = rand(1, 5);
    ?>
    <div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2"
         style="background-image: url('images/bg-<?php echo $n ?>.jpg');">

    </div>

    <!-- Form -->
    <div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
      <div class="logo-wrap">
        <img class="logo-img" src="images/logo.svg" alt="Logo de MONEDEROsmart">
      </div>

      <div class="p-t-50 p-b-60">
        <p class="m1-txt1 p-b-36">
            Estamos creando una <strong>comunidad de finanzas</strong> enfocada en gente como tú.
            Suscríbete para estar al tanto.
        </p>

        <form class="contact100-form validate-form" action="#" method="POST">
          <div class="wrap-input100 m-b-10 validate-input" data-validate = "Ingresa tu nombre">
            <input class="s2-txt1 placeholder0 input100" type="text" name="name" placeholder="Tu nombre">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 m-b-10 validate-input" data-validate = "Ingresa tu apellido">
            <input class="s2-txt1 placeholder0 input100" type="text" name="lastname" placeholder="Tu apellido">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 m-b-20 validate-input" data-validate = "Ingresa tu email">
            <input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
          </div>

          <div class="w-full">
            <button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04">
              Suscríbeme
            </button>
          </div>
        </form>

        <p class="s2-txt3 p-t-18">
          No te preocupes. ¡Odiamos el spam! Puedes desuscribirte en cualquier momento.
        </p>
      </div>

      <div class="flex-w">
        <a href="https://www.facebook.com/monederosmart/" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
          <i class="fa fa-facebook"></i>
        </a>

      </div>
    </div>
  </div>


  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/countdowntime/moment.min.js"></script>
  <script src="vendor/countdowntime/moment-timezone.min.js"></script>
  <script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script>
    $('.cd100').countdown100({
      /*Set Endtime here*/
      /*Endtime must be > current time*/
      endtimeYear: 0,
      endtimeMonth: 0,
      endtimeDate: 35,
      endtimeHours: 18,
      endtimeMinutes: 0,
      endtimeSeconds: 0,
      timeZone: ""
      // ex:  timeZone: "America/New_York"
      //go to " http://momentjs.com/timezone/ " to get timezone
    });
  </script>
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <script src="js/main.js"></script>

</body>
</html>
