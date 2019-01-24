<!DOCTYPE html>
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
      <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="datatables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="datatables.min.css"/>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>



  <body>
    <header>
        <div class="container">
          <h1>Registry of Open Scientometric Data Sources</h1>
        </div>
    </header>

    <?php


    if($_POST['password'] == 'rosi'){

      header('Location: form.php');

    }

    ?>

    <form action="login.php" method="post">

      <div>
        <input type="password" name="password" id="password" placeholder="enter password" required>
      </div>


      <div>
        <a href="index.php">Cancel</a>
        <input type="submit" value="Login">
      </div>

    </form>

  </body>

</html>
