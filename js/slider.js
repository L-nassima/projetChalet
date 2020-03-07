//script de slider page index
var images = document.getElementsByClassName("images-slider")[0].children;
var sliderNext = document.getElementById("sliderNext");
var sliderPrev = document.getElementById("sliderPrev");
var selection = 0;


function imageSuivante() {
  images[selection].classList.remove("visible");
  selection++;
  if (selection == 10) {
    selection = 0;
  }

  images[selection].classList.add("visible");
}

function imagePrecedente() {
  images[selection].classList.remove("visible");
  selection--;
  if (selection == -1) {
    selection = 9;
  }
  images[selection].classList.add("visible");

}
sliderNext.addEventListener("click", imageSuivante);
sliderPrev.addEventListener("click", imagePrecedente);
setInterval(imageSuivante, 3000);

//script de slider page detailChalet
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slider_chalet");
  var dots = document.getElementsByClassName("image_chalet");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}








