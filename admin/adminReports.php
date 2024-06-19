<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Admin Reports </title>

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
     <div class="col-md-2 col-sm-1 col-12 d-flex flex-column flex-shrink-0 h-100 p-3 text-white  position-fixed" style="background:#1167b1;"  id="sidebar">
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
          <a href="./adminReports.php" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Reports">
            <ion-icon class="bi me-2" name="document"><use xlink:href="#reports"></use></ion-icon>
            <span class="d-none d-md-inline">Reports</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./adminSettings.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
            <ion-icon class="bi me-2" name="settings"><use xlink:href="#settings"></use></ion-icon>
            <span class="d-none d-md-inline">Settings</span>
          </a>
        </li>
      </ul>
      <div class="mt-auto"> 
        <hr>
        <ul class="nav nav-pills flex-column">
          <li>
            <a href="#" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Log Out">
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
        <div class="row g-0 align-items-center">
          <div class="col-md-6 d-flex align-items-center justify-content-start">
            <h4>Generate Reports</h4>
          </div>
        </div>

        <!-- FORM -->
        <form action="">
        <!-- Date Range -->
        <div class="row g-0 pt-4">
          <div class="col-md-6 d-flex justify-content-start">
            <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Date Range</label>
              <span class="input-group-text">Min</span>
              <input type="date" class="form-control" id="minDate">
              <span class="input-group-text">Max</span>
              <input type="date" class="form-control" id="maxDate">
            </div>
          </div>
          <!-- Combobox -->
          <div class="col-md-3 d-flex ms-5">
            <div class="input-group">
              <label class="input-group-text" for="inputGroupSelect01">Data Type</label>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          
          <!-- Export Button -->
          <div class="col-md-2 d-flex justify-content-end ms-5">
            <button class="btn btn-primary" type="submit">Export</button>
          </div>
          </form>

          <!-- Approve Modal -->
          <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Add User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="productId" class="form-label">User ID</label>
                      <input type="text" class="form-control" id="productId" placeholder="Enter User ID">
                    </div>
                    <div class="mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="mb-3">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="roleSelect">Role</label>
                      <input type="text" class="form-control" id="roleSelect" placeholder="Enter Role">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary">Approve</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Approve Modal -->
          
          <!-- Delete Modal -->
          <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Confirm Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="productId" class="form-label">User ID</label>
                      <input type="text" class="form-control" id="productId" placeholder="Enter User ID">
                    </div>
                    <div class="mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="mb-3">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="roleSelect">Role</label>
                      <input type="text" class="form-control" id="roleSelect" placeholder="Enter Role">
                    </div>
                  <h6>Are you sure you want to decline this user?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-danger">Decline</button>
                </div>
                </form> 
              </div>
            </div>
          </div>
          <!-- Delete Modal -->
        </div>

        <!-- Table -->
        <div class="mt-4 overflow-auto style" style="max-height: 500px;">
          <table class="table table-striped text-center">
              <thead class="bg-primary text-white">
                  <tr>
                    <th class="col-2" scope="col">User ID</th>
                    <th class="col-2" scope="col">First Name</th>
                    <th class="col-2" scope="col">Last Name</th>
                    <th class="col-2" scope="col">Role</th>
                    <th class="col-2" scope="col">Created at</th>
                    <th class="col-2" scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>
                      12345
                    </td>
                    <td>Mary</td>
                    <td>Grace</td>
                    <td>User</td>
                    <td>12-05-2002</td>
                    <td>
                    <div class="row g-0 align-items-centee">
                      <div class="col d-flex justify-content-center align-items-center gap-2">
                          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                          <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Decline</button>
                      </div>
                    </div>
                    </td>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- Table -->

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
