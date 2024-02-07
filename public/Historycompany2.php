<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APA-Control</title>

  <link rel="stylesheet" href="web.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <style>
    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 15px;
        background-color: #2F4F4F;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    select, input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border-radius: 8px;
    }

    input[type="submit"] {
        background-color: #4d89ca;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color:#444b8e;
    }

    .result {
        margin-top: 20px;
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        color: #fff;
        padding: 8px 16px;
        text-decoration: none;
        background-color: #4d89ca;
        border-radius: 5px;
        margin-right: 5px;
    }

    .pagination a:hover {
        background-color: #444b8e;
    }

    .pagination .active {
        background-color: #444b8e;
    }
  </style>
  <script>
        function toggleDateFields() {
            var filterType = document.getElementById("filter_type").value;
            var dateFields = document.getElementById("date_fields");
            var dateFromtoEnd = document.getElementById("date_fromtoend");

            // ซ่อนทุกอย่างก่อน
            dateFields.style.display = "none";
            dateFromtoEnd.style.display = "none";

            // แสดงเฉพาะที่เลือก
            if (filterType === "daily" || filterType === "monthly" || filterType === "yearly") {
                dateFields.style.display = "block";
            }
            if (filterType === "between") {
                dateFields.style.display = "block";
                dateFromtoEnd.style.display = "block";
            }
        }
    </script>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <div class="page">
      <div class="sidebar">
        <font size ="5"><center><h1>History</h1></font></center>
        <div class="sidebar-img">
          <img src="https://cdn.dribbble.com/users/2014359/screenshots/6008317/2.gif" alt="">
        </div>

        <div class="menu">
          <b class="cg">Menu</b>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-info"></i>
            </div>
            <a href="Dashboardcompany2.php"><font size ="5"><b>Dashboard</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <a href="Aboutcompany2.php"><font size ="5"><b>About Project</b></font></a>
          </div>
          <div class="Item Item-active">
            <div class="sidebar-icon">
              <i class="fa-solid fa-table"></i>
            </div> 
            <font size ="5"><b>History</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-people-group"></i>
            </div> 
            <a href="Membercompany2.php"><font size ="5"><b>Members</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-chart-line"></i>
            </div> 
            <a href="Graphcompany2.php"><font size ="5"><b>Graphs</b></font></a>
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
            <div class="wordtable"><center><h1>History</h1></center></div>
            <form method="post" action="" oninput="toggleDateFields()">
                <label for="filter_type">Filter Data:</label>
                <select name="filter_type" id="filter_type">
                    <option value="">-- Type Select --</option>
                    <option value="daily">Daily</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                    <option value="between">Between</option>
                </select>

                <div id="date_fields" style="display: none;">
                    <label for="from_day">From Day:</label>
                    <select name="from_day">
                        <option value="">-- Select --</option>
                        <?php for ($day = 1; $day <= 31; $day++) : ?>
                            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                        <?php endfor; ?>
                    </select>

                    <label for="from_month">From Month:</label>
                    <select name="from_month">
                        <option value="">-- Select --</option>
                        <?php for ($month = 1; $month <= 12; $month++) : ?>
                            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                        <?php endfor; ?>
                    </select>

                    <label for="from_year">From Year:</label>
                    <select name="from_year">
                        <option value="">-- Select --</option>
                        <?php
                        $currentYear = date('Y');
                        for ($year = $currentYear; $year >= 1900; $year--) :
                        ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                            
                <div id="date_fromtoend" style="display: none;">
                    <label for="to_day">To Day:</label>
                    <select name="to_day">
                        <option value="">-- Select --</option>
                        <?php for ($day = 1; $day <= 31; $day++) : ?>
                            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                        <?php endfor; ?>
                    </select>

                    <label for="to_month">To Month:</label>
                    <select name="to_month">
                        <option value="">-- Select --</option>
                        <?php for ($month = 1; $month <= 12; $month++) : ?>
                            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                        <?php endfor; ?>
                    </select>

                    <label for="to_year">To Year:</label>
                    <select name="to_year">
                        <option value="">-- Select --</option>
                        <?php
                        $currentYear = date('Y');
                        for ($year = $currentYear; $year >= 1900; $year--) :
                        ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>


                <input type="submit" value="Show Data">
            </form>
            <?php
              // ตรวจสอบว่ามีการส่งค่าผ่าน URL parameters หรือไม่และดึงค่าเข้ามาใช้งาน
              if (isset($_GET["filter_type"]) && isset($_GET["from_day"]) && isset($_GET["from_month"]) && isset($_GET["from_year"]) && isset($_GET["to_day"]) && isset($_GET["to_month"]) && isset($_GET["to_year"])) {
                  $filterType = $_GET["filter_type"];
                  $fromDay = $_GET["from_day"];
                  $fromMonth = $_GET["from_month"];
                  $fromYear = $_GET["from_year"];
                  $fromDateFilter = "$fromYear-$fromMonth-$fromDay";
                  $toDay = $_GET["to_day"];
                  $toMonth = $_GET["to_month"];
                  $toYear = $_GET["to_year"];
                  $toDateFilter = "$toYear-$toMonth-$toDay";

                  // เพิ่มโค้ดการดึงข้อมูลจากฐานข้อมูลตามความเหมาะสม
                  $servername = "roundhouse.proxy.rlwy.net:32692";
                  $username = "root";
                  $password = "cbA5b511H2334bFDF-3a4ACEHA2GcBD2";
                  $dbname = "project";

                  // สร้างการเชื่อมต่อ
                  $conn = new mysqli($servername, $username, $password, $dbname);

                  // ตรวจสอบการเชื่อมต่อ
                  if ($conn->connect_error) {
                      die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
                  }
                  // กำหนดจำนวนข้อมูลต่อหน้า
                  $per_page = 20;

                  // หาหน้าปัจจุบัน
                  if (isset($_GET['page'])) {
                      $page = $_GET['page'];
                  } else {
                      $page = 1;
                  }

                  $start_from = ($page - 1) * $per_page;

                  // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                  $sql = "SELECT * FROM plclogo8 WHERE ";
                  $sql2 = "SELECT COUNT(*) AS total FROM plclogo8 WHERE ";

                  if ($filterType === "daily") {
                      // ตัวอย่างเงื่อนไขรายวัน
                      $sql .= "Date(Datetime) = '$fromDateFilter'";
                      $sql2 .= "Date(Datetime) = '$fromDateFilter'";
                  } elseif ($filterType === "monthly") {
                      // ตัวอย่างเงื่อนไขรายเดือน
                      $sql .= "MONTH(Datetime) = '$fromMonth' AND YEAR(Datetime) = '$fromYear'";
                      $sql2 .= "MONTH(Datetime) = '$fromMonth' AND YEAR(Datetime) = '$fromYear'";
                  } elseif ($filterType === "yearly") {
                      // ตัวอย่างเงื่อนไขรายปี
                      $sql .= "YEAR(Datetime) = '$fromYear'";
                      $sql2 .= "YEAR(Datetime) = '$fromYear'";
                  } elseif ($filterType === "between") {
                      // ตัวอย่างเงื่อนไขระหว่างวันที่
                      $sql .= "Datetime BETWEEN '$fromDateFilter' AND '$toDateFilter'";
                      $sql2 .= "Datetime BETWEEN '$fromDateFilter' AND '$toDateFilter'";
                  }
                  
                  $sql .= "LIMIT $start_from, $per_page";
                  // ดำเนินการต่อเพื่อดึงข้อมูลจากฐานข้อมูล
                  $result = $conn->query($sql);
                  // แสดงผล
                  if ($result->num_rows > 0) {
                    echo "<table><tr><th>DATA</th><th>INFOAIR</th><th>STATUSLIGHT</th><th>STATUSFAN</th><th>STATUSPUMP</th><th>DATETIME</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["Data"] . "</td><td>" . $row["Infoair"] . "</td><td>" . $row["Statuslight"] . "</td><td>" . $row["Statusfan"] . "</td><td>" . $row["Statuspump"] . "</td><td>" . $row["Datetime"] . "</td></tr>";
                    }
                    echo "</table>";
                  }

                  // สร้างลิงก์เปลี่ยนหน้า
                  $result = $conn->query($sql2);
                  $row = $result->fetch_assoc();
                  $total_pages = ceil($row["total"] / $per_page);

                  echo "<br><br>";
                  echo "<div class='pagination'>";
                  for ($i=1; $i<=$total_pages; $i++) { 
                    echo "<a href='?page=".$i."&filter_type=".$filterType."&from_day=".$fromDay."&from_month=".$fromMonth."&from_year=".$fromYear."&to_day=".$toDay."&to_month=".$toMonth."&to_year=".$toYear."'>".$i."</a> "; 
                  }   
                  echo "</div>";
              } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["filter_type"])) {
                  $filterType = $_POST["filter_type"];
                  $fromDay = $_POST["from_day"];
                  $fromMonth = $_POST["from_month"];
                  $fromYear = $_POST["from_year"];
                  $fromDateFilter = "$fromYear-$fromMonth-$fromDay";
                  $toDay = $_POST["to_day"];
                  $toMonth = $_POST["to_month"];
                  $toYear = $_POST["to_year"];
                  $toDateFilter = "$toYear-$toMonth-$toDay";
                  // เพิ่มโค้ดการดึงข้อมูลจากฐานข้อมูลตามความเหมาะสม
                  $servername = "roundhouse.proxy.rlwy.net:32692";
                  $username = "root";
                  $password = "cbA5b511H2334bFDF-3a4ACEHA2GcBD2";
                  $dbname = "project";

                  // สร้างการเชื่อมต่อ
                  $conn = new mysqli($servername, $username, $password, $dbname);

                  // ตรวจสอบการเชื่อมต่อ
                  if ($conn->connect_error) {
                      die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
                  }
                  // กำหนดจำนวนข้อมูลต่อหน้า
                  $per_page = 20;

                  // หาหน้าปัจจุบัน
                  if (isset($_GET['page'])) {
                      $page = $_GET['page'];
                  } else {
                      $page = 1;
                  }

                  $start_from = ($page - 1) * $per_page;

                  // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                  $sql = "SELECT * FROM plclogo8 WHERE ";
                  $sql2 = "SELECT COUNT(*) AS total FROM plclogo8 WHERE ";

                  if ($filterType === "daily") {
                      // ตัวอย่างเงื่อนไขรายวัน
                      $sql .= "Date(Datetime) = '$fromDateFilter'";
                      $sql2 .= "Date(Datetime) = '$fromDateFilter'";
                  } elseif ($filterType === "monthly") {
                      // ตัวอย่างเงื่อนไขรายเดือน
                      $sql .= "MONTH(Datetime) = '$fromMonth' AND YEAR(Datetime) = '$fromYear'";
                      $sql2 .= "MONTH(Datetime) = '$fromMonth' AND YEAR(Datetime) = '$fromYear'";
                  } elseif ($filterType === "yearly") {
                      // ตัวอย่างเงื่อนไขรายปี
                      $sql .= "YEAR(Datetime) = '$fromYear'";
                      $sql2 .= "YEAR(Datetime) = '$fromYear'";
                  } elseif ($filterType === "between") {
                      // ตัวอย่างเงื่อนไขระหว่างวันที่
                      $sql .= "Datetime BETWEEN '$fromDateFilter' AND '$toDateFilter'";
                      $sql2 .= "Datetime BETWEEN '$fromDateFilter' AND '$toDateFilter'";
                  }
                  
                  $sql .= "LIMIT $start_from, $per_page";
                  // ดำเนินการต่อเพื่อดึงข้อมูลจากฐานข้อมูล
                  $result = $conn->query($sql);
                  // แสดงผล
                  if ($result->num_rows > 0) {
                    echo "<table><tr><th>DATA</th><th>INFOAIR</th><th>STATUSLIGHT</th><th>STATUSFAN</th><th>STATUSPUMP</th><th>DATETIME</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["Data"] . "</td><td>" . $row["Infoair"] . "</td><td>" . $row["Statuslight"] . "</td><td>" . $row["Statusfan"] . "</td><td>" . $row["Statuspump"] . "</td><td>" . $row["Datetime"] . "</td></tr>";
                    }
                    echo "</table>";
                  }

                  // สร้างลิงก์เปลี่ยนหน้า
                  $result = $conn->query($sql2);
                  $row = $result->fetch_assoc();
                  $total_pages = ceil($row["total"] / $per_page);

                  echo "<br><br>";
                  echo "<div class='pagination'>";
                  for ($i=1; $i<=$total_pages; $i++) { 
                    echo "<a href='?page=".$i."&filter_type=".$filterType."&from_day=".$fromDay."&from_month=".$fromMonth."&from_year=".$fromYear."&to_day=".$toDay."&to_month=".$toMonth."&to_year=".$toYear."'>".$i."</a> "; 
                  }   
                  echo "</div>";
              } else {
                  // กรณีที่ไม่มีการส่งค่าผ่าน URL parameters หรือ POST parameters
                  // ให้กำหนดค่าเริ่มต้น
                  $filterType = "";
                  $fromDay = "";
                  $fromMonth = "";
                  $fromYear = "";
                  $fromDateFilter = "$fromYear-$fromMonth-$fromDay";
                  $toDay = "";
                  $toMonth = "";
                  $toYear = "";
                  $toDateFilter = "$toYear-$toMonth-$toDay";
              }
            ?>
        
        </div>
    </div>
    </div>
</body>
</html>