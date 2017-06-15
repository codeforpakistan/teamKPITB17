<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flat-bootstrap
 */
?>
	</div><!-- #content -->

	<?php // Page bottom (before footer) widget area 
	get_sidebar( 'pagebottom' ); 
	?>

	<footer>
    <div class="container footer-links">
      <div class="row">
        <div class="col-lg-4 footer-about">
          <img src="../assets/images/cd2.png" alt="Crowd Durshal" />
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
		  <p>Iincididunt ut labore et dolore magna aliqua. Sed ut perspiciatis unde omnis iste natus.</p>
          <ul>
            <li title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li title="Youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li title="LinkedIn"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li title="Google+"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5>Projects</h5>
          <ul>
            <li><a href="#">Send a project</a></li>
            <li><a href="#">Projects in progress</a></li>
            <li><a href="#">Projects we Love</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">How it works</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5>Important Links</h5>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Faq's</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5>About Crowd Durshal</h5>
          <ul>
            <li><a href="#">What is Crowd Durshal?</a></li>
            <li><a href="#">Who we are</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5>Contact Info</h5>
          <ul class="contact-info">
            <li><i class="fa fa-map-marker"></i> <span>2 Abc Road City, London<br /> UK AB12CD</span></li>
            <li><i class="fa fa-phone"></i> <span>+44 1234 567890</span></li>
            <li><i class="fa fa-envelope-o"></i> <span>demo@stackthemes.net</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 copyright-text">
            &copy; 2015 Crowd Durshal | All rights reserved.
          </div>
          <div class="col-lg-6 newsletter">
            Subscribe for our newsletter
            <form action="http://html.stackthemes.net/Crowd Durshal-preview/index.html" method="post">
              <input type="text" name="email" id="email-id" value="Enter your e-mail" />
              <button type="submit"><i class="fa fa-check"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="../assets/js/custom.js"></script> 
</body>
</html>