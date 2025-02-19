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

  <!-- query -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
  <!-- datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script>
    $(document).ready( function () {
    $('.myTable').DataTable();
    });
  </script>
<title>Dashboard</title>
</head>

<body>
    <?php require("include/nav/dashboardnav.php"); ?>

            <!-- Bottom list -->
            <div class="mt-3 rounded p-2" style="background-color: rgb(235, 235, 235); width: 65.5rem;">
                <div class="d-flex">
                    <i class="fa-solid fa-list pe-1 ms-3 text-primary"></i>
                    <h6 class="fw-bolder text-primary" style="font-family: Lexend;">Shipment</h6>
                </div>

                <!-- Table -->
                <div class="container-md">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="table-respondsive ">
                            <table class="myTable" style="width: 100px;">
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
                                        <td>1</td>
                                        <td>#262580</td>
                                        <td>London</td>
                                        <td>Electronic</td>
                                        <td>Oct 17, 2024</td>
                                        <td>Lagos</td>
                                        <td>Jan 1, 2024</td>
                                        <td>27kg</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>#262230</td>
                                        <td>Bristol</td>
                                        <td>Cars</td>
                                        <td>Dec 1, 2024</td>
                                        <td>Abuja</td>
                                        <td>Jan 1, 2025</td>
                                        <td>130kg</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>#643278</td>
                                        <td>Durham </td>
                                        <td>furniture</td>
                                        <td>Oct 19, 2024</td>
                                        <td>Enugu</td>
                                        <td>Jan 20, 2025</td>
                                        <td>90kg</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>#794821</td>
                                        <td>Leeds </td>
                                        <td>Gadget</td>
                                        <td>Nov 24, 2024</td>
                                        <td>Aba</td>
                                        <td>Feb 1, 2025</td>
                                        <td>86kg</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
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

                    <div class="col-12 col-md-6 col-lg-4 me-2 bg-light" style="width: 16rem; background-color: rgb(235, 235, 235); border: none;">
                        <div class="">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chart-simple me-2 mb-2 text-primary bg-ight p-1 rounded fw-5" style="box-shadow: 0px 0px 4px rgb(148, 147, 147);"></i>
                                <h6 class="card-title text-primary fw-bold">Statistics</h6>
                            </div>
                                <!-- <p class="card-text">Total Shipping revenue</p> -->
                                <!-- <h1 class="card-text fw-bolder">740</h1> -->
                        </div>
                    </div>
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
    
