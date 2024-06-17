<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Staff Transaction </title>

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
    <div class="col-md-2 col-sm-1 col-12 d-flex flex-column flex-shrink-0 h-100 p-3 text-white  position-fixed"  style="background:#1167b1;" id="sidebar">
      <div class="d-flex justify-content-between align-items-center">
        <a href="." class="d-flex align-items-center text-white text-decoration-none">
          <ion-icon size="large" class="bi me-3 ms-2" width="40" height="32" name="happy-outline"></ion-icon>
          <span class="d-none d-md-inline fs-4">Staff Profile</span>
        </a>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
          <a href="./staffPayment.php" class="nav-link text-white" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
          <ion-icon class="bi me-2" name="card"></ion-icon>
            <span class="d-none d-md-inline">Payment</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Cart">
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

      <div class="px-4 pt-5 pb-4 mt-5">
        <div class="row g-0 align-items-center">
          <div class="col-md-6 d-flex align-items-center justify-content-start">
            <h4>System Accounts Management</h4>
          </div>
          <!-- Search Input Field -->
          <div class="col-md-6 d-flex justify-content-end align-items-center gap-2">
              <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exportModal">
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <ion-icon name="share-outline"></ion-icon>
                  Generate Report
                </div>
              </button>

              <!-- Export Modal -->
              <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModalTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-primary" id="exportModalTitle">Export Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: left;">
                    <form>
                      <div class="mb-3">
                        <label for="file-config" class="col-form-label">File Configuration:</label>
                        <select class="form-control" name="file-config" id="file-config">
                          <option class="form-control" value="Current">Current View</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Select file type:</label><br>
                        <input type="radio" id="csv" name="file-type" value="CSV">
                        <label for="csv">CSV</label><br>
                        <input type="radio" id="xls" name="file-type" value="XLS">
                        <label for="xls">XLS</label><br>
                        <input type="radio" id="xlsx" name="file-type" value="XLSX">
                        <label for="xlsx">XSLX</label>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Export</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Export Modal -->
          </div>
        </div>
        <!-- Search Input Field -->
        <div class="row g-0 align-items-center pt-4">
          <div class="col-md-6 d-flex align-items-center justify-content-start">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search Order ID..." aria-label="Search" aria-describedby="button-addon2">
                  <button class="btn btn-primary" type="button" id="button-addon2"><ion-icon name="search"></ion-icon></button>
              </div>
          </div>
          <!-- Button Trigger Modal -->
          <div class="col-md-6 d-flex justify-content-end align-items-center gap-2">
              <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Filter Options</button>
          </div>

          <!-- Filter Modal -->
          <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Filter Options</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="orderId" class="form-label">Order ID</label>
                      <input type="text" class="form-control" id="orderId" placeholder="Enter Order ID">
                    </div>
                    <div class="mb-3">
                      <label for="user" class="form-label">User</label>
                      <input type="text" class="form-control" id="user" placeholder="Enter User">
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price Range</label>
                      <div class="input-group">
                        <span class="input-group-text">₱</span>
                        <input type="number" class="form-control" id="minPrice" placeholder="Min" aria-label="Min Price">
                        <span class="input-group-text">to</span>
                        <span class="input-group-text">₱</span>
                        <input type="number" class="form-control" id="maxPrice" placeholder="Max" aria-label="Max Price">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="date" class="form-label">Date Range</label>
                      <div class="input-group">
                        <input type="date" class="form-control" id="minDate" aria-label="Min Date">
                        <span class="input-group-text">to</span>
                        <input type="date" class="form-control" id="maxDate" aria-label="Max Date">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="tax" class="form-label">Tax Range</label>
                      <div class="input-group">
                        <span class="input-group-text">%</span>
                        <input type="number" class="form-control" id="minTax" placeholder="Min" aria-label="Min Tax">
                        <span class="input-group-text">to</span>
                        <span class="input-group-text">%</span>
                        <input type="number" class="form-control" id="maxTax" placeholder="Max" aria-label="Max Tax">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Filter Modal -->

      <!-- Table -->
      <div class="px-4">
        <table class="table table-striped text-center">
            <thead class="bg-primary text-white">
                <tr>
                <th class="col-2" scope="col">Order ID</th>
                <th class="col-2" scope="col">User</th>
                <th class="col-2" scope="col">Price</th>
                <th class="col-2" scope="col">Date</th>
                <th class="col-2" scope="col">Tax</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>2021920</td>
                <td>Johnny Bravo</td>
                <td>₱120.00</td>
                <td>01-31-2024</td>
                <td>Tax</td>
                </tr>

                <tr>
                <td>2021920</td>
                <td>Johnny Bravo</td>
                <td>₱120.00</td>
                <td>01-31-2024</td>
                <td>Tax</td>
                </tr>

                <tr>
                <td>2021920</td>
                <td>Johnny Bravo</td>
                <td>₱120.00</td>
                <td>01-31-2024</td>
                <td>Tax</td>
                </tr>

                <tr>
                <td>2021920</td>
                <td>Johnny Bravo</td>
                <td>₱120.00</td>
                <td>01-31-2024</td>
                <td>Tax</td>
                </tr>

                <tr>
                <td>2021920</td>
                <td>Johnny Bravo</td>
                <td>₱120.00</td>
                <td>01-31-2024</td>
                <td>Tax</td>
                </tr>
            </tbody>
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
