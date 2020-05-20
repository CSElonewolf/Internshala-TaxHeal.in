<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hiring Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="text-center">
        <h1>Contact Us</h1>
    </div>
    <!-- address -->
    <div class="card w-50 mx-auto">
        <div class="card-body">
            <h4 class="card-title">Address</h4>
            <p class="card-text">404, 4th-Floor,</p>
            <p class="card-text">Ashoka Bhawan - 93, Nehru Place,</p>
            <p class="card-text">New Delhi, Delhi 110019</p>
        </div>
    </div>
    <div class="w-50 mx-auto mt-5">
        <div id="map"></div>
    </div>

    <!-- footer -->
    <div class="text-center" style="margin-top:10vh;margin-bottom:2vh">
        <a href="index.php">Home</a>
        <span>|</span>
        <a href="login.php">HR Login</a>
    </div>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = { lat: 28.548324, lng: 77.1947033 };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), { zoom: 4, center: uluru });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({ position: uluru, map: map });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKx_FVy46p8gXyCKCD9aFoy31VyqzeEVw
&callback=initMap">
</script>
</body>

</html>