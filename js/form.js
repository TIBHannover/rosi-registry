/**
* @file js/form.js
* uses alpaca http://alpacajs.org
*/

// variables
var schema = "./schemas/schema.json";
var options =  "./schemas/options.json";
var url = new URL(window.location.href);
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
      "schemaSource": schema,
      "optionsSource": options
    });
  }
}

else {
  // display an empty form using alpaca
  $('#form').alpaca({
    "schemaSource": schema,
    "optionsSource": options
    });
}
