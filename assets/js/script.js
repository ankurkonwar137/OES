$(document).ready(function () {
    let slideIndex = 0;
    const $slides = $(".slide img");
    const slideCount = $slides.length;
    let slideInterval;

    

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

    // Enhanced mobile navigation and dropdown handling with iOS optimization
    // let touchStartY = 0;
    // let touchEndY = 0;
    // let touchStartX = 0;
    // let touchEndX = 0;
    // const minSwipeDistance = 30;
    // let isScrolling = false;
    // let touchTimeout;

    // function handleTouchStart(e) {
    //     touchStartY = e.touches[0].clientY;
    //     touchStartX = e.touches[0].clientX;
    //     isScrolling = false;
    // }

    // function handleTouchMove(e) {
    //     if (!touchStartY || !touchStartX) return;

    //     const diffY = e.touches[0].clientY - touchStartY;
    //     const diffX = e.touches[0].clientX - touchStartX;

    //     if (Math.abs(diffY) > Math.abs(diffX)) {
    //         isScrolling = true;
    //     }
    // }

    // function handleTouchEnd(e) {
    //     if (isScrolling) return;

    //     touchEndY = e.changedTouches[0].clientY;
    //     touchEndX = e.changedTouches[0].clientX;
    //     const swipeDistance = Math.abs(touchEndY - touchStartY);
        
        // if (swipeDistance < minSwipeDistance) {
        //     const $target = $(e.target);
        //     const $navbar = $('.navbar-collapse');
        //     const $dropdown = $target.closest('.dropdown');
        //     const $dropdownToggle = $dropdown.find('.dropdown-toggle');
        //     const $dropdownMenu = $dropdown.find('.dropdown-menu');

        //     // Handle dropdown toggle
        //     if ($target.hasClass('dropdown-toggle') || $target.closest('.dropdown-toggle').length) {
        //         e.preventDefault();
        //         e.stopPropagation();
                
        //         clearTimeout(touchTimeout);
                
                // Close other dropdowns
            //     $('.dropdown-menu').not($dropdownMenu).removeClass('show');
                
            //     touchTimeout = setTimeout(() => {
            //         $dropdownMenu.toggleClass('show');
            //         if ($dropdownMenu.hasClass('show')) {
            //             $dropdownToggle.attr('aria-expanded', 'true');
            //         } else {
            //             $dropdownToggle.attr('aria-expanded', 'false');
            //         }
            //     }, 50);
            // }
            // // Handle dropdown item
            // else if ($target.hasClass('dropdown-item') || $target.closest('.dropdown-item').length) {
            //     e.preventDefault();
            //     e.stopPropagation();
                
            //     const $item = $target.closest('.dropdown-item');
            //     const href = $item.attr('href');
                
            //     setTimeout(() => {
            //         if (href && href !== '#') {
            //             window.location.href = href;
            //         }
            //         $item.closest('.dropdown-menu').removeClass('show');
            //         $navbar.collapse('hide');
            //     }, 50);
            // }
            // Handle outside clicks
        //     else if (!$target.closest('.navbar-collapse').length && 
        //              !$target.closest('.navbar-toggler').length && 
        //              $navbar.hasClass('show')) {
        //         $navbar.collapse('hide');
        //         $('.dropdown-menu').removeClass('show');
        //         $('.dropdown-toggle').attr('aria-expanded', 'false');
        //     }
        // }

        // Reset touch coordinates
        // touchStartY = touchEndY = touchStartX = touchEndX = 0;
    // }

    // Attach touch event listeners
    // document.addEventListener('touchstart', handleTouchStart, { passive: false });
    // document.addEventListener('touchmove', handleTouchMove, { passive: true });
    // document.addEventListener('touchend', handleTouchEnd, { passive: false });

    // Handle navbar toggler
    // $('.navbar-toggler').on('touchstart', function(e) {
    //     e.preventDefault();
    //     e.stopPropagation();
        
    //     const $navbar = $('.navbar-collapse');
    //     if ($navbar.hasClass('show')) {
    //         $('.dropdown-menu').removeClass('show');
    //         $('.dropdown-toggle').attr('aria-expanded', 'false');
    //     }
    //     $navbar.collapse('toggle');
    // });

    // Prevent scrolling when dropdown is open
    // $('.dropdown-menu').on('touchmove', function(e) {
    //     if ($(this).hasClass('show')) {
    //         e.preventDefault();
    //     }
    // });
});

