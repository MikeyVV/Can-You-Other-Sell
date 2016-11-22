<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการขายสินค้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>

<style>
select {
    width: 100%;
    padding: 5px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
</style>
<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?><!--/แถบบาร์ข้างบน Navbar-->

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
          <!--ทำงานที่นี่ ทำงานที่นี่    ทำงานที่นี่ ทำงานที่นี่-->

              <div class="box-header with-border">
                <h3 class="box-title">จัดการขายสินค้า&nbsp;&nbsp;<span style="font-size: 15px; color: red;">** เมื่อเปลี่ยนสถานะสินค้าเป็น "ขายแล้ว" จะไม่สามารถเปลี่ยนแปลงสถานะสินค้าได้อีก **</span></h3>

                <div class="box-tools pull-right">
                  <div class="has-feedback">

                  </div>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-controls">




                  <div class="btn-group">
                    <form>
    <select id="status" name="status" >
        <option value="none">---- แก้ไขสถานะ ----</option>
        <option value="1">ประกาศขาย</option>
        <option value="2">สินค้าหมด</option>
        <option value="0">ยกเลิกการขาย</option>
        <option value="3">ขายแล้ว</option>
    </select>
  </form>
                  </div>

                  <div class="pull-right">

                    1-50/200
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                    </div><!-- /.btn-group -->
                    <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/new/form_post.php" class="btn btn-default" role="button"">ประกาศขายสินค้า</a>
                  </div><!-- /.pull-right -->
                </div>
                <br>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                      <thead>
                      <!-- Check all button -->
                      <th><input type="checkbox" id="select_all" class="checkbox" /></th>
                      <th></th>
                      <th class="mailbox-name">วัน/เดือน/ปี</a>&nbsp<i class="fa fa-fw fa-sort-down"></i></th>
                      <th class="mailbox-subject"><b>ชื่อประกาศ</b>&nbsp<i class="fa fa-fw fa-sort-down"></i> </th>
                      <th class="mailbox-attachment">ประเภทของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></th>
                      <th class="mailbox-date">ราคาของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></th>
                      <th class="mailbox-date">สถานะ&nbsp<i class="fa fa-fw fa-sort-down"></i></th>
                      <th class="mailbox-date">แก้ไข</th>
                      </thead>
                    <tbody id="table">
                    </tbody>
                  </table><!-- /.table -->
                </div><!-- /.mail-box-messages -->
              </div><!-- /.box-body -->
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->

                  <div class="pull-right">
                    1-50/200
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                    </div><!-- /.btn-group -->
                  </div><!-- /.pull-right -->
                </div>
              </div>

          </div>

        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <div class="panel panel-default">
  <div class="panel-heading">
    <b>สินค้าแนะนำ</b>
  </div>
  <div class="panel-body">
    <div style="text-align:center" class="list-group">
        <img
            src="http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg"
            class="recommend-product img-thumbnail">
        <a href="#"><p>ตู้เย็นโตชิบา</p></a>
        <p>ราคา 4,000 บาท</p>
        <p>พัทยา, ชลบุรี</p>
        <img src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"
             class="recommend-product img-thumbnail">
        <a href="#"><p>รถไฟไทย สไตล์วินเทจ</p></a>
        <p>ราคา 120,000,000 บาท</p>
        <p>มักกะสัน, กรุงเทพฯ</p>
        <img src="http://cp.lnwfile.com/_/cp/_raw/zt/86/7g.jpg" class="recommend-product img-thumbnail">
        <a href="#"><p>นาฬิกา TAG</p></a>
        <p>ราคา 20,000 บาท</p>
        <p>หัวหิน, ประจวบคีรีขัน</p>
    </div>
    </div>
</div>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <footer class="page-footer center-on-small-only ">
  <div class="container">
    <div class="row">
        <hr>
      <div class="col-md-4">
      Copyright&nbsp&copy;&nbsp2559&nbspCYOS&nbspCorporation<br>
      About Us<br>
      Contact 088-345-5511
      </div>
      </div>
  </div>
</footer>

</body>

<script type="text/javascript">
    $(document).ready(function(){

        loadTable();

        $("#status").hide();

        function loadTable() {
            var idMember = "<?php echo $_SESSION['idMember']; ?>";

            $.post("ctrl.php",
                {
                    function: "showProductList",
                    idMember: idMember
                }
                , function (data, status) {
                    data = JSON.parse(data);
                    if (status === "success"){
                        for (var i = 0; i < data.lists.length; i++){
                            var statusName = "";
                            if(data.lists[i].status == 0)statusName = "ยกเลิกการขาย";
                            else if(data.lists[i].status == 1)statusName = "ประกาศขาย";
                            else if(data.lists[i].status == 2)statusName = "สินค้าหมด";
                            else if(data.lists[i].status == 3)statusName = "ขายแล้ว";

                            if(data.lists[i].status == 3){
                                $('#table').append("<tr><td><td><td class='mailbox-name'>"+data.lists[i].DATE+"</td><td class='mailbox-subject'><a href='../post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'>"+data.lists[i].name+"</a></td> <td class='mailbox-attachment'>"+data.lists[i].nameCategory+"</td> <td class='mailbox-date'>"+data.lists[i].price+"</td> <td class='mailbox-date'>"+statusName+"</td> <td><a href='../post/edit/form_edit.php?idPost="+data.lists[i].idPost+"' class='btn btn-warning'><i class='fa fa-edit'></i></a></td> </tr>");
                            }else{
                                $('#table').append("<tr><td><input type='checkbox' class='checkbox'  name='checkbox' value='"+data.lists[i].idPost+"' /><td><td class='mailbox-name'>"+data.lists[i].DATE+"</td><td class='mailbox-subject'><a href='../post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'>"+data.lists[i].name+"</a></td> <td class='mailbox-attachment'>"+data.lists[i].nameCategory+"</td> <td class='mailbox-date'>"+data.lists[i].price+"</td> <td class='mailbox-date'>"+statusName+"</td> <td><a href='../post/edit/form_edit.php?idPost="+data.lists[i].idPost+"' class='btn btn-warning'><i class='fa fa-edit'></i></a></td> </tr>");
                            }
                        }
                    }else{
                        alert("fail");
                    }
                });
        }


        function refreshTable() {
            var idMember = "<?php echo $_SESSION['idMember']; ?>";

            $.post("ctrl.php",
                {
                    function: "showProductList",
                    idMember: idMember
                }
                , function (data, status) {
                    data = JSON.parse(data);
                    if (status === "success"){
                        $('#table').html("");
                        for (var i = 0; i < data.lists.length; i++){
                            var statusName = "";
                            if(data.lists[i].status == 0)statusName = "ยกเลิกการขาย";
                            else if(data.lists[i].status == 1)statusName = "ประกาศขาย";
                            else if(data.lists[i].status == 2)statusName = "สินค้าหมด";
                            else if(data.lists[i].status == 3)statusName = "ขายแล้ว";

                            if(data.lists[i].status == 3){
                                $('#table').append("<tr><td><td><td class='mailbox-name'>"+data.lists[i].DATE+"</td><td class='mailbox-subject'><a href='../post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'>"+data.lists[i].name+"</a></td> <td class='mailbox-attachment'>"+data.lists[i].nameCategory+"</td> <td class='mailbox-date'>"+data.lists[i].price+"</td> <td class='mailbox-date'>"+statusName+"</td> <td><a href='../post/edit/form_edit.php?idPost="+data.lists[i].idPost+"' class='btn btn-warning'><i class='fa fa-edit'></i></a></td> </tr>");
                            }else{
                                $('#table').append("<tr><td><input type='checkbox' class='checkbox'  name='checkbox' value='"+data.lists[i].idPost+"' /><td><td class='mailbox-name'>"+data.lists[i].DATE+"</td><td class='mailbox-subject'><a href='../post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'>"+data.lists[i].name+"</a></td> <td class='mailbox-attachment'>"+data.lists[i].nameCategory+"</td> <td class='mailbox-date'>"+data.lists[i].price+"</td> <td class='mailbox-date'>"+statusName+"</td> <td><a href='../post/edit/form_edit.php?idPost="+data.lists[i].idPost+"' class='btn btn-warning'><i class='fa fa-edit'></i></a></td> </tr>");
                            }
                            //alert("Complete");
                        }
                    }else{
                        alert("fail");
                    }
                    $('#select_all').prop('checked',false);
                });
        }


        $('body').on('click', '.checkbox', function(){
            if( $('.checkbox:checked').length > 0 ) {
                $("#status").show();
                //alert("show");
            } else {
                $("#status").hide();
                //alert("hide");
            }
        });
        $('body').on('click', '#select_all', function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                    $("#status").hide();
                });
            }
        });
        $('body').on('click', '.checkbox', function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });

        $('body').on('change', '#status', function(){
            var selectStatus = $('#status option:selected').val();
            $('input[name="checkbox"]:checked').each(function() {
                //alert(this.value);
                if(selectStatus == "1"){
                    $.post("ctrl.php",
                        {
                            function: "editStatus",
                            idPost: this.value,
                            status: 1
                        }
                        , function (data, status) {
                            if (status != "success") alert("fail");
                            else {
                                refreshTable();
                                $('#status option[value=none]').prop('selected', true);
                                setTimeout(function(){ $("#status").hide(); }, 50);
                            }
                        });
                }else if(selectStatus == "2"){
                    $.post("ctrl.php",
                        {
                            function: "editStatus",
                            idPost: this.value,
                            status: selectStatus
                        }
                        , function (data, status) {
                            if (status != "success") alert("fail");
                            else {
                                refreshTable();
                                $('#status option[value=none]').prop('selected', true);
                                setTimeout(function(){ $("#status").hide(); }, 50);
                            }
                        });
                }else if(selectStatus == "3"){
                    $.post("ctrl.php",
                        {
                            function: "editStatus",
                            idPost: this.value,
                            status: selectStatus
                        }
                        , function (data, status) {
                            if (status != "success") alert("fail");
                            else {
                                refreshTable();
                                $('#status option[value=none]').prop('selected', true);
                                setTimeout(function(){ $("#status").hide(); }, 50);
                            }
                        });
                }else if(selectStatus == "0"){
                    $.post("ctrl.php",
                        {
                            function: "editStatus",
                            idPost: this.value,
                            status: selectStatus
                        }
                        , function (data, status) {
                            if (status != "success") alert("fail");
                            else {
                                refreshTable();
                                $('#status option[value=none]').prop('selected', true);
                                setTimeout(function(){ $("#status").hide(); }, 50);
                            }
                        });
                }
            });

        });
    });
</script>

</html>
