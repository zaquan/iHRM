<!-- Right side -->
<div id="rightSide">
    <?php $this->load->view('topnav'); ?>
    
    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="<?php echo site_url('assets/images'); ?>/uda_logo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo site_url('assets/images'); ?>/icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
                <li><a href="index.html" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/light/stats.png" alt="" />Reports</a></li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Personal Information Module</h5>
                <span><?php echo $page_title; ?></span>
            </div>
            <!--
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Claims</a></li>
							<li><a href="#" title="">Leave</a></li>
							<li><a href="#" title="">Loans</a></li>
							<li><a href="#" title="">Bookings</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New Notifications<span class="numberRight">25</span></a></li>
                            <li><a href="#" title="">Unread Notifications<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">All Notifications</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="File Vault" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                        <ul class="mSub4">
                            <li><a href="#" title="">Pending Claims</a></li>
                            <li><a href="#" title="">Approved Claims</a></li>
                            <li><a href="#" title="">Denied Claims</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            -->
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <div class="statsRow">
        <div class="wrapper">
        
        	<div class="controlB">
            	<ul>
                    <li><a title="" href="#"><img alt="" src="<?php echo site_url('assets/images'); ?>/icons/control/32/hire-me.png"><span>Add New Employee</span></a></li>
                    <li><a title="" href="#"><img alt="" src="images/icons/control/32/statistics.png"><span>Check statistics</span></a></li>
                    <li><a title="" href="#"><img alt="" src="images/icons/control/32/comment.png"><span>Review comments</span></a></li>
                    <li><a title="" href="#"><img alt="" src="images/icons/control/32/order-149.png"><span>Check orders</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        
        </div>
    </div>
    
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
        <div class="bc">
            <ul class="breadcrumbs" id="breadcrumbs">
                 <li>
                      <a href="#">Personal Information Module</a>
                 </li>
                 <li>
                      <a href="#">Content stuff</a>
                      <ul style="display: none;">
                           <li><a href="charts.html">Charts</a></li>
                           <li><a href="grid.html">Content grid</a></li>
                           <li><a href="form_wizards.html">Wizards</a></li>
                           <li><a href="form_validation.html">Form validation</a></li>
                      </ul>
                 </li>
                 <li>
                      <a href="#">Tables</a>
                      <ul style="display: none;">
                           <li><a href="gallery.html">Gallery</a></li>
                           <li><a href="table_static.html">Static tables</a></li>
                           <li><a href="table_dynamic.html">Dynamic tables</a></li>
                      </ul>
                 </li>
                 <li class="current"><a href="#">Current page</a></li>
            </ul>
            <div class="clear"></div>    
        </div>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">All rights reserved. <a href="" title="">UDA HOLDINGS BERHAD</a></div>
    </div>

</div>