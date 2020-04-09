<!-- Navigation Bar Started-->
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
           <a href="studentDeshboard" target="_blank">
             <img src="images/Versatile.png" class="logo">
           </a>

           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
             <li class="nav-item"><a href="studentDeshboard" class="nav-link text-dark mr-5">HOME</a></li>
             <li class="nav-item"><a href="#about" class="nav-link text-dark mr-5">ABOUT</a></li>
             <li class="nav-item"><a href="#course" class="nav-link text-dark mr-5">COURSES</a></li>
             <li class="nav-item"><a href="#contact" class="nav-link text-dark mr-5">CONTACT</a></li>
      
             <li class="nav-item">
               <div class="dropdown dropleft">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Your Profile
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#"><i class="fa fa-user fa-1x"></i> <?php echo session()->get('stdName'); ?></a>
                  <a class="dropdown-item" href="#"><i class="fa fa-at fa-1x"></i> <?php echo session()->get('stdEmail'); ?></a>
                  <a class="dropdown-item" href="mycourse">My Course</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </div>
             </li>

           </ul>
           </div>
         </nav>
<!-- Navigation Bar End-->
