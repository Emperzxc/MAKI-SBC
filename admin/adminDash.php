<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Admin Dashboard</title>

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
    <div class="col-md-2 col-sm-1 col-12 d-flex flex-column flex-shrink-0 h-100 p-3 text-white  position-fixed" style="background:#1167b1;"id="sidebar">
      <div class="d-flex justify-content-between align-items-center">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
          <ion-icon size="large" class="bi me-3 ms-2" width="40" height="32" name="happy-outline"></ion-icon>
          <span class="d-none d-md-inline fs-4">Admin Profile</span>
        </a>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
          <a href="" class="nav-link active" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
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
      <div class="px-4 pt-5 pb-1 mt-5">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 d-flex align-items-center justify-content-start">
              <h4>Dashboard Analytics</h4>
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
          <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center border-start border-primary border-5">
                          <ion-icon size="large" name="file-tray-full-outline"></ion-icon>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-bold text-end mb-0">Total Products</p>
                                <p class="card-text fs-2 fw-bold text-end text-primary">346</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center border-start border-success border-5">
                          <ion-icon size="large" name="cart-outline"></ion-icon>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-bold text-end mb-0">Today's Orders</p>
                                <p class="card-text fs-2 fw-bold text-end text-success">346</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center border-start border-danger border-5">
                          <ion-icon size="large" name="cash-outline"></ion-icon>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-bold text-end mb-0">Today's Sales</p>
                                <p class="card-text fs-2 fw-bold text-end text-danger">3,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center border-start border-warning border-5">
                          <ion-icon size="large" name="cellular-outline"></ion-icon>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-bold text-end mb-0">Monthly Sales</p>
                                <p class="card-text fs-2 fw-bold text-end text-warning">46,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="row mt-5">
            <!-- CHARTS  -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title text-primary">Earnings Overview</h6>
                  <canvas id="earningsChart" width="400" height="185"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title text-primary">Revenue Sources</h6>
                  <canvas id="revenueChart" width="400" height="400"></canvas>
                </div>
              </div>
            </div>
            <!-- CHARTS  -->
          </div>

        </div>
      <div class="px-4 pt-0 pb-4 mt-5">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 d-flex align-items-center justify-content-start">
              <h4>ARIMA PREDICTION RESULTS</h4>
            </div>
          </div>
          <div class="row mt-4">
            <div class="container table-responsive "> 
            <table class="table table-bordered table-hover">
              <thead class="thead-dark bg-secondary text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product ID</th>
                  <th scope="col">Product Description</th>
                  <th scope="col">Trend Ratings</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>001</td>
                  <td>White Polo Shirt</td>
                  <td>98.23%</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>001</td>
                  <td>White Polo Shirt</td>
                  <td>98.23%</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>001</td>
                  <td>White Polo Shirt</td>
                  <td>98.23%</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>001</td>
                  <td>White Polo Shirt</td>
                  <td>98.23%</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>001</td>
                  <td>White Polo Shirt</td>
                  <td>98.23%</td>
                </tr>
                
              </tbody>
            </table>
            </div>

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

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
<!-- Chart.js -->

<script>
  // Chart Data and Options
  const earningsData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [{
      label: 'Earnings',
      data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 35000],
      borderColor: 'rgb(13,110,253)',
      borderWidth: 2,
      pointBackgroundColor: 'rgb(13,110,253)',
      pointRadius: 3,
      pointHoverRadius: 8,
      tension: 0.4
    }]
  };

  const revenueData = {
    labels: ['Direct', 'Social', 'Referral'],
    datasets: [{
      label: 'Revenue',
      data: [3000, 2000, 1500],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ]
    }]
  };

  const earningsOptions = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };

  const revenueOptions = {};

  var earningsChart = new Chart(document.getElementById('earningsChart').getContext('2d'), {
    type: 'line',
    data: earningsData,
    options: earningsOptions
  });

  var revenueChart = new Chart(document.getElementById('revenueChart').getContext('2d'), {
    type: 'pie',
    data: revenueData,
    options: revenueOptions
  });
</script>

</body>
</html>
