<section class="d-flex justify-content-center align-items-center vh-100">
	<div class="row py-lg-5 w-75">
		<form method="post" action="sg.php" enctype="multipart/form-data">
			<div class="col-lg-8 col-md-10 mx-auto p-4 border rounded-1 text-center shadow">
				<h1 class="fw-bold">Ready to make magic, <?= Session::getUser()->getUsername() ?>?</h1>
				<p class="lead text-primary">Use our machine to make your knowledge work for you—start creating or dive into something new!</p>
				<p>
					<button class="btn btn-primary me-2" type="submit">Start a Machine</button>
					<button class="btn btn-success" type="button">Create a Machine</button>
				</p>
			</div>
		</form>
	</div>
</section>
