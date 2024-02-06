<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APA-Control</title>

  <link rel="stylesheet" href="web.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
</head>

<body>

    <div class="page">
      <div class="sidebar">
        <font size ="5"><center><h1>About Project</h1></font></center>
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
          <div class="Item Item-active" >
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <font size ="5"><b>About Project</b></font>
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
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-chart-line"></i>
            </div> 
            <a href="Graphcompany1.php"><font size ="5"><b>Graphs</b></font></a>
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
          <font size ="3"><center><h1>Using PLC Controller with IoT systems to control the electronic devices</h1></center></font>
          <div class="info">
            <h2>&emsp;&emsp;&emsp;ทำการออกแบบระบบควบคุมอุปกรณ์ที่ใช้ไฟฟ้าจากการใช้งาน PLC Controller ร่วมกับระบบ IoT โดยมีการใช้งาน Sensor ร่วมกับ RS-485 เพื่อส่งข้อมูลผ่าน AP Gateway ขึ้นสู่ระบบ Zeta Cloud หลังจากนั้นจะใช้ MQTT Protocol บน Router ที่ติดตั้ง Firmware OpenWrt ในการ Subscribe ข้อมูลและทำการแปลงบิตข้อมูลที่ได้รับเป็นตัวเลขฐานสิบมาบันทึกไว้บน Database ของ MySQL Server หลังจากนั้นจึงนำข้อมูลต่างๆมาแสดงผลบน Website ที่ได้ทำการสร้างขึ้น และจะทำการเชื่อมต่อ PLC Controller กับ Router ผ่านระบบ LAN ซึ่ง PLC Controller จะใช้งาน Modbus TCP/IP ในการอ่านค่าหรือรับค่าจากอุปกรณ์อื่นและนำข้อมูลที่ได้มาเก็บไว้ที่ตัว PLC Controller แล้วจึงทำการออกแบบโปรแกรมบน LOGO! 8.3 Software ในการสร้างการแสดงผลข้อมูลที่ได้บนหน้าจอ PLC Controller และ ควบคุมอุปกรณ์ Output ที่ต่ออยู่ โดยนำข้อมูลที่ได้มาทำการประมวลผล และสร้างเงื่อนไขในการควบคุมอุปกรณ์ Output ที่เชื่อมต่ออยู่กับ PLC Controller ให้สามารถทำงานได้ และจะทำการแสดงตัวอย่างการทำงานร่วมกันของระบบทั้งหมดโดยทำการจำลองเป็นตู้สำหรับปลูกต้นไม้ในที่ร่มอย่างง่าย</h2>
          </div>
          <div class="end3"></div>
          <div class="block-diagram">
            <img src="blockdiagram.jpg" width="40%">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <img src="zeta.jpg" width="40%">
          </div>
          <div class="kmitl">
            <center><img src="https://f.ptcdn.info/892/034/000/1440753623-72-o.jpg" width="60%"></center>
          </div>
          <div class="gif">
            <center><img src="gif.gif" width="15%"></center>
          </div>
        </div>
      </div>
    </div>
</body>
</html>