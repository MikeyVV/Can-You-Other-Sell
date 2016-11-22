<?php
$category =  $_GET['category'];
$idCategory =  $_GET['idCategory'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $category;?></title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body class="web-bg">
<input id="idCate" type="hidden" value="<?php echo $idCategory; ?>">
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <?php require("../../bin/logo.php"); ?>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <?php require("../../bin/searchBox.php"); ?>
                    <!--/ช่องค้นหา พร้อมปุ่มกด-->
                </div>
            </div>
            <div class="row">
                <!--ประเภทสินค้ายอดนิยม-->
                <?php //require("../../bin/popularProduct.php"); ?>
                <!--/ประเภทสินค้ายอดนิยม-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <?php require("../../bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
          <!-- ผลการค้นหา -->
          <div class="alert alert-info">
            <?php if($category == "ยานพาหนะ") {?>
              <i class="fa fa-car" aria-hidden="true"></i>
            <?php }
          else if($category == "เครื่องใช้ไฟฟ้า") {?>
              <i class="fa fa-plug" aria-hidden="true"></i>
            <?php }
            else if($category == "นาฬิกา") {?>
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              <?php }
              else if($category == "แว่นตา") {?>
                <i class="fa fa-eye" aria-hidden="true"></i>
              <?php }
              else if($category == "โทรศัพท์") {?>
                <i class="fa fa-mobile" aria-hidden="true"></i>
              <?php }
              else if($category == "เสื้อผ้า") {?>
                <i class="fa fa-shirtsinbulk" aria-hidden="true"></i>
              <?php }
              else if($category == "เฟอร์นิเจอร์") {?>
                <i class="fa fa-beer" aria-hidden="true"></i>
              <?php }
              else if($category == "กระเป๋า") {?>
                <i class="fa fa-suitcase" aria-hidden="true"></i>
              <?php }
              else if($category == "จักรยาน") {?>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
              <?php }
              else if($category == "หนังสือ") {?>
                <i class="fa fa-book" aria-hidden="true"></i>
              <?php }
              ?>
            &nbsp&nbsp<strong><?php echo $category;?></strong>
          </div>
          <div class="row">
            <?php if(preg_match("/(".$category.")+/i", "iPhone SE 64GB สี white Gold") || preg_match("/(".$category.")+/i", "โทรศัพท์")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                <a href="#"><img src="http://www.thaimobilecenter.com/home/img_stock/2016322_45462.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>iPhone SE 64GB สี white Gold</p></a>
                  <p>ราคา 16,000 บาท</p>
                  <p>พระนคร, กรุงเทพฯ</p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "เก้าอี้งานวัด สีแดง")|| preg_match("/(".$category.")+/i", "เฟอร์นิเจอร์")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://www.tanasiri.com/product/images_chair/45.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>เก้าอี้งานวัด สีแดง</p></a>
                  <p>ราคา 500 บาท</p>
                  <p>บางแสน, ชลบุรี</p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "เครื่องซักผ้าชนิดถังเดียว")|| preg_match("/(".$category.")+/i", "เครื่องใช้ไฟฟ้า")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://g.lnwfile.com/_/g/_raw/is/io/0u.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>เครื่องซักผ้าชนิดถังเดียว</p></a>
                  <p>ราคา 20,000 บาท</p>
                  <p>บางละมุง, ชลบุรี</p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "เดรส sheer sleeve cut midi skirt")|| preg_match("/(".$category.")+/i", "เสื้อผ้า")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://th-live-02.slatic.net/p/edrs-sheer-sleeve-cut-midi-skirt-4574-3598457-2c036a874c16cf2b1ce7988bd8794440-webp-catalog_233.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>เดรส sheer sleeve cut midi skirt</p></a>
                  <p>ราคา 199 บาท</p>
                  <p>พัทยา, ชลบุรี</p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="row">
            <?php if(preg_match("/(".$category.")+/i", "จักรยานเสือภูเขา")|| preg_match("/(".$category.")+/i", "จักรยาน")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
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
            <?php } ?>
              <?php if(preg_match("/(".$category.")+/i", "Harry Potter and the Cursed Child - Parts One & Two (Special Rehearsal Edition) : The Official Script Book of the Original West End Production -- Hard [Hardcover]")|| preg_match("/(".$category.")+/i", "หนังสือ")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
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
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "Marino กระเป๋า กระเป๋าสะพาย กระเป๋าสะพายผู้หญิง ผ้าแคนวาส No. 0168 - Rianbow")|| preg_match("/(".$category.")+/i", "กระเป๋า")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://th-live-03.slatic.net/p/marino-kraepaa-kraepaasaphaay-kraepaasaphaayphuuhying-phaaaekhnwaas-no-0168-rianbow-0688-7116656-0ee5efc3e7a254ba94eb366c5708ebb1-webp-zoom_850x850.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>Marino กระเป๋า กระเป๋าสะพาย กระเป๋าสะพายผู้หญิง ผ้าแคนวาส No. 0168 - Rianbow</p></a>
                  <p>ราคา 355 บาท</p>
                  <p>พัทยา, ชลบุรี</p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "OTTO หม้ออบลมร้อนโถแก้ว รุ่นCO-705 ขนาด 12ลิตร")|| preg_match("/(".$category.")+/i", "เครื่องใช้ไฟฟ้า")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://th-live-02.slatic.net/p/otto-hm-blmr-nothaekw-runco-705-khnaad-12litr-7119-944631-1-webp-zoom.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>OTTO หม้ออบลมร้อนโถแก้ว รุ่นCO-705 ขนาด 12ลิตร</p></a>
                  <p>ราคา 990 บาท</p>
                  <p>พัทยา, ชลบุรี</p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="row">
            <?php if(preg_match("/(".$category.")+/i", "รถยนต์ฮอนด้า")|| preg_match("/(".$category.")+/i", "ยานพาหนะ")) { $found = true;?>
              <div class="col-sm-3">
                <div class="thumbnail popular-product">
                  <div class="thumbnail popular-product-img-thumbnail">
                    <a href="#"><img src="http://www.carbatterymp.com/wp-content/uploads/2015/05/Honda-Accord-Battery.jpg"></a>
                    </div>
                  <div class="caption">
                    <a href="#"><p>รถยนต์ฮอนด้า</p></a>
                    <p>ราคา 6,000,000 บาท</p>
                    <p>พัทยา, ชลบุรี</p>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "นาฬิกา TAG")|| preg_match("/(".$category.")+/i", "นาฬิกา")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://cp.lnwfile.com/_/cp/_raw/zt/86/7g.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>นาฬิกา TAG</p></a>
                  <p>ราคา 20,000 บาท</p>
                  <p>หัวหิน, ประจวบคีรีขันี</p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "ตู้เย็นโตชิบา")|| preg_match("/(".$category.")+/i", "เครื่องใช้ไฟฟ้า")) { $found = true;?>
              <div class="col-sm-3">
                <div class="thumbnail popular-product">
                  <div class="thumbnail popular-product-img-thumbnail">
                    <a href="#"><img src="http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg"></a>
                    </div>
                  <div class="caption">
                    <a href="#"><p>ตู้เย็นโตชิบา</p></a>
                    <p>ราคา 4,000 บาท</p>
                    <p>พัทยา, ชลบุรี</p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="row">
            <?php if(preg_match("/(".$category.")+/i", "รถไฟไทย สไตล์วินเทจ")|| preg_match("/(".$category.")+/i", "ยานพาหนะ")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php"><img src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"></a>
                  </div>
                <div class="caption">
                  <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php"><p>รถไฟไทย สไตล์วินเทจ</p></a>
                  <p>ราคา 200,000,000 บาท</p>
                  <p>มักกะสัน, กรุงเทพฯ</p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if(preg_match("/(".$category.")+/i", "ตู้เสื้อผ้าสีขาว")|| preg_match("/(".$category.")+/i", "เฟอร์นิเจอร์")) { $found = true;?>
            <div class="col-sm-3">
              <div class="thumbnail popular-product">
                <div class="thumbnail popular-product-img-thumbnail">
                  <a href="#"><img src="http://www.ikea.com/PIAimages/0378764_PE554707_S3.JPG"></a>
                  </div>
                <div class="caption">
                  <a href="#"><p>ตู้เสื้อผ้าสีขาว</p></a>
                  <p>ราคา 7,500 บาท</p>
                  <p>พัทยา, ชลบุรี</p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <?php if(!$found) { ?>
            <div class="jumbotron">
              <h1>ขอโทษที T_T</h1>
              <p>ยังไม่มีประกาศขายสินค้าประเภทนี้ คุณสามารถลงประกาศได้ที่ หน้าสมาชิก > จัดการขายสินค้า > ประกาศขายสินค้า</p>
            </div>
          <?php } ?>
          <!-- /ผลการค้นหา -->
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require("../../bin/recommendProduct.php"); ?>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <?php require("../../bin/footer.php"); ?>
</body>
</html>

