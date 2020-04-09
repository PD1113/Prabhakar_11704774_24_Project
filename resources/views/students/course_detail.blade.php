@extends('students.extends.header')

@extends('students.extends.navigation')

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
			  <?php
			   if(session()->get('stdEmail'))
			   {
			  ?>	
				<div class="card">
					<div class="card-body">
						<form action="cart" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Phone</label>
								<input type="text" name="cartPhone" value="<?php echo session()->get('stdPhone'); ?>">
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" name="cartEmail" value="<?php echo session()->get('stdEmail'); ?>">
							</div>

							<div class="form-group">
								<h3>Rs:4999</h3>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-large btn-primary w-100"  name="buy">BUY</button>
							</div>
						</form>
					</div>
				</div>
			<?php
		     }
			?>	
			</div>
		</div>
	<?php
     }	
	?>	
	</div>
</div>

<!--JQuery Proper Bootsttrep-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('js/owl.carousel.js') }}" />
<link rel="stylesheet" href="{{asset('js/style.js') }}" />

<script type="text/javascript">
</script>
</body>
</html>
	