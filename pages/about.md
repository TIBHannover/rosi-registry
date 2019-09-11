### About this Registry

The diversity of scientometric data sources is large – and new ones are constantly being published,
existing ones are changing, and others are being switched off. It is almost impossible to maintain
a complete overview. In response we are collecting and describing several data sources for
scientometric information in this registry.

This registry is a product of the project ["Reference implementation for Scientometric Information" (ROSI)](http://tib.eu/rosi-project) funded by the [Federal Ministry of Education and Research](https://www.bmbf.de/) (BMBF).
The project is located at the [Open
Science Lab](https://www.tib.eu/en/research-development/open-science/) of the [Leibniz Information Centre for Science and Technology](http://tib.eu/) (TIB).

More information about the project ROSI:

* [Project description at TIB](https://www.tib.eu/en/research-development/project-overview/project-summary/rosi/)
* [Project description as part of the funding framework "quantitative research on the science sector" (in German)](https://www.wihoforschung.de/de/rosi-2070.php)
* [Project proposal in the RIO Journal](https://doi.org/10.3897/rio.4.e31656)

### The Team

* Lambert Heller ([VIVO profile](https://tib.eu/lambo)) - Project Manager
* Christian Hauschke ([VIVO profile](https://vivo.tib.eu/fis/display/n0000-0003-2499-7741)) - Project Manager
* Grischa Fraumann ([VIVO profile](https://vivo.tib.eu/fis/display/n0000-0003-0099-6509)) - Research Assistant
* Svantje Lilienthal ([VIVO profile](https://vivo.tib.eu/fis/display/n0000-0003-1537-2862)) - Software Developer

### Contact

If you miss data sources or would like to give feedback on the descriptions of the existing ones,
please send us an email to rosi.project(at)tib.eu.

### Code

This registry is based on a javascript web application. [Find the code at GitHub](https://github.com/TIBHannover/rosi-registry).

### Metadata Schema

The data sources in this registry can be described by the following metadata fields (* marks mandatory fields). See also the corresponding [schema file](https://github.com/TIBHannover/rosi-registry/blob/master/schemas/source.json).

* Name* - the name of the data source
* Link* - the link to the main page of the data source
* Link to Logo - a (persistent) link to an image
* Description - a description of the data source itself (if its a quote please enter the source as well)
* Category - category that describes the data source (Collaborative platform; Online social network; Repository; Data aggregator; Other)
* Entity - entity that can be described by this data source (Work; Person; Organisation; Event; Project)
* License - the license of the data  
* Interface - link to API or other interface
* Type of Interface - the type of interface (REST API; HTTP API; HTTPS API; SPARQL Endpoint; other)
* Documentation - link to the documentation of the interface
* Data Format - lthe response data format (None; JSON; XML; Other)
* Comment - textarea for any form of comment

### Glossary

* API - Application Programming Interface
* Category - Used to distinguish data sources based on their characteristics.
* Collaborative platform - A web service for users to create, comment and change data together.
* Data aggregator - A web service that collects and integrates data from more than one data source and makes the outcome available to external parties.
* Data format - The data format describes the technical format that can be harvested through the interface of a data source.
* Entity - An entity is an abstract class of conceptual objects (IFLA 2017).
An entity is the object that can be described by indicators derived from a data source.
Our entity types: Event, Organisation, Person, Project and Work.
* Event - An event can be a conference, a workshop, a meeting, etc.
* Indicator - An indicator gives a narrow view on a specific aspect. Examples: Number of open access publications; Mentions in Wikipedia; etc.
* Interface - An interface is the point of access to harvest data from a data source.
* JSON - JavaScript Object Notation
* Online social network - A web service with the main objective to establish social interactions among its users.
* Organisation - An organisation refers to universities, research centres, departments, research groups, etc.
* Person - Mostly a researcher, but can also be anybody else
* Project - A project refers to research projects, third-party funded projects, etc.
* Repository - 	A web service that stores data, such as publications and research data, and makes it available to external parties.
* REST API - REpresentational State Transfer Application Programming Interface
* Scientometric - Umbrella term for quantitative studies of science (Sugimoto & Larivière 2018)
* SPARQL Endpoint - SPARQL Protocol And RDF Query Language
* Work - Work refers to research output of all kinds, e.g. articles, books, preprints, protocols, software, research data, etc.
* XML - Extensible Markup Language

### Literature
* Sugimoto, C. R., & Larivière, V. (2018). Measuring Research: What Everyone Needs to Know®. Oxford University Press.
* IFLA (2017). IFLA Library Reference Model (LRM).
