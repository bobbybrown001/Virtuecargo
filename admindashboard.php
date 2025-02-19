<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Css Link -->
  <link rel="stylesheet" href="./css/dashboard.css">

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <!-- Google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delivery_truck_speed" />  
 
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Kalam:wght@300;400;700&family=Lexend:wght@100..900&family=Lilita+One&family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Rubik+Mono+One&family=Silkscreen:wght@400;700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<title>Dashboard</title>
</head>

<body>
    <div class="container-fluid d-flex">
        <!-- Side Nav -->
        <div class="sideNav">
            <a class="navbar-brand text-primary fw-bolder" href="#" style="margin-left: 29px; font-size: larger;">VIRTURCARGO</a>
            <ul class="mt-3 main-List" id="sidelist">
                <li>
                    <a href="#">
                        <i class="fas fa-home text-dark" ></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cart-plus"></i>
                        Order
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-route"></i>
                        Tracking
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <div type="button" class="fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </div>
                  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">LOGOUT</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to Logout?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="row ps-4 pt-3 ms-2 me-3" id="mainContent">
            <h3 class="fw-bolder">Admin Dashboard</h3>
            <p style="font-family: Lexend;">See all your Shipment Overview here.</p>

            <!-- Cards -->
            <div class="card col-12 col-md-6 col-lg-4 me-2" style="width: 16rem; background-color: rgb(235, 235, 235); border: none;">
                <div class="card-body">
                <div class="d-flex align-items-center">
                    <i class="fas fa-truck me-2 mb-2 text-primary bg-ight p-1 rounded fw-5" style="box-shadow: 0px 0px 4px rgb(148, 147, 147);"></i>
                    <h6 class="card-title text-primary fw-bold">Active Shipments</h6>
                </div>
                  <p class="card-text fw-5">Actively transported</p>
                  <h1 class="card-text fw-bolder digits">170</h1>
                  <i class="fas fa-signature"></i>

                </div>
            </div>

            <div class="card me-2 col-12 col-md-6 col-lg-4" style="width: 16rem; background-color: rgb(235, 235, 235); border: none;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-clock me-2 mb-2 text-primary bg-ight p-1 rounded fw-5" style="box-shadow: 0px 0px 3px rgb(148, 147, 147);"></i>
                        <h6 class="card-title text-primary fw-bold">Pending Packages</h6>
                    </div>
                    <p class="card-text">Waiting to be processed</p>
                    <div class="d-flex">
                    <h1 class="card-text fw-bolder">280</h1>
                    
                </div>
                </div>
            </div>
              

            <div class="card me-2 col-12 col-md-6 col-lg-4" style="width: 16rem; background-color: rgb(235, 235, 235); border: none;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle me-2 mb-2 text-primary bg-ight p-1 rounded fw-5" style="box-shadow: 0px 0px 4px rgb(148, 147, 147);"></i>
                        <h6 class="card-title text-primary fw-bold">Delivered Shipments</h6>
                    </div>
                    <p class="card-text">Total Packages shipped</p>
                    <h1 class="card-text fw-bolder">300</h1>
                </div>
            </div>

            <div class="card col-12 col-md-6 col-lg-4" style="width: 16rem; background-color: rgb(235, 235, 235); border: none;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-chart-simple me-2 mb-2 text-primary bg-ight p-1 rounded fw-5" style="box-shadow: 0px 0px 4px rgb(148, 147, 147);"></i>
                        <h6 class="card-title text-primary fw-bold">Analytics View</h6>
                    </div>
                    <p class="card-text">Total Shipping revenue</p>
                    <h1 class="card-text fw-bolder">740</h1>
                </div>
            </div>

            <!-- Bottom list -->
            <div class="mt-3 rounded p-2" style="background-color: rgb(235, 235, 235); width: 65.5rem;">
                <div class="d-flex">
                    <i class="fa-solid fa-list pe-1 text-primary"></i>
                    <h6 class="fw-bolder text-primary" style="font-family: Lexend;">Shipment</h6>
                </div>

                <!-- Table -->
                <div class="container-md">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TRACKING NUMBER</th>
                                        <th>COUNTRY</th>
                                        <th>GOODS</th>
                                        <th>SHIPPED DATE</th>
                                        <th>DESTINATION</th>
                                        <th>DATE OF ARIVAL</th>
                                        <th>WEIGHT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>#262580</td>
                                        <td>London</td>
                                        <td>Electronic</td>
                                        <td>Oct 17, 2024</td>
                                        <td>Lagos</td>
                                        <td>Jan 1, 2024</td>
                                        <td>27kg</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>#262230</td>
                                        <td>Bristol</td>
                                        <td>Cars</td>
                                        <td>Dec 1, 2024</td>
                                        <td>Abuja</td>
                                        <td>Jan 1, 2025</td>
                                        <td>130kg</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>#643278</td>
                                        <td>Durham </td>
                                        <td>furniture</td>
                                        <td>Oct 19, 2024</td>
                                        <td>Enugu</td>
                                        <td>Jan 20, 2025</td>
                                        <td>90kg</td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>#79421</td>
                                        <td>Leeds </td>
                                        <td>Gadget</td>
                                        <td>Nov 24, 2024</td>
                                        <td>Aba</td>
                                        <td>Feb 1, 2025</td>
                                        <td>86kg</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>#426583</td>
                                        <td>Liechester</td>
                                        <td>Clothings</td>
                                        <td>Nov 30, 2024</td>
                                        <td>PH</td>
                                        <td>Jan 18, 2025</td>
                                        <td>60kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- <div class="card col-12 col-md-6 col-lg-4" style="width: 16rem; background-color: rgb(235, 235, 235); border: none;">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chart-simple me-2 mb-2 text-primary bg-ight p-1 rounded fw-5" style="box-shadow: 0px 0px 4px rgb(148, 147, 147);"></i>
                                <h6 class="card-title text-primary fw-bold">Analytics View</h6>
                            </div>
                                <p class="card-text">Total Shipping revenue</p>
                                <h1 class="card-text fw-bolder">740</h1>
                        </div>
                    </div> -->
                </div>

                

 
            </div>
        </div>    
    </div>
</body>




    <!-- <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
      </div>
      

      

      
      <button class="btn btn-info">
        <i class="fas fa-plus-circle"></i> Add New
      </button>
       -->
    
