<!--
index.php
Display overview of all existing entries

uses datatables https://www.datatables.net/
-->
<?php
  require_once("header_datatables.php");
?>
<div class="container">
  <h2>About this Registry</h2>

  The Registry of Open Scientometric Data Sources was created within the framework of the project "Reference implementation for Open Scientometric Information" (ROSI) at the Open Science Lab of the German National Libary of Science and Technology (TIB) funded by the Federal Ministry of Education and Research (BMBF). The terms used to describe the data sources will be found in our Glossary (tba).

  <h2>The project ROSI</h2>

  More information about ROSI can be found here:

  <ul>
    <li><a href="https://www.tib.eu/en/research-development/project-overview/project-summary/rosi/">Project description at TIB</a></li>
    <li><a href="https://www.wihoforschung.de/de/rosi-2070.php">Project description as part of the funding framework "quantitative research on the science sector" (in German)</a></li>
    <li><a href="https://doi.org/10.3897/rio.4.e31656">Project proposal in the RIO Journal</a></li>
  </ul>

  This database was created by

  <ul>
    <li>Svantje Lilienthal (<a href="https://vivo.tib.eu/fis/display/n0000-0003-1537-2862">VIVO Profile</a>)</li>
    <li>Christian Hauschke (<a href="https://vivo.tib.eu/fis/display/n0000-0003-2499-7741">VIVO Profile</a>)</li>
    <li>Grischa Fraumann (<a href="https://vivo.tib.eu/fis/display/n0000-0003-0099-6509">VIVO Profile</a>)</li>
  </ul>

  <h2>Feedback</h2>

  If you miss data sources, or would like to give feedback on the descriptions of the existing ones, please contact us.
</div>
<?php
  require_once("footer.php");
?>
