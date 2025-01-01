<div class="container-fluid p-0" style="height: 100vh">
    <nav class="navbar border-bottom primary-bg w-100">
      <div class="w-100 d-flex align-items-center justify-content-between p-2">
        <a class="navbar-brand d-flex flex-row align-items-center" href="dashboard.html">
          <img width="64px" src="<?php echo base_url('asset/images/logo.png') ?>" alt="" />
          <span class="fs-1 secondary-text">Website</span>
        </a>
        <a class="btn btn-light" href="../controllers/auth/logout_controller.php">
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
          <a href="dashboard.php" class="d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text">
            <img width="16px" src="<?php echo base_url('asset/icons/house-solid.svg') ?>" alt='' />
            <span class="ms-4">Dashboard</span>
          </a>
          <a href='kelas.php' class='d-flex w-100 align-items-center text-center tertiary-bg secondary-text mb-2 link-dark py-2'>
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
          <span class="fs-2 p-0">KELAS</span>
        </div>
        <div class="row bg-secondary">
          <span class="fs-5 secondary-text">Semester - Genap 2024/2025</span>
        </div>

        <div class="row mt-3">
          <div class="col-10 mb-3">
            <span class="fs-5 p-0">LIST KELAS</span>
            <!-- <span class="fs-5">JADWAL PERKULIAHAN</span> -->
          </div>
          <div class='col-2'>
              
              <!-- START BUTTON ADD COURSE -->
              <div class='mb-2'>
                <button class='btn w-100 btn-secondary' data-bs-toggle='modal' data-bs-target='#add-course'>Tambah
                  Kelas</button>
              </div>
              <!-- END BUTTON ADD COURSE -->

              <!-- START MODAL ADD COURSE -->
              <div class='modal fade' id='add-course' tabindex='-1' aria-labelledby='add-course-label' aria-hidden='true'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h1 class='modal-title fs-5' id='add-course-label'>Tambah Kelas</h1>
                      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='../controllers/course/course_add_controller.php' method='POST' class='w-100'>
                      <div class='modal-body'>
                        <div class='w-100 mb-3'>
                          <label for='course_code' class='form-label'>Kode Mata Kuliah</label>
                          <input type='text' require class='form-control' id='course_code' name='course_code' placeholder='Kode Kelas' />
                        </div>
                        <div class='w-100 mb-3'>
                          <label for='course_name' class='form-label'>Nama Kelas</label>
                          <input type='text' require class='form-control' id='course_name' name='course_name' placeholder='Nama Kelas' />
                        </div>
                        <div class='w-100 mb-3'>
                          <label for='credit' class='form-label'>Jumlah SKS</label>
                          <input type='text' require class='form-control' id='credit' name='credit' placeholder='Jumlah SKS' />
                        </div>
                        <div class='w-100 mb-3'>
                          <label for='lecturer' class='form-label'>Pengampu</label>
                          <select class='form-select form-select-md' require id='lecturer' name='lecturer'
                            aria-label='Small select example'>
                            <option disabled selected>Pilih Pengampu</option>
                            <!-- while ($dosen_data = mysqli_fetch_array($query)) {
              $id_dosen = $dosen_data['lecturer_id'];
              $nama_dosen = $dosen_data['name'];
              echo "<option value='$id_dosen'>$nama_dosen</option>";
            } -->
                            </select>
                          </div>                        
                        </div>
                        <div class='modal-footer'>
                          <button class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                          <button name='add-course' class='btn primary-btn' data-bs-dismiss='modal'>Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- END MODAL ADD COURSE -->
              </div>
              <table class="table">
            <thead class="table-secondary">
              <tr>
              <th scope='col'>No</th>
                    <th scope='col'>Kode</th>
                    <th scope='col'>Mata Kuliah</th>
                    <th scope='col'>Jumlah Sks</th>
                    <th scope='col'>Jumlah Mahasiswa</th>
                    <th scope='col'>Pengampu</th>
                    <th scope='col'>Action</th>
                    ?>
              </tr>
            </thead>
            <tbody>
            <tr>
                      <td>$i</td>
                      <td>$course_code</td>
                      <td>$course_name</td>
                      <td>$credits</td>
                      <td>$student_count</td>
                      <td>$lecturer_name</td>
                      <td>
                      <button class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#edit-course-$user_data[course_id]'>Edit</button>
                      <a class='btn btn-secondary btn-sm' href='../controllers/course/course_delete_controller.php?course_id=$user_data[course_id]'>Hapus</a>
                      </td>
                    </tr>
                     <!-- START MODAL EDIT COURSE -->
                  <div class='modal fade' id='edit-course-$user_data[course_id]' tabindex='-1' aria-labelledby='edit-course-label' aria-hidden='true'>
                    <div class='modal-dialog'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h1 class='modal-title fs-5' id='edit-course-label'>Edit Course</h1>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <form action='../controllers/course/course_edit_controller.php' method='POST' class='w-100'>
                          <div class='modal-body'>
                          <div class='w-100 mb-3 visually-hidden'>
                            <label for='course_id' class='form-label'>Kode Mata Kuliah</label>
                            <input type='text' require class='form-control' id='course_id' name='course_id' placeholder='Kode Kelas' value='$user_data[course_id]' />
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='course_code' class='form-label'>Kode Mata Kuliah</label>
                            <input type='text' require class='form-control' id='course_code' name='course_code' placeholder='Kode Kelas' value='$course_code' />
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='course_name' class='form-label'>Nama Kelas</label>
                            <input type='text' require class='form-control' id='course_name' name='course_name' placeholder='Nama Kelas' value='$course_name' />
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='credit' class='form-label'>Jumlah SKS</label>
                            <input type='text' require class='form-control' id='credit' name='credit' placeholder='Jumlah SKS' value='$credits' />
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='lecturer' class='form-label'>Pengampu</label>
                            <select class='form-select form-select-md' require id='lecturer' name='lecturer'
                              aria-label='Small select example'>
                              <option disabled >Pilih Pengampu</option>
                              <!-- mysqli_data_seek($query_lecturer, 0);

while ($dosen_data = mysqli_fetch_array($query_lecturer)) {
  $id_dosen = $dosen_data['lecturer_id'];
  $nama_dosen = $dosen_data['name'];

  if ($id_dosen == $lecturer_id) {
    echo "<option selected value='$id_dosen'>$nama_dosen</option>";
  } else {
    echo "<option value='$id_dosen'>$nama_dosen</option>";
  }
} -->
                              </select>
                          </div>                        
                        </div>
                        <div class='modal-footer'>
                          <button class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                          <button name='edit-course' class='btn primary-btn' data-bs-dismiss='modal'>Save</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- END MODAL EDIT COURSE -->
                  </tbody>
          </table>
          <!-- END TABLE USER -->
        </div>
      </div>
    </div>
  </div>