<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/data.css">
   
</head>
<body>
    <div class='movieContainer'>
<?php
    $title = $_GET["title"];
    $titles = str_replace(" ","+",$title);
    if($title == null){
        echo "please enter the movie name please";
    }
    else{
        $url = "http://www.omdbapi.com/?s=".$titles."&apikey=9a01b829";
        $data = file_get_contents($url);
        $jsonData = json_decode($data, TRUE);
        foreach($jsonData['Search'] as $movie){
            $ti = $movie['Title'];
            $imgSrc = $movie['Poster'];
            $year = $movie['Year'];
            $id = $movie['imdbID'];
            ?>
                <div class='movieCard'>
                    <img src="<?php echo $imgSrc; ?>" alt="img">
                    <span>
                        <h2> <?php echo $ti; ?> </h2>
                        <p> <?php echo $year;?></p>
                        <a href="movie.php?movieID=<?php echo $id;?>">More Info</a>
                    </span>
     
                </div>
            
            <?php
   
        }

    }

?>
    </div>  

</body>
</html>

