@extends('students.extends.header')

@extends('students.extends.navigation')

<section class="mycourse mt-5">
	<div class="container">
		<?php
         	 foreach ($cartTable as $d) 
         	 {
         	?>
       <div class="jumbotron jumbotron-fluid">
         <div class="row ml-5">
         	<div class="col-md-6">
         		<h3><?php echo $d->cart_course_name; ?></h3>
         		<p><?php echo $d->cart_course_title; ?></p>
         	</div>
         	<div class="col-md-6">
         		<a href=""><button class="btn btn-primary">Go To Tranning</button></a>
         	</div>
         </div>
       </div>
      <?php
      }
      ?> 
  </div>
</div>
	</div>
	</div>
</section>

@extends('students.extends.footer')
