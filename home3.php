
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="/Login-System/css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e36f36e146.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      
      
  </head>
  <body>
        <header class="topbar">
          <nav class="navigation">
            <ul>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Level</a>
                      <ul class="dropdown-menu fade-up">
                          <li><a class="dropdown-item" href="/menus/stats.php">My Stats</a></li>
                          <li><a class="dropdown-item" href="/Project-2/menus/improvements.php">Need Improvements</a></li>
                      </ul>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Exercise</a>
                      <ul class="dropdown-menu fade-up">
                          <li><a class="dropdown-item" href="menus/class.php">Class</a></li>
                          <li><a class="dropdown-item" href="menus/test.php">Test</a></li>
                          <li><a class="dropdown-item" href="menus/brainy-games.php">Brainy Games</a></li>
                      </ul>
                </li>

                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Work</a>
                      <ul class="dropdown-menu fade-up">
                          <li><a class="dropdown-item" id="work-new" href="menus/work-new.php" >New</a></li>
                          <li><a class="dropdown-item" id="work-current" href="menus/work-current.php">Current</a></li>
                          <li><a class="dropdown-item" id="work-previous" href="menus/work-previous.php">Previous</a></li>
                      </ul>
                </li>

                 <li class="nav-item dropdown"><a class="nav-link" href="#" data-bs-toggle="dropdown">Calendar</a></li>

                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Message</a>
                      <ul class="dropdown-menu fade-up">
                          <li><a class="dropdown-item" href="menus/message-team.php">Team</a></li>
                          <li><a class="dropdown-item" href="menus/message-person.php">Person</a></li>
                      </ul>
                </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Help</a>
                      <ul class="dropdown-menu fade-up">
                          <li><a class="dropdown-item" href="/Project-2/menus/help-work.php">Work</a></li>
                          <li><a class="dropdown-item" href="/Project-2/menus/help-support.php">Support</a></li>
                          <li><a class="dropdown-item" href="/Project-2/menus/help-suggestion.php">Suggestion</a></li>
                      </ul>
                </li>
            </ul>
          </nav>
           <nav class="user">
                <ul>
                  <li class="user">
                      <a href="#"><i class="fas fa-user-circle fa-3x"></i></a>
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?=$_SESSION['name']?></a>
                       <ul class="dropdown-menu fade-up">
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="includes/logout.inc.php">Logout</a></li>
                      </ul>
                  </li>
                </ul>
          </nav>
        </header>
         <h2>Welcome <?=$_SESSION['name']?></h2>
  </body>      
</html> 


