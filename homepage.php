<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="calender.css" type="text/css" rel="stylesheet" />
<style>
body{
  margin: 0 auto;
  background-image: url("loginBackground.jpg");
  background-repeat: no-repeat;
  background-size: 100% 1000px;
}
a {
  color: white;
  text-decoration: none;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.item1 {
    grid-area: header; 
    font-size: 90px;
    text-align: left;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: bold;
    color: #B73A38;
}
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';
  grid-gap: 10px;
  /* background-color: #2196F3; */
  padding: 10px;
  margin-right: 5%;
  margin-left: 5%;
}

/* .grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px 0;
} */
/* Button */
.btn-group .button {
  background-color: #B73A38;
  border: 1px solid #B73A38;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  cursor: pointer;
  width: 200px;
  height: 90px;
  display: block;
  margin: 10px;
  border-radius: 15px;
  text-transform: uppercase;
}

.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
  border-radius: 15px;
}

.btn-group .button:hover {
  background-color: rgba(183, 58, 56, 0.842);
  border-radius: 15px;
}

/*Search Bar*/
.topnav input[type=text] {
  border: 1px solid #ccc;
  border-radius: 15px;  
}
.topnav input[type=text] {
  float: left;
  width: 90%;
  height: 30px;
  padding: 6px;
  border: solid #4682B4;
  margin-top: 8px;
  margin-right: 16px;
  margin-left: 16px;
  font-size: 17px;
  border-radius: 15px;
}
.topnav button {
  float: left;
  display: block;
  text-align: left;
  margin-top: 8px;
  padding: 14px;
  border: solid #4682B4;
  border-radius: 15px;
}
.Alerts{
  float:left;
  border:solid #4682B4;
  background-color:#4682B4;
  border-radius: 15px;
  width:250px;
  height: 350px;
  margin-left:10px;
  margin-top:10px;
  text-align: center;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-weight: bold;
  color: #B73A38;
  overflow: auto;
}
.Assignments{
  float:right;
  border:solid #4682B4;
  background-color:#4682B4;
  border-radius: 15px;
  width:250px;
  height: 350px;
  margin-right:10px;
  margin-top:10px;
  text-align: center;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-weight: bold;
  color: #B73A38;
  overflow: auto;
}
.Notes{
  bottom: 10px;
  border:solid #4682B4;
  background-color:#4682B4;
  border-radius: 15px;
  width:97%;
  height: 100px;
  margin-left: 10px;
  margin-right:10px;
  text-align: center;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-weight: bold;
  color: #B73A38;
}
</style>
</head>
<body>

<div class="grid-container">
  <div class="item1">EducateMe
    <div class="topnav">
        <input type="text" placeholder="Search..">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
  </div>

  <div class="item2">
    <div class="btn-group">
        <button class="button"><a href="maths.html">Maths<a></button>
        <button class="button"><a href="404.html">Science<a></button>
        <button class="button"><a href="404.html">English<a></button>
        <button class="button"><a href="">Portfolio<a></button>
        <button class="button"><a href="Login.html">Log Out<a></button>
    </div>
  </div>

  <div class="item3">
    <div class="Alerts">
      <h1><a href="">Alerts<a></h1>
    </div>
    <div class="Assignments">
      <h1><a href="">Assignments<a></h1>
    </div>
  </div>

  <div class="item4">
    <?php
      include("calender.php");
        
      $calendar = new Calendar();
         
      echo $calendar->show();
    ?>
  </div>

  <div class="item5">
    <div class="Notes">
      <h1><a href="404.html">Notes<a></h1>
    </div>
  </div>
    
</div>

</body>
</html>