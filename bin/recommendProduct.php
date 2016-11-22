<div class="panel panel-default">
  <div class="panel-heading">
    <i class="fa fa-thumbs-up" aria-hidden="true"></i>&nbsp&nbsp<b>สินค้าแนะนำ</b>
  </div>
  <div class="panel-body">
    <div style="text-align:center" class="list-group" id="recommend-list"></div>
  </div>
</div>

<script>
    $(document).ready(function () {
        $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/bin/ctrl.php",
            {
                function: "getAd"
            }
            , function (data, status) {

                if (status === "success") {
                    data = JSON.parse(data);
                    //alert("โฟมแก้ Ad อยู่");
                    //alert("โฟมแก้ Ad อยู่"+data.lists[0].adName);
                    var nf = new Intl.NumberFormat();
                    for (var i = 0; i < data.lists.length; i++) {
                        $("#recommend-list").append("<div><div class='thumbnail popular-product-img-thumbnail'><a href='"+data.lists[i].adURL+"'><img src='"+data.lists[i].adImg+"'></a></div><a href='"+data.lists[i].adURL+"'><p>"+data.lists[i].adName+"</p></a><p>ราคา "+nf.format(data.lists[i].adPrice)+" บาท</p><p>"+data.lists[i].adLoction+"</p></div>");
                        if(i < data.lists.length-1)$("#recommend-list").append("<hr>");
                    }

                } else {
                    alert("fail");
                }
            });
    });
</script>