<html>
  <head>
    <link rel="shortcut icon" href="images\tablogo.png">  
    <title>Welcome</title>
    <style>
      *{
        margin: 0px 0px;
      } 
      body{
        background-image: url("images/logbg.jpg");
        background-size: 100% 100%;
      }
      .nav{
        width: 100%;
        height: 10%;
        position:fixed; 
        background-color: rgba(245, 245, 245, 0.89);
      }
      #logo{
        float: left;
        margin-top: 3px;
        margin-left: 5px;
      }
      .navbtn{
        cursor: pointer;
        margin-top: 15px;
        border: none;
        width: 12%;
        height: 65%;
        float: left;
        background: none;
      }
      h1{
        background-color:gold;
        width: 45%;
        padding: 20px;
        opacity: 0.8;
        margin-left: 7%;
        text-align: center;
        border-radius: 7px;
        border: solid black 1px;
      }
      #info{
        background-color: rgba(0, 255, 0, 0.6);
        width: 45%;
        height: 50%;
        font-size: 20px;
        margin-left: 8%;
        padding: 15px;
        text-align:center;
        border-radius: 7px;
        border: solid black 1px;
      }
    </style>
  </head>
  <body>
    <nav id="home">
      <div class="nav">
        <img id="logo" src="images\tablogo.png" height="72px" width="72px" >
          <a href="index.html"><button class="navbtn"><b>Home</b></button></a>
          <a href="index.html"><button class="navbtn" onclick="logout()" ><b>Logout</b></button></a>
      </div>
    </nav>
    <br><br><br><br><br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "myDB";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM Student WHERE Mob='". $_POST["tel"] ."' AND pass='". $_POST["pass"] ."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<h1>Welcome, ". $row["Sname"] ."</h1><br><div id='table'><table id='info'><center>";
        echo "<tr><td>Id:</td><td>" . $row["id"]. "</td></tr><tr><td>Name:</td><td>". $row["Sname"] ."</td></tr><tr><td>Mobile:</td><td>". $row["Mob"] ."</td></tr>";
        echo "<tr><td>Email:</td><td>". $row["email"] ."</td></tr><tr><td>Branch:</td><td>". $row["Branch"] ."</td></tr><tr><td>Year:</td><td>". $row["year"] ."</td></tr><tr><td>Domain:</td><td>". $row["Domain"] ."</td></tr>";
        echo "</center></table>";
      }
    } 
    else {
      echo "You are not registered.<br>So, Please Register first.";
    }
    $conn->close();
    ?>
    <img src="images/logbg1.png" style="float: right;" height="24%" width="10%" >
  </div>
  </body>
</html>