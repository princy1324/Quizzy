<html>
    <head>
    <title>hello</title>
 
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <style>
            h1.ml8 {
  font-weight: 900;
  font-size: 4.0em;
  color: #fff;
  width: 5em;
  height: 5em;
}

.ml8 .letters-container {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  height: 1em;
}

.ml8 .letters {
  position: relative;
  z-index: 2;
  display: inline-block;
  line-height: 0.7em;
  right: -6.00em;
  top: -0.2em;
}

.ml8 .bang {
  font-size: 1.4em;
  top: auto;
  left: -0.06em;
}

.ml8 .circle {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
}

.ml8 .circle-white {
  width: 3em;
  height: 3em;
  border: 2px dashed white;
  border-radius: 10em;
}

.ml8 .circle-dark {
  width: 3.5em;
  height: 3.5em;
  background-color: #4f7b86;
  border-radius: 6em;
  z-index: 1;
}

.ml8 .circle-dark-dashed {
  border-radius: 7em;
  background-color: transparent;
  border: 2px dashed #4f7b86;
  width: 4.0em;
  height: 4.0em;
}
        </style>
    </head>
    <body>
        <h1 class="ml8">
  <span class="letters-container">
    <span class="letters letters-left">Quizzy</span>
    
  </span>
  <span class="circle circle-white"></span>
  <span class="circle circle-dark"></span>
  <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
</h1>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script>
        anime.timeline({loop: true})
  .add({
    targets: '.ml8 .circle-white',
    scale: [0, 3],
    opacity: [1, 0],
    easing: "easeInOutExpo",
    rotateZ: 360,
    duration: 1100
  }).add({
    targets: '.ml8 .circle-container',
    scale: [0, 1],
    duration: 1100,
    easing: "easeInOutExpo",
    offset: '-=1000'
  }).add({
    targets: '.ml8 .circle-dark',
    scale: [0, 1],
    duration: 1100,
    easing: "easeOutExpo",
    offset: '-=600'
  }).add({
    targets: '.ml8 .letters-left',
    scale: [0, 1],
    duration: 1200,
    offset: '-=550'
  }).add({
    targets: '.ml8 .bang',
    scale: [0, 1],
    rotateZ: [45, 15],
    duration: 1200,
    offset: '-=1000'
  }).add({
    targets: '.ml8',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1400
  });

anime({
  targets: '.ml8 .circle-dark-dashed',
  rotateZ: 360,
  duration: 8000,
  easing: "linear",
  loop: true
});
        </script>
    </body>
</html>