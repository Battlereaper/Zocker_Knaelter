<!DOCTYPE html>
<html>

<link rel="stylesheet" href="/Zocker_Knaelter/public/asset/css/style.css">

  
  <head>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/Zocker_Knaelter/public/asset/css/style.css">
  </head>
  <body>
    <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Zocker_Knaelter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Regestrieren.php">Registrieren</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Beliebteste</a>
              <a class="dropdown-item" href="#">Neuste</a>
              <a class="dropdown-item" href="#">Unsere Empfehlungen</a>
            </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- overview, welcome, ... -->

   <div id="regestrieren_style">
<form>
  <form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname">
  <br>
        Last name:<br>
  <input type="text" name="lastname">
 </form>
    <form action="/action_page.php">
Password: <br>
    <input type="password" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

</form>

 <form action="/action_page.php">
E-mail: <br>
  <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

</form>
  <form action="/action_page.php">
Picture: <br>
      <input type="url" name="website" pattern="https?://.+" title="Include http://">

</form>
     <br><br>
  <input type="submit" value="Submit">
  </div>

  
  </body>