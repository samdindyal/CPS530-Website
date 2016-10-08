<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 4, CPS530 - Sam Dindyal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
		<link rel="stylesheet" href="../../styles/lab4.css" charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../../scripts/lab4.js"></script>
    <script src='/../../../private/info.js'></script>
  </head>
  <body>
    <header>
      <h1>Lab #4</h1>
    </header>
    <div class="container">
      <div class="buttons">
        <button type="button" data-src="http://www2.scs.ryerson.ca/~s2dindya/cgi-bin/lab4p1.pl" class="button_panel part1 active">PART I</button>
        <button type="button" data-src="partII.html" class="button_panel part2">PART II</button>
      </div>
      <iframe scrolling="no" id="content" src="http://www2.scs.ryerson.ca/~s2dindya/cgi-bin/lab4p1.pl"></iframe>
    </div>

    <div class="footer navbar navbar-default navbar-fixed-bottom">
      <a href="../../">Web Systems Development</a><span class="separator"> | </span>
      Lab #4<span class="separator"> | </span>
      Sam Dindyal<span class="separator"> | </span>
      <script type="text/javascript">document.write(studentID);</script>
      <? echo $_ENV["STUDENT_ID"] ?>
    </div>
  </body>
</html>
