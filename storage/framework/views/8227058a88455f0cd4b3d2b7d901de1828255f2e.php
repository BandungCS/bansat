<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center font-weight-bold" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-tasks"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Data Assets</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Assets
    </div>

    <li class="nav-item <?php echo e(request()->is('blog') ? 'active' : ''); ?>">
        <a class="nav-link" href="/blog">
        <i class="fas fa-chart-bar"></i>
            <span class="font-weight-bold">Data Assets</span></a>
    </li>

    <li class="nav-item <?php echo e(request()->is('blog/create') ? 'active' : ''); ?>">
        <a class="nav-link" href="/blog/create">
        <i class="fas fa-folder-plus"></i>
            <span class="font-weight-bold">Tambah Assets</span></a>
    </li>

    
    <hr class="sidebar-divider d-none d-md-block">
    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<?php /**PATH C:\Users\Public\Documents\bansat\resources\views/partial/layouts/sidebar.blade.php ENDPATH**/ ?>