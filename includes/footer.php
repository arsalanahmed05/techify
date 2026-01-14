
<footer class="footer-section">
    <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1911"
            height="1044"></canvas></div>
    <div class="container">
        <div id="main-row" class="row">
            <div id="top-row" class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a href="#"><img src="/assets/images/techifys-logo.png" alt=""></a>
                        <p>Innovating web solutions to elevate<br> brands in the digital world.</p>
                    </div>
                </div>
            </div>
            <div id="middle-row" class="row">
                <div class="col-sm-3">
                    <h3>Quick links</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="/"><i class="fa-solid fa-chevron-right"></i>home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i>About Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i>Portfolio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i>Testimonials</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i>Packages</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3>Services</h3>
                    <ul class="footer-menu service">
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Content Writing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Email Marketing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Graphics
                                Designing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Search Engine
                                Optimization</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Social Media
                                Marketing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Web Designing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> Web Development</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-chevron-right"></i> PPC Marketing</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>Where to find us!</h3>
                    <ul class="footer-left-menu">
                        <li class="contact-item">
                            <a href="#"><i class="fa-solid fa-location-dot"></i>17504 Carlton Cuevas
                                Rd</a>
                        </li>
                        <li class="contact-item">
                            <a href="tel:+12014830259"><i class="fa-solid fa-headset"></i>+(201)-483-0259</a>
                        </li>
                        <li class="contact-item email">
                            <a href="mailto:info@techifys.com"><i
                                    class="fa-solid fa-envelope-open-text"></i>info@techifys.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="bottom-row" class="row">
                <div class="copright text-center">
                    <p><i class="fa-regular fa-copyright"></i> Copyrights 2026 <strong>Techifys </strong> All
                        Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>


<div id="tcf-popup-wrapper" class="tcf-overlay">
    <div class="tcf-content-box">
        <span id="tcf-close-btn" class="tcf-close-x">&times;</span>
        
        <div class="tcf-header">
            <h3>Get a Quote</h3>
            <p>Let’s discuss your project and requirements.</p>
        </div>

        <form class="tcf-form-body">
            <div class="tcf-input-group">
                <input type="text" placeholder="Your Name" required>
            </div>
            <div class="tcf-input-group">
                <input type="email" placeholder="Your Email" required>
            </div>
            <div class="tcf-input-group">
                <textarea placeholder="Your Message" rows="4"></textarea>
            </div>
            <button type="submit" class="tcf-submit-btn">Send Message</button>
        </form>
    </div>
</div>

</footer>







<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    const tcfOpen = document.getElementById("tcf-open-btn");
    const tcfClose = document.getElementById("tcf-close-btn");
    const tcfWrapper = document.getElementById("tcf-popup-wrapper");

    // Safety Check: Agar element milay tabhi event lagao
    if (tcfOpen && tcfWrapper && tcfClose) {
        
        tcfOpen.onclick = function(e) {
            e.preventDefault();
            tcfWrapper.style.display = "flex";
        };

        tcfClose.onclick = function() {
            tcfWrapper.style.display = "none";
        };

        // Bahar click karne se band ho jaye
        window.onclick = function(event) {
            if (event.target == tcfWrapper) {
                tcfWrapper.style.display = "none";
            }
        };
    } else {
        console.log("TCF Popup elements not found yet.");
    }
});
</script>




