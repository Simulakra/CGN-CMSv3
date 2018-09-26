<script type="text/javascript">
$(document).ready(function () {
$('a').each(function(){  
$(this).attr('onclick','window.location.href="'+$(this).attr('href')+'"');
$(this).attr('href','#');
});
}); 
</script>
