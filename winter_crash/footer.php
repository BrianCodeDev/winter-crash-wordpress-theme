<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



		<div class="row">

			<div class="col-md-12">

			<footer class="kilimanjaro_area">
  <!-- Top Footer Area Start -->
  <div class="foo_top_header_one section_padding_100_70">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="kilimanjaro_part">
            <h5>About Us</h5>
            <p>Winter Shop Commerce Store is a cozy haven for all things wintry! From snug sweaters to toasty accessories, it's a one-stop shop for embracing the cold. The store offers a curated selection, ensuring customers find warmth and style during the chilly months. Whether it's holiday shopping or simply preparing for the frost, this store caters to every winter need with a touch of seasonal charm.</p>

          </div>
          <div class="kilimanjaro_part m-top-15">
            <h5>Social Links</h5>
            <ul class="kilimanjaro_social_links">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
              </li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
              </li>
              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a>
              </li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a>
              </li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="kilimanjaro_part">
            <h5>Tags Widget</h5>
            <ul class=" kilimanjaro_widget">
              <li><a href="#">Classy</a></li>
              <li><a href="#">Stylish</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Saree</a></li>
              <li><a href="#">Kutra</a></li>
              <li><a href="#">Lungi</a></li>
              <li><a href="#">T-Shirts</a></li>
              <li><a href="#">Leanga Choli</a></li>
            </ul>
          </div>

          <div class="kilimanjaro_part m-top-15">
            <h5>Important Links</h5>
            <ul class="kilimanjaro_links">
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms &
                  Conditions</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About
                  Licences</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help &
                  Support</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy
                  Policy</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Community &
                  Forum</a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="kilimanjaro_part">
            <h5>Latest Search</h5>
            <ul class="kilimanjaro_links">
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Banarasi
                  saree </a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Opara
                  saree</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Silk
                  Saree</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Gadwal sari
                </a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Soft dhakai
                  saree</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Ajrakh
                  chanderi sarees </a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Furnishing
                </a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Kurta </a>
              </li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Dhoti</a>
              </li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Lungi </a>
              </li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>T-Shirts
                </a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Sarees </a>
              </li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Lehenga
                  Choli</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweatshirts
                </a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Footer Bottom Area Start -->
  <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>© All Rights Reserved by &nbsp; <a href="#">Soumitra Ghosh.<i class="fa fa-love"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

			</div><!-- col -->

		</div><!-- .row -->



<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

