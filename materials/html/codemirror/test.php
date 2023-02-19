<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.53.2/lib/codemirror.min.css">
	<script src="https://cdn.jsdelivr.net/npm/codemirror@5.53.2/lib/codemirror.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/codemirror@5.53.2/mode/php/php.min.js"></script>
</head>

<body>
	<textarea id="code">
		<?php echo "<?php\necho \"Hello, World!\";\n?>"; ?>
	</textarea>

	<div id="preview"></div>

	<script>
		var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
			lineNumbers: true,
			mode: "text/x-php"
		});

		editor.on("change", function() {
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "run.php", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function() {
				if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
					document.getElementById("preview").innerHTML = this.responseText;
				}
			};
			xhr.send("code=" + encodeURIComponent(editor.getValue()));
		});
	</script>
</body>
</html>