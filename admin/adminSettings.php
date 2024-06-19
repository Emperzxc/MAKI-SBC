<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Admin Settings </title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Bootstrap 5 -->

  <!-- CSS -->
  <link href="../css/sidebar.css" rel="stylesheet">

</head>
<body class="h-100"> 

<div class="container-fluid h-100"  id="app">
  <div class="row h-100">

     <!-- SIDEBAR -->
     <div class="col-md-2 col-sm-1 col-12 d-flex flex-column flex-shrink-0 h-100 p-3 text-white position-fixed"  style="background:#1167b1;" id="sidebar">
      <div class="d-flex justify-content-between align-items-center">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
          <ion-icon size="large" class="bi me-3 ms-2" width="40" height="32" name="happy-outline"></ion-icon>
          <span class="d-none d-md-inline fs-4">Admin Profile</span>
        </a>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
          <a href="./adminDash.php" class="nav-link text-white" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
            <ion-icon class="bi me-2" name="home"><use xlink:href="#home"></use></ion-icon>
            <span class="d-none d-md-inline">Dashboard</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./adminProducts.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Products">
            <ion-icon class="bi me-2" name="pricetag"><use xlink:href="#products"></use></ion-icon>
            <span class="d-none d-md-inline">Products</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./adminAccounts.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Accounts">
            <ion-icon class="bi me-2" name="cart"><use xlink:href="#accounts"></use></ion-icon>
            <span class="d-none d-md-inline">Accounts</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./adminSettings.php" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
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
          <span class="fw-bold fs-4 text-primary">MAKI</span>
        </div>
        <div class="d-flex align-items-center">
          <span class="fs-6">Admin</span>
          <ion-icon class="ms-3" size="large" name="person-circle"></ion-icon>
        </div>
      </div>
      <!-- Header -->
      <div class="px-4 pt-5 pb-4 mt-5">
        <h4 class="text-primary">Update Credentials</h4>
        <form class="pt-3">
            <!-- <div class="mb-3 col-3">
                <label for="oldPassword" class="form-label text-primary">Old Password</label>
                <input type="password" class="form-control" id="oldPassword" placeholder="Enter your old password">
            </div> -->
            <div class="mb-3 col-3">
                <label for="newPassword" class="form-label text-primary">New Password</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
            </div>
            <div class="mb-4 col-3">
                <label for="confirmPassword" class="form-label text-primary">Re-enter New Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter your new password">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
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

</body>
</html>