<script>
    $(document).ready(function() {
        $('.gallery-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false, // ⬅️ No arrows
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 0, // ⬅️ No stopping delay
            speed: 4000, // ⬅️ Controls rotation speed (lower = faster)
            cssEase: 'linear', // ⬅️ Perfect continuous movement
            pauseOnHover: false,
            pauseOnFocus: false,
            swipe: false, // ⬅️ Disable dragging, pure auto movement
            touchMove: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>






<script>
    jQuery(document).ready(function($) {
        $('.count').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count'); // Read the data-count attribute

            // Extract `+` sign if it exists
            var isPlus = countTo.includes('+');
            var cleanNumber = parseInt(countTo.replace('+', '')); // Remove `+` for calculation

            $this.text(isPlus ? '+' : ''); // Initialize with `+` if it exists

            $({
                countNum: 0
            }).animate({
                countNum: cleanNumber
            }, {
                duration: 4000,
                easing: 'swing',
                step: function() {
                    // Update the text with the animated number and the `+` sign if required
                    $this.text((isPlus ? '+' : '') + Math.ceil(this.countNum).toLocaleString());
                },
                complete: function() {
                    // On complete, ensure the final number is shown
                    $this.text((isPlus ? '+' : '') + cleanNumber.toLocaleString());
                },
            });
        });
    });
</script>





<script>
    $(document).ready(function() {
        $('.testimonials-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1030,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });
    });
</script>

<!-- <script>
    $(document).ready(function() {
        $('.plan-monthly-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });
    });
</script> -->

<script>
    $(document).ready(function() {
        $('.service-banner-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });
    });
</script>



<script>
    $(function() {
        var e = "";

        // Filtering functionality
        $(".fil-cat").click(function() {
            $(".portfolio_list ul li").removeClass("active");
            $(this).addClass("active");

            e = $(this).attr("data-rel");
            $("#portfolio").fadeTo(100, 0.1);

            $("#portfolio .showing").not("." + e).fadeOut().removeClass("scale-anm");

            setTimeout(function() {
                $("." + e).fadeIn().addClass("scale-anm");
                $("#portfolio").fadeTo(800, 1);
            }, 300);
        });

        // Fancybox Initialization
        Fancybox.bind('[data-fancybox="videoanimation"]', {
            Toolbar: true, // Show toolbar (Close Button)
            arrows: true, // Enable navigation arrows
            infinite: true, // Loop through images infinitely
            keyboard: true, // Enable keyboard navigation (left/right arrow keys)
            closeButton: "top", // Position of the close button ("top", "inside", "outside", or false)
            animated: true, // Enable animations for opening/closing
            Image: {
                zoom: true // Enable zoom on images
            },
            Thumbs: {
                autoStart: false // Disable thumbnail bar (optional)
            }
        });
    });
</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // Scroll-triggered horizontal scroll for content
    gsap.to(".scroll-content", {
        xPercent: -100 * (document.querySelectorAll(".alphabet-item").length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".scroll-container",
            pin: true,
            scrub: 1,
            end: () => "+=" + document.querySelector(".scroll-content").offsetWidth
        }
    });

    // Sequential Zoom, Centering, and Rotation Animation
    document.querySelectorAll(".alphabet-item").forEach((item, index) => {
        ScrollTrigger.create({
            trigger: item,
            start: "top center",
            end: "bottom center",
            onEnter: () => {
                gsap.to(item, {
                    scale: 1.3,
                    opacity: 1,
                    rotation: 360, // Add rotation on scroll
                    duration: 1.6
                });
                gsap.to(item.querySelector("img"), {
                    scale: 1.1,
                    duration: 1.6
                });
            },
            onLeave: () => {
                gsap.to(item, {
                    scale: 1.5,
                    opacity: 0.5,
                    rotation: 0, // Reset rotation on leave
                    duration: 1.6
                });
                gsap.to(item.querySelector("img"), {
                    scale: 0.9,
                    duration: 1.6
                });
            },
            onEnterBack: () => {
                gsap.to(item, {
                    scale: 1.3,
                    opacity: 1,
                    rotation: 360, // Add rotation on scroll back
                    duration: 1.6
                });
                gsap.to(item.querySelector("img"), {
                    scale: 1.1,
                    duration: 1.6
                });
            },
            onLeaveBack: () => {
                gsap.to(item, {
                    scale: 0.8,
                    opacity: 0.5,
                    rotation: 0, // Reset rotation on leave back
                    duration: 1.6
                });
                gsap.to(item.querySelector("img"), {
                    scale: 0.9,
                    duration: 1.6
                });
            }
        });
    });

    // Scroll-triggered item zoom animation sequentially with rotation
    gsap.utils.toArray(".alphabet-item").forEach((item, index) => {
        ScrollTrigger.create({
            trigger: "item",
            start: "top center",
            end: "bottom center",
            scrub: 1,
            onEnter: () => {
                gsap.to(item, {
                    scale: 1.8,
                    opacity: 1,
                    rotation: 360, // Rotation on scroll
                    duration: 0.9
                });
            },
            onLeave: () => {
                gsap.to(item, {
                    scale: 0.8,
                    opacity: 0.6,
                    rotation: 0, // Reset rotation on leave
                    duration: 0.9
                });
            }
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('.brand-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });
    });
</script>


<script>
    /*************************
      Cursor
    *************************/
    const cursor = document.querySelector('#cursor');
    const cursorCircle = cursor.querySelector('.cursor__circle');

    const mouse = {
        x: -100,
        y: -100
    }; // mouse pointer's coordinates
    const pos = {
        x: 0,
        y: 0
    }; // cursor's coordinates
    const speed = 0.1; // between 0 and 1

    const updateCoordinates = (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    };

    window.addEventListener('mousemove', updateCoordinates);

    function getAngle(diffX, diffY) {
        return Math.atan2(diffY, diffX) * 180 / Math.PI;
    }

    function getSqueeze(diffX, diffY) {
        const distance = Math.sqrt(diffX ** 2 + diffY ** 2);
        const maxSqueeze = 0.15;
        const accelerator = 1500;
        return Math.min(distance / accelerator, maxSqueeze);
    }

    const updateCursor = () => {
        const diffX = Math.round(mouse.x - pos.x);
        const diffY = Math.round(mouse.y - pos.y);

        pos.x += diffX * speed;
        pos.y += diffY * speed;

        const angle = getAngle(diffX, diffY);
        const squeeze = getSqueeze(diffX, diffY);

        const scale = `scale(${1 + squeeze}, ${1 - squeeze})`;
        const rotate = `rotate(${angle}deg)`;
        const translate = `translate3d(${pos.x}px, ${pos.y}px, 0)`;

        const shadowX = diffX / 10; // Shadow position relative to movement
        const shadowY = diffY / 10;

        // Apply transforms and shadow with the updated color
        cursor.style.transform = translate;
        cursorCircle.style.transform = rotate + scale;
        cursorCircle.style.boxShadow =
            `${shadowX}px ${shadowY}px 20px rgba(111, 115, 238, 0.8)`; // Updated shadow color
    };

    function loop() {
        updateCursor();
        requestAnimationFrame(loop);
    }

    requestAnimationFrame(loop);

    // Cursor modifiers (e.g., custom text or styles)
    const cursorModifiers = document.querySelectorAll('[data-cursor-type]');
    const cursorLinks = document.querySelectorAll('a:not(.cursor-style)');

    cursorModifiers.forEach((cursorModifier) => {
        cursorModifier.addEventListener('mouseenter', function() {
            const className = this.getAttribute('data-cursor-type');
            cursor.classList.add(className);
            const cursorText = this.getAttribute('data-custom-text');
            if (cursorText !== null) {
                cursor.setAttribute('data-cursor-text', cursorText);
            } else {
                cursor.setAttribute('data-cursor-text', 'Drag');
            }
        });

        cursorModifier.addEventListener('mouseleave', function() {
            const className = this.getAttribute('data-cursor-type');
            cursor.classList.remove(className);
            cursor.removeAttribute('data-cursor-text');
        });
    });

    cursorLinks.forEach((cursorLink) => {
        cursorLink.addEventListener('mouseenter', function() {
            cursor.classList.add('cursor-link');
        });

        cursorLink.addEventListener('mouseleave', function() {
            cursor.classList.remove('cursor-link');
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.querySelector(".navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled"); // Add class when scrolling down
            } else {
                navbar.classList.remove("scrolled"); // Remove class when scrolling back up
            }
        });
    });
</script>


<script>
    const images = document.querySelectorAll('img.img-fluid.abs');

    document.addEventListener('mousemove', (event) => {
        const {
            clientX,
            clientY
        } = event; // Get mouse coordinates
        const centerX = window.innerWidth / 2; // Center of the screen (horizontally)
        const centerY = window.innerHeight / 2; // Center of the screen (vertically)

        images.forEach((image, index) => {
            const intensity = (index + 1) * 10; // Adjust movement intensity per image
            const offsetX = ((clientX - centerX) / centerX) * intensity;
            const offsetY = ((clientY - centerY) / centerY) * intensity;

            // Apply translation to each image
            image.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
        });
    });
    document.addEventListener('mouseleave', () => {
        images.forEach((image) => {
            image.style.transform = 'translate(0, 0)';
        });
    });
</script>







<!-- <script>
    OTENZA.goToTop = function () {
  var progressPath = document.querySelector('.back-to-top path');
  var pathLength = progressPath.getTotalLength();
  
  // Set up initial stroke for path (progress circle)
  progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
  progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
  progressPath.style.strokeDashoffset = pathLength;

  // Recalculate path length for initial render
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

  // Update progress based on scroll
  var updateProgress = function () {
    var scroll = $(window).scrollTop(2);
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;

    // Show button when scrolled down more than 300px
    if (scroll > 300) {
      if (!$('.back-to-top').hasClass('active-progress')) {
        $('.back-to-top').addClass('active-progress');
        console.log('active-progress class added');
      }
    } else {
      if ($('.back-to-top').hasClass('active-progress')) {
        $('.back-to-top').removeClass('active-progress');
        console.log('active-progress class removed');
      }
    }
  };

  updateProgress();
  $(window).scroll(updateProgress);

  var offset = 300;  // When to show the button
  var duration = 600; // Duration for scroll-to-top

  // Handle the scroll-to-top behavior
  $('.back-to-top').on('click', function (event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, duration);
    return false;
  });
};

OTENZA.goToTop();


</script> -->


<script>
    $(document).ready(function() {
        $('.portfolio-slider').slick({
            slidesToShow: 4, // Show 3 slides on desktop
            slidesToScroll: 1,
            dots: false,
            infinite: true, // Enable infinite loop
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000, // Duration of smoothness for sliding (ms)
            cssEase: 'linear', // Ensure smooth continuous movement
            centerMode: true, // Center the active slide
            centerPadding: '0', // No padding around the active slide
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev">❮</button>',
            nextArrow: '<button type="button" class="slick-next">❯</button>',
            responsive: [{
                    breakpoint: 1025, // Tablet size and above
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: false, // Disable center mode for tablets
                    }
                },
                {
                    breakpoint: 768, // Mobile size
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false, // Disable center mode for mobile
                    }
                },
                {
                    breakpoint: 480, // Extra small mobile devices
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        centerMode: false, // Disable center mode for small screens
                    }
                }
            ]
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('.portfolio-slider-reverse').slick({
            slidesToShow: 4, // Show 3 slides on desktop
            slidesToScroll: 1,
            dots: false,
            infinite: true, // Enable infinite loop
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000, // Duration of smoothness for sliding (ms)
            cssEase: 'linear', // Ensure smooth continuous movement
            centerMode: true, // Center the active slide
            centerPadding: '0', // No padding around the active slide
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev">❮</button>',
            nextArrow: '<button type="button" class="slick-next">❯</button>',
            responsive: [{
                    breakpoint: 1025, // Tablet size and above
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: false, // Disable center mode for tablets
                    }
                },
                {
                    breakpoint: 768, // Mobile size
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false, // Disable center mode for mobile
                    }
                },
                {
                    breakpoint: 480, // Extra small mobile devices
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        centerMode: false, // Disable center mode for small screens
                    }
                }
            ]
        });
    });
</script>





<script>
    $(document).ready(function() {
        $('.trusted-slider').slick({
            slidesToShow: 6, // Show 3 slides on desktop
            slidesToScroll: 1,
            dots: false,
            infinite: true, // Enable infinite loop
            autoplay: true,
            autoplaySpeed: 0,
            speed: 5000, // Duration of smoothness for sliding (ms)
            cssEase: 'linear', // Ensure smooth continuous movement
            centerMode: true, // Center the active slide
            centerPadding: '0', // No padding around the active slide
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev">❮</button>',
            nextArrow: '<button type="button" class="slick-next">❯</button>',
            responsive: [{
                    breakpoint: 1025, // Tablet size and above
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: false, // Disable center mode for tablets
                    }
                },
                {
                    breakpoint: 768, // Mobile size
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false, // Disable center mode for mobile
                    }
                },
                {
                    breakpoint: 480, // Extra small mobile devices
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        centerMode: false, // Disable center mode for small screens
                    }
                }
            ]
        });
    });
