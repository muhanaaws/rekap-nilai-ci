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
                <a href='input_nilai.php' class='d-flex w-100 align-items-center text-center tertiary-bg secondary-text mb-2 link-dark py-2'>
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
          <div class="col">
            <span class="fs-2 pb-4">TAMBAHKAN NILAI MAHASISWA</span>
          </div>
          <div class="col d-flex align-center">
            <form class="d-flex w-100" action='../controllers/user/user_find_controller.php' method='POST' role="search">
              <input class="form-control me-1" type="search" placeholder="NIM Mahasiswa" aria-label="Search" name="student_number" />
              <button name="find-student" class="w-25 btn btn-secondary">Cari</button>
            </form>
          </div>
        </div>

        <div class="row border mt-2 px-4 pt-2 pb-4">
          <div class="row w-100">
            <div class="col">
              <span class="fs-4 mb-3">Data Mahasiswa</span>
            </div>
            <div class="col">
              <span class="fs-4 mb-3">Penilaian</span>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col">
              <div class="row">
                <div class="w-100 mb-4">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa"
                    disabled readonly value="<?php echo isset($nilai_student_data['student_number']) ? $nilai_student_data['student_number'] : ''; ?>" />
                </div>
                <div class="w-100 mb-4">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Mahasiswa"
                    disabled readonly value="<?php echo isset($nilai_student_data['name']) ? $nilai_student_data['name'] : ''; ?>" />
                </div>
                <form action="../controllers/course/course_find_controller.php" method='POST'>
                  <div class="w-100 d-flex mb-4">
                    <div class="w-75">
                      <label for="course_id" class="form-label">Mata Kuliah</label>
                      <select class="form-select form-select-md" id="course_id" name="course_id"
                        aria-label="Small select example">
                        <option disabled selected>Pilih Mata Kuliah</option>

                        <?php foreach ($nilai_student_courses as $course): ?>
                          <option value="<?php echo $course['course_id']; ?>"
                            <?php echo ($nilai_course_selected == $course['course_id']) ? 'selected' : ''; ?>>
                            <?php echo "$course[course_code] - $course[course_name]"; ?>
                          </option>
                        <?php endforeach; ?>

                      </select>
                    </div>
                    <div class="w-25 ms-2 d-flex flex-column">
                      <label for="nim" class="form-label opacity-0">Konfirmasi</label>
                      <button name="find-course" class="w-100 btn btn-secondary">Cari</button>
                    </div>
                  </div>
                </form>
                </div>
            </div>
            <div class="col">
              <div id="grade-add" class="row ">
                <form id="grade-form" action="../controllers/grade/grade_add_controller.php" method='POST'>
                  <input type="hidden" name="return_url" value="<?php echo $return_url; ?>">
                  <?php foreach ($nilai_course_ass as $assessment): ?>
                    <div class="w-100 mb-4">
                      <label for="<?php echo $assessment['component_id']; ?>" class="form-label"><?php echo $assessment['component_name']; ?></label>
                      <input type="number" min="1" max="100" class="form-control" id="<?php echo $assessment['component_id']; ?>" name="grades[<?php echo $assessment['component_id']; ?>][<?php echo isset($assessment['score_id']) ? $assessment['score_id'] : 'default'; ?>]" placeholder="<?php echo $assessment['component_name']; ?>"
                        value="<?php echo isset($assessment['score']) ? $assessment['score'] : ''; ?>" />
                    </div>
                  <?php endforeach; ?>
                </form>

              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <button name="add-grade" form="grade-form" class="btn btn-secondary">TAMBAHKAN</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>