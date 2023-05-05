<!--
includes/header.php
-->
<!DOCTYPE html>
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- jquery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>

    <!-- bootstrap v3.3.2 -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <script type="text/javascript" src="node_modules/markdown/lib/markdown.js"></script>

    <!-- handlebars -->
    <script type="text/javascript" src="node_modules/handlebars/dist/handlebars.js"></script>

    <?php // include scripts for alpaca or datatables
     switch($lib){
        case 'alpaca':
          echo('
                <script type="text/javascript" src="node_modules/alpaca/dist/alpaca/bootstrap/alpaca.min.js"></script>
                <link type="text/css" rel="stylesheet" href="node_modules/alpaca/dist/alpaca/bootstrap/alpaca.min.css" />
            ');
          break;
        case 'datatables':
          echo('
                <script type="text/javascript" src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
                <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-jqui/css/dataTables.jqueryui.min.css"/>
                <script type="text/javascript" src="node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-responsive-jqui/css/responsive.jqueryui.min.css"/>
                <script type="text/javascript" src="node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-fixedheader-jqui/css/fixedHeader.jqueryui.min.css"/>
              ');
          break;
      }
    ?>

    <!-- own stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

  </head>
  <body>
  <header>
    <div class="header">
      <div class="container">
        <a href="https://tib.eu"><img id="tib-logo" src="img/tib-logo.png" width="100px"></a>
        <a href="https://tib.eu/rosi-project"><img id="rosi-logo" src="img/rosi-logo.png" width="100px"></a>
        <a href="index.php">
          <h1>Registry of Scientometric Data Sources</h1>
        </a>
        <!-- Navigation -->
        <ul class="list-inline" >
          <li><a href="index.php">Home</a></li>
          <li><a href="tech.php">Technical Overview</a></li>
          <li><a href="graph.php">Dataflow</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </header>
