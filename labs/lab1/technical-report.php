<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Technical Report</title>
    <script src='/../../../private/info.js'></script>
  </head>
  <body style="background-color: #ffffff; #2d2d2d;font-family: sans-serif; color: #3d3d3d">
    <h1 style="text-align:center; color:#2d2d2d">Technical Report</h1>
    <h2 style="color:#2d2d2d">Source Code:</h2>
    <xmp style="background-color:#fff3f6; white-space:pre-wrap; word-wrap:break-word;">
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Lab 1, CPS530 - Sam Dindyal</title>
        </head>
        <body style="background-color: #2d2d2d;color: #ffffff;font-family: sans-serif; text-align: center;">
          <header>
            <a href="/~s2dindya" style="text-decoration: none"><h1 style="color:#ee3e80; margin-bottom:0px">CPS530</h1></a>
            <a href="/~s2dindya/labs" style="text-decoration: none"><h1 style="color:#ee3e80; margin-top:0px;margin-bottom:5px">Lab #1</h1></a>
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
              <option value="validation-report" data-src="validation-report.html">Validation Report</option>
              <option value="technical-report" data-src="technical-report.html">Technical Report</option>
            </select> <!-- End of select-report select tag  -->
            <br>
            <iframe src="validation-report.html" width="1024" height="768" style="background: white; width:90%;" id="viewer">Your browser does not support iFrames!</iframe>
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
        </body> <!-- End of body  -->
      </html>

    </xmp>
    <h2 style="color:#2d2d2d;margin-bottom:5px">How did you password protect your page?</h2>
    <p style="margin-top:5px">
      I protected this page with htaccess <i>(Hypertext Access)</i>.
    </p><br>
    <h2 style="color:#2d2d2d; margin-bottom:5px">What new tag did you try? What was the effect?</h2>
    <p style="display:inline">
      The new tag I tried was the <xmp style="display:inline"><iframe></xmp> tag. The effect on the page made it seem like AJAX was in use.
    </p><br>
    <h2 style="color:#2d2d2d; margin-bottom:5px">Does your page look different in different browsers?</h2>
    <p style="display:inline">
      For the most part, it looks the same. The only difference, in terms of appearance, that I've noticed is that some control elements, such as the <xmp style="display:inline"><select></xmp> tag adopt a look from the browser being used to display the page.
    </p><br>
    <h2 style="color:#2d2d2d; margin-bottom:5px">How long did you spend on this lab?</h2>
    <p style="margin-top:5px">
      I spent just under an hour on this lab.
    </p>
  </body>
</html>
