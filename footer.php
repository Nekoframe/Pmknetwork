  </body>
</html>


<!-- header scrolling effect -->
<script type="text/javascript">
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    if (scroll >= 1) {
	        //clearHeader, not clearheader - caps H
	        $("header").addClass("lock");
	    }

	    else{
	    	$("header").removeClass("lock");
	    }
	}); //missing );
</script>


<!-- owlcarousel -->
<script type="text/javascript">
	$(document).ready(function(){
	  $(".owl-carousel").owlCarousel({
	  	loop:true,
	    margin:35,
	    responsiveClass:true,
	    smartSpeed: 800,
	    responsive:{
	        0:{
	            items:1,
	            nav:false
	        },
	        600:{
	            items:2,
	            nav:false
	        },
	        1000:{
	            items:3,
	            nav:true,
	        }
	    }
	  });
	});
</script>

<!-- Sticky scroll with active class on navigation items -->
<script type="text/javascript">
	$('body').scrollspy({ target: '#navbar' })
</script>

<!-- Mobile menu button -->
<script>
	$(".mobile_menu").click(function() {
	  $(".m_menu_wrapper").toggleClass("show");
	});
</script>


<!-- Smooth scroll -->
<script type="text/javascript">
	// Select all links with hashes
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
</script>