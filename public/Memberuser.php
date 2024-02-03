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

    <div class="page">
      <div class="sidebar">
        <font size ="5"><center><h1>Group Members</h1></font></center>
        <div class="sidebar-img">
          <img src="https://cdn.dribbble.com/users/2014359/screenshots/6008317/2.gif" alt="">
        </div>

        <div class="menu">
          <b class="cg">Menu</b>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-info"></i>
            </div>
            <a href="Dashboarduser.php"><font size ="5"><b>Dashboard</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <a href="Aboutuser.php"><font size ="5"><b>About Project</b></font></a>
          </div>
          <div class="Item Item-active">
            <div class="sidebar-icon">
              <i class="fa-solid fa-people-group"></i>
            </div>
            <font size ="5"><b>Members</b></font>
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
          <font size ="3"><center><h1>Members</h1></center></font>
        </div>
        <div class="memgif">
          <center><img src="https://media0.giphy.com/media/qo4T3YNcaT2IMGZ8tY/200.gif?cid=82a1493b671846bf2a30e9cf01361cdfa815c81caea9387f&rid=200.gif&ct=s" width="20%"></center>
        </div>
        <center><div class="member">
          <div class="img-info1">
            <img src="aun.jpg" width="250px" height="250px">
            <div class="nameaun"><h2>นายธนกฤต ธนกุลพรรณ<br><br>รหัสนักศึกษา 63010395 Sec 1</h2></div>
          </div>
          <div class="img-info2">
            <img src="arnny.png" width="250px" height="250px">
            <div class="namearn"><h2>นายธรรณธร มิตรดี <br><br>รหัสนักศึกษา 63010446 Sec 1</h2></div>
          </div>
          <div class="img-info3">
            <img src="soodrorr.jpg" width="250px" height="250px">
            <div class="namepee"><h2>นายปธิกร พุ่มปรีดา <br><br>รหัสนักศึกษา 63010559 Sec 1</h2></div>
          </div>
        </div></center>
        <div class="img-info4">
          <h2><center>นักศึกษาระดับปริญญาตรี ชั้นปีที่ 4 <br><br>
             คณะวิศวกรรมศาสตร์ <br><br>
             สาขาวิชาวิศวกรรมโทรคมนาคมและโครงข่าย<br><br>
             สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</h2></center>
        </div>
        <div class="endgif">
          <br><br><br><br><br><br><img src="https://media2.giphy.com/headers/daydayao/JsqV8jH6D17p.gif" width="100%">
        </div>
      </div>
      </div>
    </div>
</body>
</html>