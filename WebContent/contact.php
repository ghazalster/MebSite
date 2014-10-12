<!DOCTYPE HTML>
<html>

<head>
  <title>MEB MECH.ELECT.BLD</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1 style="font-weight:bold;font-family:Poplar Std;font-size:38pt;">MEB MECH.ELECT.BLD</h1>
          <h2 style="font-style:italic;font-family:Brush Script MT;font-size:20pt;">Exceeding Expectations, Guaranteed quality</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">Our Products</a></li>
          <li><a href="page.html">Our Customers</a></li>
          <li><a href="another_page.html">Our Team</a></li>
          <li><a href="#">Projects</a>
            <ul>
              <li><a href="#">Project 1</a></li>
              <li><a href="#">Project 2</a></li>
              <li><a href="#">Project 3</a></li>
              <li><a href="#">Project 4</a></li>
              <li><a href="#">Project 5</a></li>
            </ul>
          </li>
          <li class="selected"><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="300" alt="seascape_one" /></li>
        <li><img src="images/2.jpg" width="600" height="300" alt="seascape_two" /></li>
        <li><img src="images/3.jpg" width="600" height="300" alt="seascape_three" /></li>
        <li><img src="images/4.jpg" width="600" height="300" alt="seascape_four" /></li>
        <li><img src="images/5.jpg" width="600" height="300" alt="seascape_five" /></li>
        <li><img src="images/6.jpg" width="600" height="300" alt="seascape_seascape" /></li>
      </ul>
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Our Offices</h3>
          <h4>KSA, Riyadh</h4>
          <p>P.O box 2963-14321 Riyadh</p>
          <h4>KSA, Al-Madinah Al-Monawarah</h4>
          <p>tel/fax.   +966 4 8480153 P.O box 2963-14321 Riyadh C.R NO. 101022522</p>
		  </div>
      </div>	 
	  
      <div class="content">
        <h1>Contact Us</h1>
        <p>Say hello, using this contact form.</p>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
            <p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>
            <p><span>1 + 1 = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="28d9d4c2f6" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
        </form>
        </div>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2014 to Mohammad Abubaker Contracting</p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
