<?php if(!defined("allow")) {exit(include 'index.php');} 
$sql = "select * from usercompany where c_verification = '0'";
$companiesResult =mysqli_query($connect,$sql);
$numCompanies = mysqli_num_rows($companiesResult);
$sql = "select * from tblproject where p_verification = '0'";
$projectsResult = mysqli_query($connect, $sql);
$numProjects = mysqli_num_rows($projectsResult);

?>
<style>
    .dropdown-alerts {
        overflow-y: scroll;
        height: 280px;
    }
</style>
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
             <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i><span class="badge"><?php echo $numCompanies; ?></span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php while($companyRow = mysqli_fetch_array($companiesResult)) {

                       ?>
                        <li>
                            <a href="editCompany.php?companyID=<?php echo $companyRow['c_id']; ?>">
                                <div>
                                    <i class="fa fa-building fa-fw"></i> <?php echo $companyRow['c_name'];  ?>
                                    <span class="pull-right text-muted small">Not verified company</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                       
                        
                       <!--  <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li> -->
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
            	<li><a href="editAdmin.php?adminID=<?php echo $_SESSION['ad_id']; ?>"><i class="fa fa-user fa-fw"></i> <strong><?php echo $_SESSION['ad_name']; ?></strong></a> </li>|
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> <strong>Logout</strong></a> </li>
               
               
                <!-- /.dropdown -->
               
            </ul>
            
            
            <ul class="nav navbar-top-links navbar-right">
             <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i><span class="badge"><?php echo $numProjects; ?></span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                       
                        <?php while($projectRow = mysqli_fetch_array($projectsResult)) {

                       ?>
                        <li>
                            <a href="editProject.php?projectID=<?php echo $projectRow['p_id']; ?>">
                                <div>
                                    <i class="fa fa-lightbulb-o fa-fw"></i> <?php echo $projectRow['p_title']; ?>
                                    <span class="pull-right text-muted small">Inactive project</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                        
                       <!--  <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li> -->
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
           
               
               
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
                            <a href="listBackers.php"><i class="fa fa-share-alt"></i> Backers</a>
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