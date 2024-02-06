<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APA-Control</title>

  <link rel="stylesheet" href="web.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 

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

    <div class="page"> 
      <div class="sidebar">
        <font size ="5"><center><h1>Graph Status</h1></font></center>
        <div class="sidebar-img">
          <img src="https://cdn.dribbble.com/users/2014359/screenshots/6008317/2.gif" alt="">
        </div>
        
        <div class="menu">
          <b class="cg">Menu</b>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-info"></i>
            </div>
            <a href="Dashboardcompany1.php"><font size ="5"><b>Dashboard</b></font></a>
          </div>
          <div class="Item" >
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <a href="Aboutcompany1.php"><font size ="5"><b>About Project</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-table"></i>
            </div>
            <a href="Historycompany1.php"><font size ="5"><b>History</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-people-group"></i>
            </div>
            <a href="Membercompany1.php"><font size ="5"><b>Members</b></font></a>
          </div>
          <div class="Item Item-active">
            <div class="sidebar-icon">
              <i class="fa-solid fa-chart-line"></i>
            </div> 
            <font size ="5"><b>Graphs</b></font>
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
          <div style="width:70%;hieght:10%;text-align:center">
            <div class="page-header"><h2>Graph</h2></div>
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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fromDay = $_POST["from_day"];
                $fromMonth = $_POST["from_month"];
                $fromYear = $_POST["from_year"];
                $fromDateFilter = "$fromYear-$fromMonth-$fromDay";

                $toDay = $_POST["to_day"];
                $toMonth = $_POST["to_month"];
                $toYear = $_POST["to_year"];
                $toDateFilter = "$toYear-$toMonth-$toDay";

                $filterType = $_POST["filter_type"];

                // เพิ่มโค้ดการดึงข้อมูลจากฐานข้อมูลตามความเหมาะสม
                $servername = "roundhouse.proxy.rlwy.net:32692";
                $username = "root";
                $password = "cbA5b511H2334bFDF-3a4ACEHA2GcBD2";
                $dbname = "project";
            
                // สร้างการเชื่อมต่อ
                $conn =new mysqli($servername, $username, $password, $dbname);
            
                // ตรวจสอบการเชื่อมต่อ
                if ($conn->connect_error) {
                    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
                }
                else {
                    if ($filterType == 'daily') {
                        $sql1 = "SELECT * FROM plclogo8 WHERE DATE(Datetime) = '$fromDateFilter'";
                    } elseif ($filterType == 'monthly') {
                        $sql1 = "SELECT * FROM plclogo8 WHERE MONTH(Datetime) = '$fromMonth' AND YEAR(Datetime) = '$fromYear'";
                    } elseif ($filterType == 'yearly') {
                        $sql1 = "SELECT * FROM plclogo8 WHERE YEAR(Datetime) = '$fromYear'";
                    } elseif ($filterType === "between") {
                        // ตัวอย่างเงื่อนไขรายปี
                        $sql1 = "SELECT * FROM plclogo8 WHERE Datetime BETWEEN '$fromDateFilter' AND '$toDateFilter'";
                    }

                    $result1 = mysqli_query($conn, $sql1);

                    while ($row = mysqli_fetch_array($result1)) {
                        // Your existing code to fetch data
                        $datetime[] = date_format(date_create($row['Datetime']), "d-m-Y H:i:s");
                        $tempsoil[] = $row['Tempsoil'];
                        $humidsoil[] = $row['Humidsoil'];
                        $tempair[] = $row['Tempair'];
                        $humidair[] = $row['Humidair'];
                        $light[] = $row['Light'];
                        $statuslight[] = $row['Bitstatuslight'];
                        $statusfan[] = $row['Bitstatusfan'];
                        $statuspump[] = $row['Bitstatuspump'];
                    }
                    // Close the database connection
                    $conn->close();
                }
            }
        ?>
            <div class="word_device"><h3>Soil Sensor</h3></div>
            <canvas  id="chart1"></canvas> 
          </div> 
            <script src="//code.jquery.com/jquery-1.9.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
                <script type="text/javascript">
                    var ctx1 = document.getElementById("chart1").getContext('2d');
                        var Chart1 = new Chart(ctx1, {
                            type: 'line',
                            data: {
                                labels:<?php echo json_encode($datetime); ?>,
                                datasets: [{
                                    label:'Temperature Soil (Celcius)',
                                    backgroundColor:[
                                    'RGB(0, 0, 255,0.1)'],borderColor:["RGB(255, 99, 71)"],borderWidth:3,tension:0.4,
                                    pointBorderColor: ["#66CCFF"], 
                                    data:<?php echo json_encode($tempsoil); ?>, 
                                    
                                },
                                {
                                  label:'Humidity Soil (RH%)',
                                    backgroundColor:[
                                    'RGB(0, 0, 255,0.1)'],borderColor:["#00ff00"],borderWidth:3,tension:0.4,
                                    pointBorderColor: ["#66CCFF"],
                                    data:<?php echo json_encode($humidsoil); ?>,
                                }
                              ]  
                              },
                            options: {
                                legend: {
                                display: true,
                                position: 'top',
    
                                labels: {
                                fontColor: '#FFFFFF',
                                fontFamily: 'Circular Std Book',
                                fontSize: 14,
                                }
                              },
                            }
                          });
                  </script> 
            <div style="width:70%;hieght:10%;text-align:center">
              <div class="word_device"><br><br><h3>Status Device</h3></div>
              <canvas  id="chart3"></canvas>
            </div> 
              <script src="//code.jquery.com/jquery-1.9.1.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
                  <script type="text/javascript">
                      var ctx3 = document.getElementById("chart3").getContext('2d');
                          var Chart3 = new Chart(ctx3, {
                              type: 'line',
                              data: {
                                  labels:<?php echo json_encode($datetime); ?>,
                                  datasets: [{
                                      label:'Status Light (1:ON , 0:OFF)',
                                      backgroundColor:[
                                      'RGB(0, 0, 255,0.1)'],borderColor:["RGB(255, 99, 71)"],borderWidth:3,tension:0.4,
                                      pointBorderColor: ["#66CCFF"],
                                      data:<?php echo json_encode($statuslight); ?>,
                                    },
                                    {
                                      label:'Status Fan (1:ON , 0:OFF)',
                                      backgroundColor:[
                                      'RGB(0, 0, 255,0.1)'],borderColor:["#00ff00"],borderWidth:3,tension:0.4,
                                      pointBorderColor: ["#66CCFF"],
                                      data:<?php echo json_encode($statusfan); ?>,
                                    },
                                    {
                                      label:'Status Pump (1:ON , 0:OFF)',
                                      backgroundColor:[
                                        'RGB(0, 0, 255,0.1)'],borderColor:["#CC66FF"],borderWidth:3,tension:0.4,
                                      pointBorderColor: ["#66CCFF"],
                                      data:<?php echo json_encode($statuspump); ?>,
                                    }]  
                                },
                              options: {
                                  legend: {
                                  display: true,
                                  position: 'top',
      
                                  labels: {
                                  fontColor: '#FFFFFF',
                                  fontFamily: 'Circular Std Book',
                                  fontSize: 14,
                                  }
                                },
                              }
                            });
                    </script>
        </div>
      </div>
</body>
</html>

