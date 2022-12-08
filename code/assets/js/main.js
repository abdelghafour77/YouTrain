function redirect()
{
        window.location.href = 'http://www.google.com'; 
}

function addCity(){
        document.getElementById('city-save-btn').style.display   = "block";
        document.getElementById('city-update-btn').style.display = "none";

        document.getElementById('form-city').reset();
}

function editCity(id){
        document.getElementById('city-save-btn').style.display   = "none";
        document.getElementById('city-update-btn').style.display = "block";

        document.getElementById("city-id").value = id;

        document.getElementById('city-name').value = document.getElementById(id).getAttribute("city");

}

