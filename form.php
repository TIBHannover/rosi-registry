<!DOCTYPE html>
<!--
Display form to edit existing entry or add a new one
uses alpaca http://alpacajs.org
-->
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- jquery 1.11.1 -->
    <script type="text/javascript" src="lib/jquery-1.11.1.min.js"></script>

    <!-- bootstrap v3.3.2 -->
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- handlebars -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>

    <!-- alpaca 1.5.24 -->
    <link type="text/css" href="lib/alpaca.min.css" rel="stylesheet" />
    <script type="text/javascript" src="lib/alpaca.min.js"></script>
</head>

  <body>
    <!-- header -->
    <header>
      <div class="header">
        <a href="index.php">
          <h1>Registry of Open Scientometric Data Sources</h1>
        </a>
      </div>
      <a href="https://tib.eu/rosi-project"><img id="rosi-logo" src="rosi-logo.png" width="100px"></a>
      <a href="https://tib.eu"><img id="tib-logo" src="tib-logo.png" width="100px"></a>
    </header>

    <!-- sceleton for the form -->
    <form action="set-data.php" method="post">
        <div class="container">
            <div id="form"></div> <!-- alpace will fill in the form in this div -->
            <a href="javascript:history.back()">Cancel</a>
            <input type="submit" value="Save">
        </div>
    </form>

    <script type="text/javascript">

      // get sourceId from url
      var url_string = window.location.href;
      var url = new URL(url_string);
      var sourceId = url.searchParams.get("sourceId");

      // display edit form if there is a sourceId
      if(sourceId){

        // get data from database via php
        var ajax = new XMLHttpRequest(); //New request object
        ajax.open("post", "get-data.php?sourceId="+sourceId, true);
        ajax.send();
        ajax.onload = function() {

          // display a form with data using alpaca
          $('#form').alpaca({
            "data" : JSON.parse(this.responseText)[0],
            "schemaSource": "./schema.json",
            "optionsSource": "./options.json"
          });
        }
      }
      else {
        // display an empty form using alpaca
        $('#form').alpaca({
          "schemaSource": "./schema.json",
          "optionsSource": "./options.json"
          });
      }

    </script>
  </body>
</html>
