<!DOCTYPE html>
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <header>
        <div class="container">
          <h1>Registry of Open Scientometric Data Sources</h1>
        </div>
    </header>
    <div class="container">

      <?php

        $sourceId = $_GET['sourceId'];

        include 'get-data.php';

        foreach ($sources as $key => $source) {

          echo "<h2>".$source['name']."</h2>";
          echo "<a href='".$source['link']."'><img src='".$source['image_url']."' width='100'></a>";
          echo "<p><a href='".$source['link']."'>".$source['link']."</a></p>";
          echo "<h3>Description</h3><p>".$source['description']."</p>";

        }

        echo '<a href="index.php">back to overview</a> ';
        echo '<a href="form.php?sourceId='.$_GET['sourceId'].'">edit</a>';

      ?>

    </div>
    <img class="img-responsive-md" src="rosi-logo.png" width="100px">
    <img class="img-responsive-md" src="https://www.tib.eu/typo3conf/ext/tib_tmpl_bootstrap/Resources/Public/images/TIB_Logo_en.png">

  </body>
</html>
