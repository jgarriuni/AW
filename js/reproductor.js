var width;
var timer;
var duration;

$(document).ready(function() {
   $("#playPauseButton").click(function() {
      if ($("#playPauseButtonSpan").hasClass("glyphicon-play")) {
         $("#playPauseButtonSpan").removeClass("glyphicon-play");
         $("#playPauseButtonSpan").addClass("glyphicon-pause");

         activateBar();
         playSong();
      } else {
         $("#playPauseButtonSpan").removeClass("glyphicon-pause");
         $("#playPauseButtonSpan").addClass("glyphicon-play");
         pauseSong();
         pauseBar();
      }
   });

});


function activateBar(){
   var tokens = $("#duracion").text().split(":"),
       minutos = parseInt(tokens[0]),
       segundos = parseInt(tokens[1]);

   if (!timer)
      width = 0;

   duration = minutos * 60 + segundos;
   timer = setInterval(frame, (duration/100) * 500, width);

   function frame() {
      if (width >= 100){
         clearInterval(timer);
      } else {
         width += 0.5;
         $("#myBar").css("width", width + "%");
         if (width % 1 == 0)
            var time = aumentarTiempo($("#reproducido").text());
            $("#reproducido").text(time);
      }
   } 

}

function aumentarTiempo(tiempo){
   var tokens = tiempo.split(":"),
       minutos = parseInt(tokens[0]),
       segundos = parseInt(tokens[1]);
   
   if (segundos + 1 == 60){
      minutos++;
      segundos = 0;
   }
   else 
      segundos++;
   
   return minutos + ":" + segundos;
}

function pauseBar() {
   "use strict"
   clearInterval(timer);
}

function playSong() {
   "use strict";
   document.getElementById("song").play();
}

function pauseSong() {
   "use strict";
   document.getElementById("song").pause();
}