</script>


<script>
    function openCity(evt, cityName) {
        // Hide all tab content
        const tabcontent = document.getElementsByClassName("tabcontent");
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove "active" class from all tab links
        const tablinks = document.getElementsByClassName("tablinks");
        for (let i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the selected tab content and add "active" class to the clicked tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Set the default active tab on page load
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".tablinks.active").click();
    });
</script>

<script>
    $(document).ready(function() {
        $('.service-feature-slider.left').slick({
            slidesToShow: 3, // Show 4 slides on desktop
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000, // Duration of smoothness for sliding (ms)
            cssEase: 'linear', // Smooth scrolling effect
            vertical: true, // Enable vertical scrolling
            verticalSwiping: true, // Enable vertical swipe
            centerMode: true, // Centering the slides
            centerPadding: '0', // No padding for centering
            arrows: false,
            draggable: true, // Enable dragging
            swipe: true, // Enable swipe functionality
            touchMove: true, // Allow touch movement
            responsive: [{
                    breakpoint: 1025, // Tablet size
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: false, // Disable centering for tablets
                    }
                },
                {
                    breakpoint: 768, // Mobile size
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false, // Disable centering for mobile
                    }
                },
                {
                    breakpoint: 480, // Extra small mobile devices
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        centerMode: false, // Disable centering for small screens
                    }
                }
            ]
        });
    });
