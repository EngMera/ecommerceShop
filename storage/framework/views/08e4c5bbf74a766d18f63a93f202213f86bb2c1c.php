<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item  <?php echo e(Request::is('admin/dashboard') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('admin/dashboard')); ?>">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item  <?php echo e(Request::is('admin/orders') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('admin/orders')); ?>">
            <i class="mdi mdi-speedometer menu-icon"></i>
            <span class="menu-title">Orders</span>
          </a>
        </li>

        <li class="nav-item <?php echo e(Request::is('admin/category*') ? 'active':''); ?>" >
          <a class="nav-link " data-bs-toggle="collapse"
            href="#category"
            aria-expanded="<?php echo e(Request::is('admin/category*') ? 'true':'false'); ?>" >

            <i class="mdi mdi-view-list menu-icon"></i>
            <span class="menu-title">Category</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse <?php echo e(Request::is('admin/category*') ? 'show':''); ?>" id="category">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a class="nav-link <?php echo e(Request::is('admin/category/create') ? 'active':''); ?>"href="<?php echo e(url('admin/category/create')); ?>">Add Category</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?php echo e(Request::is('admin/category') || Request::is('admin/category/*/edit') ? 'active':''); ?>" href="<?php echo e(url('admin/category')); ?>">View Category</a>
              </li>
            </ul>
          </div>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('admin/products*') ? 'active':''); ?>" >
          <a class="nav-link " data-bs-toggle="collapse"
            href="#products"
            aria-expanded="<?php echo e(Request::is('admin/products*') ? 'true':'false'); ?>" >

            <i class="mdi mdi-view-list menu-icon"></i>
            <span class="menu-title">products</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse <?php echo e(Request::is('admin/products*') ? 'show':''); ?>" id="products">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('admin/products/create') ? 'active':''); ?>" href="<?php echo e(url('admin/products/create')); ?>">Add Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('admin/products') || Request::is('admin/products/*/edit') ? 'active':''); ?>" href="<?php echo e(url('admin/products')); ?>">View Product</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item <?php echo e(Request::is('admin/colors') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('admin/colors')); ?>">
            <i class="mdi mdi-eyedropper-variant menu-icon"></i>
            <span class="menu-title">Colors</span>
          </a>
        </li>
        <li class="nav-item <?php echo e(Request::is('admin/sliders') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('admin/sliders')); ?>">
            <i class="mdi mdi-view-carousel menu-icon"></i>
            <span class="menu-title">Home Slider</span>
          </a>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('admin/users*') ? 'active':''); ?>" >
          <a class="nav-link " data-bs-toggle="collapse"
            href="#users"
            aria-expanded="<?php echo e(Request::is('admin/users*') ? 'true':'false'); ?>" >

            <i class="mdi mdi-view-list menu-icon"></i>
            <span class="menu-title">users</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse <?php echo e(Request::is('admin/users*') ? 'show':''); ?>" id="users">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('admin/users/create') ? 'active':''); ?>" href="<?php echo e(url('admin/users/create')); ?>">Add User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('admin/users') || Request::is('admin/users/*/edit') ? 'active':''); ?>" href="<?php echo e(url('admin/users')); ?>">View Users</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item <?php echo e(Request::is('admin/settings') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('admin/settings')); ?>">
            <i class="mdi mdi-settings menu-icon"></i>
            <span class="menu-title">Site Setting</span>
          </a>
        </li>
    </ul>
</nav><?php /**PATH C:\xampp\htdocs\quality\resources\views/layouts/inc/admin/sidebar.blade.php ENDPATH**/ ?>