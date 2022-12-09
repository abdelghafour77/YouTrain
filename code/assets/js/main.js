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

