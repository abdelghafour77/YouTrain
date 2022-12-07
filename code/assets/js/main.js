function redirect()
{
        window.location.href = 'http://www.google.com'; 
}

function addCity(){
        document.getElementById('city-save-btn').style.display   = "block";
        document.getElementById('city-update-btn').style.display = "none";
        document.getElementById('city-delete-btn').style.display = "none";

        document.getElementById('form-city').reset();
}

function editCity(){
        document.getElementById('city-save-btn').style.display   = "none";
        document.getElementById('city-update-btn').style.display = "block";
        document.getElementById('city-delete-btn').style.display = "none";
}

function deleteCity(){
        document.getElementById('city-save-btn').style.display   = "none";
        document.getElementById('city-update-btn').style.display = "none";
        document.getElementById('city-delete-btn').style.display = "block";
}