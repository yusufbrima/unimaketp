<!DOCTYPE HTML>
<html>
<head>
<title>Website Development and Administration Training Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.png" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Kreon:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header start here-->
<div class="banner1" id="banner">
	<div class="container">
		<!--Start of header-->
		<?php include_once("lib/_header.php");?>
		<!--End of header-->
		<div class="top-nav">
			<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>
	   			<div id="navbar" class="navbar-collapse collapse">
	              <ul class="nav navbar-nav">
	                  <li class="home"><a href="index.php">Home</a></li>
									   <li class=""><a href="about.php">About</a></li>
									  <li class=""><a href="download.php">Downloads</a></li>
									  <li class=""><a href="gallery.php">Gallery</a></li>
									  <li class=""><a href="contact.php">Contact</a></li>
	              </ul>
	            </div>
			</div>
	</div>
</div>
<!--header strat here-->
<!--about start here-->
<div class="about">
  <div class="container">
  	<div class="about-main">
		   <div class="about-top">
			<h2>Final Project Topic Selection and Submission</h2>
			<div class="col-md-4 abouttop-left">
				<a href="#"><img src="images/a2.jpg" alt="" class="img-responsive"></a>
			</div>
			<div class="col-md-8 abouttop-right">
			<h3><a href="#">Background</a></h3>
			<p>Developing modern user-centric Website(s)/Web Application is a very complex and often painstaking process demanding Webmasters (Web Developers and Administrators alike) to interface with an assortment of technologies that are constantly evolving at an unprecedented pace. This necessitate developers to not only constantly evolve their skills to understand an eclectic collection of Web standards and specifications.
                Nonetheless, learning these technologies discreetly often leaves amateur (not-so-experienced) developers in a “software development dilemma”, which inherently leaves out the tools and techniques needed in their “toolbox(es)” viz: best-practices, code-hacks and pattern designs that have tried and proven in the realm of software development.
                Taking a pragmatic approach to solving this problem, the course is tailored towards a project development model (Software project) which will aid you in understand the underlying principles and practices in developing software projects for the Web thus:
             </p>
             <ol>
             	<li>Goal Definition</li>
				<li>Requirement Gathering</li>
				<li>Design Considerations</li>
				<li>Development Process</li>
				<li>Test and programming problem fixing</li>
				<li>Project Deployment</li>
             </ol>
            <h3><a href="#">Project Topic Selection Criteria</a></h3>
            <p>
            You are hereby required as per course requirement to select a non-trivial Web Application Development Project that must have the following specs:
           <b>Scope:</b> The project must be a viable software project that has real-world usage and purpose (not an academic requirement fulfilment*).
           <b>Timing:</b> Selected projects MUST be achievable within the allotted training period (the pre-defined six weeks). The MUST be completed within this said time frame.
            <b>Feasibility:</b>  Select project must be solvable within the stated time frame; you must select a topic that is technically achievable within your knowledge domain. Project with a higher technological complexities must be avoided for this course; they can be implemented as after-training projects.
            </p>
            <h3><a href="#">Topic Selection Conflict</a></h3>
            <p>
            Approval or revocation of project shall be determined by the Coordinators upon observing the above mentioned factors. And ALL project approval will be done on a <em>FIRST COME FIRST SERVE</em> basis which dictate that if two persons have a topic collision the first to present the shall be the holder of the said topic and the latter shall chose another topic.
          <b>Solution Uniqueness</b>
             Furthermore, NO two projects must be similar or in the same problem domain (every topic must be unique, creative and new). It is forbade to work on a topic is approved already for development.
            </p>
        	<h3><a href="#">Topic Presentation Format</a></h3>
        	<p>
			The following enumerates the format of a project topic proposal:
			<h3><a href="#">Cover page:</a></h3>
			  <ol>
				<li>Title of the training programme reference to the title above Project title</li>
				<li>Name of the topic bearer</li>
				<li>Fully qualified ID of participant</li>
			  </ol>
			 <b>NB: Use center for all text alignment for the cover page</b>
		  </p>
		<h3><a href="#">Project abstract</a></h3>
		<p>
			<ol>
			  <li>Aim of the project</li>
			  <li>Tools (technologies) for project development</li>
			  <li>Benefit of the proposed project</li>
	        <b>NB: Each of the above points must be on a separate paragraph</b>
	      </ol>
      </p>
	<h3><a href="#">Topic Submission Deadline</a></h3>
	<p>Every topic must be submitted not later than August 11, 2017 19:30 GMT. Failing to meet to this deadline disqualifies <b>YOU</b> from the assessment process.</p>
    <h3><a href="#">Project Progress Review</a></h3>
	<p>There shall be a three day interval basis for project progress review wherein the Project Supervisors will review and give possible recommendations for the successful implementation of the projects.</p>
	<h3><a href="#">Re-use of third party libraries and development tools</a></h3>
	<p>As per course requirements, <b>YOU ARE NOT ALLOWED</b> to use any third party libraries, APIs and utilities for project development; all codes must be natively implemented using your programming skills and knowledge</p>
	<h3><a href="#">Coding standards and conventions</a></h3>
	<p>Best practices of code indentation, meaningful identifier naming (names must be purposeful and descriptive), proper commenting (for readability and ease of maintenance). Business logic, data and presentation must be separated as best as possible to provide better readability and sound design.
	Any approach to coding selected must be abide by; consistency is key to knowing a better professional. All identifiers must use <b>CAMEL CASING</b> (look that up on the Web e.g. studentRecord).  </p>
	<h3><a href="#">Deployment and Assessment of projects</a></h3>
	<p>Upon completion of development on your local machines, you shall be given an account to setup and configure your domain and hosting settings which will serve as basis for project deployment. 
	The project development life cycle will serve as the basis for assessment for this training project. Administration, critical thinking, design decisions, technical aptitude will be the indicators for grading of projects.</p>
	<b>NB: These terms are subject to amendment as per course requirement</b>
	<p id="download">
	   <h3><a href="download/FinalProjectSelection.pdf">Download this document in PDF version</a></h3>
	</p>

   </div>
	 <div class="clearfix"> </div>
		</div>
	</div>
	</div>
</div>
<!--about end here-->
<?php include_once("lib/_footer.php");?>
</body>
</html>
