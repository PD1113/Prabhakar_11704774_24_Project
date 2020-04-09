@extends('extends.header')

@extends('extends.navigation')

<section class="course-detail">
 <div class="sec1">	
	<div class="container">
		<div class="row">
			 <?php 
               foreach ($data as $r) 
                {
               ?>
			<div class="col-md-8 text-white">
				<h1><?php echo $r->course_name ?></h1>
				<p><?php echo $r->course_title ?></p>
				<p><span>Duration: 6 Weeks<span> | </span></span> <span>Certified Training<span> | </span></span> <span>Enrolled Students: 24,012</span></p>

				<img src="images/cd.png">
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="form-group">
								<label>Phone</label>
								<input type="number" name="phone" value="">
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" value="">
							</div>

							<div class="form-group">
								<h3>Rs:4999</h3>
							</div>

							<div class="form-group">
								<button class="btn btn-large btn-primary w-100" type="submite" name="buy">BUY</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php
     }	
	?>	
	</div>
</div>	
</section>