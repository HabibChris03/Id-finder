// JavaScript for slideshow
let slideIndex = 0;
const slides = document.querySelectorAll('.slides img');

function showSlides() {
    slides.forEach((slide, index) => {
        slide.style.opacity = (index === slideIndex) ? '1' : '0';
    });
    slideIndex = (slideIndex + 1) % slides.length;
    setTimeout(showSlides, 5000);
}

showSlides();