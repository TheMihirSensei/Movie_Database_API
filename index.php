<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Search </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" type="image/jpg" href="src/img/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="header">
            <span id='Logo'>
                <img id='movieLogo' src="src/img/logo.png" alt="logo">
            </span>
            <input id='searchInput' type="text" placeholder='Serch movie here'>
            <button onclick='but()' id='searchButton'>Search</button>


    </div>
    
    <div id="movieData"></div>

    <div class='footer'>
        <div>OMDB API </div>
        <div>Mihir Sidhdhapura</div>
        <div>College Project</div>
    </div>
    <script src='src/js/main.js'></script>
</body>
</html>