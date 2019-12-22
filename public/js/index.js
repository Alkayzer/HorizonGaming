function myFunction(x) {
  x.classList.toggle("change");
}


/*Carousel*/
$('.slide-nav').on('click', function(e) {
    e.preventDefault();
    // get current slide
    var current = $('.flex--active').data('slide');
      // get button data-slide
      next = $(this).data('slide');
    $('.slide-nav').removeClass('active');
    $(this).addClass('active');
  
    if (current === next) {
      return false;
    } else {
      $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
      $('.flex--active').addClass('animate--end');
      setTimeout(function() {
        $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
        $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
      }, 800);
    }
  });
/*fin Carousel*/



/*Preload*/
$(window).on('load', function() {
    var preloaderFadeOutTime = 500;
    function hidePreloader() {
        var preloader = $('.spinner-wrapper');
        setTimeout(function() {
            preloader.fadeOut(preloaderFadeOutTime);
        }, 500);
    }
    hidePreloader();

    id = 1;
setInterval(function(){
  var current = $('.flex--active').data('slide');
  var next = id + 1;
  $('.slide-nav').removeClass('active');
  $( $("#"+next)).addClass('active');
  $('.slider__warpper').find('.flex__container[data-slide=' + $("#"+next).data('slide') + ']').addClass('flex--preStart');
  $('.flex--active').addClass('animate--end');

  $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
  $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
  
  if(id == 4)
    id = 0
  else
    id++
}, 7000);
});
/*Fin preload*/