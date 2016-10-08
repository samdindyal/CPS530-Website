<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, CPS530 - Sam Dindyal</title>
    <script src='/../../../private/info.js'></script>
  </head>
  <body style="background-color: #2d2d2d;color: #ffffff;font-family: sans-serif; text-align: center;">
    <header>
      <a href="../../" style="text-decoration: none"><h1 style="color:#ee3e80; margin-bottom:0px">CPS530</h1></a>
      <a href="../../" style="text-decoration: none"><h1 style="color:#ee3e80; margin-top:0px;margin-bottom:5px">Lab #1</h1></a>
      <h2 style="color:#ffDfF1; margin-top:10px">
        Sam Dindyal<br>
        <i>
          <script type="text/javascript">document.write(studentID);</script>
          <? echo $_ENV["STUDENT_ID"] ?>
        </i>
      </h2>
    </header> <!-- End of header -->
    <div class="container">
      <select class="report" name="select-report" onchange="document.getElementById('viewer').src = this.options[this.selectedIndex].getAttribute('data-src');">
        <option value="validation-report" data-src="validation-report.php">Validation Report</option>
        <option value="technical-report" data-src="technical-report.php">Technical Report</option>
      </select> <!-- End of select-report select tag  -->
      <br>
      <iframe src="validation-report.php" width="1024" height="768" style="background: white; width:90%;" id="viewer">Your browser does not support iFrames!</iframe>
    </div>
    <div class="checklist" style="width: 360px;margin: auto;line-height:1.7em; padding:10px">
      <ul style="list-style-type: none; text-align: left">
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Name and student number</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> No CSS outside a tag</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Use a header tag at least once</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Use a list</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Use a tag you've never used before</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Validate web page for HTML5 compliancy</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Include a validation report of this page</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Include a technical report of this page</li>
        <li style="color:#ffeff2"><span style="color:#ee3e80; padding-right: 3px">&#10004;</span> Password protect the page</li>
      </ul>
    </div> <!-- End of ul checklist -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68944679-1', 'auto');
      ga('send', 'pageview');

    </script> <!-- Google Analytics  -->
  </body> <!-- End of body  -->
</html>
l>
