<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>ABC Cake Company | Contact </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
</head>

 <!-- Header -->

 <body>
 <header>
 	<nav> 
 	    <ul> 
   	     <li><a href="index.html">Home</a></li>
   	     <li><a href="order.html">Order</a></li>
    	 <li><a href="about.html">About</a></li>
 	     <li><a href="contact.php">Contact</a></li>
    	 <li><a href="gallery.html">Gallery</a></li>
  	 </ul>
    </nav>
        
  <h1 class="logo"> ABC Cake Company </h1>
</header>

<div>   
    <section>
	<h2> Contact </h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>	
    </section>

   <?php
         
         // define variables and set to empty values
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
      <h2>Tutorials Point Absolute classes registration</h2>
      
      <form method = "post" action = "/php/php_form_introduction.htm">
         <table>
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
            <tr>
               <td>Specific Time:</td>
               <td><input type = "text" name = "website"></td>
            </tr>
            
            <tr>
               <td>Class details:</td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      
      <?php
         echo "<h2>Your Given details are as :</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
      
    <a href="#top">Back to top</a>

  <!-- Footer -->
	<footer> 
	<nav class="footer-nav"> 
 	  <ul> 
   	     <li><a href="index.html">Home</a></li>
   	     <li><a href="order.html">Order</a></li>
    	 <li><a href="about.html">About</a></li>
 	     <li><a href="contact.php">Contact</a></li>
    	 <li><a href="gallery.html">Gallery</a></li>
  	 </ul>
    </nav>
   </footer>
</div>
</body>

</html>