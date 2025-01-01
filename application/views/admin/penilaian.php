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
          <a href='kelas.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
            <img width='16px' src="<?php echo base_url('asset/icons/school-solid.svg') ?>" alt='' />
            <span class='ms-4'>Kelas</span>
          </a>
          <a href='penilaian.php' class='d-flex w-100 align-items-center text-center tertiary-bg secondary-text mb-2 link-dark py-2'>
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
          <span class="fs-2 p-0">Penilaian</span>
        </div>
        <div class="row bg-secondary">
          <span class="fs-5 secondary-text">Semester - Genap 2024/2025</span>
        </div>

        <div class="row mt-3">
          <div class="col-10 mb-3">
            <span class="fs-5 p-0">LIST PENILAIAN</span>
            <!-- <span class="fs-5">JADWAL PERKULIAHAN</span> -->
          </div>
          <div class='col-2'>
              
              <!-- START BUTTON ADD NILAI -->
              <div class='mb-2'>
                <button class='btn w-100 btn-secondary' data-bs-toggle='modal' data-bs-target='#add-penilaian'>Tambah
                  Penilaian</button>
              </div>
              <!-- END BUTTON ADD NILAI -->

              <!-- START MODAL ADD NILAI -->
              <div class='modal fade' id='add-penilaian' tabindex='-1' aria-labelledby='add-penilaian-label' aria-hidden='true'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h1 class='modal-title fs-5' id='add-penilaian-label'>Tambah Nilai</h1>
                      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='../controllers/assessment/assessment_add_controller.php' method='POST' class='w-100'>
                      <div class='modal-body'>
                        <div class='w-100 mb-3'>
                          <label for='course_id' class='form-label'>Mata Kuliah</label>
                          <select class='form-select form-select-md' require id='course_id' name='course_id'
                            aria-label='Small select example'>
                            <option disabled selected>Pilih Kelas</option>
                             <!-- while ($data = mysqli_fetch_array($query)) {
              $course_id = $data['course_id'];
              $course_name = $data['course_name'];

              echo "
              <option value='$course_id'>$course_name $course_id</option>
              ";
            } -->
                            </select>
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='component_name' class='form-label'>Aspek Penilaian</label>
                            <input type='text' require class='form-control' id='component_name' name='component_name' placeholder='Aspek Penilaian' />
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='component_weight' class='form-label'>Bobot %</label>
                            <input type='number' min='0' max='100' require class='form-control' id='component_weight' name='component_weight' placeholder='Bobot' />
                          </div>
                        </div>
                        <div class='modal-footer'>
                          <button class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                          <button name='add-assessment' class='btn primary-btn' data-bs-dismiss='modal'>Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- END MODAL ADD NILAI -->
              </div>
              <!-- START MODAL EDIT NILAI -->
              <div class='modal fade' id='edit-penilaian' tabindex='-1' aria-labelledby='edit-penilaian-label' aria-hidden='true'>
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='edit-penilaian-label'>Edit Penilaian</h1>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <form action='../controllers/assessment/assessment_add_controller.php' method='POST' class='w-100'>
                        <div class='modal-body'>
                          <div class='w-100 mb-3'>
                            <label for='course_id' class='form-label'>Mata Kuliah</label>
                            <select class='form-select form-select-md' require id='course_id' name='course_id'
                              aria-label='Small select example'>
                              <option disabled selected>Pilih Kelas</option>
                              <!-- while ($data = mysqli_fetch_array($query)) {
              $course_id = $data['course_id'];
              $course_name = $data['course_name'];

              echo "
              <option value='$course_id'>$course_name</option>
              ";
            } -->
                              </select>
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='component_name' class='form-label'>Aspek Penilaian</label>
                            <input type='text' require class='form-control' id='component_name' name='component_name' placeholder='Aspek Penilaian' />
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='component_weight' class='form-label'>Bobot %</label>
                            <input type='number' min='0' max='100' require class='form-control' id='component_weight' name='component_weight' placeholder='Bobot' />
                          </div>
                        </div>
                        <div class='modal-footer'>
                          <button class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                          <button name='edit-assessment' class='btn primary-btn' data-bs-dismiss='modal'>Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- END MODAL EDIT NILAI -->

                 <!-- START TABLE USER -->
          <table class="table">
            <thead class="table-secondary">
              <tr>
                <th scope='col'>No</th>
                <th scope='col'>Kode</th>
                <th scope='col'>Mata Kuliah</th>
                <th scope='col'>Aspek Penilaian</th>
                <th scope='col'>Bobot</th>
                <th scope='col'>Action</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                      <td>$i</td>
                      <td>$course_code</td>
                      <td>$course_name</td>
                      <td>$component_name</td>
                      <td>$component_weight</td>
                      <td>
                      <button class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#edit-penilaian-$user_data[component_id]'>Edit</button>
                      <a class='btn btn-secondary btn-sm' href='../controllers/assessment/assessment_delete_controller.php?component_id=$user_data[component_id]'>Hapus</a>
                      </td>
                    </tr>
                    <!-- START MODAL EDIT NILAI -->
                <div class='modal fade' id='edit-penilaian-$user_data[component_id]' tabindex='-1' aria-labelledby='edit-penilaian-label' aria-hidden='true'>
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='edit-penilaian-label'>Edit Penilaian</h1>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <form action='../controllers/assessment/assessment_edit_controller.php' method='POST' class='w-100'>
                        <div class='modal-body'>
                          <div class='w-100 mb-3'>
                            <label for='course_id' class='form-label'>Mata Kuliah</label>
                            <select class='form-select form-select-md' require id='course_id' name='course_id'
                              aria-label='Small select example'>
                              <option disabled>Pilih Kelas</option>
                              <!-- if ($course_id == $data['course_id']) {
                      echo "
                        <option selected value='$data[course_id]'>$data[course_name]</option>
                      ";
                    } else {
                      echo "
                        <option value='$data[course_id]'>$data[course_name]</option>
                      ";
                    } -->
                    </select>
                          </div>
                          <div class='w-100 mb-3 visually-hidden'>
                            <label for='component_id' class='form-label'>Aspek Penilaian</label>
                            <input type='text' require class='form-control' id='component_id' name='component_id' placeholder='Aspek Penilaian' value='$component_id'/>
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='component_name' class='form-label'>Aspek Penilaian</label>
                            <input type='text' require class='form-control' id='component_name' name='component_name' placeholder='Aspek Penilaian' value='$component_name'/>
                          </div>
                          <div class='w-100 mb-3'>
                            <label for='component_weight' class='form-label'>Bobot %</label>
                            <input type='number' min='0' max='100' require class='form-control' id='component_weight' name='component_weight' placeholder='Bobot' value='$component_weight'/>
                          </div>
                        </div>
                        <div class='modal-footer'>
                          <button class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                          <button name='edit-assessment' class='btn primary-btn' data-bs-dismiss='modal'>Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- END MODAL EDIT NILAI -->
                </tbody>
          </table>
          <!-- END TABLE USER -->
        </div>
      </div>
    </div>
  </div>