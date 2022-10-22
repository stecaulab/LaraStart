//Toggle class for device menu

$(document).ready(function () {
  // Open Panel
  $(".hamburger").on('click', function () {
    $(".menu").toggleClass("menu--open");
  });

});

// FUNCTION FOR NAVBAR SCROLL 
window.addEventListener('scroll', () => {


  let content = document.querySelector('body');
  console.log(content);
  // let contentPosition = content.getBoundingClientRect().top;

  let screenPosition = window.scrollY;

  let body_elem = document.body;

  if (screenPosition > 480) {
    body_elem.classList.add("attiva");
    //body_elem.classList.remove("opacity-100");
    //body_elem.classList.add("opacity-0");
    // body_elem.classList.add("invert");

  } else {
    body_elem.classList.remove("attiva");
    //body_elem.classList.remove("opacity-0");
    //  body_elem.classList.remove("invert");

  }

});


// elements
var elements_to_watch = document.querySelectorAll('.watch');
// callback 
var callback = function (items) {
  items.forEach((item) => {
    if (item.isIntersecting) {
      item.target.classList.add("in-page");
    } else {
      item.target.classList.remove("in-page");
    }
  });
}
// observer
var observer = new IntersectionObserver(callback, { threshold: 0.6 });
// apply
elements_to_watch.forEach((element) => {
  observer.observe(element);
});


// Animazioni css e Scrollreveal
ScrollReveal().reveal('.reveal0', { distance: '500px', duration: 1500, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)', interval: 700 });
ScrollReveal().reveal('.reveal', { distance: '150px', duration: 1500, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)', interval: 700 });
ScrollReveal().reveal('.reveal2', { distance: '50px', duration: 1000, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)', interval: 200 });
ScrollReveal().reveal('.show2', { distance: '80px', duration: 800, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)', interval: 700 });
ScrollReveal().reveal('.show', { duration: 1500, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)', interval: 400 });
ScrollReveal().reveal('.zoom', { duration: 1500, interval: 600, scale: 0.65, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)' });