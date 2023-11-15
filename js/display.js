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

    // Find the item with the matching "id"
    var selectedSource = source.find(item => item.id === sourceId);

    if (selectedSource) {
      // add image_url to the DOM
      $('#img').prepend('<img src="'+selectedSource['image_url']+'" width="200px"/>');

      // add links to CORE and BASE to read_more
      var encodedName = encodeURI(selectedSource['name']);
      $('#read_more').prepend('Continue reading about this source in <a href="https://core.ac.uk/search?q='+encodedName+'">CORE</a> and <a href="https://www.base-search.net/Search/Results?lookfor='+encodedName+'">BASE</a>.');

      // create a view-only form with alpaca using the selected source data
      $('#form').alpaca({
        "schemaSource": "./schemas/schema.json",
        "optionsSource": "./schemas/options.json",
        "data" : selectedSource,
        "view" : "bootstrap-display-horizontal"
      });
    } else {
      // Handle the case where no matching "id" is found
      console.log("Source with id '" + sourceId + "' not found.");
    }
  });
});
