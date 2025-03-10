
// $(document).ready(function () {
//     let slideIndex = 0;
//     const $slides = $(".slide");
//     const slideCount = $slides.length;
//     let slideInterval;

//     // Dynamically create dots based on the number of slides
//     const $dotsContainer = $(".dots-container");
//     $dotsContainer.empty(); // Clear existing dots

//     for (let i = 0; i < slideCount; i++) {
//         $dotsContainer.append(`<span class="dot" data-index="${i}"></span>`);
//     }

//     const $dots = $(".dot");

//     // Function to show slides
//     function showSlide(index) {
//         if (index >= slideCount) slideIndex = 0;
//         if (index < 0) slideIndex = slideCount - 1;

//         $(".carousel-container").css("transform", `translateX(${-slideIndex * 100}%)`);

//         $dots.removeClass("active");
//         $dots.eq(slideIndex).addClass("active");
//     }

//     // Next slide function
//     function nextSlide() {
//         slideIndex++;
//         showSlide(slideIndex);
//     }

//     // Previous slide function
//     function prevSlide() {
//         slideIndex--;
//         showSlide(slideIndex);
//     }

//     // Function to go to a specific slide
//     function currentSlide(index) {
//         slideIndex = index;
//         showSlide(slideIndex);
//     }

//     // Start auto-slide
//     function startSlideShow() {
//         slideInterval = setInterval(nextSlide, 3000);
//     }

//     // Stop auto-slide on hover
//     function stopSlideShow() {
//         clearInterval(slideInterval);
//     }

//     // Event listeners
//     $(".prev").click(prevSlide);
//     $(".next").click(nextSlide);
//     $dotsContainer.on("click", ".dot", function () {
//         currentSlide($(this).data("index"));
//     });

//     $(".carousel-container").hover(stopSlideShow, startSlideShow);

//     // Initialize slider
//     startSlideShow();
//     showSlide(slideIndex);
// });

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

    // Initialize slider
    updateArrowImages(); // Set initial images
    showSlide(slideIndex);

    $(".prev").click(prevSlide);
    $(".next").click(nextSlide);
});


