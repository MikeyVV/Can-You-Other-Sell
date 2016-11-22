<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script>
    $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/bin/ctrl.php",
        {
            function: "getRecentProduct"
        }
        , function (data, status) {
            if (status === "success") {
                data = JSON.parse(data);
                //alert(data.lists[0].price);
                var nf = new Intl.NumberFormat();

                 for (var i = 0; i < 4; i++) {
                    $("#use").append("<div class='col-sm-3'><div class='thumbnail'><div class='popular-product-img-thumbnail'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><img src='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/" + data.lists[i].nameImage + "'></a></div><div class='caption'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><p>" + data.lists[i].name + "</p></a><p>ราคา " + nf.format(data.lists[i].price) + " บาท</p><p>" + data.lists[i].address + "</p></div></div></div>");
                 }
                for (var i = 4; i < 9; i++) {
                    $("#use1").append("<div class='col-sm-3'><div class='thumbnail'><div class='popular-product-img-thumbnail'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><img src='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/" + data.lists[i].nameImage + "'></a></div><div class='caption'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><p>" + data.lists[i].name + "</p></a><p>ราคา " + nf.format(data.lists[i].price) + " บาท</p><p>" + data.lists[i].address + "</p></div></div></div>");
                }
            }
        });

</script>
<body>
<div class="row" id="use">


</div>

<div class="row" id="use1">


</div>

</body>
</html>