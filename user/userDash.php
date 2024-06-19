<?php
session_start();

$role = $_SESSION['user_role'];

if(!isset($role)){
  header("Location: ../");
}


?>
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Home</title>

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
    <div class="col-md-2 col-sm-1 col-12 d-flex flex-column flex-shrink-0 h-100 p-3 text-white position-fixed"  style="background:#1167b1;" id="sidebar">
      <div class="d-flex justify-content-between align-items-center">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
          <ion-icon size="large" class="bi me-3 ms-2" width="40" height="32" name="happy-outline"></ion-icon>
          <span class="d-none d-md-inline fs-4">User Profile</span>
        </a>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
          <a href="#" class="nav-link active" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <ion-icon class="bi me-2" name="home"><use xlink:href="#home"></use></ion-icon>
            <span class="d-none d-md-inline">Home</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./userCart" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Cart">
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
          <span class="fs-6"><?php echo $_SESSION['user_name'];?></span>
          <ion-icon class="ms-3" size="large" name="person-circle"></ion-icon>
        </div>
      </div>
      <!-- Header -->
      <div class="px-4 pt-5 pb-4 mt-5">
        <!-- Search Input Field -->
        <div class="input-group">
          <div class="col-md-4"> 
            <input type="text" class="form-control" placeholder="Search Product..." aria-label="Search" aria-describedby="button-addon2">
          </div>
          <button class="btn btn-primary" type="button" id="button-addon2"><ion-icon name="search"></ion-icon></button>
        </div>
         <!-- Search Input Field -->
      </div>
      <!-- Suggested -->
      <div class="px-4" >
        <span class="fs-5">Suggested for you</span>
        <div class="row mt-4" >
        <div class="col-md-3 mb-4 "  v-for="prod in allSuggested">
              <div class="card bg-primary">
                  <div class="row g-0">
                      <div class="col-md-5 d-flex align-items-center ps-3">
                          <img :src="'../assets/images/' + prod.prod_image" class="card-img-top rounded bg-white" style="height:120px;"alt="Product 1">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <span class="card-title fs-6 text-light">{{prod.prod_name}}</span>
                              <p class="card-text text-light fw-bold">₱ {{formatPrice(prod.prod_price)}}</p>
                              <button class="btn btn-sm btn-light text-primary btn-cart" @click="addToCart(prod.prod_id, prod.prod_name, prod.prod_price, prod.prod_image)">Add to Cart</button>
                              <div class="text-light d-flex align-items-center">
                                    <span class="me-2">{{ prod.avg_rating}}</span>
                                    <span class="me-2" style="font-size:10px;" v-if="prod.avg_rating == 0">No ratings yet</span>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 1 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 2 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 3 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 4 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating == 5"></ion-icon>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <!-- Suggested -->

      <!-- All Products -->
      <div class="p-4">
        <span class="fs-5">All Products</span>
        <div class="row mt-4">
            <div class="col-md-3 mb-4" v-for="prod in allProducts">
              <div class="card bg-primary">
                  <div class="row g-0">
                      <div class="col-md-5 d-flex align-items-center ps-3">
                          <img :src="'../assets/images/' + prod.prod_image" class="card-img-top rounded bg-white" style="height:120px;"alt="Product 1">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <span class="card-title fs-6 text-light">{{prod.prod_name}}</span>
                              <p class="card-text text-light fw-bold">₱ {{formatPrice(prod.prod_price)}}</p>
                              <button class="btn btn-sm btn-light text-primary btn-cart" @click="addToCart(prod.prod_id, prod.prod_name, prod.prod_price, prod.prod_image)">Add to Cart</button>
                              <div class="text-light d-flex align-items-center">
                                    <span class="me-2">{{ prod.avg_rating}}</span>
                                    <span class="me-2" style="font-size:10px;" v-if="prod.avg_rating == 0">No ratings yet</span>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 1 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 2 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 3 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating >= 4 && prod.avg_rating < 5"></ion-icon>
                                    <ion-icon name="star" v-if="prod.avg_rating == 5"></ion-icon>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

        </div>
      </div>
      <!-- All Products -->
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
    uname:'<?php echo $_SESSION['user_name'];?>',
    uid:'<?php echo $_SESSION['user_id'];?>',
    sidebarWidth: 280,
    isSidebarOpen: true,
    allProducts:[], 
    allSuggested:[],
  },
  methods: {
    formatPrice(price) {
        // Round the price to the nearest hundredth
        const roundedPrice = Math.round(price * 100) / 100;
        
        // Convert the rounded price to a string and add leading zeros if necessary
        return roundedPrice.toFixed(2);
    },
    fetchAllProducts(){
      axios.post('../php/user/fetchAllProducts.php').then((response)=>{
        console.log(response.data);
        this.allProducts = response.data;
      })
    },
    fetchSuggested(){
      axios.post('../php/user/fetchSuggested.php').then((response)=>{
        console.log(response.data);
        this.allSuggested = response.data;
      })
    },
    toggleSidebar() {
      this.isSidebarOpen = !this.isSidebarOpen; 
      if (this.isSidebarOpen) {
        this.sidebarWidth = 280; 
      } else {
        this.sidebarWidth = 50; 
      }
    },
    addToCart(pid, pname, pprice, pimg){
      // console.log(pid +', '+pname +', '+pprice+', '+pimg +', '+this.uname +', '+this.uid);
                axios.post('../php/user/addToCart.php', {
                    uname: this.uname,
                    uid: this.uid,
                    pid: pid,
                    name: pname,
                    price: pprice,
                    img: pimg
                }).then((response)=>{
                    console.log(response.data);
                });
    },
  },
  created(){
    this.fetchAllProducts();
    this.fetchSuggested();
  }
});
</script>

</body>
</html>
