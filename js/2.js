$(document).ready(function () {
  $('.panel_title').click(function (e) { 
  	$(this).next().slideToggle();
    e.preventDefault();
    
});
});

