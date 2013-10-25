 $(window).load(function() {
	// suckerfish
	sfHover = function() {
		var sfEls = document.getElementById("main-menu").getElementsByTagName("li");
		for (var i=0; i<sfEls.length; i++) {
			sfEls[i].onmouseover=function() {
				this.className+=" sfhover";
			}
			sfEls[i].onmouseout=function() {
				this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
			}
		}
	}
	
	$("nav#main-menu .sub-menu").hover(
		function(){ // Mouse Over
			$(this).parent().addClass("parent-li");
		},
		function(){ // Mouse Out
			$(this).parent().removeClass("parent-li");
		}
	);

	//drop down menu slidedown
	$('nav#main-menu ul li').hoverIntent(
		function () {
			$('ul', this).stop(false,true).show();
		}, 
		function () {
			$('ul', this).stop(false,true).hide();          
		}
    );

    //drop down arrow indicator for sub navigation
	$('nav#main-menu li ul ul').parent('li').children('a').append('<span class="raquo">&raquo;</span> ');

	$("h1#mobile-header").click(function(){
	  $("nav#main-menu").toggle();
	});

});