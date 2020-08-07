<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Pengelolaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen Sekolah
      </div>

      <!-- Nav Item - Mata Pelajaran Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePelajaran" aria-expanded="true" aria-controls="collapsePelajaran">
            <i class="fas fa-book"></i>
          <span>Data Master</span>
        </a>
        <div id="collapsePelajaran" class="collapse" aria-labelledby="headingPelajaran" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Pelajaran:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_jadwal') ?>">Jadwal Pengajar</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_pelajaran') ?>">Materi Pelajaran</a>
			<a class="collapse-item" href="<?php echo base_url('administrator/c_absen') ?>">Absensi</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_thnmsk') ?>">Tahun Ajaran</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_ekskul') ?>">Ekstrakulikuler</a>
			<h6 class="collapse-header">Sub-Menu Ruangan:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_kelas') ?>">Kelas</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_gedung') ?>">Gedung</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_ruangan') ?>">Ruangan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Siswa Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiswa" aria-expanded="true" aria-controls="collapseSiswa">
          <i class="fas fa-user-friends"></i>
          <span>Data Pengguna</span>
        </a>
        <div id="collapseSiswa" class="collapse" aria-labelledby="headingSiswa" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Pengguna:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_siswa') ?>">Siswa</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_guru') ?>">Guru</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_kepalasekolah') ?>">Kepala Sekolah</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_soalsis') ?>">Soal Siswa</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_daftar') ?>">Pendaftaran</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Nilai Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNilai" aria-expanded="true" aria-controls="collapseNilai">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Nilai Rapor</span>
        </a>
        <div id="collapseNilai" class="collapse" aria-labelledby="headingNilai" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Nilai:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_nekskul') ?>">Ekstrakulikuler</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_nprestasi') ?>">Prestasi</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_nrapor') ?>">Hasil Rapor</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_cetakrapor') ?>">Cetak Rapor</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Sekolah Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSekolah" aria-expanded="true" aria-controls="collapseSekolah">
          <i class="fas fa-id-card-alt"></i>
          <span>Info Sekolah</span>
        </a>
        <div id="collapseSekolah" class="collapse" aria-labelledby="headingSekolah" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Informasi:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_identitas') ?>">Identitas Sekolah</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_informasi') ?>">Informasi Sekolah</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_hubungi') ?>">Hubungi Kami</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_tentang') ?>">Tentang Sekolah</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pengaturan Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaturan" aria-expanded="true" aria-controls="collapsePengaturan">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pengaturan</span>
        </a>
        <div id="collapsePengaturan" class="collapse" aria-labelledby="headingPengaturan" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Pengaturan:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/users') ?>">Users</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrasi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-wallet"></i>
          <span>Laporan Keuangan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bulan</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_tabungan') ?>">Tabungan Siswa</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_biayadaftar') ?>">Biaya Pendaftaran</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_gaji') ?>">Gaji Guru</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/c_laporanuang') ?>">Laporan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('administrator/auth/logout')?>">
          <i class="far fa-arrow-alt-circle-left"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo Pengguna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="<?php echo base_url('administrator/users') ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('administrator/auth/logout') ?>" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
