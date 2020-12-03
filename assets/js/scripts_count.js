$(function () {
	var count = new Date("Dec 5,2020 00:50:00").getTime();
	var x = setInterval(function () {
		var now = new Date().getTime();
		var d = count - now;

		var days = Math.floor(d / (1000 * 60 * 60 * 24));
		var hours = Math.floor((d % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((d % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((d % (1000 * 60)) / 1000);

		document.getElementById("hours").innerHTML = hours;
		document.getElementById("minutes").innerHTML = minutes;
		document.getElementById("seconds").innerHTML = seconds;

		if (d <= 0) {
			clearInterval(x);
		}
	}, 1000);

});

$(document).ready(function () {
	$(".owl-carousel").owlCarousel({
		items: 3,
		loop: true,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true
	});
	$('.play').on('click', function () {
		owl.trigger('play.owl.autoplay', [3000])
	})
	$('.stop').on('click', function () {
		owl.trigger('stop.owl.autoplay')
	})




});


