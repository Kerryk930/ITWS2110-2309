<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Content</title>
    <script src="script.js"></script>
    <link rel="stylesheet", href="style.css">

</head>
<body>
    <h1>Modern Binary Exploitation</h1>
    <button id="refresh_button" onclick="refresh_sidebar_function()">Refresh</button>

    <ul id="content-navigation"></ul>
    
    <div id="preview-area" class="hidden">
        <div class="block">
            <h2 id="preview-title"></h2>
            <p id="preview-description"></p>
            <div id="preview-links"></div>
        </div>
    </div>

    
</body>
</html>
