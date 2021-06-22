<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enigme n°1</title>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Montserrat:700');

    #twitch {
      font-size: 4em;
      margin: 0 auto;
      height: 100vh;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      justify-content: center;
      -webkit-backdrop-filter: blur(10px);
      backdrop-filter: blur(10px);
    }

    #twitch span {
      display: block;
      font-size: .4em;
      opacity: .8;
    }

    #twitch div {
      position: absolute;
      margin: 2vh 0;
      opacity: 0;
      left: 10vw;
      width: 80vw;
      animation: switch 32s linear infinite;
    }

    #twitch div:nth-child(2) { animation-delay: 4s}
    #twitch div:nth-child(3) { animation-delay: 8s}
    #twitch div:nth-child(4) { animation-delay: 12s}
    #twitch div:nth-child(5) { animation-delay: 16s}
    #twitch div:nth-child(6) { animation-delay: 20s}
    #twitch div:nth-child(7) { animation-delay: 24s}
    #twitch div:nth-child(8) { animation-delay: 28s}

    @keyframes switch {
        0% { opacity: 0; filter: blur(3px); transform:scale(.95);  text-shadow: 40px 42px 2px rgba(0,0,0,.2)}
        3% { opacity: .7; filter: blur(2px); transform:scale(1);  text-shadow: 40px 42px 2px rgba(0,0,0,.1)}
        6% { opacity: .7; filter: blur(2px); transform:scale(1);color: #fff;  text-shadow: 40px 42px 2px rgba(0,0,0,.1)}
        10% { opacity: .7; filter: blur(3px); transform:scale(1.1);color: #000;  text-shadow: 40px 42px 2px rgba(0,0,0,.1)}
        10.1% { opacity: .8; filter: blur(2px); transform:scale(2);color: #fff;  text-shadow: -40px -142px 2px rgba(0,0,0,.1)}
     	10.2% { opacity: .8; filter: blur(2px); transform:scale(2);color: #fff;  text-shadow: 40px 42px 2px rgba(0,0,0,0,.1)}
        11.1% { opacity: .8; filter: blur(2px); transform:scale(2);color: #111;;  text-shadow: 40px 42px 2px rgba(0,0,0,.1)}
        11.2% { opacity: .7; filter: blur(2px); transform:scale(2);color: #fff;  text-shadow: 90px 52px 2px rgba(0,0,0,.1)}
        12% { opacity: .7; filter: blur(5px); transform:scale(1.1);color: black;  text-shadow: 90px 52px 2px rgba(0,0,0,0)}
        12.1% { opacity: .7; filter: blur(5px); transform:scale(1.1);color: #000;  text-shadow: -90px -52px 2px rgba(0,0,0,0)}
        13% { opacity: 0; filter: blur(3px); transform:scale(1); color: #000;  text-shadow: 40px 42px 2px}
    	12.1% { opacity: .7; filter: blur(5px); transform:scale(1.1);color: #000;  text-shadow: -90px -52px 2px rgba(0,0,0,0)}
        80% { opacity: 0}
        100% { opacity: 0}
    }


    /* Background */

    body {
    padding: 0;
    margin: 0;
    width: 100vw;
    background-color: rgba(0,0,0,1);
    /*background-size: cover;*/
    background-repeat: no-repeat;
    background-attachment: fixed;
    overflow: hidden;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    color: orange;
    text-align: center;
    z-index: 1;
    background-image: url(enigmes/image1.jpg);
    background-position: center;
  }

    body:before {
    content: "";
    height: 100vh;
    width: 100vw;
    display: block;
    z-index: 1;
    position: fixed;
    overflow: hidden;
    box-shadow: inset 0 0 10em rgba(0,0,0,1);
    animation: flicker 32s linear infinite;
    }

    @keyframes flicker {
    0% {background: #fff;opacity: 0}
    10% {background: #fff;opacity: 0}
    10.1% {background: #fff;opacity: 1}
    10.2% {background: #fff;opacity: 0}
    23% {background: #fff;opacity: 0}
    23.1% {background: #fff;opacity: 1}
    23.2% {background: #fff;opacity: 0}
    35% {background: #fff;opacity: 0}
    35.1% {background: #fff;opacity: 1}
    35.2% {background: #fff;opacity: 0}
    48% {background: #fff;opacity: 0}
    48.1% {background: #fff;opacity: 1}
    48.2% {background: #fff;opacity: 0}
    60% {background: #fff;opacity: 0}
    60.1% {background: #fff;opacity: 1}
    60.2% {background: #fff;opacity: 0}
    72% {background: #fff;opacity: 0}
    72.1% {background: #fff;opacity: 1}
    72.2% {background: #fff;opacity: 0}
    85% {background: #fff;opacity: 0}
    85.1% {background: #fff;opacity: 1}
    85.2% {background: #fff;opacity: 0}
    99% {background: #fff;opacity: 0}
    99.1% {background: #fff;opacity: 1}
    99.2% {background: #fff;opacity: 0}
    100% {background: #fff;opacity: 0}
    }

    .enterName{
      width:90%;
      padding:10px;
      margin:auto;
      text-align:center;
      z-index: 3;
    }
    .enterName input#psw{
      border:0px;
      padding:15px;
      width:20%;

    font-size:16px;
      background-color:#0f0f0f;
      color:white;
      font-weight:bold;
     text-shadow: 0px 0px 10px rgba(36, 239, 0, 1);
       border:1px solid white;
       position: fixed;
       bottom: 10%;
       left: 40%;
       z-index: 3;
    }
    ::-webkit-input-placeholder {
       color: #3b3b3b;
      text-shadow:0px 0px 0px;
    }

    input {
       color: red;
      color: rgb(60, 0, 248);  /* change [input cursor color] by this*/
      text-shadow: 0px 0px 0px #D60B0B; /* change [input font] by this*/
      -webkit-text-fill-color: transparent;
    }

    .enterName input:focus{
      border:1px solid #24ef00;
      font-weight:light;
    }
    #response{
      position: absolute;
      bottom: 20%;
      left: 10%;
      color:#24ef00;
      width:20%;
      z-index:4;
    }
    #tracker_container{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
      width: 100%;
      height: 20px;
      position: absolute;
      bottom: 5%;
      left: 0;
    }
    #tracker_container2{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
      width: 100%;
      height: 20px;
      position: absolute;
      top: 5%;
      left: 0;
    }
    .tracker {
      width: 10px;
      height: 10px;
      border-radius: 100%;
      background-color: #ffeffb;
      animation: trackerWaves 0.7s ease-out infinite;
    }

    @keyframes trackerWaves {
      0% {
        box-shadow: 0px 0px 10px 5px rgba(36, 239, 0, 1);
      }
      25% {
        box-shadow: 0px 0px 20px 10px rgba(36, 239, 0, 0.75);
      }
      50% {
        box-shadow: 0px 0px 30px 15px rgba(36, 239, 0, 0.50);
      }
      75% {
        box-shadow: 0px 0px 50px 20px rgba(36, 239, 0, 0.25);
      }
      100% {
        box-shadow: 0px 0px 200px 30px rgba(36, 239, 0, 0);
      }
    }
    </style>
  </head>
  <body>
    <div id="twitch">
    <div>Horreur<span>Fsociety</span></div>
    <div>Je sais<span>Tout</span></div>
    <div><span>Même</span> ça </div>
    <div>Je te<span>vois</span></div>
    <div>Etrange<span>atmosphere</span></div>
    <div><span>Reste</span> là </div>
    <div>Drôle<span>d'énigme</span></div>
    <div><span>Regarde</span>Derrière Toi</div>
    </div>

    <div class="enterName">
      <form action="" method="POST">
        <p id="response">
          <?php
          if (isset($_POST['password'])) {
            $psw = $_POST['password'];
            if ($psw == "hfjtmçjvearlddrd" or $psw == "hfjtmcjvearlddrd" or $psw=="HFJTMCJVEARLDDRD" or $psw=="Hfjtmcjvearlddrd") {
              echo 'Bon code ! Rendez-vous sur la page énigme : <a href="enigmes/sdfdfezs.php">link</a>' ;
            }
            else {
              echo "Mauvais code...";
            }
          }
           ?></p>
    <input type="text" name="password" id="psw" placeholder="Type your secret code."/>
    <input type="submit" name="" value="">
  </form>

    </div>
    <div id="tracker_container">
      <div class="tracker"></div>
      <div class="tracker"></div>
      <div class="tracker"></div>
      <div class="tracker"></div>
    </div>
    <div id="tracker_container2">
      <div class="tracker"></div>
      <div class="tracker"></div>
      <div class="tracker"></div>
      <div class="tracker"></div>
    </div>
  </body>
</html>
