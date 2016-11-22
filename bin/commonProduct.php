<?php


require("classes/PostProduct.php");

$detail = new PostProduct();

$out = json_decode($detail->getRecentProduct(8));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="row">
    <?php for ($i = 0; $i < count($out->lists); $i++) { ?>
    <div class="col-sm-3">
        <div class="thumbnail">
            <div class="thumbnail popular-product-img-thumbnail">
                <div id="img"><img src="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/<?php echo $out->lists[$i]->nameImage ?>" style="width:100px;height:100px;"></div>
            </div>
            <div class="caption">
                <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=<?php echo $out->lists[$i]->idPost ?>"><p><?php echo $out->lists[$i]->name ?></p></a>
                <p><?php echo $out->lists[$i]->price ?></p>
                <p><?php echo $out->lists[$i]->address ?></p>
            </div>
        </div>
    </div>
        <?php
    }
    ?>
</div>
<div class="row">

    <div class="col-sm-3">
        <div class="thumbnail">
            <div class="thumbnail popular-product-img-thumbnail">
                <a href="#"><img src="http://f.lnwfile.com/_/f/_raw/lx/67/8r.jpg"></a>
            </div>
            <div class="caption">
                <a href="#"><p>จักรยานเสือภูเขา</p></a>
                <p>ราคา 7,500 บาท</p>
                <p>หาดใหญ่, สงขลา</p>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="thumbnail">
            <div class="thumbnail popular-product-img-thumbnail">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/en/f/fe/Harry_Potter_and_the_Cursed_Child_Special_Rehearsal_Edition_Book_Cover.jpg"></a>
            </div>
            <div class="caption">
                <a href="#"><p>Harry Potter and the Cursed Child - Parts One & Two (Special Rehearsal Edition) : The Official Script Book of the Original West End Production -- Hard [Hardcover]</p></a>
                <p>ราคา 639 บาท</p>
                <p>สาทร, กรุงเทพฯ</p>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="thumbnail">
            <div class="thumbnail popular-product-img-thumbnail">
                <a href="#"><img src="http://th-live-03.slatic.net/p/marino-kraepaa-kraepaasaphaay-kraepaasaphaayphuuhying-phaaaekhnwaas-no-0168-rianbow-0688-7116656-0ee5efc3e7a254ba94eb366c5708ebb1-webp-zoom_850x850.jpg"></a>
            </div>
            <div class="caption">
                <a href="#"><p>Marino กระเป๋า กระเป๋าสะพาย กระเป๋าสะพายผู้หญิง ผ้าแคนวาส No. 0168 - Rianbow  </p></a>
                <p>ราคา 355 บาท</p>
                <p>พัทยา, ชลบุรี</p>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="thumbnail">
            <div class="thumbnail popular-product-img-thumbnail">
                <a href="#"><img src="http://th-live-02.slatic.net/p/otto-hm-blmr-nothaekw-runco-705-khnaad-12litr-7119-944631-1-webp-zoom.jpg"></a>
            </div>
            <div class="caption">
                <a href="#"><p>OTTO หม้ออบลมร้อนโถแก้ว รุ่นCO-705 ขนาด 12ลิตร  </p></a>
                <p>ราคา 990 บาท</p>
                <p>พัทยา, ชลบุรี</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>