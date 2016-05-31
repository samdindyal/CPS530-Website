<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sam Dindyal - CPS530</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" title="BootStrap" charset="utf-8">
    <link rel="stylesheet" href="styles/home.css" charset="utf-8">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CPS530</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">HOME</a></li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LABS <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?
                  for ($i = 1; $i < 6; $i++)
                    echo "<li><a href=\"labs/lab$i\">LAB $i</a></li>";
              ?>
              <li><a href="http://www2.scs.ryerson.ca/~s2dindya/labs/lab6/">LAB 6</a></li>
            </ul>
            <li><a href="https://meanstackcps530.herokuapp.com">TERM PROJECT</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="slider">
         <div class="slide-viewer">
           <div class="slide-group">
               <?
                for ($i = 1; $i < 6; $i++)
                  echo "<div class=\"slide slide-$i\">
                      <div class=\"slider-div\"><a href=\"labs/lab$i/\">LAB $i</a></div>
                  </div>";
               ?>
               <div class="slide slide-6"><div class="slider-div"><a href="http://www2.scs.ryerson.ca/~s2dindya/labs/lab6/">LAB 6</a></div></div>
            </div>
          </div>
       <div class="slide-buttons"></div>
     </div>
    </div>
    <div class="container">
      <h1>Welcome to my CPS530 website!</h1>
      <p>
        My name is Sam Dindyal and this website is my portfolio for a course I took at Ryerson University: Web Systems Development <i>(CPS530)</i>. My lab assignments and term project are both linked to this website in the navigation bar. I should note that my lab assignments are password protected. This was one of the requirements of the assignments however, if you'd like to see them, please send me an email at <a href="mailto:sam.dindyal@icloud.com">sam.dindyal@icloud.com</a> and I'd be more than happy to provide you with the credentials.
      </p>
        If you'd like to see more of my work, please visit my GitHub profile at <a href="https://github.com/samdindyal">https://github.com/samdindyal</a>.
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="scripts/home.js" charset="utf-8"></script>
    <script src="scripts/analyticstracking.js" charset="utf-8"></script>
  </body>
</html>
