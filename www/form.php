<?php

  $content = array(
    'title' => 'Monopoly',
    'heading' => array(
      'main' => 'Monopoly',
      'sub' => 'Everything you may need to know about the properties'
    )
  );

  include_once('includes/html_header.php');
  include_once('includes/body_header.php');
  include_once('includes/navigation.php');
?>

  <section>
      <div class="container">
        <h1><?php
          if ($_POST['txt_name']) {
            echo "Hello " . $_POST['txt_name'];
          }
        ?></h1>
          <form method="post" action="form.php">
            <input type="text" name="txt_name" />
            <input type="submit" value="Submit" />
          </form>
      </div>
  </section>

<?php
  include_once('includes/html_footer.php');
?>
