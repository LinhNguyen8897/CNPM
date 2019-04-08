 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ hệ thống</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/Lien_he.css">
</head>

<body>
<!--------------
   header 
---------------->

<?php
require 'Header.php';
?>

<!----------------
      map 
------------------>
<div id="map" style="width: auto;
"></div>
<script>
function initMap() {
  var mapDiv = document.getElementById('map');
  var map = new google.maps.Map(mapDiv, {
    center: {lat: 44.540, lng: -78.546},
    zoom: 8
  });
}
</script>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30238.687848210695!2d105.66957228673297!3d18.671354788549706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyB2aW5oIC0gdGjDoG5oIHBo4buRIHZpbmg!5e0!3m2!1svi!2s!4v1544544111813" width="1349px" height="600" frameborder="0" style="border:0 ;" allowfullscreen ></iframe> 

<!----------------
        main 
----------------->

 <div id="main_column" style="background: white" >
        <div class="container">
            <div class="row">
                <div class="center_column col-sm-9 col-md-9" id="center_column">
                    <div class="box_items clearfix">
                        <div class="news_header page_subheading">
                            <h3>
                                <a href="/lien-he.html">
                                    <span>Liên hệ</span> 
                                </a>
                            </h3>
                        </div><!-- news_header page_subheading -->
                        <div id="Main1_ctl00_pnlData">
                            <h2 class="post-title">Thông tin liên hệ</h2>
                            <div class="frm-contact clearfix">
                                <p>Quý khách vui lòng điền thông tin theo mẫu form dưới đây để liên hệ với chúng tôi:</p>
                                <div id="Main1_ctl00_valSumOrder" class="panel-summary" style="color:Red;display:none;">
                                    
                                </div><!-- Main1_ctl00_valSumOrder -->
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <ul>
                                            <li>
                                                <span id="Main1_ctl00_lblFullName" class="label">Họ và tên: </span><input name="Main1$ctl00$txtFullName" type="text" id="Main1_ctl00_txtFullName" class="input-large"><span id="Main1_ctl00_rqfValFullName" style="color:Red;display:none;">(*)</span>
                                            </li>
                                            <li>
                                                <span id="Main1_ctl00_lblAddress" class="label">Địa chỉ: </span><input name="Main1$ctl00$txtAddress" type="text" id="Main1_ctl00_txtAddress" class="input-large"></li>
                                            <li>
                                                <span id="Main1_ctl00_lblEmail" class="label">Email: </span><input name="Main1$ctl00$txtEmail" type="text" id="Main1_ctl00_txtEmail" class="input-large"><span id="Main1_ctl00_rqfValEmail" style="color:Red;display:none;">(*)</span><span id="Main1_ctl00_revEmail" style="color:Red;display:none;">(*)</span>
                                            </li>
                                            <li>
                                                <span id="Main1_ctl00_lblTel" class="label">Số điện thoại: </span><input name="Main1$ctl00$txtTel" type="text" id="Main1_ctl00_txtTel" class="input-large"></li>
                                         </ul>
                                    </div><!-- col-xs-12 col-sm-6 col-md-6 -->
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <ul>
                                            <li>
                                                <span id="Main1_ctl00_lblSubject" class="label">Tiêu đề: </span><input name="Main1$ctl00$txtSubject" type="text" id="Main1_ctl00_txtSubject" class="input-large"></li>
                                            <li>
                                                <span id="Main1_ctl00_lblContent" class="label">Yêu cầu: </span><grammarly-ghost spellcheck="false"><div data-id="7f41ef3f-aa3f-33dd-909a-7eef5146f8dd" data-gramm_id="7f41ef3f-aa3f-33dd-909a-7eef5146f8dd" data-gramm="gramm" data-gramm_editor="true" class="gr_ver_2" gramm="true" contenteditable="true" style="position: absolute; color: transparent; overflow: hidden; white-space: pre-wrap; border-radius: 0px; box-sizing: border-box; height: 144px; width: 408.75px; margin: 79px 0px 0px 15px; padding: 2px; z-index: 0; border-width: 1px; border-style: solid; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0); top: 0px; left: 0px;"><span style="display: inline-block; font: 400 13px/18.5714px &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color: transparent; overflow: hidden; text-align: left; float: initial; clear: none; box-sizing: border-box; vertical-align: baseline; white-space: pre-wrap; width: 100%; margin: 0px; padding: 0px; border: 0px; letter-spacing: normal; text-shadow: none; height: 142px;"></span><br></div></grammarly-ghost><textarea name="Main1$ctl00$txtContent" rows="2" cols="20" id="Main1_ctl00_txtContent" class="area-xlarge" data-gramm="true" data-txt_gramm_id="7f41ef3f-aa3f-33dd-909a-7eef5146f8dd" data-gramm_id="7f41ef3f-aa3f-33dd-909a-7eef5146f8dd" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 18.5714px; font-size: 13px; transition: none 0s ease 0s; background: transparent !important;"></textarea><grammarly-btn><div class="_1BN1N Kzi1t _2DJZN" style="z-index: 2; transform: translate(392.75px, 192.078px);"><div class="_1HjH7"><div title="Protected by Grammarly" class="_3qe6h">&nbsp;</div></div></div></grammarly-btn></li>
                                                <li>
                                                <input type="submit" name="Main1$ctl00$btnSend" value="Gửi đi"  id="Main1_ctl00_btnSend" class="bgr-button"><input type="submit" name="Main1$ctl00$btlCancel" value="Soạn lại"  id="Main1_ctl00_btlCancel" class="bgr-button">
                                            </li>   
                                        </ul>
                                    </div><!-- col-xs-12 col-sm-6 col-md-6 -->
                                </div><!-- row -->
                            </div><!-- frm-contact clearfix -->
                        </div><!-- Main1_ctl00_pnlData -->
                    </div><!-- box_items clearfix -->
                </div><!-- center_column -->
            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- main_column --> 

<!----------------
       footer    
------------------>
<?php
require 'Footer.php';
?>
</body>

</html>