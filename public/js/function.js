//Toggle class for device menu

      $(document).ready(function(){
        // Open Panel
          $(".hamburger").on('click',function(){
            $(".menu").toggleClass("menu--open");
        });
      });
