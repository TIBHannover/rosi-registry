/**
* @file js/form.js
* uses alpaca http://alpacajs.org
*/

// get sourceId from url
var url_string = window.location.href;
var url = new URL(url_string);
var sourceId = url.searchParams.get("sourceId");

// display edit form if there is a sourceId
if(sourceId){

  // get data from database via php
  var ajax = new XMLHttpRequest(); //New request object
  ajax.open("post", "db/get-data.php?sourceId="+sourceId, true);
  ajax.send();
  ajax.onload = function() {

    // display a form with data using alpaca
    $('#form').alpaca({
      "data" : JSON.parse(this.responseText)[0],
      "schemaSource": "./schemas/schema.json",
      "optionsSource": "./schemas/options.json"
    });
  }
}
else {
  // display an empty form using alpaca
  $('#form').alpaca({
    "schemaSource": "./schemas/schema.json",
    "optionsSource": "./schemas/options.json"
    });
}
