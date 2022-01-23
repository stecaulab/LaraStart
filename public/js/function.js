//Toggle class for device menu

      $(document).ready(function(){
        // Open Panel
          $(".hamburger").on('click',function(){
            $(".menu").toggleClass("menu--open");
        });

      });

  // FUNCTION FOR NAVBAR SCROLL 
      window.addEventListener('scroll',() =>{

        
        let content         = document.querySelector('.header');
        
        let contentPosition = content.getBoundingClientRect().top;
        
        let screenPosition  = window.scrollY;
        
        let body_elem = document.body;

        if (screenPosition > 300)  {
          body_elem.classList.add("attiva");
          body_elem.classList.add("disattiva");
          body_elem.classList.add("inverti");
          
        } else {
          body_elem.classList.remove("attiva");
          body_elem.classList.remove("disattiva");
          body_elem.classList.remove("inverti");
          
        }

      });



      // Animazioni css e Scrollreveal

      ScrollReveal().reveal('.reveal',{ distance: '150px', duration: 1500, easing:'cubic-bezier(0.215, 0.61, 0.355, 1)',  interval: 700  });
      ScrollReveal().reveal('.reveal2',{ distance: '50px', duration: 1000, easing:'cubic-bezier(0.215, 0.61, 0.355, 1)',  interval: 200  });
      ScrollReveal().reveal('.show2',{ distance: '80px', duration: 800, easing:'cubic-bezier(0.215, 0.61, 0.355, 1)',interval: 700  });
      ScrollReveal().reveal('.show',{  duration: 1500, easing:'cubic-bezier(0.215, 0.61, 0.355, 1)',interval: 400  });
      ScrollReveal().reveal('.zoom',{  duration: 1500,interval: 600 ,scale: 0.65, easing:'cubic-bezier(0.215, 0.61, 0.355, 1)'});