    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-users-cog"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Weqaf.com</div>
      </a>

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link py-2" href="<?= base_url('admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Request -->
      <li class="nav-item">
        <a class="nav-link py-2" href="<?= base_url('admin/reqprib'); ?>">
          <i class="fas fa-fw fa-comment-dollar"></i>
          <span>Request Investor Pribadi</span></a>
      </li>

      <!-- Nav Item - Request -->
      <li class="nav-item">
        <a class="nav-link py-2" href="<?= base_url('admin/reqlemb'); ?>">
          <i class="fas fa-fw fa-comments-dollar"></i>
          <span>Request Investor Lembaga</span></a>
      </li>

        <!-- Heading -->
        <div class="sidebar-heading mt-2">
          Pengelolaan Data
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed py-2" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Pengelolaan</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pengelolaan Data</h6>
              <a class="collapse-item" href="<?= base_url('admin/kelolaNazir'); ?>">Nazir/pengolah</a>
              <a class="collapse-item" href="<?= base_url('admin/kelolaInvestorLembaga'); ?>">Investor Lembaga</a>
              <a class="collapse-item" href="<?= base_url('admin/kelolaInvestorPribadi'); ?>">Investor Pribadi</a>
            </div>
          </div>
        </li>

        <!-- Heading -->
      <div class="sidebar-heading">
        Edit Tampilan
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link py-2" href="<?= base_url('admin/testimoni'); ?>">
        <i class="fas fa-comment-dots"></i>
          <span>Testimoni</span></a>
      </li>

      </ul>
    <!-- End of Sidebar -->