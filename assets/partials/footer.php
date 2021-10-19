<footer class="container">
        <p>Created by me.</p>
</footer>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/js.js"></script>



<script>

$("#nav").addClass("js");
$("#nav").addClass("js").before('<div id="menu">☰</div>');
$("#menu").click(function(){
	$("#nav").toggle();$(window).resize(function(){
	if(window.innerWidth > 768) {
		$("#nav").removeAttr("style");
	}
});
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

</body>
</html>