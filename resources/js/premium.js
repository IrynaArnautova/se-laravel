
// Ленивая загрузка
document.addEventListener("DOMContentLoaded", function() {
    (function () {
        document.querySelector('.js_move-scroll').scrollLeft = -1000;
    }());

    var lazyloadImages;
    var lazyloadText;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");

        var imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy", "no-active" );
                    imageObserver.unobserve(image);
                }
            });
        }, {
            root: document.querySelector("#scrollWrapper"),
            rootMargin: "0px 0px 0px 0px"
        });

        lazyloadText = document.querySelectorAll(".lazytext");
        var textObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var text = entry.target;
                    text.classList.remove( "lazytext", "no-active" );
                    textObserver.unobserve(text);
                }
            });
        }, {
            root: document.querySelector("#scrollWrapper"),
            rootMargin: "0px 0px 0px 0px"
        });

        lazyloadImages.forEach(function(image) {
            imageObserver.observe(image);
        });

        lazyloadText.forEach(function(text) {
            textObserver.observe(text);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");
        lazyloadText = document.querySelectorAll(".lazytext");

        function lazyload () {
            if(lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;

                lazyloadImages.forEach(function(img) {
                    if(img.offsetTop < (window.innerHeight + scrollTop + 0)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy', 'no-active')
                    }
                });

                lazyloadText.forEach(function(txt) {
                    if(txt.offsetTop < (window.innerHeight + scrollTop + 0)) {
                        txt.classList.remove( 'no-active')
                    }
                });

                if(lazyloadText.length == 0 || lazyloadImages.length == 0 ) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    }
})


function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// const box = document.querySelector('.premium-quantity_images');
const boxes = document.querySelectorAll('.js_scroll-text');
const images = document.querySelectorAll('.js_sticky-img');



document.addEventListener('scroll', function () {
    // const scrollbar = window.scrollY;
    // const sectionQuantity = document.querySelector('.premium-quantity');
    // const sectionQuantityPos = sectionQuantity.offsetTop;
    //
    // var sectionEnd = $(".premium-flag").position().top;
    // console.log(scrollbar - sectionQuantityPos)
    // if (sectionQuantityPos) {
    //     box.style.top = (scrollbar - sectionQuantityPos) + 'px'
    // }


    boxes.forEach(function(box, index) {
        if (isInViewport(box)) {
            images.forEach(function (image) {
                image.classList.remove('active');
            })
            images[index].classList.add('active');
        }
    })
    if (document.querySelector('.premium-quantity_video').classList.contains('active')) {
        document.querySelector('.premium-quantity_video-inner').play();
    } else {
        document.querySelector('.premium-quantity_video-inner').pause();
        document.querySelector('.premium-quantity_video-inner').currentTime = 0;
    }
});
