  <div class="container-fluid p-0" style="height: 100vh">
    <nav class="navbar border-bottom primary-bg w-100">
      <div class="w-100 d-flex align-items-center justify-content-between p-2">
        <a class="navbar-brand d-flex flex-row align-items-center" href="dashboard.html">
          <img width="64px" src="<?php echo base_url('asset/images/logo.png') ?>" alt="" />
          <span class="fs-1 secondary-text">Website</span>
        </a>
        <a class="btn btn-light" href="<?php echo site_url('login/logout');?>">
          <span>Logout</span>
          <img width=" 16px" src="<?php echo base_url('asset/icons/arrow-right-from-bracket-solid.svg') ?>" alt="" />
        </a>
      </div>
    </nav>

    <div class="row h-100">
      <div class="col-2 primary-bg p-0">
        <div class="row d-flex flex-column align-items-center text-center p-2 my-4">
          <div class="w-50 text-center mb-4">
            <img class="img-fluid" src="<?php echo base_url('asset/icons/circle-user-regular.svg') ?>" alt="" />
          </div>
          <span>Nama dosen</span>
        </div>

        <div class="row d-flex flex-column m-0 w-100 align-items-center py-2 ps-4">
          <a href="dashboard.php" class='d-flex w-100 align-items-center text-center tertiary-bg secondary-text mb-2 link-dark py-2'>
            <img width="16px" src="<?php echo base_url('asset/icons/house-solid.svg') ?>" alt='' />
            <span class="ms-4">Dashboard</span>
          </a>
          <a href='kelas.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
            <img width='16px' src="<?php echo base_url('asset/icons/school-solid.svg') ?>" alt='' />
            <span class='ms-4'>Kelas</span>
          </a>
          <a href='penilaian.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
                 <img width='16px' src="<?php echo base_url('asset/icons/pen-to-square-solid.svg') ?>" alt='' />
                 <span class='ms-4'>Penilaian</span>
                </a>
                <a href='input_nilai.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
                  <img width='16px' src="<?php echo base_url('asset/icons/circle-plus-solid.svg') ?>" alt='' />
                  <span class='ms-4'>Input Nilai</span>
                </a>
                <a href='rekap.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
            <img width='16px' src="<?php echo base_url('asset/icons/rotate-solid.svg') ?>" alt='' />
            <span class='ms-4'>Rekap</span>
          </a>
        </div>
      </div>

      <div class="col-10 p-5">
        <div class="row">
          <span class="fs-2 p-0">DASHBOARD ADMIN</span>
        </div>
        <div class="row bg-secondary">
          <span class="fs-5 secondary-text">Semester - Genap 2023/2024</span>
        </div>

        <div class="row mt-3">
          <div class="col-10">
            <span class="fs-5 p-0">List Mahasiswa</span>
            <!-- <span class="fs-5">JADWAL PERKULIAHAN</span> -->
          </div>
          <div class="col-2">
            <!-- START BUTTON ADD USER -->
            <div class="mb-3">
              <button class="btn w-100 btn-secondary" data-bs-toggle="modal" data-bs-target="#addUser">Tambah
                Mahasiswa</button>
            </div>
            <!-- END BUTTON ADD USER -->
            <!-- START MODAL ADD USER -->
            <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserLabel">Tambah Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../controllers/user_add_controller.php" method="POST" class="w-100">
                    <div class="modal-body">
                      <div class="w-100 mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                      </div>
                      <div class="w-100 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                      </div>
                      <div class="w-100 mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" />
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button name="addUser" class="btn primary-btn" data-bs-dismiss="modal">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- END MODAL ADD USER -->
          </div>
          <!-- START TABLE USER -->
          <table class="table">
            <thead class="table-secondary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
            //   $i = 1;
            //   while ($user_data = mysqli_fetch_array($query)) {
            //     $username = $user_data['username'];
            //     $name = $user_data['name'];
            //     $idUser = $user_data['id'];
            //     echo "<tr>
            //       <td>$i</td>
            //       <td>$username</td>
            //       <td>$name</td>
            //       <td>
            //       <a class='btn btn-secondary btn-sm' href='../controllers/user_delete_controller.php?username=$user_data[username]'>Hapus</a>
            //     </td>
            //     </tr>";
                
            //     $i++;
            //   }
              ?>

            </tbody>
          </table>
          <!-- END TABLE USER -->
        </div>
      </div>
    </div>
  </div>