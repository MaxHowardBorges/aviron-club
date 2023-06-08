function plusSlides(n, element) {
  const slideContainer = element.parentNode.parentNode;
  const slideIndex = parseInt(slideContainer.getAttribute("data-slide-index")) || 1;
  showSlides(slideIndex + n, slideContainer);
}

function currentSlide(n, element) {
  const slideContainer = element.parentNode.parentNode.parentNode;
  const slides = slideContainer.getElementsByClassName("mySlides");

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[n - 1].style.display = "block";
}

function showSlides(n, slideContainer) {
  const slides = slideContainer.getElementsByClassName("mySlides");
  const dots = slideContainer.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");

  if (n > slides.length) {
    n = 1;
  } else if (n < 1) {
    n = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  if (slides[n - 1] && dots[n - 1]) {
    slides[n - 1].style.display = "block";
    dots[n - 1].classList.add("active");
  }

  slideContainer.setAttribute("data-slide-index", n);
  captionText.innerHTML = dots[n - 1].getAttribute("alt");
}