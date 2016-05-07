<%
  colour = Request.QueryString("colour")
  simple = Request.QueryString("simple")
%>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 5, CPS530 - Sam Dindyal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
    <link rel="stylesheet" href="http://www.scs.ryerson.ca/~s2dindya/styles/styles.css" charset="utf-8">
    <link rel="stylesheet" href="http://www.scs.ryerson.ca/~s2dindya/styles/lab5p2.css" charset="utf-8">
    <link rel="stylesheet" href="http://www.scs.ryerson.ca/~s2dindya/styles/lab5.css" charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="http://www.scs.ryerson.ca/~s2dindya/scripts/lab5.js"></script>
  </head>
  <body class=<%
  if simple <> "" then
    Response.write("""" & colour & "-" & simple & """")
  else
    Response.write("""" & colour & """")
  end if
  %>>
        <br>
        <form class="" action="http://webdev.scs.ryerson.ca:8080/s2dindya/lab5p2.asp" method="get">
          <div class="form-group">
            <label for="colour-chooser">Choose a colour:</label><br>
            <select class=<% Response.write("""" & colour & " ")%> colour-chooser form-control" name="colour" id="colour-chooser">
              <option value="none" selected disabled>None</option>
              <option value="red">Red</option>
              <option value="blue">Blue</option>
              <option value="green">Green</option>
              <option value="purple">Purple</option>
              <option value="indigo">Indigo</option>
              <option value="pink">Pink</option>
              <option value="turquoise">Turquoise</option>
            </select>
          </div>
          <div class="form-group">
            <input type="checkbox" name="simple" value="simple">
            <label for="simple">Simple Background</label>
          </div>
          <input type="submit" class=<% Response.write("""" & colour & " ")%> btn btn-default" value="Submit">
        </form>
        <br>
        <div class="light last_visited">
          <h3>
          <%
          if Session("TimeVisited") <> "" And Session("DateVisited") <> "" then
            Response.write("Your last visit was: " & Session("DateVisited") & " at " & Session("TimeVisited"))
          elseif Session("DateVisited") = "" And Session("TimeVisited") <> "" then
            Response.write("Your last visit was: Today at " & Session("TimeVisited"))
          elseif Session("TimeVisited") = "" And Session("DateVisited") <> "" then
            Response.write("Your last visit was: " & Session("DateVisited"))
          else
            Response.write("Your last visit was: never")
          end if
          Session("TimeVisited") = Time()
          Session("DateVisited") = Date()
          %>
        </h3>
        </div>
  </body>
</html>
