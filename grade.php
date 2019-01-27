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
                <a href="#ContactUs">Contact Us</a>
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
        <div id="container">
            <h3>Please try the following coding practice problem.</h3>
            <h5>Click the arrows on the far right to expand, and the question mark if you need help.</h5>
        
            <p>
            Scanner sc = new Scanner(System.in);<br/>
            int grade = sc.nextInt();<br/>
		
            if (grade < 50)<br/>
	           grade = 50;<br/>
			
            else if (grade > 105)<br/>
	           grade = 105;<br/>
		
            System.out.println(grade);<br/>

            </p>
        </div>
        
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
    
    
    <a href="lessonsHome.html">Back to main lessons page</a>
    <br/>
    <br/>
    <br/>
        <hr size="10" color="#ff9966">
    <br/>
    
    
    
    
   <!-- Footer -->
        <a id="ContactUs"></a>
			<section id="footer">
				<div class="inner">
					<header>
						<h2>Get in Touch</h2>
                        <h5>We'd love to hear from you! Send us a message below, or email us anytime at
                            <a href="mailto:peachteachhelp@gmail.com?Subject=Peach%20Teach%20Inquiry" target="_top">peachteachhelp@gmail.com</a>
                        </h5>
					</header>
					<form class="gform pure-form pure-form-stacked" method="post" data-email="peachteachhelp.com" action="https://script.google.com/macros/s/AKfycbwSPu89HLWeRPtznJzJN-bKZS93jVsUkRx3j-3p/exec">
                        
                        
                        
						<div class="field half first">
                            <fieldset class="pure-group">
							 <label for="name">Full Name</label>
							 <input id="name" name="name" type="text"/>
                            </fieldset>
						</div>
                        
                        
						<div class="field half">
                            <fieldset class="pure-group">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
                            </fieldset>
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
                        
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="alt" />&nbsp;</li>
						</ul>
                        
                        <!-- Customise the Thankyou Message People See when they submit the form: -->
                        <div class="thankyou_message" style="display:none;">
                          <h2><em>Thanks</em> for contacting us!
                            We will get back to you soon!</h2>
                        </div>
					</form>
                    
				</div>
			</section>

    </body>

</html>