var slideIndex = 1;
showSlides(slideIndex);
//переключение слайдера каждые 5 сек
let timerId = setInterval(plusSlide, 5000);
//переключение на следующий слайдер
function plusSlide() {
    showSlides(slideIndex += 1);
}
//переключение на предыдущий слайдер
function minusSlide() {
    showSlides(slideIndex -= 1);
}
//функция смены слайдеров
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}