<!DOCTYPE html>
<html lang="en">
<head>
        <!--------------------------------
--------------------------------------------> 
<meta charset="UTF-8">
<meta name="author" content="Okunola Opeyemi Ayomide">
<meta name="description" content="Mighty Paint plc.">     
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--------------------------------
-------------------------------------------->        
<link rel="stylesheet" href="background-layout.css">
<link rel="stylesheet" href="content.css">
<link rel="stylesheet" href="text.css">
<title>MIGHTY PAINT</title>
<script type="text/javascript" src="mighty.js"></script>

</head>
   
<body>
<!------------------------------------********************************************************--------------------------->
<!------------------------------------********************************************************--------------------------->
<div class="front-cover">

<h1 align="left">Mighty Paint Nigeria Limited®</h1>
<h4>Giving you a new and peaceful home</h4>
    <p>Create an account with us <a href="#">Create Account</a></p>
    <p>Already have an account <a href="#">Login here!</a></p>


</div>
    
<header>
<div class="drop-head">   
<a class="open" onclick="openNav()">&#9776;</a>
</div>
    
<div class="drop-head">
<a class="active" href="#home"><i class="home-drop">Home</i></a>
</div>
    
<div class="drop-head">
<a class="active" href="#activity"><i class="home-drop">Activity</i></a>
</div>    
    
<div class="drop-head">
<a class="active" href="#purchase"><i class="booking-drop">Purchase</i></a>
</div>
    
<div class="drop-head">
<a class="active" href="#contact"><i class="contact-drop">Contact</i></a>
</div>
    
<div class="drop-head">
<a class="active" href="#about"><i class="about-drop">About us</i></a>
</div>

<a class="cont" onclick="openlogin()">
    <aside class="logo"></aside>
</a>
</header>
<!------------------------------------********************************************************--------------------------->
<main onclick="closeNav()">
<div class="sign" id="sign">
<!--button class="close" onclick="closesign()">&times;</button>
    <img src="signimg.png" height="15%" width="70%">
<form method="POST" action="mighty.php">
    <input type="text" name="surname" placeholder="Surname">
    <input type="text" name="firstname" placeholder="Firstname">
    <input type="text" name="lastname" placeholder="Lastname">
    <input type="text" name="userid" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password" placeholder="Confirm Password">
    <input type="date-time local" name="age" placeholder="Date of Birth">
    <input type="submit" name="submit" id="submit" value="Sign-in">
</form-->
</div>
<!------------------------------------********************************************************--------------------------->       
<div id="logon">
    <button class="close" onclick="closelogin()">&times;</button>
    <form action="mighty.php" method="post">
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <input type="submit" id="submit" value="Login" />
        <a href="#">Forgot Password?</a> <a href="#" style="float: right;" onclick="opensign()">Sign in</a>
    </form>
</div> 
<!------------------------------------********************************************************--------------------------->
<div id="sidebar" class="sidebar">
    <button class="close" onclick="closeNav()">&times;</button>
<img src="logo.png" height="15%" width="90%">
    <a href="#">Home</a>
    <a href="#">Color</a>
    <a href="#">Service</a>
    <a href="#">About us</a>
    
<a class="cont" onclick="openlogin()">
    <aside class="logo"></aside>
</a>
    
</div>
<!------------------------------------********************************************************--------------------------->     
<!------------------------------------********************************************************--------------------------->

<section id="home">
    
<div class="image-slider">
    <img class="mySlides" src="imgs/cont.png" style="width:100%">
    <img class="mySlides" src="imgs/logo.png" style="width:100%">
    <img class="mySlides" src="imgs/paintbucket.png" width="50%" height="600px">    
</div>

<h2>The Type, Quantity and Amount of Available Paints in our company.</h2>
   
<table>


<tr>
<th>Product</th> 
<th>Quantity</th> 
<th>Price</th> 
</tr>

<tr>
<td>Emulsion</td>    
<td>4 litre</td>  
<td># 1,200</td>    
</tr>
    
<tr>
<td></td>    
<td>1 gallon</td>    
<td># 6,000</td>    
</tr>
    
<tr>
<td>Gloss</td>    
<td>4 litre</td>    
<td># 2,000</td>    
</tr>
    
<tr>
<td>Texcot</td>    
<td>4 litre</td>    
<td># 2,000</td>    
</tr>
    
<tr>
<td></td>    
<td>1 gallon</td>    
<td># 10,000</td>    
</tr>
    
<tr>
<td>Sartin</td>    
<td>4 litre</td>    
<td># 5,000</td>    
</tr>
  
<tr>
<td></td>    
<td>1 gallon</td>    
<td># 25,000</td>    
</tr>
    
