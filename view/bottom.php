
<footer class="text-center">
  <a class="up-arrow" href="#abc" data-toggle="tooltip" title="Lên trên">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <h2><a href="index.php">ABC Shop</a></h2>
 <style>
.footer_container{
  display: flex;
  justify-content: center;
  align-items: center;
}
 </style>
  <map class="footer_container" name="">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125588.28934343279!2d105.35620144807812!3d10.371117619010704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a72e46cd02693%3A0x230863470f76c9e3!2zVHAuIExvbmcgWHV5w6puLCBBbiBHaWFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1671514882601!5m2!1svi!2s" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </map>
</footer>
<style>

</style>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#abc']").on('click', function(event) {

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