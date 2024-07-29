 <!-- Main Start-->
 <main class="container">
  <?php $this->load->view('layouts/_alert') ?>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card">
            <div class="card-header">
                Formulir Registrasi
            </div>
            <div class="card-body">
              <?= form_open('register', ['method' => 'POST']) ?>
                <!-- Input Nama-->
                <div class="form-group mb-3">
                  <label for="">Nama</label>
                  <?= form_input('name', $input->name, ['class' => 'form-control mt-2', 'required' => true, 'autofocus' => true]  ) ?>
                  <?= form_error('name') ?>
                </div>
                <!-- Input E-mail -->
                <div class="form-group mb-3">
                  <label for="">E-mail</label>
                  <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' =>'form-control mt-2', 'placeholder' => 'Masukkan alamat email aktif', 'required' => true]) ?>
                  <?= form_error('email') ?>
                </div>
                <!-- Input Password -->
                <div class="form-group mb-3">
                  <label for="">Password</label>
                  <?= form_password('password', '', ['class' => 'form-control mt-2', 'placeholder' => 'Masukkan karakter minimal 8 karakter', 'required' => true]) ?>
                  <?= form_error('password') ?>
                </div>
                <!-- Konfirmasi Password -->
                <div class="form-group mb-3">
                  <label for="">Konfirmasi Password</label>
                  <?= form_password('password_confirmation', '', ['class' => 'form-control mt-2', 'placeholder' => 'Masukkan password yang sama', 'required' => true]) ?>
                  <?= form_error('password_confirmation') ?>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Main End-->
    <!-- ============================= -->