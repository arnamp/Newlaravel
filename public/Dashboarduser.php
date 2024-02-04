<?php
  // เชื่อมต่อกับ MySQL
  $servername = "roundhouse.proxy.rlwy.net:32692";
  $username = "root";
  $password = "cbA5b511H2334bFDF-3a4ACEHA2GcBD2";
  $dbname = "project";

  // สร้างการเชื่อมต่อ
  $conn =new mysqli($servername, $username, $password, $dbname);

  // ตรวจสอบการเชื่อมต่อ
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // รับค่า email จากฟอร์ม
  $email = $_POST['email'];
  
  if (!empty($email)) {
    // เพิ่มข้อมูลลงในตาราง users
    $sql = "INSERT INTO user(EmailUser) VALUES ('$email')";

    $result = $conn->query($sql);

    // ส่วนที่เพิ่ม: ส่งข้อความไลน์แจ้งเตือน
    $lineNotifyToken = "Pt5DKEnMroHtQL8ltafxf0IjXvg3CUltjBZijXLTUpI";
    $message = "มีการเข้าสู่ระบบด้วย Email: $email";

    $lineNotifyAPI = "https://notify-api.line.me/api/notify";
      $headers = array(
        "Authorization: Bearer $lineNotifyToken",
        "Content-Type: application/x-www-form-urlencoded"
    );

    $data = array('message' => $message);

    $options = array(
        'http' => array(
            'header'  => implode("\r\n", $headers),
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($lineNotifyAPI, false, $context);
    
    // ปิดการเชื่อมต่อ MySQL
    $conn->close();
  }
?>

<?php
$con  = mysqli_connect("roundhouse.proxy.rlwy.net:32692","root","cbA5b511H2334bFDF-3a4ACEHA2GcBD2","project");
$sql1 ="select* from plclogo8 order by Datetime desc limit 1";
$result1 = mysqli_query($con,$sql1);
while ($row = mysqli_fetch_array($result1)) { 
    $datetime  = date_format(date_create( $row['Datetime']),"l d-m-Y H:i:s") ;
    $infosoil = $row['Infosoil'];
    $infoair = $row['Infoair'];
    $statuslight = $row['Statuslight'];
    $statusfan = $row['Statusfan'];
    $statuspump = $row['Statuspump'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APA-Control</title>

  <link rel="stylesheet" href="web.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <div class="page">
      <div class="sidebar">
        <font size ="5"><center><h1>Dashboard</h1></font></center>
        <div class="sidebar-img">
          <img src="https://cdn.dribbble.com/users/2014359/screenshots/6008317/2.gif" alt="">
        </div>

        <div class="menu">
          <b class="cg">Menu</b>
          <div class="Item Item-active">
            <div class="sidebar-icon">
              <i class="fa-solid fa-info"></i>
            </div>
            <font size ="5"><b>Dashboard</b></font>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <a href="Aboutuser.php"><font size ="5"><b>About Project</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-people-group"></i>
            </div> 
            <a href="Memberuser.php"><font size ="5"><b>Members</b></font></a>
          </div>
        </div>
        <div class="end"></div>
        <div class="logout-button">
          <a href="Loginmail.php"><font size ="6"><b>Logout</b></font></a>
        </div>
        <div class="clock-box">
          <p id="clock"></p>
        </div>
        <script>
          function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
    
            // Add leading zeros to minutes and seconds
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;
    
            // Determine AM/PM notation
            var ampm = (hours < 12 ? "AM" : "PM");
            hours = (hours > 12 ? hours - 12 : hours);
            hours = (hours == 0 ? 12 : hours);
    
            // Format the time
            var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;
    
            // Update the clock element
            document.getElementById("clock").innerHTML = timeString;
          }
    
          // Call the updateTime function every second
          setInterval(updateTime, 1000);
        </script>
        <div class="other">
            <img src="https://s3-us-west-2.amazonaws.com/cbi-image-service-prd/original/3bcb6755-c53c-4f31-9ba0-d198e587b019.jpeg" width="100%"><br><br><br>
            <img src="https://thailandsmartcityexpo.com/wp-content/uploads/2022/11/22611022.png" width="100%"><br><br><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Kmitl.jpg" width="100%"><br><br><br><br><br>
            <center><img src="https://1.bp.blogspot.com/-p4b-9Nt2AhY/UbBYhQHncAI/AAAAAAAAAlQ/erCJh9DJlL8/s1600/Telecommunication.gif" width="70%"></center>
        </div>
      </div>
      <div class="content">
        <div class="nav-bar">
          <div class="search">
            <a href="" target="_blank" hidden></a>
            <input type="text" placeholder="Search">
            <div class="autocom-box">
              <!-- here list are inserted from javascript -->
            </div>
            <div class="icon"><i class="fas fa-search"></i></div>
          </div>
        </div>
        <script src="js/script.js"></script>
        <script src="js/suggestions.js"></script>
        <div class="content-space">
          <font size ="3"><center><h1>My Project x Zifisense</h1></center></font>
          <div class="image">
              <div class ="image-item image-one">
              </div>
              <div class="video">
                <iframe width="100%" height="115%" src="https://www.youtube.com/embed/2d2NnEnHtTQ" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
          </div>
          <div class="end2"></div>
          <div class="wordinformation"><center><h1>Informations</h1></center></div>
          <div class="information">
            <div class="frame">
              <div class="container">
                <div class="header">
                  <h1>Soil Sensor</h1>
                  <img src="https://cm.lnwfile.com/_/cm/_raw/1a/h0/j7.jpg" alt="Header Image">
                </div>
                <div class="contentinformation">
                  <div class="left-content">
                    <!-- เนื้อหาด้านซ้าย -->
                    <h2><center>Info</center></h2>
                    <div class="end4"></div><br>
                    <p><center><?php echo $infosoil ?></center></p>
                  </div>
                  <div class="right-content">
                    <!-- เนื้อหาด้านขวา -->
                    <h2><center>Datetime</center></h2>
                    <div class="end4"></div><br>
                    <p><center><?php echo $datetime ?></center></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame">
              <div class="container">
                <div class="header">
                  <!-- รูปภาพด้านบน -->
                  <h1>Air Sensor</h1>
                  <img src="https://inwfile.com/s-cm/kklijl.jpg" alt="Header Image">
                </div>
                <div class="contentinformation">
                <div class="left-content">
                    <!-- เนื้อหาด้านซ้าย -->
                    <h2><center>Info</center></h2>
                    <div class="end4"></div><br>
                    <p><center><?php echo $infoair ?></center></p>
                  </div>
                  <div class="right-content">
                    <!-- เนื้อหาด้านขวา -->
                    <h2><center>Datetime</center></h2>
                    <div class="end4"></div><br>
                    <p><center><?php echo $datetime ?></center></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wordstatus"><center><h1>Status</h1></center></div>
          <div class="status">
            <div class="framestatus">
              <div class="statusdevice">
                <img src="https://www.cool-mania.net/mini/w-490/data/product/2f/45fcf7a9778ef9193185207a9e2b1a.jpg" alt="Device Image">
                <h2>LED</h2>
                <div class="rounded-box">
                  <h1><?php echo $statuslight ?></h1>
                </div>
              </div>
            </div>
            <div class="framestatus">
              <div class="statusdevice">
                <img src="https://image.makewebeasy.net/makeweb/0/OmdeorHQh/POLO/%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B9%E0%B8%9A%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%88%E0%B8%B8%E0%B9%88%E0%B8%A1_POLO_%E0%B8%A3%E0%B8%B8%E0%B9%88%E0%B8%99_K_101_100W__3_.png?v=202012190947" alt="Device Image">
                <h2>Water Pump</h2>
                <div class="rounded-box">
                  <h1><?php echo $statuspump ?></h1>
                </div>
              </div>
            </div>
            <div class="framestatus">
              <div class="statusdevice">
                <img src="https://pim-cdn0.ofm.co.th/products/large/YA04813.jpg" alt="Device Image">
                <h2>Fan</h2>
                <div class="rounded-box">
                  <h1><?php echo $statusfan ?></h1>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>