$(document).ready(function () {
    $("a.smooth-scroll").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 82
            }, 800, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                //window.location.hash = hash;
            });
        } // End if
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        dots:false,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:6000,
        items:1
    })
/*     var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("is-active");
    });
 */
    /* new WOW().init(); */
})