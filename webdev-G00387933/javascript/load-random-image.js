//Possible images to load on page load/reload
var images = [
  '../external/forest-931706_1920.jpg',
  '../external/mountains-55067_640.png',
  '../external/tree-3822149_1920.jpg',
  '../external/neist-point-540119_1920.jpg',
];
//Math.random() generates number in range [0-1]
//Math.floor() rounds down to nearest whole num and muliplying by images.length ensures the selection is in range
var $currentSlide = Math.floor((Math.random() * images.length));
var length = images.length;
var rand = Math.floor(length * Math.random());
document.getElementById('randomImage').src = images[rand];