// responsive


const showMenu = document.querySelector('.show-menu');

if(showMenu){
     showMenu.addEventListener("click", () => {
          document.querySelector('.responsive-menu').classList.add("show")
          document.querySelector('.overlay').classList.add("show")
     })


     document.querySelector('.overlay').addEventListener("click", () => {
          document.querySelector('.responsive-menu').classList.remove("show")
          document.querySelector('.overlay').classList.remove("show")
     })
}



$('.hero-carousel').owlCarousel({

    loop:true,
    nav:false,
    items:1,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 2000,
    smartSpeed: 700,
    
})

$(".partners-carousel.first").owlCarousel({
    loop: true,
    nav: false,
    items: 6,
    dots: false,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplaySpeed: 2500, // Smooth transition speed (ms)
    slideTransition: 'linear', // Optional: makes the transition linear
    rtl: true,
    responsive: {
        0: {
            items: 2,
            margin: 10,
        },
        600: {
            items: 3,
            margin: 10,
        },
        1000: {
            items: 5.5,
            margin: 30,
        }
    }
});

$(".partners-carousel.seconed").owlCarousel({
    loop: true,
    nav: false,
    items: 6,
    dots: false,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplaySpeed: 2500, // Smooth transition speed (ms)
    slideTransition: 'linear', // Optional: makes the transition linear
    startPosition: 6,
    responsive: {
        0: {
            items: 2,
            margin: 10,
        },
        600: {
            items: 3,
            margin: 10,
        },
        1000: {
            items: 5.5,
            margin: 30,
        }
    }
});


if ($("#more-blog").length) {
  $("#more-blog").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 3,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    rtl: true,
    autoplay: false,
    autoplayHoverPause: true,
    dots: false,
    smartSpeed: 700,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },

      1000: {
        items: 3,
      },
    },
  });
}

Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });

let calenderBtn = document.querySelector('.choosing-item .input-date img');
let calenderInput = document.querySelector('.choosing-item .input-date input');

function openDatePicker(e) {
    e.preventDefault();
    calenderInput.showPicker();
}

// Add event to both input and icon
calenderInput.addEventListener('click', openDatePicker);
calenderBtn.addEventListener('click', openDatePicker);





// 
const totalLength = 125.6;

const animateProgress = (wrapper) => {
  let targetPercent = parseInt(wrapper.getAttribute("data-percent"));
  if (targetPercent > 100) targetPercent = 100;

  const arc = wrapper.querySelector(".progressArc");
  const text = wrapper.querySelector(".progressText");
  let current = 0;

  const interval = setInterval(() => {
    if (current > targetPercent) {
      clearInterval(interval);
      return;
    }

    const offset = totalLength * (1 - current / 100);
    arc.style.strokeDashoffset = offset;
    text.textContent = current + "%";

    current++;
  }, 20);
};

// Watch the whole section only
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // إعادة تعيين النص والقوس لكل العدادات
        document.querySelectorAll(".progress-wrapper").forEach((wrapper) => {
          const arc = wrapper.querySelector(".progressArc");
          const text = wrapper.querySelector(".progressText");
          arc.style.strokeDashoffset = totalLength;
          text.textContent = "0%";
          // تشغيل الأنيميشن
          animateProgress(wrapper);
        });
      }
    });
  },
  { threshold: 0.5 }
);

const progressSection = document.querySelector("#progressSection");
if (progressSection) {
  observer.observe(progressSection);
}