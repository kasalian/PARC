
<?php include 'includes/header.php'; ?>

<?php include 'display.php' ?>
	
	<div class="container h-100 py-5">
    
    	<div class="row py-5 justify-content-center align-items-center">

      		<button type="button"  class="btn btn-lg  py-5  " data-toggle="modal" data-target="#modal-login">Let Start</button>
    
  		</div>
	</div>

	
<?php include 'includes/calculator-panel.php'; ?>

<script>
  $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
    
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  })
  </script>

</body>
</html>