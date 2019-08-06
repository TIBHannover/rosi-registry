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

  //  alert(source[sourceId]['image_url']);

    // add image_url to the DOM
    $('#img').prepend('<img src="'+source[sourceId]['image_url']+'" width="200px"/>');

	// add links to CORE and BASE to read_more
	var encodedName = encodeURI(source[sourceId]['name']);
	$('#read_more').prepend('Continue reading about this source in <a href="https://core.ac.uk/search?q='+encodedName+'">CORE</a> and <a href="https://www.base-search.net/Search/Results?lookfor='+encodedName+'">BASE</a>.');

    // create a view only form with alpaca
    $('#form').alpaca({
      "schemaSource": "./schemas/schema.json",
      "optionsSource": "./schemas/options.json",
      "data" : source[sourceId],
      "view" : "bootstrap-display-horizontal"
      });

  });

});
