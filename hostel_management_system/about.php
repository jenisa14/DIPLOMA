<html>
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
  background-color: #474e5d;
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

.title {
  color: grey;
}




@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Thank you for visiting our page</p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="jenisa.jpg" alt="jenisa" style="width:50%">
      <div class="container">
        <h2>Jenisa Vasani</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="yatri.jpg" alt="yatri" style="width:50%">
      <div class="container">
        <h2>Yatri Chhatrala</h2>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="drashti.jpg" alt="drashti" style="width:40%">
      <div class="container">
        <h2>Drashti Makwana</h2>
      </div>
    </div>
  </div>
</div>
</body>
</html>