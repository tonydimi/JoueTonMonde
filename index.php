<audio src="lorie.mp3" style="display:none" id="player">
<a href="#" title="Lancer la lecture"><img src="play.png" alt="Lecture" id="btnplay"></a>
<a href="#" title="Mettre en pause"><img src="pause.png" alt="Pause" id="btnpause"></a>
<script>
document.getElementById('btnplay').onclick = function() {
  document.getElementById('player').play();
  return false;
}
document.getElementById('btnpause').onclick = function() {
  document.getElementById('player').pause();
  return false;
}
</script>