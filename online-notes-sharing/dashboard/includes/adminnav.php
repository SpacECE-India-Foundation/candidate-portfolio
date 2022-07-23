
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"style="background-color:#FFC107">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><font color="black" size="" ><b>Online Notes Sharing</a></b>
            </div>
            
            <ul class="nav navbar-right top-nav"style="background-color:#FFC107">

                <?php if($_SESSION['role'] !== 'Admin') { ?> <li><a href="./uploadnote.php"style="background-color:#FFC107"><font color="black" ><b>UPLOAD</a></b></font></li> <?php } ?>
                <li class="dropdown">
                    <a href="#"style="background-color:#FFC107" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <font color="black" ><b><?php echo $_SESSION['name']; ?> </b><b class="caret"></b></font></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>"><font color="black" ><i class="fa fa-fw fa-user"></i> Account</a></font>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../../user/logout.php"><i class="fa fa-fw fa-power-off"><font color="black" ></i> Log Out</a></font>   
                        </li>
                    </ul>
                </li>
            </ul>

<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav"style="background-color:#000000">
                    <li>
                     <a href="index.php" class="active"><font size="3ppx"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></span></font>
                    </li>
                <?php if($_SESSION['role'] == 'admin') {
                    ?>
                   <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><font size="3ppx"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a></font>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./users.php"><font color="white" size="3ppx">View All Users</a></font>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i><font size="3ppx"> My Account <i class="fa fa-fw fa-caret-down"></i></a></font>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> <font size="3ppx">View Profile</a></font>
                            </li>
                            <li>
                                <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>"><font size="3ppx">Edit Profile</a></font>
                            </li>
                        </ul>
                        </li>
                            
                    <?php } else { ?>

                    <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> My Notes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./notes.php">View All Notes</a>
                            </li>
                            <li>
                                <a href="./uploadnote.php">Upload Note</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> My Account <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> View Profile</a>
                            </li>
                            <li>
                                <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>">Edit Profile</a>
                            </li>
                        </ul>
                        </li>

<?php } ?>
                </ul>
            </div>
        </nav>