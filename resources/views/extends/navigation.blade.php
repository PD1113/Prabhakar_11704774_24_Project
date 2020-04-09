<!-- Navigation Bar Started-->
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
           <a href="welcome" target="_blank">
             <img src="images/Versatile.png" class="logo">
           </a>

           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
             <li class="nav-item"><a href="welcome" class="nav-link text-dark mr-5">HOME</a></li>
             <li class="nav-item"><a href="#about" class="nav-link text-dark mr-5">ABOUT</a></li>
             <li class="nav-item"><a href="#course" class="nav-link text-dark mr-5">COURSES</a></li>
             <li class="nav-item"><a href="#contact" class="nav-link text-dark mr-5">CONTACT</a></li>
      
             <li class="nav-item"><a href="" class="nav-link text-white mr-5 active LR" data-toggle="modal" data-target="#exampleModalCenter">Login/Registration</a></li>
           </ul>
           </div>
         </nav>
<!-- Navigation Bar End-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <!--SignUp Form-->
    <div class="modal-content" id="SignUP">
      <div class="modal-header">
        <h5 class="modal-title center" id="exampleModalCenterTitle">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="store" method="post">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" name="userName" class="form-control" id="name">
            </div>

            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" name="userEmail" class="form-control" id="email">
            </div>

            <div class="form-group col-md-6">
              <label for="phone">Phone</label>
              <input type="text" name="userPhone" class="form-control" id="phone">
            </div>

            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" name="userPassword" class="form-control" id="password">
            </div>

             <button type="submit" class="btn btn-primary w-100">Sign in</button>
          </div>
        </form>
      </div>

      <div class="modal-footer">
         <p class="text-right">Already have an account?<span><a href="#" class="haveaccount">Login</a></span></p>
      </div>
    </div>

 <!--Login Form-->
 <div class="modal-content" id="Login">
      <div class="modal-header">
        <h5 class="modal-title center" id="exampleModalCenterTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="stdLogin" method="post">
          {{ csrf_field() }}
          <div class="form-row">

            <div class="form-group col-md-12">
              <label for="email">Email</label>
              <input type="email" name="userEmail" class="form-control" id="email">
            </div>

            <div class="form-group col-md-12">
              <label for="password">Password</label>
              <input type="password" name="userPassword" class="form-control" id="password">
            </div>

             <button type="submit" class="btn btn-primary w-100">Login</button>
          </div>
        </form>
      </div>

      <div class="modal-footer">
         <p class="text-right">Don't have an account?<span><a href="#" class="donthaveaccount">SignUp</a></span></p>
      </div>
    </div>
 
  </div>
</div>