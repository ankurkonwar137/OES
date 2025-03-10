
$(document).ready(function () {
    let slideIndex = 0;
    const $slides = $(".slide img");
    const slideCount = $slides.length;
    let slideInterval;

    // Function to update preview images in arrows
    function updateArrowImages() {
        let prevIndex = (slideIndex - 1 + slideCount) % slideCount;
        let nextIndex = (slideIndex + 1) % slideCount;

        $(".prev").css("background-image", `url('${$slides.eq(prevIndex).attr("src")}')`);
        $(".next").css("background-image", `url('${$slides.eq(nextIndex).attr("src")}')`);
    }

    // Function to show slides
    function showSlide(index) {
        if (index >= slideCount) slideIndex = 0;
        if (index < 0) slideIndex = slideCount - 1;

        $(".carousel-container").css("transform", `translateX(${-slideIndex * 100}%)`);
        updateArrowImages();
    }

    // Next slide function
    function nextSlide() {
        slideIndex++;
        showSlide(slideIndex);
    }

    // Previous slide function
    function prevSlide() {
        slideIndex--;
        showSlide(slideIndex);
    }

    // Function to start automatic sliding
    function startSlideShow() {
        slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
    }

    // Function to stop auto sliding (on hover)
    function stopSlideShow() {
        clearInterval(slideInterval);
    }

    // Initialize slider
    updateArrowImages();
    showSlide(slideIndex);
    startSlideShow(); // Start automatic sliding

    // Event listeners
    $(".prev").click(prevSlide);
    $(".next").click(nextSlide);

    // Stop autoplay when hovering over the carousel
    $(".carousel-container").hover(stopSlideShow, startSlideShow);
});

