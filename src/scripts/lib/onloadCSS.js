var onloadCSS = function (url) {
	var element = document.createElement('link');
	element.rel = 'stylesheet';
	element.href = url;

	var head = document.querySelector('head');
	head.appendChild(element);
};

module.exports = onloadCSS;