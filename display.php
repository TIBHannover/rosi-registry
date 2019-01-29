<!DOCTYPE html>
<!--
Display existing entry
uses alpaca
-->
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <link type="text/css" href="//code.cloudcms.com/alpaca/1.5.24/bootstrap/alpaca.min.css" rel="stylesheet" />
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>
    <script type="text/javascript" src="//code.cloudcms.com/alpaca/1.5.24/bootstrap/alpaca.min.js"></script>
</head>

  <body>
    <header>
        <div class="container">
          <h1>Registry of Open Scientometric Data Sources</h1>
        </div>
    </header>

    <div class="container">

      <!-- alpace will fill in the form in this div -->
      <div id="form"></div>
      <a href="index.php">back to overview</a>

      <?php
        echo '<a href="form.php?sourceId='.$_GET['sourceId'].'">edit</a>';
      ?>

    </div>

    <script type="text/javascript">

      // get source id from url
      var url_string = window.location.href;
      var url = new URL(url_string);
      var sourceId = url.searchParams.get("sourceId");

        // get data from database via php
        var ajax = new XMLHttpRequest(); //New request object
        ajax.open("post", "get-data.php?sourceId="+sourceId, true);
        ajax.send();
        ajax.onload = function() {

          // alpaca does its magic here
          $('#form').alpaca({
            "data" : JSON.parse(this.responseText)[0],
            "schemaSource": "./schema.json",
            "options": {
              "fields": {
                "link" : {
                    "type": "url",

                },
                  "description" : {
                      "type": "textarea",
                      "rows": 5,
                      "cols": 40
                  }
              }
            },
            "view" : "bootstrap-display"
            });
        }

    </script>

    <!-- footer -->
    <img class="img-responsive-md" src="rosi-logo.png" width="100px">
    <img class="img-responsive-md" src="https://www.tib.eu/typo3conf/ext/tib_tmpl_bootstrap/Resources/Public/images/TIB_Logo_en.png">
  </body>
</html>
