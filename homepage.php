<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 10px;
  text-align: center;
  font-size: 10px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>


<header>
  <h2>Cities</h2>
  <img src="33.jpg" alt="Cities"style="width:128px;height:128px;">
</header>

<section>
  <nav>
    <ul>
      <li><a href="homepage.php?page=londonx">londonx</a></li>
      <li><a href="homepage.php?page=paris">Paris</a></li>
      <li><a href="homepage.php?page=Tokyo">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <?php
    if (isset($_GET['page'])){
        $page=$_GET['page'];
        switch ($page){
            case 'londonx':
            include 'mocules/londonx.php';
            break;
            case 'paris':
            include 'mocules/paris.php';
            break;
            case 'Tokyo':
            include 'mocules/Tokyo.php';
            break;
            }
    }
    ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>