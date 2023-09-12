
</style>
<!-- Main Sidebar Container -->
      <aside class="main-sidebar disabled elevation-4 sidebar-no-expand text-center" style="background: #FFE400;
      text-align: center;
font-family: Montserrat;
font-style: normal;
font-weight: 700;
line-height: normal;
;
">

        <!-- Brand Logo -->

        <a href="<?php echo base_url ?>admin" class="brand-link bg-lightblue text-sm" >
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image " style="opacity: .8; width: 200px;
          height: 75px;">
<!-- img-circle elevation-3" style="opacity: .8;width: 1.7rem;height: 1.7rem;max-height: unset" -->

        <!-- <span class="brand-text font-weight-light"><?php// echo $_settings->info('short_name') ?></span> -->
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4 " >
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="fa fa-home" aria-hidden="true" style="color: #093286;""></i>
                        <p style="color: #000000;
                        font-size: 12px;">
                          Dashboard
                        </p>
                      </a>
                    </li> 

                    <li class="nav-item dropdown">
                      <a  class="nav-link">
                        
                        <p style="color: #093286; text-align: center; font-size: 20px;">
                          <b>
                          Announcements
                          </b>
                         
                        </p>

                      </a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a class="nav-link nav-home">
                        <i class="fa fa-bullhorn" aria-hidden="true" style="color: #093286;"></i>
                        <p style="color: #000000;
                        font-size: 12px;">
                         Announcements/Memorandums
                        </p>
                      </a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a  class="nav-link">
                        
                        <p style="color: #093286; text-align: center; font-size: 20px;">
                          <b>
                          Employees
                          </b>
                         
                        </p>

                      </a>
                    </li> 

                    <?php if($_settings->userdata('type') == 3): ?>
                    <li class="nav-item dropdown ">
                      <a href="<?php echo base_url ?>admin/?page=employees/records&id=<?php echo $_settings->userdata('id') ?>" class="nav-link nav-records">
                        <i class="nav-icon fas fa-id-card" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          My Records
                        </p>
                      </a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item dropdown ">
                      <a href="<?php echo base_url ?>admin/?page=employees" class="nav-link nav-employees">
                        <i class="nav-icon fas fa-user-friends" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Employees List
                        </p>
                      </a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item dropdown ">
                      <a href="<?php echo base_url ?>admin/?page=leave_applications" class="nav-link nav-leave_applications">
                        <i class="nav-icon fas fa-file-alt" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Application List
                        </p>
                      </a>
                    </li>
                    <?php if($_settings->userdata('type') != 3): ?>
                    <?php if($_settings->userdata('type') == 1): ?>
                    
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=maintenance/department" class="nav-link nav-maintenance_department">
                        <i class="nav-icon fas fa-building" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Department List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=maintenance/designation" class="nav-link nav-maintenance_designation">
                        <i class="nav-icon fas fa-th-list" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Designation List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=maintenance/leave_type" class="nav-link nav-maintenance_leave_type">
                        <i class="nav-icon fas fa-list" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Leave Type List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user_list">
                        <i class="nav-icon fas fa-users" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          User List
                        </p>
                      </a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=reports" class="nav-link nav-reports">
                        <i class="nav-icon fas fa-file" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Reports
                        </p>
                      </a>
                    </li>
                    <?php if($_settings->userdata('type') == 1): ?>

                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-cogs" style="color: #093286"></i>
                        <p  style="color: #000000;
                        font-size: 12px;">
                          Settings
                        </p>
                      </a>
                    </li>
                    <?php endif; ?>
                    <?php endif ?>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.split('/');
      page = page.join('_');

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>
