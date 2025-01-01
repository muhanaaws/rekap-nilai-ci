
<div class="vh-100 d-flex justify-content-center align-items-center primary-bg py-5">
    <div class="row w-100">
      <div class="col-lg-7 col-md-6 d-flex align-items-center">
        <div class="ms-5 secondary-text">
          <h1>Website</h1>
          <h6>Rekapitulasi Penilaian Mahasiswa</h6>
          <h6>Universitas Amikom Yogyakarta</h6>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 rounded-3 px-5">
        <div class="d-flex flex-column align-items-center rounded-3 bg-light py-5 px-4">
          <div class="w-25 text-center mb-4">
            <img class="img-fluid" src="<?php echo base_url('asset/images/logo.png') ?>" alt="">
          </div>
          <h4 class="mb-4">Gunakan Id Amikom</h4>
          <form action="<?php echo site_url('login/authentication');?>" method="POST" class="w-100">
            <div class="w-100 mb-4">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
            </div>
            <div class="w-100 mb-4">
              <label for="pass" class="form-label">Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" />
            </div>
            <button type="submit" name="login" class="w-100 btn btn-secondary mb-4">Login</button>
            <div class="w-100 d-flex justify-content-evenly mb-4">
              <hr class="hr w-25">
              <span>or</span>
              <hr class="hr w-25">
            </div>
            <button type="submit" class="w-100 btn btn-secondary mb-4">Continue with Google</button>
            <div class="w-100 d-flex justify-content-end">
              <span>don't have an account yet? <a href="./views/register.php" class="primary-text">Register</a></span>
            </div>
          </form>
        </div>
        <?php echo $this->session->flashdata('msg');?>
      </div>
    </div>
  </div>
 
