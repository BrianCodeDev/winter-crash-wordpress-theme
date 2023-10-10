<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="back-nav bg-dark">
<ul class="nav container justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Returns</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Support</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Docs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Community</a>
  </li>
</ul>
</div>
<div class="header-content text-center container">
  <div class="row align-items-start">
    <div class="col">
      <h1>Shop for the best winter fashion products</h1>
	  <ul>
		<li><img src="http://winter-crash.local/wp-content/uploads/2023/10/check-mark.png" alt="logo-check" width="30px" height="20px"><h6> Exclusive Winter Collections</h6></li>
		<li><img src="http://winter-crash.local/wp-content/uploads/2023/10/check-mark.png" alt="logo-check" width="30px" height="20px"><h6> 24/7 Customer Support</h6></li>
		<li><img src="http://winter-crash.local/wp-content/uploads/2023/10/check-mark.png" alt="logo-check" width="30px" height="20px"><h6> Free Shipping on Winter Essentials</h6></li>
		<li><img src="http://winter-crash.local/wp-content/uploads/2023/10/check-mark.png" alt="logo-check" width="30px" height="20px"><h6> Gifts for the Holiday Season</h6></li>
		<li><img src="http://winter-crash.local/wp-content/uploads/2023/10/check-mark.png" alt="logo-check" width="30px" height="20px"><h6> Winter Fashion Trends Blog</h6></li>
	  </ul>
	  <h4>+ 3 Months Free</h4>
	  <button class="btn">Check our reviews</button>
	  <button class="btn shop-now">Shop Now</button>
    </div>
    <div class="col">
      <img src="http://winter-crash.local/wp-content/uploads/2023/10/Component-5.png" alt="logo-brand" width="600vw">
    </div>
  </div>
</div>

<div class="container featured">
	<h2>Winter Featured Products</h2>
	<h5>Winter Hoodies on top</h5>
<!-- Product Section - Start -->
<section>
  <div class="container">
    <div class="row g-4 py-5">
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
			$76.50
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/811gzPQRKAL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/81ZoaneKVsL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
            <h6 class="product-category"><a href="#">GUESS Men's Mid-Weight Puffer Jacket with Removable Hood </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/81PVlIQfj9L._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/81l0sift1RL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
            <h6 class="product-category"><a href="#">GUESS Men's Mid-Weight Puffer Jacket with Removable Hood </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/811GA7LrkL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/715WFd4JbKL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
            <h6 class="product-category"><a href="#">GUESS Men's Mid-Weight Puffer Jacket with Removable Hood </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/818fHXzheL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/81DxphWRh5L._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
            <h6 class="product-category"><a href="#">GUESS Men's Mid-Weight Puffer Jacket with Removable Hood </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
	  <h5>Winter Pants on top</h5>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/61JTThjfkKL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/51pzXbwJ8GL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
            <h6 class="product-category"><a href="#">MAGCOMSEN Men's Winter Pants 5 Zip Pockets Snow Ski Pants Fleece Lined Water Resistant Hiking Pants </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/714cOp0nQXL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/61tCd3TTb2L._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
		  <h6 class="product-category"><a href="#">MAGCOMSEN Men's Winter Pants 5 Zip Pockets Snow Ski Pants Fleece Lined Water Resistant Hiking Pants </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/71wtKlv21HL._AC_UY550_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/61sXE5TykgL._AC_UY550_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
		  <h6 class="product-category"><a href="#">MAGCOMSEN Men's Winter Pants 5 Zip Pockets Snow Ski Pants Fleece Lined Water Resistant Hiking Pants </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-single-card">
          <div class="product-top-area">
            <div class="product-discount">
              10%
            </div>

            <div class="product-img">
              <div class="first-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/61STbArC4bL._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
              <div class="hover-view">
                <img src="http://winter-crash.local/wp-content/uploads/2023/10/61gNv3cfS1L._AC_SY550._SX._UX._SY._UY_.jpg" alt="logo" class="img-fluid" onerror="this.src='https://i.ibb.co/qpB9ZCZ/placeholder.png'">
              </div>
            </div>
            <div class="sideicons">
              <button class="sideicons-btn">
                <i class="fa-solid fa-cart-plus"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-eye"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button class="sideicons-btn">
                <i class="fa-solid fa-shuffle"></i>
              </button>
            </div>
          </div>
          <div class="product-info">
		  <h6 class="product-category"><a href="#">MAGCOMSEN Men's Winter Pants 5 Zip Pockets Snow Ski Pants Fleece Lined Water Resistant Hiking Pants </a></h6>
            <div class="d-flex align-items-center">
              <div class="review-star me-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>

              <span class="review-count">(13)</span>
            </div>
            <div class="d-flex flex-wrap align-items-center py-2">
              <div class="old-price">
                $50.45
              </div>
              <div class="new-price">
                $35.053455555
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Section - End -->
</div>

<section class="service-section py-5">
  <div class="container">
    <div class="row justify-content-center py-3">
      <div class="col-md-8 col-12 text-center">
        <p class="service-main-heading">Features</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 col-12">
        <div class="icon-box">
          <i class="fa fa-briefcase service-icon"></i>
          <p class="service-title"><a href="#">Lorem Ipsum</a></p>
          <p class="service-para">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="fa fa-clipboard service-icon"></i>
          <p class="service-title"><a href="#">Dolor Sitema</a></p>
          <p class="service-para">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="fa fa-chart-bar service-icon"></i>
          <p class="service-title"><a href="#">Sed ut perspiciatis</a></p>
          <p class="service-para">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="fa fa-binoculars service-icon"></i>
          <p class="service-title"><a href="#">Nemo Enim</a></p>
          <p class="service-para">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="fa fa-cog service-icon"></i>
          <p class="service-title"><a href="#">Magni Dolore</a></p>
          <p class="service-para">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="fa fa-calendar-alt service-icon"></i>
          <p class="service-title"><a href="#">Eiusmod Tempor</a></p>
          <p class="service-para">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
    </div>
  </div>
</section>






<div class="container">
<?php
// Assuming $shortcode contains the shortcode you want to display
$shortcode = '[bdp_post_list]';

// Use do_shortcode to execute the shortcode and display its output
echo do_shortcode($shortcode);
?>

</div>

<?php
get_footer();
