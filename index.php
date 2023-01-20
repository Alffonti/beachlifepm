<?php get_header(); ?>

<div class="container-fluid col-xxl-8 px-4 py-0 min-vh-100 intro-section">
  <header class="container d-flex flex-wrap align-items-center justify-content-between">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo.png" alt="Beach Life Logo" width="180" height="180">

    </a>
    <a href="https://www.ivacationonline.com/index.asp" target="_blank" type="button" class="btn btn-tertiary text-light btn-lg px-4 me-md-2">Rent a property</a>
  </header>
  <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold intro--title">Managing your property,<br/> so you don't have to</h1>
      <a href="#contact-form" type="button" class="btn btn-tertiary text-light btn-lg px-4 gap-3 intro--cta">Fill the form</a>
  </div>
</div>

<div class="container min-vh-100 about-section">
  <div class="row my-5">
    <div class="col-sm mt-5">
      <h2 class="display-5 fw-bold intro--title">About Us</h2>
      <p class="lead mb-4 me-5 about--subtitle">Don't miss out on this opportunity to enhance your property's potential and see a significant return on investment.</p>
      <img class="rounded about--image" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/property-1.jpg" alt="Beach Life Logo" width="600" height="900">
    </div>
    <div class="col-sm mt-5 me-5">
      <img class="rounded mb-5" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/property-2.jpg" alt="Beach Life Logo" width="600" >
      <p class="lead ms-1">Are you tired of dealing with the stress and hassle of managing your beachfront property on your own? Let us take the burden off your shoulders and provide top-notch property management services to ensure your property is well-maintained, rented out to responsible tenants, and generating maximum income.</p>
      <p class="lead ms-1">Our team of experienced property managers has a deep understanding of the local real estate market and knows how to maximize the return on your investment. We handle everything from advertising and showing the property to screening tenants and handling maintenance and repairs.</p>
      <p class="lead ms-1">With our comprehensive property management services, you can sit back, relax, and enjoy the benefits of owning beachfront property without the headaches. We'll take care of everything so you can focus on what matters most - making lasting memories with your family and friends.</p>
      <p class="lead ms-1">Don't let the stress of property management ruin your beach vacation. Contact us today to learn more about how we can help you manage your beachfront property with ease.</p>
    </div>
  </div>
</div>

<div class="py-5 min-vh-100 properties-section">
    <div class="container">
      <div class="row my-5">
        <div class="col px-4 text-center">
          <h1 class="display-5 fw-bold intro--title">Properties Under Our Management</h1>
          <p class="lead mb-4 intro--subtitle">Tides and Driftwood Buildings at the Sea Mist Resort at Myrtle Beach.</p>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        <div class="col">
          <div class="card shadow-sm">
         <img class="" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/tides-buildings.jpg" alt="Beach Life Logo">
            <div class="card-body">
              <p class="card-text">The <strong>Tides Buildings</strong> at Sea Mist Resort are perfect for those looking for a relaxing beach vacation, with amenities such as on-site swimming pools, grilling areas, and easy access to the sandy beaches of the Atlantic Ocean.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
         <img class="" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/driftwood-buildings.jpg" alt="Beach Life Logo">
            <div class="card-body">
              <p class="card-text">The <strong>Driftwood Buildings</strong> at the Sea Mist Resort in Myrtle Beach offer guests a unique beach vacation experience. These properties are nestled amidst lush greenery, providing a secluded and tranquil atmosphere for guests to enjoy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact-form" class="py-5 min-vh-100 contact-section">
    <div class="container">
      <div class="row my-5 align-items-center">
        <div class="col px-4 text-center">
          <h1 class="display-5 fw-bold intro--title">Let's talk!</h1>
          <p class="lead mx-5">Thank you for visiting our beach property management website. We understand that managing a property can be a difficult and time-consuming task. Whether you're a property owner looking for assistance with managing your rental properties, or a tenant in need of maintenance or repair services, our team is dedicated to providing you with the highest level of service.</p>
          </div>
        <div class="col px-4">
          <?php echo do_shortcode("[ninja_form id=1]"); ?>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>
