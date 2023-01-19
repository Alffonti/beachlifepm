<?php get_header(); ?>



<!-- <nav class="navbar navbar-expand-lg navbar-dark menu">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo.png" alt="Beach Life Logo" width="120" height="120">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Form</a>
        </li>
        <button type="button" class="rounded-pill btn-rounded">Rentals
          <span>
            <i class="fa-solid fa-phone"></i>
          </span>
        </button>
      </ul>
    </div>
  </div>
</nav> -->

<div class="container-fluid col-xxl-8 px-4 py-0 min-vh-100 intro-section">
  <header class="container d-flex flex-wrap align-items-center justify-content-between">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo.png" alt="Beach Life Logo" width="180" height="180">

    </a>
    <a href="https://www.ivacationonline.com/index.asp" type="button" class="btn btn-tertiary text-light btn-lg px-4 me-md-2">Rent a property</a>
  </header>
  <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold intro--title">Raising the Standard of Living through <br/> Property Management</h1>
      <p class="lead mb-4 intro--subtitle">Unlocking the Door to a More Relaxed and Fulfilling Life</p>
      <a href="/" type="button" class="btn btn-tertiary text-light btn-lg px-4 gap-3 intro--cta">Fill the form</a>
  </div>
</div>

<div class="container min-vh-100 about-section">
  <div class="row my-5">
    <div class="col-sm mt-5 me-5">
      <img class="rounded mb-5" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/property-2.jpg" alt="Beach Life Logo" width="600" >
      <p class="lead me-1">Are you tired of dealing with the stress and hassle of managing your beachfront property on your own? Let us take the burden off your shoulders and provide top-notch property management services to ensure your property is well-maintained, rented out to responsible tenants, and generating maximum income.</p>
      <p class="lead me-1">Our team of experienced property managers has a deep understanding of the local real estate market and knows how to maximize the return on your investment. We handle everything from advertising and showing the property to screening tenants and handling maintenance and repairs.</p>
      <p class="lead me-1">With our comprehensive property management services, you can sit back, relax, and enjoy the benefits of owning beachfront property without the headaches. We'll take care of everything so you can focus on what matters most - making lasting memories with your family and friends.</p>
      <p class="lead me-1">Don't let the stress of property management ruin your beach vacation. Contact us today to learn more about how we can help you manage your beachfront property with ease.</p>
    </div>
    <div class="col-sm mt-5">
      <h2 class="display-5 fw-bold intro--title">About Us</h2>
      <p class="lead mb-4 about--subtitle">Don't miss out on this opportunity to enhance your property's potential and see a significant return on investment.</p>
      <img class="rounded about--image" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/property-1.jpg" alt="Beach Life Logo" width="600" height="900">
    </div>
  </div>
</div>

<div class="py-5 bg-light min-vh-100 properties-section">
    <div class="container">
      <div class="row my-5">
        <div class="col px-4 text-center">
          <h1 class="display-5 fw-bold intro--title">Properties Under Our Management</h1>
          <p class="lead mb-4 intro--subtitle">Expertly maintained and optimized for maximum return on investment.</p>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        <div class="col">
          <div class="card shadow-sm">
         <img class="" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/tides-buildings.jpg" alt="Beach Life Logo">
            <div class="card-body">
              <p class="card-text">Tides Buildings at the Sea Mist Resort at Myrtle Beach</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
         <img class="" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/driftwood-buildings.jpg" alt="Beach Life Logo">
            <div class="card-body">
              <p class="card-text">Driftwood Buildings at the Sea Mist Resort at Myrtle Beach</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
