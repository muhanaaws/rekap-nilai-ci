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
          <a href='penilaian.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
                 <img width='16px' src="<?php echo base_url('asset/icons/pen-to-square-solid.svg') ?>" alt='' />
                 <span class='ms-4'>Penilaian</span>
                </a>
                <a href='input_nilai.php' class='d-flex w-100 align-items-center text-center mb-2 link-secondary secondary-text'>
                  <img width='16px' src="<?php echo base_url('asset/icons/circle-plus-solid.svg') ?>" alt='' />
                  <span class='ms-4'>Input Nilai</span>
                </a>
                <a href='rekap.php' class='d-flex w-100 align-items-center text-center tertiary-bg secondary-text mb-2 link-dark py-2'>
            <img width='16px' src="<?php echo base_url('asset/icons/rotate-solid.svg') ?>" alt='' />
            <span class='ms-4'>Rekap</span>
          </a>
        </div>
      </div>

      <div class="col-10 p-5">
        <div class="row">
          <span class="fs-2 p-0">REKAPITULASI NILAI</span>
        </div>
        <div class="row bg-secondary">
          <span class="fs-5 secondary-text">Semester - Genap 2024/2025</span>
        </div>

        <div class="row mt-3">
          <div class="col mb-3">
            <span class="fs-5 p-0">REKAP NILAI</span>
          </div>
          <div class='col mb-2 d-flex align-center'>
                <form class='d-flex w-100' action='../controllers/final/final_find_controller.php' method='POST' role='search'>
                  <select class='form-select form-select-md me-1' id='course_id' name='course_id' aria-label='Small select example'>
                    <option disabled selected>Pilih Kelas</option>
                    <!-- if ($rekap_course_id == $data['course_id']) {
              echo "
                  <option selected value='$data[course_id]'>$data[course_name]</option>
                ";
            } else {
              echo "
                  <option value='$data[course_id]'>$data[course_name]</option>
                ";
            } -->
                    </select>
                  <button name='find-final' class='btn w-25 btn-secondary'>TAMPILKAN</button>
                </form>
              </div>
              <table class="table">
            <thead class="table-secondary">
              <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope='col'>Total</th>
                  <th scope='col'>Grade</th>
                  <th scope='col'>
                    <a class='btn btn-secondary btn-sm' href='../controllers/finaL/finaL_add_controller.php?course_id=$rekap_course_id'>Kalkulasi</a>
                  </th>
                  </tr>
            </thead>
            <tbody>
            <tr>             
                  <td>$student[student_number]</td>
                  <td>$student[name]</td>
                  <td>
                  <a class='btn btn-secondary btn-sm me-1' href='../controllers/final/final_edit_controller.php?student_data=$student_data'>Edit</button>
                  <a class='btn btn-secondary btn-sm' href='../controllers/final/final_delete_controller.php?student_data=$student_data'>Hapus</a>
                  </td>
                  </tr>   
                  </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>