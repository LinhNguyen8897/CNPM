<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Add Course</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            fieldset {margin-bottom: 1em;}
            label {padding-right: 3em;}
        </style>

       
    </head>
    <body>
   <?php
require 'Header.php';
?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row" style="    margin-top: 3em;">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="them_customer" style="   margin-top: 0.1em; float: right;margin-left: 27px;background: white;padding: 12px;" > 
                                        <a href="" style="color: black; text-decoration: none;"><i class="fa fa-arrow-left"></i>Trở về</a> </div>
                                    <div class="them_customer" style="   margin-top: 0.1em; float: right;margin-left: 27px;background: royalblue;padding: 12px;" > 
                                        <a href="" style="color: white; text-decoration: none;"><i class="fa fa-save"></i>Lưu và tiếp tục</a> </div>
                                    <div class="them_customer" style="    margin-top: 0.1em;float: right;padding: 12px;background: royalblue;"> 
                                      <a href="" style="color: white; text-decoration: none;"><i class="fa fa-check"></i>Lưu</a> </div>                               
                                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Sửa khóa học</p>                                  
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <fieldset>
                                            <label>Mã khóa học:</label>
                                            <input type="text" name="tieude" value="" placeholder="Mã khóa học " style="margin-left: 2em;width: 20em;" >
                                        </fieldset>
                                        <fieldset>
                                            <label>Tên khóa học:</label>
                                            <input type="text" name="tieude" value="" placeholder="Tên khóa học" style="    margin-left: 1.6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Giảng viên:</label>
                                            <select style="margin-left: 2.8em;width: 20em;height: 2em;">
                                                <option>Nguyễn Văn A</option>
                                                <option>Nguyễn Văn A</option>
                                                <option>Nguyễn Văn A</option>
                                            </select>
                                        </fieldset>
                                         <fieldset>
                                            <label>Nội dung bài viết:</label>
                                            <textarea rows="5" cols="37" name="mota" placeholder="Nôi dung bài viết " style="margin-bottom: 15px;"></textarea>
                                        </fieldset>
                                        <fieldset>
                                            <label>Nội dung miêu tả:</label>
                                            <textarea rows="5" cols="37" name="mota"placeholder="Nội dung mô tả ngắn"style="margin-bottom: 15px;"></textarea>
                                        </fieldset>
                                        <fieldset>
                                            <label>Giá:</label>
                                            <input type="text" name="tieude" value="" placeholder="Giá " style="width: 20em;margin-left: 6.5em;">
                                        </fieldset>
                                       
                                            <label>Hình ảnh cũ:</label>
                                             <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 11.8em">
                                                <legend></legend>
                                            <input type="file" name="image" style="margin-bottom: 15px;margin-left: 15px;">
                                        </fieldset>
                                        <label>Hình ảnh cũ:</label>
                                             <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 11.8em">
                                                <legend></legend>
                                            <input type="file" name="image" style="margin-bottom: 15px;margin-left: 15px;">
                                        </fieldset>
                                    </form>
                                   
                              </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                      
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>
        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
           <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

</body>
</html>