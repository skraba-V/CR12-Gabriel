document.getElementById("content").addEventListener("click", getTravel, false)

function getTravel() {
    const request = new XMLHttpRequest();
    request.open("GET", "../displayAll.php", true);
    request.onload = function () {
        if (this.status == 200) {
            let travel = JSON.parse(this.responseText);
            console.log(travel.data);
            let output = '<h1 class="text-center text-primary">Travell</h1><div class="row row-col-12 justify-content-center" >';
            for (let result of travel.data) { 
                output += "<div class='card text-center col-3' style='width: 18rem;'><img src='../pictures/"+result.picture+"' class='card-img-top'><div class='card-body'><h5 class='card-title text-center'>"+result.locationName+"</h5><p class='text-center'>"+result.date_go+"</p><p class='text-center'>"+result.date_back+"</p><p class='text-center'>"+result.continent+"</p><p class='text-center'>"+result.country+"</p><p class='text-center'>"+result.price+"</p><p class='text-center'>"+result.longitude+"</p><p class='text-center'>"+result.latitude+"</p><p class='card-text'>"+result.description+"</p></div></div>";
                console.log(output);
            }
            output +="</div>";
            document.getElementById("content").innerHTML = output;
        }
    }
    request.send(); 
}