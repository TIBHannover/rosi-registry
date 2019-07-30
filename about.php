<!--
index.php
Display overview of all existing entries

uses datatables https://www.datatables.net/
-->
<?php
  require_once("includes/header.php");
?>
<div class="container">
  <h3>About this Registry</h3>
  <div class="section">
    <p>
      The diversity of scientometric data sources is large – and new ones are constantly being published,
      existing ones are changing, and others are being switched off. It is almost impossible to maintain
      a complete overview. In response we are collecting and describing several data sources for
      scientometric information in this registry.
    </p>
    <p>
      This registry is a product of the project <a href="http://tib.eu/rosi-project">"Reference
      implementation for Scientometric Information"</a> (ROSI) funded by the
      <a href="https://www.bmbf.de/">Federal Ministry of Education and Research</a> (BMBF).
      The project is located at the <a href="https://www.tib.eu/en/research-development/open-science/">Open
      Science Lab</a> of the <a href="http://tib.eu/">Leibniz Information Centre for Science and Technology</a> (TIB).
    </p>
    <p>
      More information about the project ROSI:
       <ul>
         <li><a href="https://www.tib.eu/en/research-development/project-overview/project-summary/rosi/">Project description at TIB</a></li>
         <li><a href="https://www.wihoforschung.de/de/rosi-2070.php">Project description as part of the funding framework "quantitative research on the science sector" (in German)</a></li>
         <li>Hauschke, Christian; Cartellieri; Simone & Heller, Lambert (2018). Reference implementation for open scientometric indicators (ROSI). Research Ideas and Outcomes 4: e31656.<a href="https://doi.org/10.3897/rio.4.e31656">https://doi.org/10.3897/rio.4.e31656</a></li>
      </ul>
    </p>
  </div>
  <h3>The Team</h3>
    <div class="section">
      <ul>
        <li>Lambert Heller (<a href="https://tib.eu/lambo">VIVO Profile</a>) - Project Manager</li>
        <li>Christian Hauschke (<a href="https://vivo.tib.eu/fis/display/n0000-0003-2499-7741">VIVO Profile</a>) - Project Manager</li>
        <li>Grischa Fraumann (<a href="https://vivo.tib.eu/fis/display/n0000-0003-0099-6509">VIVO Profile</a>) - Research Assistant</li>
        <li>Svantje Lilienthal (<a href="https://vivo.tib.eu/fis/display/n0000-0003-1537-2862">VIVO Profile</a>) - Software Developer</li>
      </ul>
  </div>

  <h3>Contact</h3>
    <div class="section">
      <p>
        If you miss data sources or would like to give feedback on the descriptions of the existing ones,
        please send us an email to rosi.project(at)tib.eu.
      </p>
    </div>

  <h3>Code</h3>
    <div class="section">
      <p>
        This registry is based on a javascript web application. <a href="https://github.com/TIBHannover/rosi-registry">Find the code at GitHub</a>.
      </p>
    </div>

<h3>Metadata Schema</h3>
  <div class="section">
    <p>
      The data sources in this registry can be described by the following metadata fields (* marks mandatory fields). See also the corresponding <a href="https://github.com/TIBHannover/rosi-registry/blob/master/schemas/source.json">schema file</a>.
    </p>
    <ul>
        <li>Name* - the name of the data source</li>
        <li>Link* - the link to the main page of the data source</li>
        <li>Link to Logo - a (persistent) link to an image</li>
        <li>Description - a description of the data source itself (if its a quote please enter the source as well)</li>
        <li>Category - category that describes the data source (Collaborative platform; Online social network; Repository; Data aggregator; Other)</li>
        <li>Entity - entity that can be described by this data source (Work; Person; Organisation; Event; Project)</li>
        <li>License - the license of the data </li>
        <li>Interface - link to API or other interface</li>
        <li>Type of Interface - the type of interface (REST API; HTTP API; HTTPS API; SPARQL Endpoint; other)</li>
        <li>Documentation - link to the documentation of the interface</li>
        <li>Data Format - lthe response data format (None; JSON; XML; Other)</li>
        <li>Comment - textarea for any form of comment</li>
    </ul>
  </div>

  <h3>Glossary</h3>
  <div class="section">
    <ul>
      <li>
        Entity - An entity is an abstract class of conceptual objects (IFLA 2017).
        An entity is the object that can be described by indicators derived from a data source.
        Our entity types: Event, Organisation, Person, Project and Work.
      </li>
      <li>
        Indicator - An indicator gives a narrow view on a specific aspect. Examples: Number of open access publications; Mentions in Wikipedia; etc.
      </li>
      <li>
        Event - An event can be a conference, a workshop, a meeting, etc.
      </li>
      <li>
        Organisation - An organisation refers to universities, research centres, departments, research groups, etc.
      </li>
      <li>
        Person - Mostly a researcher, but can also be anybody else
      </li>
      <li>
        Project - A project refers to research projects, third-party funded projects, etc.
      </li>
      <li>
        Scientometric - Umbrella term for quantitative studies of science (Sugimoto & Larivière 2018)
      </li>
      <li>
        Work - Work refers to research output of all kinds, e.g. articles, books, preprints, protocols, software, research data, etc.
      </li>
   </ul>
  </div> <!-- section -->

<h3>Literature</h3>
<div class="section">
    <ul>
      <li>Sugimoto, C. R., & Larivière, V. (2018). Measuring Research: What Everyone Needs to Know®. Oxford University Press.
      </li>
      <li>IFLA (2017). IFLA Library Reference Model (LRM).
      </li>
      </ul>
  </div>
</div> <!-- container -->
<?php
  require_once("includes/footer.php");
?>
