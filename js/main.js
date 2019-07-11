$(document).ready(function(){
	var width = window.innerWidth || document.body.clientWidth;
	console.log(width);
	if(width < 769){
		$(".card-img").css("max-width", width*0.8);
	}
	
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollpos = window.pageYOffset;
		if(prevScrollpos > currentScrollpos && width > 768){
			$(".nav-container").css("top", "0px");
		}
		else if(width > 1200){
			$(".nav-container").css("top", "-72px");
		}
		prevScrollpos = currentScrollpos;
	}
	
	var menuIcon = document.querySelector("#menu-icon");
	menuIcon.addEventListener('click', () => {
		$("#menu-container").toggleClass("slide-active");
		$("#menu-container").toggleClass("slide-unactive");
		$(".line1").toggleClass("toggle1");
		$(".line2").toggleClass("toggle2");
		$(".line3").toggleClass("toggle3");
	});
});