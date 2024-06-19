<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Admin Products </title>

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
          <a href="./adminProducts.php" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Products">
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
          <a href="./adminReports.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Reports">
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
        <div class="row g-0 align-items-center">
          <div class="col-md-6 d-flex align-items-center justify-content-start">
            <h4>All Products</h4>
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
                <div class="modal-dialog " role="document">
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
                  <input type="text" class="form-control" v-model="searchProd"placeholder="Search Product..." aria-label="Search" aria-describedby="button-addon2">
                  <button class="btn btn-primary" type="button" id="button-addon2"><ion-icon name="search"></ion-icon></button>
              </div>
          </div>
          <!-- Button Trigger Modal -->
          <div class="col-md-6 d-flex justify-content-end align-items-center gap-2">
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>
              <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#filterModal" @click="resetSearch">Filter Options</button>
              <button class="btn btn-secondary" type="button" @click="refresh"><ion-icon name="refresh" style="font-size:20px;"></ion-icon></button>
          </div>

          <!-- Add Product Modal -->
          <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Add Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form @submit.prevent="addProduct">
                    <div class="mb-3">
                      <p>Product Image</p>
                      <img :src="'../assets/images/' + addImage" onerror="this.src='../assets/images/default.webp';" style="height:100px; border:0.8px solid #333; margin-bottom:10px;" >
                      <!-- <label for="image" class="form-label">Image</label> -->
                      <input type="file" class="form-control"  @change="uploadImage"  id="image" placeholder="Enter Product ID">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" id="description" v-model="addName" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <div class="input-group">
                        <span class="input-group-text">₱</span>
                        <input type="number" class="form-control"  v-model="addPrice" id="price" placeholder="Enter Price">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="number" class="form-control" v-model="addQty"  id="quantity" placeholder="Enter Quantity">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary"data-bs-dismiss="modal"  @click="addProduct">Add Product</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Add Product Modal -->

          <!-- Filter Modal -->
          <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Filter Options</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="productId" class="form-label">Product ID</label>
                      <input type="text" class="form-control" id="productId" placeholder="Enter Product ID" v-model="filterProductId">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" id="description" placeholder="Enter Description" v-model="filterProductName"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price Range</label>
                      <div class="input-group">
                        <span class="input-group-text">₱</span>
                        <input type="number" class="form-control" v-model="filterPrice" id="minPrice" placeholder="Min" aria-label="Min Price">
                        
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="number" class="form-control" v-model="filterQty"id="quantity" placeholder="Enter Quantity">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" >Apply Filters</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Filter Modal -->

          <!-- Edit Modal -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Edit Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <p>Product Image</p>
                      <img :src="'../assets/images/' + updateImage" onerror="this.src='../assets/images/default.webp';" style="height:100px; border:0.8px solid #333; margin-bottom:10px;" >
                      <!-- <label for="image" class="form-label">Image</label> -->
                      <input type="file" class="form-control" id="image" placeholder="Enter Product ID">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" v-model="updateName" id="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <div class="input-group">
                        <span class="input-group-text">₱</span>
                        <input type="number" class="form-control" v-model="updatePrice" id="price" placeholder="Enter Price">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="number" class="form-control"  v-model="UpdateQty"  id="quantity" placeholder="Enter Quantity">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary"  data-bs-dismiss="modal" @click="saveUpdate">Save Changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Modal -->
          
          <!-- Delete Modal -->
          <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Confirm Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6>Are you sure you want to delete this item?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-danger" @click="removeProduct" data-bs-dismiss="modal">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Delete Modal -->
        </div>
      </div>


      <!-- Table -->
      <div class="px-4 overflow-auto style" style="max-height: 500px;">
        <table class="table table-striped text-center">
            <thead class="bg-primary text-white">
                <tr>
                  <th class="col-3" scope="col">Image</th>
                  <th class="col-1" scope="col">Product ID</th>
                  <th class="col-3" scope="col">Description</th>
                  <th class="col-1" scope="col">Price</th>
                  <th class="col-1" scope="col">Quantity</th>
                  <th class="col-2" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle" v-for="data in filteredProducts">
                  <td>
                    <img :src="'../assets/images/' + data.prod_image"  onerror="this.src='../assets/images/default.webp';"class="img-fluid" style="max-width: 100px;">
                  </td>
                  <td>{{data.prod_id}}</td>
                  <td>{{data.prod_name}}</td>
                  <td>₱{{data.prod_price}}</td>
                  <td>{{data.prod_qty}}</td>
                  <td>
                  <div class="row g-0 align-items-centee">
                    <div class="col d-flex justify-content-center align-items-center gap-2">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editModal" @click="updateProduct(data.prod_id, data.prod_name, data.prod_price, data.prod_image, data.prod_qty)">Edit</button>
                        <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" @click="setRemoveID(data.prod_id)">Delete</button>
                    </div>
                  </div>
                  </td>
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

