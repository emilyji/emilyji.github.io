// Slideshow of photos for home page
var slideIndex = 1;

function showImage(n) {
  var i;
  var slide = document.getElementsByClassName("slide");
  if (n > slide.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slide.length}
  for (i = 0; i < slide.length; i++) {
     slide[i].style.display = "none";
  }
  slide[slideIndex-1].style.display = "block";
}

function changeImage(n) {
  showImage(slideIndex += n);
}

// Hover over image and display text
$('.text').hide().removeClass('text').addClass('text-js');

$('.thumb').hover(function(){
    $(this).find('.text-js').fadeToggle();
});