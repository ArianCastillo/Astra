<html>
    <head>
        <title>CodeIgniter Tutorial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Material Design Lite -->
	    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
	    <!-- Material Design icon font -->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

    <body>
      <h1>Título</h1>
		  <!-- Accent-colored raised button with ripple -->
		  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
			 Button
		  </button>

		  <!-- Colored FAB button -->
		  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
			 <i class="material-icons">add</i>
		  </button>

		  <div id="container"/>
        <em>&copy; 2016</em>
    </body>

    <script src="assets/js/material.min.js"></script>
    <script>
  		var button = document.createElement('button');
  		var textNode = document.createTextNode('Click Me!');
  		button.appendChild(textNode);
  		button.className = 'mdl-button mdl-js-button mdl-js-ripple-effect';
  		componentHandler.upgradeElement(button);
  		document.getElementById('container').appendChild(button);
	</script>
</html>