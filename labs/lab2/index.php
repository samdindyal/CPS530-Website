<? include_once(dirname(__FILE__) . '/../../../private/info.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 2, CPS530 - Sam Dindyal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/lab2.css">
  </head>
  <body>
    <header>
      <a href="../../"><h1 class="course-code">CPS530</h1></a>
      <a href="../../"><h1>Lab #2</h1></a>
      <h2 class="lightblue">
        Sam Dindyal<br>
        <i><? echo $student_id ?></i>
      </h2>
    </header> <!-- End of header -->
    <nav>
      <a href="validation-report.php" class="navbar-element current">Validation Report</a>
      <a href="../../img/lab2img.jpg" class="navbar-element center">Image</a>
      <a href="technical-report.html" class="navbar-element">Technical Report</a>
    </nav>
    <br>
    <div class="container">
      <div class="content-viewer">
        <iframe id="viewer" src="validation-report.php">Your browser doesn't support iFrames!</iframe>
      </div>
      <br>
        <table>
          <tr>
            <th colspan="2">CPS530 - Web Systems Development</th>
          </tr>
          <tr>
            <th></th>
            <th>Task</th>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>Your name and student number must appear clearly on the main page</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must have at least one image</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must have a table that uses at least one colspan or rowspan attribute</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must use at least two HTML5-only features</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must use at least two CSS3-only features</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must use CSS</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must define at least one element class in your stylesheet</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must define one global class in your style sheet</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must validate your webpage for HTML5 compliancy and save the report into a file</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>Your webpage must have a link to your validation report and technical report</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>You must host your page on a service of your choice</td>
          </tr>
          <tr class="task">
            <td class="lightblue">&#10004;</td>
            <td>The access to the page must be password protected</td>
          </tr>
        </table>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../../scripts/lab2.js"></script>
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
