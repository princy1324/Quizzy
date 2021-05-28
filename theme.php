<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
      function initparticles() {
   bubbles();
   hearts();
   lines();
   confetti();
   fire();
   sunbeams();
}

/*The measurements are ... whack (so to say), for more general text usage I would generate different sized particles for the size of text; consider this pen a POC*/

function bubbles() {
   $.each($(".particletext.bubbles"), function(){
      var bubblecount = ($(this).width()/50)*10;
      for(var i = 0; i <= bubblecount; i++) {
         var size = ($.rnd(40,80)/10);
         $(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}

function hearts() {
   $.each($(".particletext.hearts"), function(){
      var heartcount = ($(this).width()/50)*5;
      for(var i = 0; i <= heartcount; i++) {
         var size = ($.rnd(60,120)/10);
         $(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}

function lines() {
   $.each($(".particletext.lines"), function(){
      var linecount = ($(this).width()/50)*10;
      for(var i = 0; i <= linecount; i++) {
         $(this).append('<span class="particle" style="top:' + $.rnd(-30,30) + '%; left:' + $.rnd(-10,110) + '%;width:' + $.rnd(1,3) + 'px; height:' + $.rnd(20,80) + '%;animation-delay: -' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}

function confetti() {
   $.each($(".particletext.confetti"), function(){
      var confetticount = ($(this).width()/50)*10;
      for(var i = 0; i <= confetticount; i++) {
         $(this).append('<span class="particle c' + $.rnd(1,2) + '" style="top:' + $.rnd(10,50) + '%; left:' + $.rnd(0,100) + '%;width:' + $.rnd(6,8) + 'px; height:' + $.rnd(3,4) + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}

function fire() {
   $.each($(".particletext.fire"), function(){
      var firecount = ($(this).width()/50)*20;
      for(var i = 0; i <= firecount; i++) {
         var size = $.rnd(8,12);
         $(this).append('<span class="particle" style="top:' + $.rnd(40,70) + '%; left:' + $.rnd(-10,100) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,20)/10) + 's;"></span>');
      }
   });
}

function sunbeams() {
   $.each($(".particletext.sunbeams"), function(){
      var linecount = ($(this).width()/50)*10;
      for(var i = 0; i <= linecount; i++) {
         $(this).append('<span class="particle" style="top:' + $.rnd(-50,0) + '%; left:' + $.rnd(0,100) + '%;width:' + $.rnd(1,3) + 'px; height:' + $.rnd(80,160) + '%;animation-delay: -' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}

jQuery.rnd = function(m,n) {
      m = parseInt(m);
      n = parseInt(n);
      return Math.floor( Math.random() * (n - m + 1) ) + m;
}

initparticles();


  </script>
  <style type="text/css">
   body {
   padding:40px 0;
   font-family: 'bebas', sans-serif;
   background-color:#fff;
   .textcontainer {padding:40px 0;text-align:center;}
   .particletext {
      text-align:center;
      font-size:48px;
      position: relative;
      &.bubbles {
         >.particle {
            opacity:0;
            position: absolute;
            background-color:rgba(33,150,243,0.5);
            animation: bubbles 3s ease-in infinite;
            border-radius:100%;
         }
      }
      &.hearts {
         >.particle {
            opacity:0;
            position: absolute;
            background-color:rgba(204,42,93,1);
            animation: hearts 3s ease-in infinite;
            &:before, &:after {
               position: absolute;
               content: '';
               border-radius:100px;
               top:0px;
               left:0px;
               width:100%;
               height:100%;
               background-color:rgba(204,42,93,1);
            }
            &:before {
               transform:translateX(-50%);
            }
            &:after {
               transform:translateY(-50%);
            }
         }
      }
      &.lines {
         >.particle {
            position: absolute;
            background-color:rgba(244,67,54,0.5);
            animation: lines 3s linear infinite;
         }
      }
      &.confetti {
         >.particle {
            opacity:0;
            position: absolute;
            animation: confetti 3s ease-in infinite;
            &.c1 {
               background-color:rgba(76,175,80,0.5);
            }
            &.c2 {
               background-color:rgba(156,39,176,0.5);
            }
         }
      }
      &.fire {
         >.particle {
            position: absolute;
            background-color:rgba(255,193,7,0.5);
            border-radius:40px;
            border-top-right-radius:0px;
            animation: fires 0.8s linear infinite;
               transform:rotate(-45deg);
            opacity:0;
            &:before {
               position: absolute;
               content: '';
               top:60%;
               left:40%;
               transform:translate(-50%,-50%);
               width:50%;
               height:50%;
               border-radius:40px;
               border-top-right-radius:0px;
               background-color:rgba(251,140,0,0.5);
            }
         }
      }
      
      &.sunbeams {
         >.particle {
            position: absolute;
            background-color:rgba(253,216,53,0.5);
            animation: sunbeams 3s linear infinite;
         }
      }
   }
}

@keyframes bubbles {
   0% {
      opacity: 0;
   }
   20% { //show and hint at moving
      opacity: 1;
      transform:translate(0, -20%);
   }
   100% {
      opacity: 0;
      transform:translate(0, -1000%); //Big bubbles move faster
   }
}
@keyframes hearts {
   0% {
      opacity: 0;
      transform:translate(0, 0%) rotate(45deg);
   }
   20% { //show and hint at moving
      opacity: 0.8;
      transform:translate(0, -20%) rotate(45deg);
   }
   100% {
      opacity: 0;
      transform:translate(0, -1000%) rotate(45deg); //Big hearts move faster
   }
}
@keyframes lines {
   0%, 50%, 100% {
      transform:translateY(0%);
   }
   25% {
      transform:translateY(100%);
   }
   75% {
      transform:translateY(-100%);
   }
}
@keyframes confetti {
   0% {
      opacity:0;
      transform:translateY(0%) rotate(0deg);
   }
   10% {
      opacity:1;
   }
   35% {
      transform:translateY(-800%) rotate(270deg);
   }
   80% {
      opacity:1;
   }
   100% {
      opacity:0;
      transform:translateY(2000%) rotate(1440deg);
   }
}
@keyframes fires {
   0% {
      transform: rotate(-70deg) translateY(0%);
   }
   25% {
      transform: rotate(-20deg) translateY(-5%);
      opacity:1;
   }
   50%{
      transform: rotate(-70deg) translateY(-10%);
   }
   75% {
      transform: rotate(-20deg) translateY(-20%);
   }
   100% {
      transform: rotate(-70deg) translateY(-40%);
      opacity:1;
   }
}
@keyframes sunbeams {
   0% {
      transform:translateY(40%) rotate(0deg);
   }
   50% {
      transform:translateY(-40%) rotate(180deg);
   }
   100% {
      transform:translateY(40%) rotate(360deg);
   }
   0%,14%,17%,43%,53%,71%,80%,94%,100% {
      opacity:0;
   }
   6%,15%,24%,28%,48%,55%,78%,82%,99% {
      opacity:1;
   }
}
  </style>
</head>
<body>
   <div class="textcontainer">
   <span class="particletext bubbles">Bubbles</span>
</div>

<div class="textcontainer">
   <span class="particletext confetti">Confetti</span>
</div>

<div class="textcontainer">
   <span class="particletext hearts">Hearts</span>
</div>

<div class="textcontainer">
   <span class="particletext fire">Fire</span>
</div>


<div class="textcontainer">
   <span class="particletext lines">Lines</span>
</div>
<!--<div class="textcontainer">
   <span class="particletext sunbeams">Beams?</span>
</div>-->
</div>
</body>
</html>