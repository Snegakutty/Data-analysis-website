<html>
<head>
<title>DATA</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1200px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 30px
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}



.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

#d{
background-color:black;
}
.three{
vertical-align:center;
margin-top:25px
}

</style>
</head>
<body><header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#a">HOME</a></li>
        <li><a href="about us.php">ABOUT US</a></li>
		<li><a href="#c">REPORT</a></li>
		
        <li><a href="#d">CONTACT US</a></li>
      </ul>
	  

      
	</div>
    </div>
  </div>
</nav>
</header>


<section id="a">
	<div class="one">
	<center>
	<h1>Real- time water characterization 
and springshed analytics</h1>
	<img src="https://i.pinimg.com/originals/fc/71/63/fc71635c7f1b09ed30413f59bb749582.gif">
	
	</center>
	
	</div>
</section>

<section id="b">
	<div class="two">
	<center>
	<h1><B>
	Dive into Water Insights: Precision in Every Drop!</B>
	</h1>
	</center>
	
	<h2 style="text-align:justify;margin:100px;line-height:60px">
	 Temperature,pH, Salinity, Dissolved Oxygen – our sensors decode the language of water. We don't just collect data; we craft dynamic tables that reveal the water body's story. Predictive prowess guides you with early warnings and proactive measures. Our reports distill wisdom, empowering you for impactful decisions. Join us in preserving water bodies with precision
	</h2>
	


</section></br>
</br>

<section id="c">
	

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    
  </div>
  <div class="row">
    <div class="column">
      <img src="furniture.jpg" style="width:100%;">
    </div>
    <div class="column">
      <form action="connect.php" method="POST">
        <label for="fname" required>First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
        <label for="country">Country</label>
        <select id="country" name="country" required>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
		  <option value="india">India</option>
		  <option value="china">China</option>
		  <option value="japan">Japan</option>
		  
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


</section>

<section id="d">
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
	
	<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>

<a href="https://www.linkedin.com/in/snega-k-936b0528a" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>


	
		</div>
		
		<div class="col-lg-6 three">
			<h3 style="color:white">&copy 2023 DATA</h3>
		</div>
</section>

