<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" href="CC.css" />
</head>

<body>
    
    <script>
(function(d, s, id){
  SE_BASE = "3845114d.widgets.sphere-engine.com";
  SE_HTTPS = true;
  SE = window.SE || (window.SE = []);
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = (SE_HTTPS ? "https" : "http") + "://" + SE_BASE + "/static/sdk/sdk.min.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "sphere-engine-jssdk"));</script>
    
    <!-- Header -->
        <header id="header">
            <div class="logobar">
                <!-- Links in nav bar -->
                <a href="CollegiateCupBase.html">PeachTeach</a>
                <div class="image small">
				    <img src="images/peachedit.png" alt="Peach image"/>
				</div>
            </div>
        </header>
        <a href="#menu" class="navPanelToggle"> <span class="fa fa-bars"></span></a>
    
        <div class="navbar">
                <!-- Links in nav bar -->
                <a href="CollegiateCupBase.html">Home</a>
                <a href="about.html">About</a>
                <a href="lessonsHome.html">Lessons</a>
                <a href="forum.html">Forum</a>
                <a href="resources.html">Resources</a>
                <a href="#contact">Contact</a>
        </div>

	<div id="page-wrap">

		<h1>Final Quiz for Java Conditionals</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 4 correct</div>";
            
        ?>
        
        <br/>
        <h3>Please try the following coding practice problem.</h3>
        <h5>Click the arrows on the far right to expand, and the question mark if you need help.</h5>
        
        <div class="se-widget" data-widget="Je1E6PrsoU"></div>

	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
    
    <br/>
    <br/>
    <br/>
    
    <a href="lessonsHome.html">Back to main lessons page</a>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

</body>

</html>