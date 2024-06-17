<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Staff Payment </title>

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
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
          <ion-icon size="large" class="bi me-3 ms-2" width="40" height="32" name="happy-outline"></ion-icon>
          <span class="d-none d-md-inline fs-4">Staff Profile</span>
        </a>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
          <a href="/" class="nav-link active" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
          <ion-icon class="bi me-2" name="card"></ion-icon>
            <span class="d-none d-md-inline">Payment</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./staffTransaction.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Cart">
            <ion-icon class="bi me-2" name="cart"><use xlink:href="#cart"></use></ion-icon>
            <span class="d-none d-md-inline">Transaction</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./staffSettings.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
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
          <span class="fs-4 fw-bold text-primary">MAKI</span>
        </div>
        <div class="d-flex align-items-center">
          <span class="fs-6">Juan Dela Cruz</span>
          <ion-icon class="ms-3" size="large" name="person-circle"></ion-icon>
        </div>
      </div>
      
      <div class="row mt-5">
        <div class="col-md-4 mt-5">
          <!-- Left column -->
          <div class="p-3 bg-light h-100">
            <h4 class="text-primary">Payment System</h4>

            <form class="my-3">
              <div class="col-8">
              <label for="exampleFormControlInput1" class="form-label text-primary">Scan QR Code</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Order ID">
              </div>
              
              <label for="exampleFormControlInput1" class="form-label mt-4">Total Price</label>
              <h1 class="text-primary">₱1230.00</h1>

              <div class="mt-4 text-center d-flex justify-content-center gap-2">
                <button type="button" class="btn btn-primary btn-lg w-10 flex-fill"><ion-icon size="large" name="print"></ion-icon></button>
                <button type="button" class="btn btn-primary btn-lg w-100 flex-fill">Payment Confirm</button>
              </div>
            </form>

          </div>
        </div>
        <div class="col-md-8 mt-5">
          <!-- Right column  -->
          <div class="p-3 bg-light h-100">
            <h4 class="text-primary">Orders List</h4>

          <!-- Table -->
          <div class="my-3">
            <table class="table table-striped text-center">
              <thead class="bg-primary text-white">
                  <tr>
                  <th class="col-2" scope="col">Product ID</th>
                  <th class="col-4" scope="col">Description</th>
                  <th class="col-2" scope="col">Price</th>
                  <th class="col-1" scope="col">QTY</th>
                  <th class="col-2" scope="col">Total Price</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>2021920</td>
                    <td>White Polo</td>
                    <td>₱120.00</td>
                    <td>1</td>
                    <td>₱240.00</td>
                  </tr>
                  <tr>
                    <td>2021920</td>
                    <td>White Polo</td>
                    <td>₱120.00</td>
                    <td>2</td>
                    <td>₱240.00</td>
                  </tr>
                  <tr>
                    <td>2021920</td>
                    <td>White Polo</td>
                    <td>₱120.00</td>
                    <td>3</td>
                    <td>₱240.00</td>
                  </tr>
                  <tr>
                    <td>2021920</td>
                    <td>White Polo</td>
                    <td>₱120.00</td>
                    <td>4</td>
                    <td>₱240.00</td>
                  </tr>
                  <tr>
                    <td>2021920</td>
                    <td>White Polo</td>
                    <td>₱120.00</td>
                    <td>5</td>
                    <td>₱240.00</td>
                  </tr>
              </tbody>
            </table>
          </div>
          <!-- Table -->
          </div>
        </div>
      </div>
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

<script>
new Vue({
  el: '#app',
  data: {
    sidebarWidth: 280,
    isSidebarOpen: true 
  },
  methods: {
    toggleSidebar() {
      this.isSidebarOpen = !this.isSidebarOpen; 
      if (this.isSidebarOpen) {
        this.sidebarWidth = 280; 
      } else {
        this.sidebarWidth = 50; 
      }
    }
  }
});
</script>

</body>
</html>
