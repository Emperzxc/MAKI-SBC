<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Admin Accounts </title>

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
          <a href="./adminProducts.php" class="nav-link text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Products">
            <ion-icon class="bi me-2" name="pricetag"><use xlink:href="#products"></use></ion-icon>
            <span class="d-none d-md-inline">Products</span>
          </a>
        </li>
        <li class="mb-2">
          <a href="./adminAccounts.php" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Accounts">
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
                  <input type="text" v-model="searchUser"class="form-control" placeholder="Search Accounts..." aria-label="Search" aria-describedby="button-addon2">
                  <button class="btn btn-primary" type="button" id="button-addon2"><ion-icon name="search"></ion-icon></button>
              </div>
          </div>
          <!-- Button Trigger Modal -->
          <div class="col-md-6 d-flex justify-content-end align-items-center gap-2">
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
              <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Filter Options</button>
              <button class="btn btn-secondary" type="button" @click="refresh"><ion-icon name="refresh" style="font-size:20px;"></ion-icon></button>
          </div>

          <!-- Add User Modal -->
          <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Add User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form @submit.prevent ="addUser">
                    <div class="mb-3">
                      <label for="productId" class="form-label">User ID</label>
                      <input type="text" v-model="addID"class="form-control" id="productId" placeholder="Enter User ID">
                    </div>
                    <div class="mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" v-model="addFname"class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="mb-3">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" v-model="addLname"class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="roleSelect">Role</label>
                      <select class="form-select" v-model="addRole" id="roleSelect">
                        <option selected>Choose...</option>
                        <option value="user">User</option>
                        <!-- <option value="admin">Admin</option> -->
                        <option value="staff">Staff</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Default Password</label>
                      <input type="text" v-model="addPassword"class="form-control" id="password" placeholder="Enter Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary"data-bs-dismiss="modal" @click="addUser">Add User</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Add User Modal -->

          <!-- Filter Modal -->
          <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title text-primary" id="exampleModalLabel">Filter Options</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form @submit.prevent="applyFilters">
                              <div class="mb-3">
                                  <label for="productId" class="form-label">User ID</label>
                                  <input type="text" v-model="filterId" class="form-control" id="productId" placeholder="Enter User ID">
                              </div>
                              <div class="mb-3">
                                  <label for="firstName" class="form-label">First Name</label>
                                  <input type="text" v-model="filterFname" class="form-control" id="firstName" placeholder="Enter First Name">
                              </div>
                              <div class="mb-3">
                                  <label for="lastName" class="form-label">Last Name</label>
                                  <input type="text" v-model="filterLname" class="form-control" id="lastName" placeholder="Enter Last Name">
                              </div>
                              <div class="input-group mb-3">
                                  <label class="input-group-text" for="roleSelect">Role</label>
                                  <select class="form-select" v-model="filterRole" id="roleSelect">
                                      <option selected>Choose...</option>
                                      <option value="user">User</option>
                                      <!-- <option value="admin">Admin</option> -->
                                      <option value="staff">Staff</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="price" class="form-label">Date Range</label>
                                  <div class="input-group">
                                      <span class="input-group-text">Min</span>
                                      <input type="date" v-model="filterMin" class="form-control" id="minDate">
                                      <span class="input-group-text">Max</span>
                                      <input type="date" v-model="filterMax" class="form-control" id="maxDate">
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                          <button type="button" class="btn btn-primary"data-bs-dismiss="modal"  @click="applyFilters">Apply Filters</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Filter Modal -->


          <!-- Approve Modal -->
          <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Update User's Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form @submit.prevent ="updateUser">
                    <div class="mb-3">
                      <label for="productId" class="form-label">User ID</label>
                      <input type="text" v-model="updateID"class="form-control" id="productId" placeholder="Enter User ID">
                    </div>
                    <div class="mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" v-model="updateFname"class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="mb-3">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" v-model="updateLname"class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="roleSelect">Role</label>
                      <select class="form-select" v-model="updateRole" id="roleSelect">
                        <option selected>Choose...</option>
                        <option value="user">User</option>
                        <!-- <option value="admin">Admin</option> -->
                        <option value="staff">Staff</option>
                      </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary"data-bs-dismiss="modal" @click="updateUser">Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Approve Modal -->
          
          <!-- Delete Modal -->
          <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-primary" id="exampleModalLabel">Confirm Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                   <center>
                     <h6>Are you sure you want to delete this account?</h6>
                   </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"  @click="removeProduct">Delete</button>
                </div>
                </form> 
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
                  <th class="col-2" scope="col">User ID</th>
                  <th class="col-2" scope="col">First Name</th>
                  <th class="col-2" scope="col">Last Name</th>
                  <th class="col-2" scope="col">Role</th>
                  <th class="col-2" scope="col">Created at</th>
                  <th class="col-2" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle" v-for="user in filteredUsers">
                  <td>
                    {{user.user_id}}
                  </td>
                  <td>{{user.firstName}}</td>
                  <td>{{user.lastName}}</td>
                  <td>{{user.role}}</td>
                  <td>{{user.created_at}}</td>
                  <td>
                  <div class="row g-0 align-items-centee">
                    <div class="col d-flex justify-content-center align-items-center gap-2">
                        <button class="btn btn-primary btn-sm" type="button" @click="setUpdate(user.user_id,user.firstName, user.lastName, user.role);"data-bs-toggle="modal" data-bs-target="#approveModal">Edit</button>
                        <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" @click="setRemoveID(user.user_id)">Delete</button>
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
            users: [],
            addID: '',
            addFname:'',
            addLname:'',
            addRole:'',
            addPassword:'',
            updateID: '',
            updateFname:'',
            updateLname:'',
            updateRole:'',
            updatePassword:'',
            filterId: '', 
            filterFname: '', 
            filterLname: '', 
            filterRole: '', 
            searchUser:'',
            removeID:'',
          },
          methods: {
            setRemoveID(id){
              this.removeID = id;
            },
            removeProduct(){
                axios.post('../php/admin/removeAccount.php',{
                    id:this.removeID ,
                }).then((response)=>{
                    alert(response.data.message);
                    this.fetchUsers();
                });
            },
            setUpdate(id, fname, lname, role){
                this.updateID = id;
                this.updateFname = fname;
                this.updateLname = lname;
                this.updateRole = role;
            },
            updateUser(){
              axios.post('../php/admin/updateUser.php', {
                id: this.updateID,
                fname: this.updateFname,
                lname: this.updateLname,
                role: this.updateRole
              }).then((response)=>{
                alert(response.data.message);
                this.fetchUsers();
              });
            },
            addUser(){
              axios.post('../php/admin/addUser.php', {
                id: this.addID,
                fname: this.addFname,
                lname: this.addLname,
                role: this.addRole,
                password: this.addPassword
              }).then((response)=>{
                alert(response.data.message);
                this.fetchUsers();
              });
            },
            applyFilters() {
                // No need to prevent default since we're not submitting a form
                this.fetchUsers();
            },
            refresh(){
              this.filterId = '';
              this.filterFname = '';
              this.filterLname = '';
              this.filterRole = '';
              this.searchUser = '';
              this.fetchUsers();
            },
            fetchUsers(){
              axios.post(
                '../php/admin/fetchUsers.php'
              ).then((response)=>{
                this.users = response.data;
                console.log(response.data);
              });
            }
          },
          computed: {
              filteredUsers() {
                  return this.users.filter(user => {
                      return (!this.filterId || user.user_id.toString().includes(this.filterId)) &&
                            (!this.filterFname || user.firstName.toLowerCase().includes(this.filterFname)) &&
                            (!this.filterLname || user.lastName.toLowerCase().includes(this.filterLname)) &&
                            (!this.searchUser || user.firstName.toLowerCase().includes(this.searchUser) || user.lastName.toLowerCase().includes(this.searchUser)) &&
                            (!this.filterRole || user.role === this.filterRole) ;
                  });
              }
          },
          created(){
            this.fetchUsers();
          },
      });
  </script>
</body>
</html>