</script>



<script>
    $(document).ready(function() {
        // Bottom to top scrolling for service-feature-slider-right
        $('.service-feature-slider.right').slick({
            slidesToShow: 3, // Show 4 slides on desktop
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000, // Duration of smoothness for sliding (ms)
            cssEase: 'linear', // Smooth scrolling effect
            vertical: true, // Enable vertical scrolling
            verticalSwiping: true, // Enable vertical swipe
            centerMode: true, // Centering the slides
            centerPadding: '0', // No padding for centering
            arrows: false,
            draggable: true, // Enable dragging
            swipe: true, // Enable swipe functionality
            touchMove: true, // Allow touch movement
            responsive: [{
                    breakpoint: 1025, // Tablet size
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: false, // Disable centering for tablets
                    }
                },
                {
                    breakpoint: 768, // Mobile size
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false, // Disable centering for mobile
                    }
                },
                {
                    breakpoint: 480, // Extra small mobile devices
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        centerMode: false, // Disable centering for small screens
                    }
                }
            ]
        });

    });
</script>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 140,
                "density": {
                    "enable": true,
                    "value_area": 900
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                }
            },
            "opacity": {
                "value": 0.6,
                "random": false
            },
            "size": {
                "value": 3.5,
                "random": true
            },
            "line_linked": {
                "enable": true,
                "distance": 160,
                "color": "#ffffff",
                "opacity": 0.25,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1.6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "attract": {
                    "enable": false
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 0.4
                    }
                },
                "push": {
                    "particles_nb": 4
                }
            }
        },
        "retina_detect": true
    });
