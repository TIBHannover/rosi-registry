/**
* @file js/form.js
* uses alpaca http://alpacajs.org
*/

// variables
var schema = "./schemas/source.json";
var options =  "./schemas/options.json";
var url = new URL(window.location.href);
var sourceId = url.searchParams.get("sourceId");

// display edit form if there is a sourceId
if(sourceId){

  // read remote url from config
  $.getJSON('./config.json', function(config){

    // get data from remote
    $.getJSON(config['remote'], function(source){

      // display a form with data using alpaca
      $('#form').alpaca({
        "data" : source[sourceId],
        "schemaSource": schema,
        "optionsSource": options
      });
    });
  });
}
else {
  // display an empty form using alpaca
  $('#form').alpaca({
    "schemaSource": schema,
    "optionsSource": options
    });
}
