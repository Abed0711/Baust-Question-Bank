<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
		
    <title>Home</title>
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
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: #4CAF50;
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
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

.body
{
  color: black;
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

  <header class="header1">
<div class="logo">
<p align ="center"><i><strong>Discipline Knowledge Morality<strong></i></p>
  <a href="index.php">
    <img style="float: left; margin: -3% 0% 0% 0%;" src="img/BAUST.png" width="8%" align="left" />
</a>
  <h1  align="center"><strong>Bangladesh Army university of Science And Technology<strong></h1>
  <h2 align ="center"><strong>BAUST Question Archives (BAUST Question Bank)<strong></h2>
  </div>

	</div>
	
	
	<div class="navbar">
  <a href="index.php" class="active">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  
  <div class="dropdown" style="float:right">
  <button class="dropbtn" onclick="myFunction()">Goto
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="cse.php" >CSE</a>
    <a href="eee.php" >EEE</a>
    <a href="me.php" >ME</a>
    <a href="ipe.php">IPE</a>
    <a href="english.php">English</a>
    <a href="dba.php" >DBA</a>
  </div>
  </div> 
</div>
    
  </header>
    </div>
  </header>
<div class="padding_p">
  	<div class="myDIV_right">
	
	
    	<a href = "cse.php">
    	<img style="float: left; margin: 0% 0% 0% 40%;" src="img/CSE.png" width="16%" class="responsive" />
    	<h1 style="float: left; margin: 0% 0% 0% 15%;color:black;">Computer Science And <br>Engineering</h1>
    	</a>

	</div>
		<div class="myDIV_left">
	<a href = "eee.php">
	<img style="float: left; margin: 0% 0% 0% 40%;" src="img/EEE.png" width="100" class="responsive" />
	<h1 style="float: left; margin: 0% 0% 0% 15%;color:black;">Electrical And Electronics <br> Engineering</h1>
	</a>

	</div>
  	<div class="myDIV_right">
	<a href = "me.php">
	<img style="float: left; margin: 0% 0% 0% 40%;" src="img/mechanical.png" width="100" class="responsive"/>
	<h1 style="float: left; margin: 0% 0% 0% 15%;color:black;">Mechanical Engineering</h1>
	</a>
	


	</div>
  	<div class="myDIV_left">
	<a href = "ipe.php">
	<img style="float: left; margin: 0% 0% 0% 42%;" src="img/IPE.png" width="100" class="responsive"/>
	<h1 style="float: left; margin: 0% 0% 0% 15%;color:black;">Industrial and Production <br>Engineering</h1>
	</a>
	</div>
  	<div class="myDIV_left">
	<a href = "english.php">
	<img style="float: left; margin: 0% 0% 0% 40%;" src="img/market-research.png" width="100" class="responsive" />
	<h1 style="float: left; margin: 0% 0% 0% 15%;color:black;">Department of Business<br> Administration</h1>
	</a>


	</div>
  	<div class="myDIV_right">
	<a href = "dba.php">
	<img style="float: left; margin: 0% 0% 0% 40%;" src="img/English.png" width="100" class="responsive"/>
	<h1 style="float: left; margin: 0% 0% 0% 15%;color:black;">Department of English</h1>
	</a>
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
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>