<script>

var app = new Vue({
el: '#app',
data: {
    sideBar:true,
    searchProduct:'',
    minrangeValue:'50',
    maxrangeValue:'50',
    allProducts:[],
    removeID:'',
    updateID:'',
    updateClass:'',
    updateName:'',
    updatePrice:'',
    updateImage:'',
    UpdateQty:'',
    addClass:'',
    addName:'',
    addPrice:'',
    addImage:'',
    addQty:'',
    filterProductId: '',
    filterProductName: '',
    filterPrice:'',
    filterQty:'',
    searchProd:'',
},
methods: {
    uploadImage(e){
        const image = e.target.files[0];
        const reader = new FileReader();
        reader.readAsDataURL(image);
        reader.onload = e =>{
            this.previewImage = e.target.result;
            const formData = new FormData();
            formData.append('image', image);
            axios.post('./upload.php', formData)
                .then(response => {
                    this.updateImage = response.data;
                    this.addImage = response.data;
                });
        };
    },
    addProduct(){
        axios.post('../php/admin/addProduct.php',{
            prod_name: this.addName,
            prod_price: this.addPrice,
            prod_image: this.addImage,
            prod_qty:this.addQty,
        }).then((response)=>{
            console.log(response.data);
            alert(response.data.message);
            this.fetchProducts();
        });
    },
    saveUpdate(){
        axios.post('../php/admin/saveUpdate.php',{
            id: this.updateID,
            prod_name: this.updateName,
            prod_price: this.updatePrice,
            prod_image: this.updateImage,
            prod_qty:this.UpdateQty,
        }).then((response)=>{
            console.log(response.data);
            alert(response.data.message);
            this.fetchProducts();
        });
    },
    updateProduct(id, name, price, image, qty){
        this.updateID = id;
        this.updateName = name;
        this.updatePrice = price;
        this.updateImage = image;
        this.UpdateQty = qty;
    },
    refresh(){
      this.filterProductId = '';
      this.filterProductName = '';
      this.filterPrice = '';
      this.filterQty = '';
      this.searchProd = '';
    },
    setRemoveID(id){
        this.removeID = id;
    },
    removeProduct(){
        axios.post('../php/admin/removeProduct.php',{
            id:this.removeID ,
        }).then((response)=>{
            alert(response.data.message);
            this.fetchProducts();
        });
    },
    resetSearch(){
      this.searchProd = '';
    },
    fetchProducts(){
        axios.post('../php/admin/fetchProducts.php').then((response)=>{
            this.allProducts = response.data;
            console.log(response.data);
            this.filterProductId = '';
            this.filterProductName = '';
            this.updatePrice = '';
            this.filterQty = '';
        });
    },
},
created: function() {
    this.fetchProducts();
},
computed: {
    formatPrice(price) {
        // Round the price to the nearest hundredth
        const roundedPrice = Math.round(price * 100) / 100;
        
        // Convert the rounded price to a string and add leading zeros if necessary
        return roundedPrice.toFixed(2);
    },
    filteredProducts: function() {
        // Start with all products
        let filtered = [...this.allProducts];
        if (this.filterProductId && this.filterProductId.trim()!== '') {
            filtered = filtered.filter(product =>
                product.prod_id.toString().includes(this.filterProductId)
            );
        }
        // Apply filters
        if (this.filterProductName) {
            filtered = filtered.filter(product =>
                product.prod_name.toLowerCase().includes(this.filterProductName.toLowerCase())
            );
        
        }
        if (this.searchProd) {
            filtered = filtered.filter(product =>
                product.prod_name.toLowerCase().includes(this.searchProd.toLowerCase())
            );
        
        }
        if (this.filterPrice) {
            filtered = filtered.filter(product =>
                product.prod_price.toString().includes(this.filterPrice.toString())
            );
        
        }
        if (this.filterQty) {
            filtered = filtered.filter(product =>
                product.prod_qty.toString() == this.filterQty.toString()
            );
        
        }
        // Add more conditions here for other filters as needed

        return filtered;
    }
},

});
</script>
</body>
</html>
