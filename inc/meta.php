<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagadeeswari School of Learning</title>
    <link rel="stylesheet" href="styles/css/edify.css">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/icofont/icofont.min.css">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
</head>

<body onload="show_active_nav()">
    <script>
        const get_data = (file) => {
            const fetched_data = fetch(file).then(response => {
                return response.json();
            }).then(data => {
                return data;
            });
            return fetched_data;
        }
    </script>