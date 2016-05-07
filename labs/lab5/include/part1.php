<div class="content_window">
  <?
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      addMultiplicationForm();
      addMultiplicationTable($_POST['x'], $_POST['y']);
      addHitCounter();
    }
    else
    {
      addMultiplicationForm();
      addMultiplicationTable(3, 3);
      addHitCounter();
    }
  ?>
  <script type="text/javascript" src="http://www.scs.ryerson.ca/~s2dindya/scripts/lab5p1.js"></script>
</div>
