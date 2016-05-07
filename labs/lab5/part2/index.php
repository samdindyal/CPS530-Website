<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 5, CPS530 - Sam Dindyal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
    <link rel="stylesheet" href="../../../styles/styles.css" charset="utf-8">
    <link rel="stylesheet" href="../../../styles/lab5.css" charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../../../scripts/lab5.js"></script>
  </head>
  <body>
    <header>
      <h1>CPS530 <br> Web Systems Development</h1>
      <h1 class="light">Lab #5</h1>
      <nav>
        <a class="nav-btn" href="../lab5/">Part 1</a>
        <a class="nav-btn current" href="part2/">Part 2</a>
      </nav>
    </header>
    <div class="container">

      <div class="content_window">
        <br>
        <form class="" action="http://webdev.scs.ryerson.ca:8080/s2dindya/lab5p2.asp" method="get">
          <div class="form-group">
            <label for="colour-chooser">Choose a colour:</label><br>
            <select class="colour-chooser form-control turquoise" name="colour" id="colour-chooser">
              <option value="none" selected disabled>None</option>
              <option value="red">Red</option>
              <option value="blue">Blue</option>
              <option value="green">Green</option>
              <option value="purple">Purple</option>
              <option value="indigo">indigo</option>
              <option value="pink">Pink</option>
              <option value="turquoise">Turquoise</option>
            </select>
          </div>
          <div class="form-group">
            <input type="checkbox" name="simple" value="simple">
            <label for="simple">Simple Background</label>
          </div>
          <input type="submit" class="btn btn-default" value="Submit">
        </form>
      </div>
    </div>
    <div class="footer navbar navbar-default navbar-fixed-bottom">
      <a href="../">Back to Labs</a><span class="separator"> | </span>
      <a href="../../">Web Systems Development</a><span class="separator"> | </span>
      Lab #5<span class="separator"> | </span>
      Sam Dindyal<span class="separator"> | </span>
      500 592 528
    </div>
    </body>
    </html>
