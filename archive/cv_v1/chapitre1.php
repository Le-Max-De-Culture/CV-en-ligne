<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chapitre 1</title>
    <style media="screen">
    *{
      margin:0;
      padding:0;
    }
    body {
    	 background: black;
    	 font-family: "Varela", sans-serif;
       height:100vh;
       display:flex;
       flex-direction:column;
       justify-content:center;
       align-items:center;
    }
     .glitch {
    	 color: white;
    	 font-size: 100px;
    	 position: relative;
    	 width: 400px;
    	 margin: 0 auto;
    }
     @keyframes noise-anim {
    	 0% {
    		 clip-path: inset(40% 0 17% 0);
    	}
    	 5% {
    		 clip-path: inset(75% 0 15% 0);
    	}
    	 10% {
    		 clip-path: inset(41% 0 41% 0);
    	}
    	 15% {
    		 clip-path: inset(2% 0 3% 0);
    	}
    	 20% {
    		 clip-path: inset(79% 0 12% 0);
    	}
    	 25% {
    		 clip-path: inset(72% 0 8% 0);
    	}
    	 30% {
    		 clip-path: inset(58% 0 4% 0);
    	}
    	 35% {
    		 clip-path: inset(57% 0 43% 0);
    	}
    	 40% {
    		 clip-path: inset(25% 0 61% 0);
    	}
    	 45% {
    		 clip-path: inset(7% 0 72% 0);
    	}
    	 50% {
    		 clip-path: inset(10% 0 5% 0);
    	}
    	 55% {
    		 clip-path: inset(21% 0 5% 0);
    	}
    	 60% {
    		 clip-path: inset(92% 0 9% 0);
    	}
    	 65% {
    		 clip-path: inset(87% 0 5% 0);
    	}
    	 70% {
    		 clip-path: inset(8% 0 34% 0);
    	}
    	 75% {
    		 clip-path: inset(20% 0 74% 0);
    	}
    	 80% {
    		 clip-path: inset(49% 0 2% 0);
    	}
    	 85% {
    		 clip-path: inset(67% 0 29% 0);
    	}
    	 90% {
    		 clip-path: inset(53% 0 13% 0);
    	}
    	 95% {
    		 clip-path: inset(14% 0 7% 0);
    	}
    	 100% {
    		 clip-path: inset(86% 0 4% 0);
    	}
    }
     .glitch::after {
    	 content: attr(data-text);
    	 position: absolute;
    	 left: 2px;
    	 text-shadow: -1px 0 red;
    	 top: 0;
    	 color: white;
    	 background: black;
    	 overflow: hidden;
    	 animation: noise-anim 2s infinite linear alternate-reverse;
    }
     @keyframes noise-anim-2 {
    	 0% {
    		 clip-path: inset(58% 0 6% 0);
    	}
    	 5% {
    		 clip-path: inset(100% 0 1% 0);
    	}
    	 10% {
    		 clip-path: inset(91% 0 1% 0);
    	}
    	 15% {
    		 clip-path: inset(45% 0 51% 0);
    	}
    	 20% {
    		 clip-path: inset(15% 0 16% 0);
    	}
    	 25% {
    		 clip-path: inset(64% 0 18% 0);
    	}
    	 30% {
    		 clip-path: inset(100% 0 1% 0);
    	}
    	 35% {
    		 clip-path: inset(1% 0 79% 0);
    	}
    	 40% {
    		 clip-path: inset(88% 0 1% 0);
    	}
    	 45% {
    		 clip-path: inset(76% 0 16% 0);
    	}
    	 50% {
    		 clip-path: inset(15% 0 24% 0);
    	}
    	 55% {
    		 clip-path: inset(70% 0 30% 0);
    	}
    	 60% {
    		 clip-path: inset(83% 0 10% 0);
    	}
    	 65% {
    		 clip-path: inset(9% 0 74% 0);
    	}
    	 70% {
    		 clip-path: inset(74% 0 14% 0);
    	}
    	 75% {
    		 clip-path: inset(93% 0 4% 0);
    	}
    	 80% {
    		 clip-path: inset(55% 0 34% 0);
    	}
    	 85% {
    		 clip-path: inset(66% 0 9% 0);
    	}
    	 90% {
    		 clip-path: inset(12% 0 2% 0);
    	}
    	 95% {
    		 clip-path: inset(83% 0 5% 0);
    	}
    	 100% {
    		 clip-path: inset(84% 0 4% 0);
    	}
    }
     .glitch::before {
    	 content: attr(data-text);
    	 position: absolute;
    	 left: -2px;
    	 text-shadow: 1px 0 blue;
    	 top: 0;
    	 color: white;
    	 background: black;
    	 overflow: hidden;
    	 animation: noise-anim-2 15s infinite linear alternate-reverse;
    }

    </style>
  </head>
  <body>
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

<div class="glitch" data-text="Perdu ?">Perdu ?</div>
  </body>
</html>
