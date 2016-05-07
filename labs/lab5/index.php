<?
  session_start();
  if(isset($_SESSION['views']))
      $_SESSION['views']++;
  else
      $_SESSION['views'] = 1;

    function addOptions($selected) {
      for ($i = 3; $i <= 12; $i++)
        echo "<option value=\"$i\"" . ($selected == $i ? "selected" : '') . " >$i</option>";
      }

    function addSelect($value)
    {
      echo '<select class="form-control select_box" name="' . $value . '">';
      addOptions($_POST[$value]);
      echo '</select>';
    }

    function addMultiplicationForm()
    {
      echo '<div class="controls">';
      echo '<h3 class="light">Please select the dimensions for your multiplication table below:</h3><br>';
      echo '<div class="form_div"><form action="" method="post">';

      addSelect('x');
      echo 'by';
      addSelect('y');

      echo '<br><br><input class="btn btn-default btn-submit" type="submit" value="Refresh"></input></form></div></div><br>';
    }

    function addMultiplicationTable($x, $y)
    {
      echo '<div class="multiplication_table"><p id="multiplication_table_caption">' . 'Multiplication Table up to ' . $x . ' by ' . $y;
      echo '<br><span class="answer"><br></p></p><table>';
      echo '<th id="placeholder_cell"></th>';
      for ($i = 1; $i <= $y; $i++)
        echo '<th class="x">' . $i . '</th>';
      for ($i = 1; $i <= $x; $i++)
      {
            echo "<tr><th class=\"y\">$i</th>";
            for ($j = 1; $j <= $y; $j++)
              echo '<td>' . $j*$i . '</td>';
            echo "</tr>";
      }
      echo '</table></div><br>';
    }

    function addHitCounter() {
      echo "<div class=\"hit_counter\"><h2 class=\"light hit_counter\">You have viewed this page " . $_SESSION['views'] . " time" . ($_SESSION['views'] != 1 ? "s" : "") . ".</h2></div>";
    }

    include("include/header.html");
    include("include/part1.php");
    include("include/footer.php");
?>
