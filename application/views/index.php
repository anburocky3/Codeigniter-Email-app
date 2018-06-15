<div class="jumbotron">
	<h1 class="display-4">Hello, developers!</h1>
	<p class="lead">This repo will help you understand to integrate Codeigniter's default email libary in simple steps. Follow the guide to integrate into your app.</p>
	<hr class="m-y-md">
	<p>It uses <a href="https://codeigniter.com" target="_blank">CodeIgniter</a> version (<?php echo CI_VERSION; ?>) with latest <a href="https://getbootstrap.com" target="_blank">Bootstrap 4</a>.</p>
	<p class="lead">
		<a class="btn btn-primary" href="https://facebook.com/anburocky3" role="button">Contact developer</a>
	</p>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-dark text-white">
					CI-Mailer App
				</div>
				<div class="card-body">
					<?php if (validation_errors()): ?>
						<div class="alert alert-warning" role="alert">
						    <strong>Error!</strong> <?php echo validation_errors(); ?>
						</div>	
					<?php endif ?>

					<form action="" method="POST">
						<div class="form-group row">
							<label for="email_to" class="col-sm-2 form-control-label"> To </label>
							<div class="col-sm-10">
								<input type="email" name="email_to" class="form-control" placeholder="to@email.com" value="<?php echo set_value('email_to'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email_subject" class="col-sm-2 form-control-label">Subject</label>
							<div class="col-sm-10">
								<input type="text" name="email_subject" class="form-control" id="email_subject" placeholder="Email" value="<?php echo set_value('email_subject'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email_body" class="col-sm-2 form-control-label">Description</label>
							<div class="col-sm-10">
								<textarea name="email_body" name="email_body" id="email_body" cols="30" rows="10" class="form-control"><?php echo set_value('email_body'); ?></textarea>
							</div>
						</div>

						<div class="form-group float-right">
							<button type="reset" class="btn btn-dark">Reset</button>
							<button type="submit" class="btn btn-primary">Send mail</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-primary text-white">
					How to use?
				</div>
				<div class="card-body">
					<h4 class="card-title">Quick tip!</h4>
					<p class="card-text">Copy all the codes from<pre>application/controllers/Welcome.php</pre> and integrate to your app accordingly.</p>
					<a href="https://facebook.com/anburocky3" class="btn btn-success float-right">For Help</a>
				</div>
			</div>
		</div>
	</div>
</div>