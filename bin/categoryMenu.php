<div class="panel-group">
  <div class="panel panel-info">
    <div class="panel-heading"><b>Category</b></div>
      <div class="list-group" id="category-list-menu">
      </div>
  </div>
</div>

<script>
    $(document).ready(function () {
        $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/bin/ctrl.php",
            {
                function: "getCategory"
            }
            , function (data, status) {

                if (status === "success") {
                    data = JSON.parse(data);
                    
                    for (var i = 0; i < data.lists.length; i++) {
                        $("#category-list-menu").append("<a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/category/?category="+data.lists[i].nameCategory+"' class='list-group-item'>&nbsp&nbsp"+data.lists[i].nameCategory+"</a>");
                    }

                } else {
                    alert("fail");
                }
            });
    });
</script>