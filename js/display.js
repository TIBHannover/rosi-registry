/**
* @file js/display.js
* uses alpaca http://alpacajs.org
*/

// get source id from url
var url_string = window.location.href;
var url = new URL(url_string);
var sourceId = url.searchParams.get("sourceId");

// read remote url from config
$.getJSON('./config.json', function(config){

  // get data from remote
  $.getJSON(config['remote'], function(source){

    // add image_url to the DOM
    $('#img').prepend('<img src="'+source['image_url']+'" width="200px"/>');

    // create a view only form with alpaca
    $('#form').alpaca({
      "schemaSource": "./schemas/source.json",
      "optionsSource": "./schemas/options.json",
      "data" : source[sourceId],
      "view" : "bootstrap-display-horizontal"
      });

  });

});
