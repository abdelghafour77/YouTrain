function redirect()
{
        window.location.href = 'http://www.google.com'; 
}

function addCity(){
        document.getElementById('city-save-btn').style.display   = "block";
        document.getElementById('city-update-btn').style.display = "none";

        document.getElementById('form-city').reset();
}

function displayBottom(){
        document.getElementById('city-save-btn').style.display   = "none";
        document.getElementById('city-update-btn').style.display = "block";
}

function editCity(id){
        displayBottom();
        document.getElementById("city-id").value = id;
        document.getElementById('city-name').value = document.getElementById(id).getAttribute("city");
}

function editStation(id){
        displayBottom();
        document.getElementById("station-id").value = id;
        document.getElementById('station-name').value = document.getElementById(id).getAttribute("station");
        document.getElementById('station-address').value = document.getElementById(id).getAttribute("address");
        document.getElementById('station-capacity').value = document.getElementById(id).getAttribute("capacity");
        document.getElementById('station-city').value = document.getElementById(id).getAttribute("city");
}

function editTrain(id){
        displayBottom();
        document.getElementById("train-id").value = id;
        document.getElementById('train-name').value = document.getElementById(id).getAttribute("train");
        document.getElementById('train-capacity').value = document.getElementById(id).getAttribute("capacity");
        document.getElementById('train-type').value = document.getElementById(id).getAttribute("type");
}

function editTravel(id){
        displayBottom();
        document.getElementById("travel-id").value = id;
        document.getElementById('travel-time').value = document.getElementById(id).getAttribute("time");
        document.getElementById('travel-price').value = document.getElementById(id).getAttribute("price");
        document.getElementById('end').value = document.getElementById(id).getAttribute("end");
        document.getElementById('travel-start').value = document.getElementById(id).getAttribute("start");
        document.getElementById('date').value = document.getElementById(id).getAttribute("date");
        document.getElementById('train').value = document.getElementById(id).getAttribute("train");
}


