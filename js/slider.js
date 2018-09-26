$(document).ready(function(){
  $(".next").hide();
  $(".prev").hide();
  $(".left").hover(function(){
    $(".prev" ).fadeIn(250);
    },function() {
    
      $(".prev" ).fadeOut( 250 );
    }
    );

    $(".right").hover(function(){
    $(".next" ).fadeIn(250);
    },function() {
      $(".next" ).fadeOut(250);
    }
    );


  });

  $(function() {      
      $('.slider>.slider-item:first-child').addClass('slider-active-layer').fadeIn(1000);
      setInterval(function() {
                if($('.slider-active-layer').next().is('li')){
                  $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000).next().addClass('slider-active-layer').fadeIn(1000);  
                } else{
                  $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000);
                  $('.slider>.slider-item:first-child').addClass('slider-active-layer').fadeIn(1000);
                }},  15000);
      
  });

  $(function(){
       
      $(".next").click(function(){
               if($('.slider-active-layer').next().is('li')){
                $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000).next().addClass('slider-active-layer').fadeIn(1000);  
                } else{
                $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000);
                $('.slider>.slider-item:first-child').addClass('slider-active-layer').fadeIn(1000);
                }
                return false;
      });
      $('.prev').click(function(){
                if($('.slider-active-layer').prev().is('li')) {
                  $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000).prev().addClass('slider-active-layer').fadeIn(1000);
                }else{
                  $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000);
                  $('.slider>.slider-item:last').addClass('slider-active-layer').fadeIn(1000);
                }
                return false;
      });
      return false
  });
  

// listen to events...

  

  

  $(function(){
    $(".butcontainer").hammer().on("swiperight", function(ev){
                if($('.slider-active-layer').prev().is('li')) {
                  $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000).prev().addClass('slider-active-layer').fadeIn(1000);
                }else{
                  $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000);
                  $('.slider>.slider-item:last').addClass('slider-active-layer').fadeIn(1000);
                }
  });
  $(".butcontainer").hammer().on("swipeleft", function(ev) {

           if($('.slider-active-layer').next().is('li')){
          $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000).next().addClass('slider-active-layer').fadeIn(1000);  
          } else{
          $('.slider-active-layer').removeClass('slider-active-layer').fadeOut(1000);
          $('.slider>.slider-item:first-child').addClass('slider-active-layer').fadeIn(1000);
          }

});

  
  });