<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <div id="app">

    <div class="container">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Login</header>
        <form @submit.prevent="login">
          <input required type="text" v-model="id" placeholder="Enter your user ID">
          <input required type="password" v-model="password"placeholder="Enter your password">
          <a href="#">Forgot password?</a>
          <input type="submit" class="button" value="Login">
        </form>
        <div class="signup">
          <span class="signup">Don't have an account?
           <label for="check">Sign Up</label>
          </span>
        </div>
      </div>
      <div class="registration form">
        <header>Signup Form</header>
        <form>
          <input required type="text" v-model="id2" placeholder="Enter your company ID">
          <input required type="text" v-model="fname" placeholder="Enter your first name">
          <input required type="text" v-model="lname" placeholder="Enter your last name">
          <input required type="password"  v-model="pass2" placeholder="Create a password">
          <input required type="password"  v-model="repass2" placeholder="Confirm your password" @input="checkMatch">
          <p v-if="mismatch" style="color:red;">Password mismatched!</p>
          <input v-if="mismatch"type="button" class="button" value="Submit Request" style="background:#9999; cursor:not-allowed;" disabled>
          <input v-if="mismatch == false"type="submit" class="button" value="Submit ">
        </form>
        <div class="signup">
          <span class="signup">Already have an account?
           <label for="check">Login</label>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Vue -->
  <script src="./js/vue.js"></script>
  <!-- Resources Script -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <!-- Icons Script -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
      var app = new Vue({
          el: '#app', 
          data: {
            id:'',
            id2:'',
            password:'',
            pass2:'',
            repass2:'',
            lname:'',
            fname:'',
            mismatch: false,
          },
          methods: {
            login(){
              axios.post('./php/user/login.php',{
                id: this.id,
                password: this.password,
              }).then(function(response){
                // alert(response.data.message);
                console.log(response.data);
                this.id ='';
                this.password ='';
                if(response.data.login == 'yes'){
                  if(response.data.role == 'user'){
                    window.location.href = './user/userDash'; 
                  }else if(response.data.role == 'admin'){
                    window.location.href = './admin/adminDash'; 
                  }else if(response.data.role == 'staff'){
                    window.location.href = './staff/staffPayment'; 
                  }
                }else{
                  // window.location.reload(); 
                  alert(response.data.message);
                }
               
              });
            },
            signup(){
              if(this.pass2 == this.repass2){
                axios.post('./php/signup.php',{
                  id: this.id2,
                  password: this.pass2,
                  fname: this.fname,
                  lname: this.lname,
                }).then(function(response){
                  alert(response.data.message);
                
                });
              }else{
                this.mismatch = true;
              }
              
            },
            checkMatch(){
              if(this.pass2 != this.repass2){
                this.mismatch = true;
              }else{
                this.mismatch = false;
              }
            },
          }
      });
  </script>
</body>
</html>