'use strict';

let button = document.getElementById("searchButton");
let movieData = document.getElementById("movieData");



let but = () => {
    let title = document.getElementById("searchInput").value;
 
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "data.php?title="+ title, true);
    xhttp.onreadystatechange = () => {
        movieData.innerHTML = xhttp.responseText;
    } 

    xhttp.send();


}