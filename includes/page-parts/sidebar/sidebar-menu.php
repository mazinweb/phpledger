         <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">General Leder</li>
            <!-- Optionally, you can add icons to the links -->     
            <li class="treeview">
              <a href="#"><span><i class="fa fa-book fa-lg"></i>&nbsp;General Ledger</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><span>Setup</span><i class="fa fa-angle-left pull-right"></i></a>
                 <ul class="treeview-menu">
                <li><a href="<?php echo SITE_ROOT; ?>?route=modules/gl/setup/company/company_info">Company</a></li>
                <li><a href="#">Account Groups</a></li>
                <li><a href="<?php echo SITE_ROOT; ?>?route=modules/gl/setup/coa/add_coa">Chart of Account</a></li>
              </ul>
              </li>
                <li><a href="#"><span>Transactions</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                <li><a href="#">Expense Vouchers</a></li>
                <li><a href="#">Cash Reciepts</a></li>
                <li><a href="#">Bank Transactions</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>?route=modules/gl/transactions/jv/view_vouchers">Journal Vouchers</a></li>
              </ul>
                </li>
              </ul>
            </li>
          
          </ul><!-- /.sidebar-menu -->
          <ul class="sidebar-menu">
             <li class="header">Human Resources</li>
            <!-- Optionally, you can add icons to the links -->     
            <li class="treeview">
              <a href="#"><span><i class="fa-lg fa fa-group"></i>&nbsp;Employees</span> <i class="fa fa-angle-left pull-right"></i></a>
              
            </li>
        
          </ul><!-- /.sidebar-menu -->