</script>






<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #111}";
        document.body.appendChild(css);
    };
</script>


<script>
    window.addEventListener('scroll', function() {
        const video = document.querySelector('.video-background video');
        const section = document.querySelector('.parallax-section');
        const scrollPosition = window.pageYOffset;

        // Adjust the speed of the background video based on scroll position
        const scrollSpeed = 0.5; // Adjust this value for slower or faster parallax
        video.style.transform = `translateY(${scrollPosition * scrollSpeed}px)`;
    });
</script>



<script>
    function openCity(evt, cityName) {
        // Remove active class from all tab buttons
        const tablinks = document.querySelectorAll(".tablinks");
        tablinks.forEach((tab) => tab.classList.remove("active"));

        // Remove active class from all tab contents
        const tabcontents = document.querySelectorAll(".tabcontent");
        tabcontents.forEach((content) => content.classList.remove("active"));

        // Add active class to the clicked tab button
        evt.currentTarget.classList.add("active");

        // Add active class to the corresponding tab content
        document.getElementById(cityName).classList.add("active");
    }
</script>



<!-- header canvas particles -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 250,
                /* increased from 120 → 250 */
                "density": {
                    "enable": true,
                    "value_area": 1000
                }
            },
            "color": {
                "value": ["#00E5FF", "#00FFA3", "#FFB86B"]
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 6
                }
            },
            "opacity": {
                "value": 0.55,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 0.6,
                    "opacity_min": 0.15,
                    "sync": false
                }
            },
            "size": {
                "value": 2.5,
                /* slightly smaller to balance density */
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 6,
                    "size_min": 0.8,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 140,
                /* tighter mesh */
                "color": "#00B3CC",
                "opacity": 0.15,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1.8,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": true,
                    "rotateX": 800,
                    "rotateY": 1600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": ["grab", "repulse"]
                },
                "onclick": {
                    "enable": true,
                    "mode": ["push", "remove"]
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 240,
                    "line_linked": {
                        "opacity": 0.45
                    }
                },
                "repulse": {
                    "distance": 180,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>


<script>
    const modal = document.getElementById("servicesModal");
    const btn = document.getElementById("servicesLink");
    const span = document.querySelector(".close");

    btn.onclick = function(e) {
        e.preventDefault();
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>