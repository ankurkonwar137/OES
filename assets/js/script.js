$(document).ready(function () {
    let slideIndex = 0;
    const $slides = $(".slide img");
    const slideCount = $slides.length;
    let slideInterval;

    // Function to update preview images in arrows
    //function updateArrowImages() {
        // let prevIndex = (slideIndex - 1 + slideCount) % slideCount;
        // let nextIndex = (slideIndex + 1) % slideCount;

        // $(".prev").css("background-image", `url('${$slides.eq(prevIndex).attr("src")}')`);
        // $(".next").css("background-image", `url('${$slides.eq(nextIndex).attr("src")}')`);
   // }

    // Function to show slides
    function showSlide(index) {
        slideIndex = (index + slideCount) % slideCount; // Ensures index stays within range
        $(".carousel-container").css({
            "transform": `translateX(${-slideIndex * 100}%)`,
            "transition": "transform 0.5s ease-in-out" // Smooth transition
        });

       // updateArrowImages();
    }

    function nextSlide() {
        slideIndex++;
        showSlide(slideIndex);
    }
    
    function prevSlide() {
        slideIndex--;
        showSlide(slideIndex);
    }

    // start automatic sliding
    function startSlideShow() {
        slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
    }

    // Function to stop auto sliding (on hover)
    function stopSlideShow() {
        clearInterval(slideInterval);
    }

    // Initialize slider
   // updateArrowImages();
    showSlide(slideIndex);
    startSlideShow(); // Start automatic sliding

    // Event listeners
    $(".prev").click(prevSlide);
    $(".next").click(nextSlide);

    // Stop autoplay when hovering over the carousel
    $(".carousel-container").hover(stopSlideShow, startSlideShow);

    //scroll to top
    // Show/Hide button on scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".scroll-top").fadeIn();
        } else {
            $(".scroll-top").fadeOut();
        }
    });

    // Scroll to top when clicked
    $(".scroll-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

    //for notification hover
    $("#marquee").hover(
        function () { this.stop(); },
        function () { this.start(); }
    );

    // Mobile navigation and dropdown handling
    $(document).on('click touchstart', function(e) {
        const $navbar = $('.navbar-collapse');
        const $toggler = $('.navbar-toggler');
        
        // Close navbar when clicking outside or on toggler when opened
        if (!$(e.target).closest('.navbar-collapse').length && 
            !$(e.target).closest('.navbar-toggler').length && 
            $navbar.hasClass('show')) {
            $navbar.collapse('hide');
        }
        
        // Close dropdowns when clicking outside
        if (!$(e.target).closest('.dropdown').length && 
            !$(e.target).hasClass('dropdown-toggle')) {
            $('.dropdown-menu').removeClass('show');
        }
    });

    // Handle navbar toggler click
    $('.navbar-toggler').on('click', function() {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.dropdown-menu').removeClass('show');
        }
    });

    // Handle dropdown item clicks
    $('.dropdown-toggle').on('click touchstart', function(e) {
        e.preventDefault();
        e.stopPropagation();
        const dropdownMenu = $(this).next('.dropdown-menu');
        $('.dropdown-menu').not(dropdownMenu).removeClass('show');
        dropdownMenu.toggleClass('show');
    });

    $('.dropdown-item').on('click touchstart', function(e) {
        e.preventDefault();
        e.stopPropagation();
        const href = $(this).attr('href');
        if (href && href !== '#') {
            window.location.href = href;
        }
        $(this).closest('.dropdown-menu').removeClass('show');
        $('.navbar-collapse').collapse('hide');
    });
});

