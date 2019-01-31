
  // get source id from url
  var url_string = window.location.href;
  var url = new URL(url_string);
  var sourceId = url.searchParams.get("sourceId");

    // get data from database via php
    var ajax = new XMLHttpRequest(); //New request object
    ajax.open("post", "get-data.php?sourceId="+sourceId, true);
    ajax.send();
    ajax.onload = function() {

      // convert the metadata of the source to JSON
      var source = JSON.parse(this.responseText)[0];

      // add image of the data source to the DOM
      $('#img').prepend('<img src="'+source['image_url']+'" width="200px"/>');

      // create a view only form with alpaca
      $('#form').alpaca({
        "data" : source,
        "schemaSource": "./schema.json",
        "options": {
          "fields": {
            "id" : {
                "type": "hidden",
            },
            "link" : {
                "type": "url",
            },
            "image_url" : {
                "type": "hidden",
            },
            "description" : {
                "type": "textarea",
                "rows": 5,
                "cols": 40
            }
          }
        },
        "view" : "web-display"
        });
    }
