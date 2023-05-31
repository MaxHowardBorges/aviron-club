let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex + n);
}

function currentSlide(n) {
  showSlides(n);
}

var div = event.target.parentNode;
var divClass = div.className;
console.log(divClass);

function showSlides(n) {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");

  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  } else {
    slideIndex = n;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  if (slides[slideIndex - 1] && dots[slideIndex - 1]) {
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
  }
}