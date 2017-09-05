Waves.attach('.sign-up-btn', ['waves-float']);
Waves.attach('.headmaster', ['waves-circle']);
Waves.init();

$(function () {
  $('[data-toggle="popover"]').popover({
  	delay: {"show": 400, "hide": 200 }
  })
});

var overlay = document.getElementById("overlay");

window.addEventListener('load', function(){
	 overlay.style.display = 'none';
})

