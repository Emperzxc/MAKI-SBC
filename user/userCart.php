<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Cart</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Bootstrap 5 -->

  <!-- CSS -->
  <link href="../css/sidebar.css" rel="stylesheet">

</head>
<body class="h-100"> 

<div class="container-fluid h-100"  id="app">
  <div class="row h-100">

    <!-- SIDEBAR -->
    <div class="col-md-2 col-sm-1 col-12 d-flex flex-column flex-shrink-0 h-100 p-3 text-white  position-fixed"  style="background:#1167b1;" id="sidebar">
      <div class="d-flex justify-content-between align-items-center">
        <a href="" class="d-flex align-items-center text-white text-decoration-none">
          <ion-icon size="large" class="bi me-3 ms-2" width="40" height="32" name="happy-outline"></ion-icon>
          <span class="d-none d-md-inline fs-4">User Profile</span>
        </a>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
          <a href="./userDash" class="nav-link text-white" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <ion-icon class="bi me-2" name="home"><use xlink:href="#home"></use></ion-icon>
            <span class="d-none d-md-inline">Home</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Cart">
            <ion-icon class="bi me-2" name="cart"><use xlink:href="#cart"></use></ion-icon>
            <span class="d-none d-md-inline">Cart</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="#" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Cart">
            <ion-icon class="bi me-2" name="newspaper"><use xlink:href="#cart"></use></ion-icon>
            <span class="d-none d-md-inline">Transaction</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./userSettings" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
            <ion-icon class="bi me-2" name="settings"><use xlink:href="#settings"></use></ion-icon>
            <span class="d-none d-md-inline">Settings</span>
          </a>
        </li>
      </ul>
      <div class="mt-auto"> 
        <hr>
        <ul class="nav nav-pills flex-column">
          <li>
            <a href="../" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Log Out">
              <ion-icon class="bi me-2" name="log-out"><use xlink:href="#log-out"></use></ion-icon>
              <span class="d-none d-md-inline">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- SIDEBAR -->

    
    <!-- CONTENT -->
    <div class="col-md-10 col-sm-11 offset-md-2 offset-sm-1">
      <!-- Header -->
      <div class="p-3 d-flex align-items-center justify-content-between position-fixed bg-light" style="width: 82%; z-index: 100">
        <div>
          <span class="fs-4 text-primary"><strong>MAKI</strong></span>
        </div>
        <div class="d-flex align-items-center">
          <span class="fs-6">Juan Dela Cruz</span>
          <ion-icon class="ms-3" size="large" name="person-circle"></ion-icon>
        </div>
      </div>
      <!-- Header -->
      
      <div class="px-4 pt-5 pb-4 mt-5">
        <!-- Search Input Field -->
        <div class="row g-0 align-items-center">
        <div class="col-md-6 d-flex align-items-center justify-content-start">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Product..." aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2"><ion-icon name="search"></ion-icon></button>
            </div>
        </div>
        <!-- Search Input Field -->

        <div class="col-md-6 d-flex justify-content-end align-items-center gap-2">
            <button class="btn btn-primary" type="button">Delete All</button>
            <button class="btn btn-secondary" type="button">Delete Selected</button>
        </div>
    </div>
      </div>
      <!-- Table -->
      <div class="px-4">
        <table class="table table-striped text-center">
            <thead class="bg-primary text-white">
                <tr>
                <th class="col-1" scope="col"></th>
                <th class="col-2" scope="col">Product ID</th>
                <th class="col-4" scope="col">Description</th>
                <th class="col-2" scope="col">Price</th>
                <th class="col-1" scope="col">QTY</th>
                <th class="col-2" scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>
                
                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>

                <tr>
                <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </th>
                <td>2021920</td>
                <td>White Polo</td>
                <td>₱120.00</td>
                <td>
                    <div class="px-2">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" />
                    </div>
                </td>
                <td>₱240.00</td>
                </tr>
            </tbody>
            <tfoot class="bg-primary text-white"> <!-- Table footer section -->
            <tr>
                <td colspan="5" class="text-start">
                    <div class="d-flex align-items-center">
                        <div class="px-4 border-end border-3">
                            Overall Price <br>
                            <h4>₱1234.00</h4>
                        </div>
                        <div class="px-4" style="font-size: 12px">
                            Checkout using QR <br>
                            and proceed to counter
                        </div>
                    </div>
                </td> 
                <td colspan="1" class="">
                    <button type="button" class="btn btn-light">QR Checkout</button>
                </td>
            </tr>
        </tfoot>
        </table>
      </div>
      <!-- Table -->
    </div>
    <!-- CONTENT -->

  </div>
</div>

<!-- Resources Script -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>
<!-- Resources Script -->

<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- Ionicons -->

</body>
</html>
