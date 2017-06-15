<?php if(!defined("allow")) {exit(include 'index.php');} ?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Crowd Durshal</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            	<li><a href="editAdmin.php?adminID=<?php echo $_SESSION['ad_id']; ?>"><i class="fa fa-user fa-fw"></i> <strong><?php echo $_SESSION['ad_name']; ?></strong></a> </li>|
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> <strong>Logout</strong></a> </li>
               
               
                <!-- /.dropdown -->
               
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                             /input-group 
                        </li> -->
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="listUsers.php"><i class="fa fa-user fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="listAdmins.php"><i class="fa fa-user-md fa-fw"></i> Admins</a>
                        </li>
                        <li>
                            <a href="listInvestments.php"><i class="fa fa-bar-chart"></i> Investments</a>
                        </li>
                        <li>
                            <a href="listCompanies.php"><i class="fa fa-building"></i> Companies</a>
                        </li>
                       
                        
                        <li>
                            <a href="listProjects.php"><i class="fa fa-lightbulb-o"></i> Projects</a>
                        </li>
                        <li>
                            <a href="listCategories.php"><i class="fa fa-sitemap"></i> Categories</a>
                        </li>
                        <li>
                            <a href="changePassword.php"><i class="fa fa-lock"></i> Change Password</a>
                        </li>
                       <!-- <li>
                            <a href="testimonial.php"><i class="fa fa-bars fa-fw"></i> Testimonials</a>
                        </li> -->
                       
                         
                         <li>
                            <a href="newsletter.php"><i class="glyphicon glyphicon-envelope"></i>&nbsp; NewsLetters</a>
                        </li>
                       
                        
                       
                         <li>
                            <a href="feedback.php"><i class="fa fa-bars"></i> Feedback</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>