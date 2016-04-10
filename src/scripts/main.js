var $ = require('jquery'),
	onloadCSS = require('./lib/onloadCSS.js');

var headerElement = document.querySelector('.Header');


$(document).ready(function () {
	var navbarMenu = document.getElementById('navbarMenu');

	onloadCSS('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css');

	//headerElement.addEventListener('scroll', onScroll);

	document.onscroll = function () {
		if (window.scrollY > 0)
		{
			console.log('scroll es mayor a cero');
			$('#navbarMenu').addClass('HeaderContainer--transparent');
		}
		else
		{
			console.log('scroll es cero');
			$('#navbarMenu').removeClass('HeaderContainer--transparent');
		}
	}
});