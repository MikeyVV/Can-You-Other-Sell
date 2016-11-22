<div class="col-sm-8">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <i class="fa fa-fire" aria-hidden="true"></i>&nbsp&nbspสินค้ายอดนิยม
        </div>
        <div class="panel-body">
            <div class="row">

                <div id="popular-list"></div>

<!--                <div class="col-sm-3">-->
<!--                    <div class="thumbnail popular-product">-->
<!--                        <div class="thumbnail popular-product-img-thumbnail">-->
<!--                            <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=1"><img-->
<!--                                    src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="caption">-->
<!--                            <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=1">-->
<!--                                <p>รถไฟไทย สไตล์วินเทจ</p></a>-->
<!--                            <p>ราคา 200,000,000 บาท</p>-->
<!--                            <p>มักกะสัน, กรุงเทพฯ</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-3">-->
<!--                    <div class="thumbnail popular-product">-->
<!--                        <div class="thumbnail popular-product-img-thumbnail">-->
<!--                            <a href="#"><img-->
<!--                                    src="http://www.carbatterymp.com/wp-content/uploads/2015/05/Honda-Accord-Battery.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="caption">-->
<!--                            <a href="#"><p>รถยนต์ฮอนด้า</p></a>-->
<!--                            <p>ราคา 6,000,000 บาท</p>-->
<!--                            <p>พัทยา, ชลบุรี</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-3">-->
<!--                    <div class="thumbnail popular-product">-->
<!--                        <div class="thumbnail popular-product-img-thumbnail">-->
<!--                            <a href="#"><img src="http://cp.lnwfile.com/_/cp/_raw/zt/86/7g.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="caption">-->
<!--                            <a href="#"><p>นาฬิกา TAG</p></a>-->
<!--                            <p>ราคา 20,000 บาท</p>-->
<!--                            <p>หัวหิน, ประจวบคีรีขันี</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-3">-->
<!--                    <div class="thumbnail popular-product">-->
<!--                        <div class="thumbnail popular-product-img-thumbnail">-->
<!--                            <a href="#"><img-->
<!--                                    src="http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="caption">-->
<!--                            <a href="#"><p>ตู้เย็นโตชิบา</p></a>-->
<!--                            <p>ราคา 4,000 บาท</p>-->
<!--                            <p>พัทยา, ชลบุรี</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
        </div>
    </div>
    <hr>
    <script>
        var nf = new Intl.NumberFormat();
        $(document).ready(function () {
            $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/bin/ctrl.php",
                {
                    function: "getTopFour"
                }
                , function (data, status) {

                    if (status === "success") {
                        data = JSON.parse(data);
                        for (var i = 0; i < data.lists.length; i++) {
                            alert(data.lists.length);
                            $("#popular-list").append("<div class='col-sm-3'> <div class='thumbnail popular-product'><div class='thumbnail popular-product-img-thumbnail'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><img src='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/"+data.lists[i].nameImage+"'></a></div><div class='caption'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><p>"+data.lists[i].name+"</p></a><p>ราคา "+nf.format(data.lists[i].price)+" บาท</p><p>"+data.lists[i].address+"</p></div></div></div>");
                        }

                    } else {
                        alert("fail");
                    }
                });
        });
    </script>