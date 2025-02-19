<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Css Link -->
  <link rel="stylesheet" href="./Css/main.css">

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <!-- Google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delivery_truck_speed" />  
 
  <!-- Ocean 8 -->
  <link rel="stylesheet" href="https://img.icons8.com/ios/50/cargo-ship.png">

  <title>Home Page</title>
</head>

<body>
      <?php require("include/nav/nav.php"); ?>

      <!-- Carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" style="max-height: 80vh;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/image/container-2018508.jpg" class="d-block w-100" alt="..." style="max-height: 80vh; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 60px; color: white; text-shadow: 5px 7px 10px black;">WELCOME TO VIRTURCARGO</h5>
              <p style="font-size: 20px; font-family: sans-serif; text-shadow: 5px 7px 10px black;">We are the number one freight provider for UK to Nigeria, Ghana, Uganda, USA 
                and worldwide, manay thanks for your considerationto patronize us, we promise you excellent
                service as we've been doing for years.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/image/pexels-ellobito01-7128920.jpg" class="d-block w-100" alt="..." style="max-height: 80vh; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 60px; color: white; text-shadow: 5px 7px 10px black; color: white;">"Global parcel delivery"</h5>
              <p style="font-size: 20px; font-family: sans-serif; text-shadow: 10px 10px 10px black;">We are Nigeria base air freight company with huge experience in parcel delivery,
                in Africa, UK, USA, Canada, Asia, Europe and across all global continent.  
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/image/pexels-miguel-cuenca-67882473-21241152.jpg" class="d-block w-100" alt="..." style="max-height: 80vh; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5  style="font-size: 60px; color: white; text-shadow: 5px 7px 10px black; color: white;">DOOR TO DOOR CARGO</h5>
              <p style="font-size: 20px; font-family: sans-serif; text-shadow: 10px 10px 10px black;">To Nigeria, Ghana, Uganda, USA, Canada and Cargo from NIgeria to UK</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        
      <!-- Cards -->
      <div class="container mt-5">
        <div class="row justify-content-center">
          
          <!-- Sea Freight Card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg" style="text-align: center; height: 290px;">
              <img width="60" height="60" src="./assets/image/icons8-ship-50.png" alt="cargo-ship" 
                   class="mt-3 mb-3" 
                   style="outline: 1px 2px 3px  #0d6efd; margin-left: 45%;"/>
              <div class="card-body">
                <h5 class="card-title fw-bolder">Sea Freight</h5>
                <p class="card-text">Virtuecargo provides a reliable sea shipping to all states in Nigeria, Ghana, and other countries worldwide.</p>
                <a href="#" class="btn fw-semibold">
                  See More
                  
                </a>
              </div>
            </div>
          </div>
      
          <!-- Air Freight Card -->
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card shadow-lg" style="text-align: center;">
              <i class="fa-solid fa-helicopter fs-1 mt-5 mb-2 text-primary"></i>
              <div class="card-body">
                <h5 class="card-title fw-bolder">Air Freight</h5>
                <p class="card-text">Famous for cheap and affordable air cargo services to all part of Nigeria, Ghana, Uganda and anywhere in the world from the UK.</p>
                <a href="#" class="btn fw-semibold">See More</a>
              </div>
            </div>
          </div>
      
          <!-- Car Shipping Card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg" style="text-align: center;">
              <span class="material-symbols-outlined text-primary mt-5" style="font-size: 50px;">
                delivery_truck_speed
              </span>
              <div class="card-body">
                <h5 class="card-title fw-bolder">Car Shipping</h5>
                <p class="card-text">Virtuecargo is the perfect solution for car shipping to Nigeria, Ghana, Morocco, Gambia at a ridiculously low prices.</p>
                <a href="#" class="btn fw-semibold">See More</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>
      

      <!-- Image and Text Container -->
      <div class="container mt-5">
        <div class="row align-items-center">
          <!-- Image Column -->
          <div class="col-12 col-md-6">
            <img src="./assets/image/ship-7210281.jpg" class="img-fluid mb-3 mb-md-0" alt="...">
          </div>

          <!-- Text Column -->
          <div class="col-12 col-md-6 mt-3 mt-md-0">
            <h2 class="text-primary fs-1">Your Ultimate Shipping and Freight Solution</h2>
            <hr>
            <p>
              We offer reliable door-to-door freight shipping services to Nigeria 
              from locations such as the UK, China, the USA, Dubai, and Canada. As 
              a diverse company, we specialize in cost-effective and dependable 
              solutions for shipping cars and containers to Nigeria. Whether you're 
              sending a small package or larger items, trust us for fast, secure 
              delivery. Our services cover all states in Nigeria, as well as Ghana, 
              Uganda, and worldwide, ensuring your parcels arrive safely and on time, 
              no matter the destination.
            </p>
            <a href="#" class="btn btn-primary fw-semibold">SEE MORE</a>
          </div>
        </div>
      </div>

        <!-- Shipping boxes -->
        <div class="container-md" style="margin-top: 100px;">
          <div class="row">
            <div class="container mt-5">
              <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                  <h2 class="text-primary fs-1">Most Efficient Door-to-Door Cargo Service</h2>
                  <hr>
                  <p>
                    Welcome to Virtuecargo. If you're looking for a reliable door-to-door cargo 
                    service to ship items, vehicles, or containers to Nigeria from the UK, USA, 
                    China, Dubai, or Canada, your search ends here. As the leading cargo company 
                    in these regions since 2024, we've built a loyal customer base. At Virtuecargo, 
                    we specialize in logistics, ensuring seamless deliveries locally and internationally 
                    with both domestic UK courier services and global shipping solutions.
                  </p>
                  <a href="#" class="btn btn-primary fw-semibold mb-4">SEE MORE</a>
                </div>
                <div class="col-12 col-md-6">
                  <img src="./assets/image/deliverybox-man&car.jpg" class="img-fluid mb-3 mb-md-0" alt="..." style="width: 900px; height: 350px; box-shadow: 0px 1px 2px black;">
                </div>
              </div>
            </div>
          </div>
        </div>

          
          <!-- About us -->
          <div class=" container-md text-center" style="margin-top: 100px;">
            <h1>WE ARE THE LEADING CARGO SERVICE PROVIDER</h1>
            <p>
              We take pride in being the top choice for all your cargo needs, 
              offering seamless, hands-off solutions that ensure smooth and 
              reliable delivery. With our industry expertise and commitment 
              to excellence, we guarantee that your shipments are in the safest 
              hands. Let us handle the logistics, so you can focus on what truly 
              matters. Trust the best - we deliver, so you don't have to worry!
            </p>
          </div>


          
          <!--  -->
          <div class="row mt-5 me-2 ms-2">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-primary">WHY CHOOSE US?</h5>
                  <p class="card-text">
                    At Virtuecargo, we focus on reliable, efficient shipping and customer satisfaction. 
                    With years of experience, we ensure timely and secure deliveries, offering flexible 
                    options to suit your needs. Our advanced tracking system keeps you updated in real 
                    time, while transparent pricing and personalized support make us a trusted choice 
                    for all your shipping needs. Choose us for peace of mind and dependable service every time.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-primary">WHAT MAKES U UNIQUE?</h5>
                  <p class="card-text ">
                    What makes Virtuecargo unique is our personalized service, reliable deliveries, and transparent 
                    pricing. We tailor solutions to your needs, our advanced tracking technology gives you full 
                    visibility throughout the process, and ensure every shipment is handled with care. With a focus on 
                    customer satisfaction, we provide a seamless, hassle-free shipping experience every time. Excellence.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-primary">WHY WE'RE TRUSTED?</h5>
                  <p class="card-text">
                    What makes Virtuecargo unique is our personalized service, reliable deliveries, 
                    and transparent pricing. We tailor solutions to your needs,Our advanced tracking 
                    technology gives you full visibility throughout the process,
                    and ensure every shipment is handled with care. With a focus on customer satisfaction, 
                    we provide a seamless, hassle-free shipping experience every time.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-primary">WHAT SETS US APART?</h5>
                  <p class="card-text">
                    What sets us apart is our unwavering commitment to quality and innovation. We deliver 
                    personalized solutions that are tailored to meet your unique needs. Our team combines 
                    deep expertise with a passion for exceeding expectations. We believe in building strong, 
                    lasting relationships with our clients. Every interaction is designed to create real, 
                    measurable impact.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <section class="bg-image d-flex justify-content-center align-items-center text-white" style="margin-top: 60px;">
            <div class="text-center">
              <h1 class="att">ATTENTION!</h1>
              <p style="font-size: 25px;  text-shadow: 1px 10px 30px black">
                Leaving in Nigeria? We can help you buy your items and then cargo them to Nigeria from the UK. <br>
                Check our services</p>
            </div>
          </section>

          <style>
            .att{
              font-family: Arial,'Lucida Sans';
              font-size: 60px;
              font-weight: bolder;
              text-shadow: 1px 10px 30px black;
            }
            /* CSS for the background image */
            .bg-image {
              background-image: url('./assets/image/ship-7210281.jpg');
              background-size: cover;
              background-position: center center;
              background-attachment: fixed;
              background-repeat: no-repeat;
              max-height: 100vh;
              height: 450px;
            }
          </style>

          <!--  -->
          <div class="container" style="margin-top: 150px;">
            <div class="row align-items-center">
              <!-- Text Section -->
              <div class="col-12 col-md-6 ms-3">
                <h2 class="text-primary fs-1 pb-3">WE SURELY DELIVER!!</h2>
                <p>
                  We don't only cover UK, we cover a wide range of locations to Nigeria. Our service is extended to China, 
                  USA, Dubai, and Canada <br> <br>Many thanks for your patronage, we promise you excellent service as we've been doing for years. <br> <br>
                  We are just an email away, drop us a line and we will get back to you as soon as possible.
                </p>
              </div>
              <!-- Image Section -->
              <div class="col-12 col-md-5 col-lg-5">
                <img src="./assets/image/pexels-tima-miroshnichenko-6169033.jpg" class="img-fluid" alt="Image description">
              </div>
            </div>
          </div>


        <!-- Accordion -->
        <div class="container" style="margin-top: 170px; margin-bottom: 180px;">
          <h1 class="text-center mb-5 fw-bold¬" style="font-size: 50px;">Frequently Asked Questions</h1>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Are there any restrictions on what can be shipped?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Yes, there are certain items that cannot be shipped, 
                  such as hazardous materials, illegal goods, perishable 
                  items (unless specified), and oversized cargo that doesn't 
                  meet our size requirements. Please refer to our shipping 
                  policy for a full list of restricted items.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  What are your shipping rates?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Our shipping rates depend on factors such as package size, 
                  weight, destination, and the service you choose. You can 
                  calculate the exact cost by entering the details of your 
                  shipment on our pricing page.
                </div>
              </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 100px;">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Can I schedule a pickup for my shipment?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Yes, we offer pickup services for your convenience. 
                  You can schedule a pickup online or by contacting our 
                  customer service team. We offer flexible pickup options 
                  based on your preferred time and location.
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <?php require("include/footer/footer.php"); ?>
  </div>
</body>
</html>