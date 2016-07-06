<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <p class="navbar-text visible-xs-inline-block">MENU</p>
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" role="button" aria-haspopup="true">
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
                <li><a href="courses.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Courses</a></li>
                <li><a href="drivingtheorytest.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Your theory test</a></li>
                <li><a href="drivingpracticaltest.php"><i class="fa fa-car" aria-hidden="true"></i>Your driving test</a></li>
                <li><a href="contact.php"><i class="fa fa-phone-square" aria-hidden="true"></i>Contact</a></li>
                <li><?php if(!isset($_SESSION['firstname'])) {echo '<i class="fa fa-user" aria-hidden="true"></i>' . '(Guest) <a href="login.php">Login</a>';} else {echo '<i class="fa fa-user" aria-hidden="true"></i>(' . '<a href="profile.php">' . $_SESSION['firstname'] . '</a>' . ') <a href="Actions/logout.php">Logout</a>';} ?></li>
            </ul>
        </div>
    </div>
</nav>