<!-- Main Start-->
<main class="container">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Formulir Login</div>
				<div class="card-body">
					<?= form_open('login', ['method' =>
					'POST']) ?>
					<!-- Input E-mail -->
					<div class="form-group mb-3">
						<label for="">E-mail</label>
						<?= form_input(['type' =>
						'email', 'name' => 'email', 'value' => $input->email, 'class'
						=>'form-control mt-2', 'placeholder' => 'Masukkan alamat email',
						'required' => true]) ?>
						<?= form_error('email') ?>
					</div>
					<!-- Input Password -->
					<div class="form-group mb-3">
						<label for="">Password</label>
						<?= form_password('password', '', ['class' =>
						'form-control mt-2', 'placeholder' => 'Masukkan password',
						'required' => true]) ?>
						<?= form_error('password') ?>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- Main End-->
<!-- ============================= -->
