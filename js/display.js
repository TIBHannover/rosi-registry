/**
* @file js/display.js
* uses alpaca http://alpacajs.org
*/

// get source id from url
var url_string = window.location.href;
var url = new URL(url_string);
var sourceId = url.searchParams.get("sourceId");

// get data from database via php
var ajax = new XMLHttpRequest(); //New request object
ajax.open("post", "db/get-data.php?sourceId="+sourceId, true);
ajax.send();
ajax.onload = function() {

  // convert metadata to JSON
  var source = JSON.parse(this.responseText)[0];

  // add image_url to the DOM and remove it from the array
  $('#img').prepend('<img src="'+source['image_url']+'" width="200px"/>');
  //delete source['image_url'];

  // create a view only form with alpaca
  $('#form').alpaca({

    "schemaSource": "./schemas/schema.json",
    "optionsSource": "./schemas/options.json",
    "data" : source,
    "view" : "bootstrap-display-horizontal"
    });
}