</table>
    
 <p>Giving you the <strong>QUALITY</strong><br />
    and the <strong>QUANTITY</strong><br />
    of our <strong>PRODUCT</strong><br />
    which you can trust everywhere, anywhere and you can always lean on.
    
    </p>

</section>
<!------------------------------------********************************************************--------------------------->

<!------------------------------------********************************************************--------------------------->
<section id="activity">
<h3>We speciliaze on production of paints like:</h3>
<ul>
<li>Emulsion</li>    
<li>Gloss</li>    
<li>Texcot</li>    
<li>Sartin</li>    
<li>Marble</li>    
<li>Matt</li>    
<li>Screeding</li>    
</ul>
<h3>We are also expert in painting of your:</h3>
<ul>
<li>House</li>    
<li>School</li>    
<li>Religion centre</li>    
<li>Hotel</li>    
<li>Company or Factory</li>    
<li>and so on</li>    
<li><i>Interior and Exterior</i></li>    
</ul>
</section>
<!------------------------------------********************************************************--------------------------->

<!------------------------------------********************************************************--------------------------->
<section id="purchase">
<h1>PURCHASE</h1>


<h2 id="purchase-paint">Click here! to buy paint </h2>
<div class="purchase-paint-list">
<form>
<h3>Give your identity and Delivering Address.</h3>
<div class="customers-identity">
<input type="text" name="fbuyersname" placeholder="First Name">    
<input type="text" name="lbuyersname" placeholder="Last Name">    
<input type="text" name="buyersaddr" placeholder="Destiation Address">
<input type="datetime-local">
</div>
<h3>How do you want it?</h3>
<div class="choosing-emul">
Emulsion:
4 Litre <input type="number" name="paintno" class="likeradio">
Drums <input type="number" name="paintno" class="likeradio">
</div>
</form>    
    
</div>

    
<div class="emulsion-paint-list">
    
Emulsion
<select name="chooseColor[]">
<option value="white">White</option>    
<option value="black">Black</option>    
<option value="blue">Blue</option>    
<option value="green">Green</option>    
<option value="red">Red</option>    
<option value="yellow">Yellow</option>    
<option value="orange">Orange</option>    
</select>  
    
Gloss
<select name="chooseColor[]">
<option value="white">White</option>    
<option value="black">Black</option>    
<option value="blue">Blue</option>    
<option value="green">Green</option>    
<option value="red">Red</option>    
<option value="yellow">Yellow</option>    
<option value="orange">Orange</option>    
</select>
    
Texcot
<select name="chooseColor[]">
<option value="white">White</option>    
<option value="black">Black</option>    
<option value="blue">Blue</option>    
<option value="green">Green</option>    
<option value="red">Red</option>    
<option value="yellow">Yellow</option>    
<option value="orange">Orange</option>    
</select>
</div>

    <form method="postT" enctype="multipart/form-data" action="mighty.php">
        upload image :
    <input type="file" name="file" />
    <input type="submit" value="upload" name="Submit1"/>
    </form>
    
<?php
    if(isset($_POST['Submit1'])) {
     
        $filepath = "images/" . $_FILES["file"]["name"];
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
        {    
    echo "<img src=".$filepath." height=200 width=200 />";
        }
        else {
        echo "Error uploading file !!"; 
        }
    }
    ?>
    
<?php
if($_POST['name'] || $_POST['age']) {

    echo $_POST['name'];
    
    echo $_POST['age'];
    
    exit();
}
?>
    
<form action="<?php $_PHP_SELF ?>" method="POST">
Name:<input type="text" name="name" />    
Age:<input type="text" name="age" /> 
<textarea name="text" placeholder="Leave a message"></textarea>
<input type="submit" />    
</form> 
    
</section>
<!------------------------------------********************************************************--------------------------->

<!------------------------------------********************************************************--------------------------->
<section id="contact">
<h1>CONTACT</h1>
</section>
<!------------------------------------********************************************************--------------------------->

<!------------------------------------********************************************************--------------------------->    
<section id="about">
<h1>ABOUT US</h1>
    <!--div class="top">
    <img src="mighty.png" height="80px" width="240px" alt="Mighty Paint plc." />
    <p>Mighty Paint is founded by <b>Director Okunola Olalekan</b>, and has been estabished since year 2017, and has spread through it's locality.<br /> The product logo was designed by the Director, but the name was suggest by <b>?</b></p></div!-->

</section>
<!------------------------------------********************************************************--------------------------->

<!------------------------------------********************************************************--------------------------->
</main>
<!------------------------------------********************************************************--------------------------->

<!------------------------------------********************************************************--------------------------->
<footer>
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |
    Mighty Paint Nigeria Limited Copyright©2020 |

</footer>
<!------------------------------------********************************************************-----------------------
<!------------------------------------********************************************************--------------------------->
                                                                                            
</body>
 Hello!
    Proccessing...
</html>

