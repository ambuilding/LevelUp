# AJAX

0. AJAX
   - Asynchronous JavaScript and XML.
      - JSON is usually used in place of XML.
   - goal: load data in the background and display it when it’s ready (without reloading the whole page).
      - allows us to send additional GET or POST requests.

1. Central to our ability to asynchronously update our pages is to make use of a special JavaScript object called an XMLHttpRequest.

	var xhttp = new XMLHttpRequest();

2. After obtaining the new object, we need to define its onreadystatechange behavior.
   - This is a function (typically an anonymous function) that will be called when the asynchronous HTTP request has completed, and thus typically defines what is expected to change on your site.

3. XMLHttpRequests have two additional properties that are used to detect when the page finishes loading.

   - The readyState property will change from from 0 (request not yet initialized) to 1, 2, 3, and finally 4 (request finished, response ready).
   - The status property will (hopefully!) be 200 (OK)

4. Then just make your asynchronous request using the open() method to define the request and the send() method to actually send it.
   - There is a slightly different way to do this syntactically with jQuery.

	function ajax_request(argument)
	{
		var aj = new XMLHttpRequest();
		aj.onreadystatechange = function() {
			if (aj.readyState == 4 && aj.status == 200)
				// do something to the page
		};

		aj.open(“GET”, /* url */, true);
		aj.send();
	}


# jQuery

0. select some elements and do something with them.
1. fast, small, and feature-rich JavaScript library.
1. easier
   - HTML document traversal and manipulation
   - event handling
   - animation
   - Ajax

2. basic syntax

	$(selector).action()

3 jQuery Example & Compare to “Events” slide - jQuery is much more concise!

	$(window).load(function() {
		$("#search_button").click(function() {
			alert("You clicked the search button");
		});
	});

4. Some Useful jQuery
   - call someFunction when DOM has loaded

	```
	$(document).ready(someFunction)
	```

   - select the DOM element with ID someID

	```
	$("#someID")
	```

   - on <form> submission, call someFunction

	```
	.submit(someFunction)
	```

   - get value submitted through a form

	```
	.val()
	```

   - access HTML
```
.html()
```

5. Ajax + jQuery

	$.getJSON(URL, parameters)
		.done(function(data, textStatus, jqXHR) {
			// if successful, do something
	})
	.fail(function(jqXHR, textStatus, errorThrown) {
		// else handle error
	});

