	audio = document.getElementById('audio');
     
    audio.addEventListener('play', play_evento , false);
    audio.addEventListener('timeupdate', atualizar , false);
 
    function Mplay() {
       
       var button = document.getElementById("play");
       if (audio.paused) {
          audio.play();
          button.innerHTML = '<span class="glyphicon glyphicon-pause" aria-hidden="true"></span>';
       } else {
          audio.pause();
          button.innerHTML = '<span class="glyphicon glyphicon-play" aria-hidden="true"></span>';
       }
    }

 
    function play_evento(){
        document.getElementById('tempo_atual').innerHTML = secToStr( audio.currentTime) ;
        document.getElementById('tempo_total').innerHTML = secToStr( audio.duration );
 
        document.getElementById('barra_progresso').max = audio.duration;
        document.getElementById('barra_progresso').value = audio.currentTime;
    }
 
    function atualizar(){
        document.getElementById('tempo_atual').innerHTML = secToStr( audio.currentTime);
        document.getElementById('barra_progresso').value = audio.currentTime;
    }

 
    function secToStr( sec_num ) {
        sec_num = Math.floor( sec_num );
        var horas   = Math.floor(sec_num / 3600);
        var minutos = Math.floor((sec_num - (horas * 3600)) / 60);
        var segundos = sec_num - (horas * 3600) - (minutos * 60);
         
        if (horas   < 10)  horas    = "0"+horas;
        if (minutos < 10)  minutos  = "0"+minutos;
        if (segundos < 10) segundos = "0"+segundos;
         
        var tempo    = horas+':'+minutos+':'+segundos;
         
        return tempo;
    }