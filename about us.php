<html>
<head>
<title>About us</title>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #e2f6fe;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}




@media screen and (max-width: 1200px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>
</head>

<body>

<section id="one">
<div class="about-section">
  <h1 style="color:black;">About Us</h1>
  <p style="color:black;line-height:30px;">At the core of this cutting-edge technology is a sophisticated sensor network designed for comprehensive data analysis. The primary sensor system is equipped with state-of-the-art components, ranging from precision environmental sensors to advanced data transmission modules.

These sensors, strategically positioned to cover diverse parameters, include but are not limited to temperature sensors, humidity sensors, pressure sensors, and gas sensors. They operate collaboratively to gather real-time environmental data, creating a robust dataset for in-depth analysis.</P>
<P style="color:black;line-height:30px;">But that's not all - our platform goes beyond data collection. It rigorously analyze and checks deviations 
from default water quality standards and generates comprehensive reports, allowing us to closely 
monitor and manage the health of our water bodies, also decisions regarding the preservation and 
protection of our valuable natural resources.
</P>

</div>

<h2 style="text-align:center">Our Service</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://miro.medium.com/max/1200/1*MTWLp_V79poGSZ9W1bHGZA.png"style="width:100%;height:80%">
      <div class="container">
        <h2>Data Collection</h2>
        
        <p>Collects Data from sensors </p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img.png" style="width:100%;height:80%">
      <div class="container">
        <h2>Data Analysis</h2>
        
        <p>Compares Data from sensors with default Data</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://tse4.mm.bing.net/th?id=OIP.XwMy5mzYqWqUQg8uUc6JXwHaE7&pid=Api&P=0&h=180"  style="width:100%;height:80%">
      <div class="container">
        <h2>Report</h2>
        
		
        <p>Provides report based on analysis of Data</p>
        
        
      </div>
    </div>
  </div>
</div>
</section>