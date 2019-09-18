<!DOCTYPE html>
<html>
<head>
 <title>CSE</title>

<style>

.myDIV_left {
padding: 50px 0;
    padding: 50px 0;
    background-color: #add8e682;

    float: left;
    width: 35%;
    margin: 50px 170px 0 0px;
    text-align: center;
    boder-radius: 15px;
    border: 2px slateblue;
    boder-radius: 20px;
    float: right;
    border: 2px solid #add8e682;
    border-radius: 15px;
    color: white;
	    height: 250px;
}
.myDIV_right{
	    margin: 50px 0 0 170px;
	float: left;
	
padding: 50px 0;
    padding: 50px 0;
    background-color: #add8e682;
    float: left;
    width: 35%;
    text-align: center;
    boder-radius: 15px;
    border: 2px slateblue;
    boder-radius: 20px;
    border: 2px solid #add8e682;
    border-radius: 15px;
    color: white;
	    height: 250px;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 14px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.dropbtn {
  background-color: #4CAF50;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.padding_p{
  overflow: hidden;
}


.footer-distributed{
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;

  padding: 55px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Cookie', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  #5383d3;
  text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}

</style>
</head>
<body class="body">
<body class="news">
  <header class="header1">
<div class="logo">
	
	<p align ="center"><i><strong>Discipline Knowledge Morality<strong></i></p>
  <a href="index.php">
    <img style="float: left; margin: -3% 0% 0% 0%;" src="img/BAUST.png" width="8%" align="left" />
</a>
  <h1  align="center"><strong>Department of Computer Science and Engineering<strong></h1>
  <h2 align ="center"><strong>BAUST Question Archives (BAUST Question Bank)<strong></h2>
	</div>
    <div class="nav">

	<ul>
		<li><a	class="active" href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		
		<li style="float:left"><a  href="slideshowofbaust.php">Achivement</a></li>
    <li style="float:right;"><a href="massagefromheadcse.php">MESSAGE FROM HEAD</a></li>
	</ul>
    </div>
  </header>
  <div class="padding_p">
  	<div class="myDIV_right">
      <img style="float: center; margin: -5% 0% 0% 5%;" src="img/CSEL1T1.png" width="40%" align="center" /><br>
	
	<div class="dropdown">
  <button class="dropbtn",style="center">Level-1 Term -1 </button>
  <div class="dropdown-content">
  <a href="CSE1101.php">CSE-1101</a>
  <a href="cEEE-1163.php">EEE-1163</a>
  <a href="cMe-1181.php">ME-1181</a>
  <a href="cMATH-1141.php">MATH-1141</a>
  <a href="cPHY-1103.php">PHY-1103</a>
  <a href="cHUM-1101.php">HUM-1101</a>
  </div>
</div>
</div>
		<div class="myDIV_left">
      <img style="float: center; margin: -5% 0% 0% 10%;" src="img/CSEL1T2.png" width="35%" align="center" /><br>
		<div class="dropdown">
  <button class="dropbtn">Level-1 Term -2</button>
  <div class="dropdown-content">
  <a href="cCSE-1201.php">CSE-1201</a>
  <a href="cCSE-1203.php">CSE-1203</a>
  <a href="cEEE-1269.php">EEE-1269</a>
  <a href="cMATH-1243.php">MATH-1243</a>
  <a href="cCHEM-1201.php">CHEM-1201</a>
  </div>
</div>
</div>

	
	<div class="myDIV_right">
    <img style="float: center; margin: -5% 0% 0% 5%;" src="img/CSEL2T1.png" width="40%" align="center" /><br>
		<div class="dropdown">
  <button class="dropbtn">Level-2 Term-1</button>
  <div class="dropdown-content">
  <a href="cCSE-2101.php">CSE-2101</a>
  <a href="cCSE-2103.php">CSE-2103</a>
  <a href="cCSE-2105.php">CSE-2105</a>
  <a href="cEEE-2169.php">EEE-2169</a>
  <a href="cMATH-2145.php">MATH-2145</a>
  </div>
</div>
</div>
		<div class="myDIV_left">
      <img style="float: center; margin: -5% 0% 0% 5%;" src="img/CSEL2T2.png" width="40%" align="center" /><br><br>
			<div class="dropdown">
  <button class="dropbtn">Level-2 Term-2</button>
  <div class="dropdown-content">
  <a href="cCSE-2200.php">CSE-2200</a>
  <a href="cCSE-2201.php">CSE-2201</a>
  <a href="cCSE-2203.php">CSE-2203</a>
  <a href="cCSE-2205.php">CSE-2205</a>
  <a href="cCSE-2207.php">CSE-2207</a>
  <a href="cMATH-2247.php">MATH-2247</a>
  </div>
</div>
</div>
		<div class="myDIV_right">
      <img style="float: center; margin: -5% 0% 0% 5%;" src="img/CSEL3T1.png" width="50%" align="center" /><br><br><br>
			<div class="dropdown">
  <button class="dropbtn">Level-3 Term-1</button>
  <div class="dropdown-content">
  <a href="cCSE-3101.php">CSE-3101</a>
  <a href="cCSE-3103.php">CSE-3103</a>
  <a href="cCSE-3105.php">CSE-3105</a>
  <a href="cCSE-3107.php">CSE-3107</a>
  <a href="cCSE-3109.php">CSE-3109</a>
  <a href="cHUM-3115.php">HUM-3115</a>
  </div>
</div>
</div>
		<div class="myDIV_left">
      <img style="float: center; margin: -5% 0% 0% 1%;" src="img/CSEL3T2.png" width="30%" align="center" /><br>
				<div class="dropdown">
  <button class="dropbtn">Level-3 Term-2</button>
  <div class="dropdown-content">
  <a href="cCSE-3201.php">CSE-3201</a>
  <a href="cCSE-3203.php">CSE-3203</a>
  <a href="cCSE-3205.php">CSE-3205</a>
  <a href="cCSE-3207.php">CSE-3207</a>
  <a href="cHUM-3215.php">HUM-3215</a>
  </div>
</div>
</div>
		<div class="myDIV_right">
      <img style="float: center; margin: -5% 0% 0% 5%;" src="img/CSEL4T1.png" width="40%" align="center" /><br><br>
				<div class="dropdown">
  <button class="dropbtn">Level-4 Term-1</button>
  <div class="dropdown-content">
  <a href="cCSE-4100.php">CSE-4100</a>
  <a href="cCSE-4101.php">CSE-4101</a>
  <a href="cCSE-4103.php">CSE-4103</a>
  <a href="cCSE-41XX.php">CSE-4155</a>
  <a href="cCSE-41XXII.php">CSE-4139</a>
  <a href="cME-4117.php">ME-4117</a>
  </div>
</div>
</div>
		
		<div class="myDIV_left">
      <img style="float: center; margin: -5% 0% 0% 4%;" src="img/CSEL4T2.png" width="40%" align="center" /><br><br>
				<div class="dropdown">
  <button class="dropbtn">Level-4 Term-2</button>
    <div class="dropdown-content">
    <a href="cCSE-4201.php">CSE-4201</a>
    <a href="cCSE-4203.php">CSE-4203</a>
    <a href="cCSE-42XX.php">CSE-4251</a>
    <a href="cCSE-42XX1.php">CSE-4245</a>
    </div>
</div>
</div>

</div>

  <div class="footer-distributed">

      <div class="footer-left">
        <p class="footer-links">
          <br>
          <a href="home.php">Home</a>
          .
          <a href="about.php">About</a>
          ·
          <a href="Contact.php">Contact</a>
        </p>

        <p class="footer-company-name">Developed By Department of CSE , BAUST.</p>
      </div>
     

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the Developers</span>
          This website is devoloped by Department of CSE
        </p>

        <div class="footer-icons">

          <a href="https://web.facebook.com/BAUST.CSE/"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </div>
	 </div>
  </body>
</body>

</body>
</html>