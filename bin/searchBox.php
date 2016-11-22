<!-- form method="get" action="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/search/">
  <div class="input-group">
      <input type="text" class="form-control" name="keyword" placeholder="ค้นหาชื่อ หรือประเภทของประกาศสินค้า...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">ค้นหา</button>
                        </span>
  </div>
</form-->
<html>
<head>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            BindControls();
        });

        function BindControls() {
            $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/search/callSearch.php",
                {

                }
                , function (data, status) {
                    if (status === "success") {
                        data = JSON.parse(data);
                        var Countries = [];
                        for (var i = 0; i < data.detail.length; i++) {
                            Countries.push(data.detail[i].searchKeyword);
                        }
                        console.log(Countries);
                        $('#keyword').autocomplete({
                            source: Countries,
                            minLength: 0,
                            scroll: true
                        }).focus(function() {
                            $(this).autocomplete("search", "");
                        });
                    }
                });



        }
    </script>
</head>
<body>
<form class="search" method="get"
      action="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/search/">
    <input type="text" name="keyword" id="keyword" autocomplete="off"
           placeholder="ค้นหาชื่อ หรือประเภทของประกาศสินค้า..."/>

</form>
</body>
</html>