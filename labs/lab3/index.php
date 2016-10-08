<html>
	<head>
		<title>Lab 3, CPS530 - Sam Dindyal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
		<link rel="stylesheet" href="../../styles/lab3.css" charset="utf-8">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../../scripts/lab3.js"></script>
		<script src='/../../../private/info.js'></script>
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="row">
				<div class="col-xs-12">
					<h1 id="title_text">Lab #3</h1>
				</div>
		</div>
		<div class="row buttons">
			<div class="col-xs-12">
				<button type="button" data-link="lab01.html" class="btn">Lab 1</button>
				<button type="button" data-link="lab02.html" class="btn">Lab 2</button>
				<button type="button" data-link="index.html" class="btn active btn-primary">Lab 3</button>
				<button type="button" data-link="lab04.html" class="btn">Lab 4</button>
				<button type="button" data-link="lab05.html" class="btn">Lab 5</button>
				<button type="button" data-link="lab06.html" class="btn">Lab 6</button>
				<button type="button" data-link="lab07.html" class="btn">Lab 7</button>
				<button type="button" data-link="lab08.html" class="btn">Lab 8</button>
		</div>
	</nav>

	<div class="container">
		<div id="content">
			<p>
			<h4 class="title">Objective:</h4>
			<p>Using Bootstrap, remove the frame containing the menu of the lab manual and replace it with Bootstrap buttons in the grid system (only the link to lab 3 must be functional). Also, in the line of the <a href="http://www.csszengarden.com/">Zen Garden website</a>, re-format *this* webpage (the lab 3 description  - this lab page is located at http://cps530.scs.ryerson.ca/labs/lab03.html) using creative graphics and CSS. Use the view source function of your browser to copy/paste the HTML code.</p>

			<h4 class="title">Requirements:</h4>
			<ol>
			<li>Do not add any text (content) to this page except:
				<ul><li><b>class="<i>classname</i>"</b> as attributes to tags;</li>
				<li>the Bootstrap links and extra elements required to create grids and buttons (like div tags required by Bootstrap)</li>
				<li>the &lt;link&gt; tag to your style sheet;</li>
				<li>your name and student number.</li>
				</ul>
			<li>You can add your own images but you cannot remove the exisiting images (the lab logo which you can resize or reposition).
			<li>Your css file must be external.</li>
			<li>Try a lot of things, experiment!</li>
			</ol>

			<p>
			<h4 class="title">Submission:</h4>
			Submit the URL of your main page and your login and/or password (if password protected) using Brightspace (my.ryerson.ca).<br><br>
			<div class="row">
				<div class="col-xs-3">
					<img src="../../img/internet.gif" width="120"/>
				</div>
				<div class="col-xs-9">
					<br>
					<em class="due_date" style="color:#aa0000;">Due on or before Sunday November 1, 11:59 p.m. - No late submissions will be accepted.</em>
				</div>
			</div>
		</div>
		</div>
		<div class="footer navbar navbar-default navbar-fixed-bottom">
			<a href="../../">Web Systems Development</a><span class="separator"> | </span>
			Lab #3<span class="separator"> | </span>
			Sam Dindyal<span class="separator"> | </span>
			<script type="text/javascript">document.write(studentID);</script>
			<? echo $_ENV["STUDENT_ID"] ?>
		</div>
		<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68944679-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>
