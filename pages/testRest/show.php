<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
    <!-- jQuery library -->
    <script src="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/js/jquery.min.js"></script>
</head>
<body>

<div>
    <p id="name"></p>
    <div id="img"></div>
</div>

<script>
        $.post("callRest.php",
            {
                idPost: <?php echo $_GET['idPost'] ?>
            }
            , function (data, status) {
                if (status === "success") {
                    data = JSON.parse(data);
                    $("#name").html(data.detail.name);
                    for (var i = 0; i < data.image.length; i++)
                        $("#img").append("<img src='" + data.image[i].nameImage + "'>");
                }
            });

</script>
</body>
</html>
