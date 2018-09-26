<form method="get" action="../search/">
  <input type="text" name="keyword" />
  <button type="submit" class="sbtn fa fa-search"></button>
</form>  

<div class="top">
  <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
</div>


<script>
$( document ).ready(function() {
  $(".btn-search").click(function(){
    $("form").slideToggle("500", "easeInOutCirc");
  });
  
  $('form').hover(
         function () {
           $(this).css({"background-color":"#4D98A8"});
         }, 
         function () {
           $(this).css({"background-color":"#4D98A8"});
         }
     );
});
</script>