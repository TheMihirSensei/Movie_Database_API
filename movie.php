<?php

    //confiuration
    $movieID = $_GET['movieID'];
    $url = "http://www.omdbapi.com/?i=".$movieID."&apikey=9a01b829";
    $data = file_get_contents($url);
    $jsonData = json_decode($data, TRUE);
    $title = $jsonData["Title"];
    $year = $jsonData["Year"];
    $rated = $jsonData["Rated"];
    $runtime = $jsonData["Runtime"];
    $genre = $jsonData["Genre"];
    $director = $jsonData["Director"];
    $writer = $jsonData["Writer"];
    $actors = $jsonData["Actors"];
    $plot = $jsonData["Plot"];
    $language = $jsonData["Language"];
    $country = $jsonData["Country"];
    $awards = $jsonData["Awards"];
    $ImgSrc = $jsonData["Poster"];
    $imdbRating = $jsonData["imdbRating"];
    $type = $jsonData["Type"];
    $prdocution = $jsonData["Production"];
    $imdbVotes = $jsonData["imdbVotes"];
    $boxOffice = $jsonData["BoxOffice"];
    $dvd = $jsonData["DVD"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie- <?php echo $title; ?> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="src/img/favicon.png">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/movie.css">

</head>
<body>
    <div class="header">
                <span id='Logo'>
                    <img id='movieLogo' src="src/img/logo.png" alt="logo">
                </span>
                <input id='searchInput' type="text" placeholder='Serch movie here'>
                <button onclick='but()' id='searchButton'>Search</button>

                <div id="movieData"></div>
    </div>
    <div id="movieContainer">
        <div id='movieImg'><img src="<?php if($ImgSrc) echo $ImgSrc;?>" alt="<?php echo $title;?>"></div>
        <div id='movieDetails'>
            <div id='movieTitle'><h1><?php if($title) echo $title; ?></h1>
                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                <span id='imdbRating'><?php if($imdbRating) echo $imdbRating;?></span>
            </div>
            <div id='movieInfo'>
                <span><?php echo $year;?></span>
                <span class='divider'>|</span>
                <span ><?php echo $runtime; ?></span>
                <span class='divider'>|</span>
                <span><?php echo $rated;?></span>
                <span class='divider'>|</span>
                <span><?php echo $genre;?></span>
            </div>
            <div id='moviePlot'>
                <?php echo $plot;?>
            </div>
            <div id='staringInfo'>
                <span class="gray">Staring: </span>
                <span><?php echo $actors;?></span>
            </div>
            <div id="creator">
                <span class='gray'>Writer: </span>
                <span><?php echo $writer;?></span>
                <br>
                <span class='gray'>Director: </span>
                <span><?php if($director) echo $director;?></span>
            </div>
            <div id='imdb'>
                <span ><a class='green' href="https://imdb.com/title/<?php if($movieID) echo $movieID?>">IMDB info</a></span>
            </div>
        </div>
    </div>
    <div id="extraDetail">
            <div id='moreText'>More Details...</div>
            <hr class='divv'>
            <div id='extraContainer'>
                <div>
                    <span class='gray'>Awards: </span><span class='green'><?php if($awards) echo $awards;?></span>
                </div>
                <div>
                    <span class='gray'>Language: </span><span class='green'><?php if($language) echo $language;?></span>   
                </div>
                <div>
                    <span class='gray'>Country: </span><span class='green'><?php if($country) echo $country;?></span>
                </div>
                <div>
                    <span class='gray'>Production: </span><span class='green'><?php if($prdocution) echo $prdocution;?></span>   
                </div>
                <div>
                    <span class='gray'>IMDB voting: </span><span class='green'><?php if($imdbVotes) echo $imdbVotes;?></span>
                </div>
                <div>
                    <span class='gray'>Box Office Collection: </span><span class='green'><?php if($boxOffice) echo $boxOffice;?></span>
                </div>
                <div>
                    <span class='gray'>DVD Release: </span><span class='green'><?php if($dvd) echo $dvd;?></span>
                </div>
                
            </div>

    </div>

    <div class='footer'>
        <div>OMDB API </div>
        <div>Mihir Sidhdhapura</div>
        <div>College Project</div>
    </div>
    <script src='src/js/main.js'></script>

</body>
</html>