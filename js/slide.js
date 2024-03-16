var slideIndex = 1;
showSlides(slideIndex);

// Hàm để tự động chạy slide sau mỗi khoảng thời gian
function autoSlides() {
    plusSlides(1); // Tự động chuyển đến slide tiếp theo
}

// Bắt đầu tự động chạy slide với khoảng thời gian là 3 giây (3000 milliseconds)
var slideInterval = setInterval(autoSlides, 3000);

// Khi người dùng hover vào slide, dừng tự động chạy
var slidesContainer = document.getElementById("slide-container"); // Đổi "slides-container" thành id của container chứa các slide
console.log(slidesContainer);
slidesContainer.addEventListener("mouseenter", function() {
    clearInterval(slideInterval); // Dừng tự động chạy slide
});

// Khi người dùng rời chuột khỏi slide, tiếp tục tự động chạy
slidesContainer.addEventListener("mouseleave", function() {
    slideInterval = setInterval(autoSlides, 3000); // Tiếp tục tự động chạy slide
});

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

