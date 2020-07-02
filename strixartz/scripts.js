const selectElement = (s) => document.querySelector(s);

selectElement('.open').addEventListener('click', () => {
    selectElement('.nav-list').classList.add('active');
 });

selectElement('.close').addEventListener('click', () => {
    selectElement('.nav-list').classList.remove('active');
 });

selectElement('.nav-list').addEventListener('click', () => {
    selectElement('.nav-list').classList.remove('active');
});

 var modal = document.querySelector(".modal-videos");
 var trigger = document.querySelector(".trigger-videos");
 var closeButton = document.querySelector(".close-button");

 function toggleModalVideos() {
     modal.classList.toggle("show-modal-videos");
 }

 function windowOnClick(event) {
     if (event.target === modal) {
         toggleModalVideos();
     }
 }

 trigger.addEventListener("click", toggleModalVideos);
 closeButton.addEventListener("click", toggleModalVideos);
 window.addEventListener("click", windowOnClick);

 var modalb = document.querySelector(".modal-banners");
 var triggerb = document.querySelector(".trigger-banners");
 var closeButtonb = document.querySelector(".close-buttonb");

 function toggleModalBanners() {
     modalb.classList.toggle("show-modal-banners");
 }

 function windowOnClick(event) {
     if (event.target === modalb) {
         toggleModalBanners();
     }
 }

 triggerb.addEventListener("click", toggleModalBanners);
 closeButtonb.addEventListener("click", toggleModalBanners);
 window.addEventListener("click", windowOnClick);

 var modall = document.querySelector(".modal-logos");
 var triggerl = document.querySelector(".trigger-logos");
 var closeButtonl = document.querySelector(".close-buttonl");

 function toggleModalLogos() {
     modall.classList.toggle("show-modal-logos");
 }

 function windowOnClick(event) {
     if (event.target === modall) {
         toggleModalLogos();
     }
 }

 triggerl.addEventListener("click", toggleModalLogos);
 closeButtonl.addEventListener("click", toggleModalLogos);
 window.addEventListener("click", windowOnClick);

 var modalo = document.querySelector(".modal-overig");
 var triggero = document.querySelector(".trigger-overig");
 var closeButtono = document.querySelector(".close-buttono");

 function toggleModalOverig() {
     modalo.classList.toggle("show-modal-overig");
 }

 function windowOnClick(event) {
     if (event.target === modalo) {
         toggleModalOverig();
     }
 }

 triggero.addEventListener("click", toggleModalOverig);
 closeButtono.addEventListener("click", toggleModalOverig);
 window.addEventListener("click", windowOnClick);
 
 var slideIndex = 1;
showSlides(slideIndex);

function plusSlidesB(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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

var slideIndex = 1;
showSlidesl(slideIndex);

function plusSlidesL(n) {
  showSlidesl(slideIndex += n);
}

function currentSlide(n) {
  showSlidesl(slideIndex = n);
}

function showSlidesl(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesl");
  var dots = document.getElementsByClassName("dotl");
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

var slideIndex = 1;
showSlideso(slideIndex);

function plusSlides(n) {
  showSlideso(slideIndex += n);
}

function currentSlide(n) {
  showSlideso(slideIndex = n);
}

function showSlideso(n) {
  var i;
  var slides = document.getElementsByClassName("mySlideso");
  var dots = document.getElementsByClassName("doto");
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