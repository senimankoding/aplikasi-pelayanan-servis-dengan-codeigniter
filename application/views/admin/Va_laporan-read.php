<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Users Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url('tambah/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('tambah/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('tambah/css/chosen.css')?>"/>
    
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('tambah/img/favicon.ico')?>">

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('tambah/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('tambah/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('tambah/js/chosen.jquery.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>

</head>

<?php $this->load->view('admin/Va_Navbar');?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Update Admin</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <script type="text/javascript">
                $(function(){
                    $("#btnCari").click(function() {
                        var $form = $('#laporanPage').find('form'),
                            $tgl_awal = $("#tgl_awal").val(),
                            $tgl_akhir = $("#tgl_akhir").val(),
                            $url = $form.attr('action');
                        $.ajax({
                            type: "POST",
                            url: $url,
                            dataType: "html",
                            data: "tgl_awal="+$tgl_awal+"&tgl_akhir="+$tgl_akhir,
                            cache:false,
                            success: function(data){
                                $(".loader").fadeIn(500).fadeOut(500).queue(function(){
                                    $('#result').html(data);
                                });
                            }
                        });
                        return false;
                    });
                });
            </script>

    <h3 style="text-align: center">
        Lihat Laporan Penjualan Berdasarkan Tanggal Yang DiPilih
    </h3>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4">&nbsp;</div>
            <div class="span4 loader" style="text-align: center">
                <div class="progress progress-striped active" style="display: none">
                    <div class="bar" style="width: 100%;"></div>
                </div>
            </div>
            <div class="span4">&nbsp;</div>
        </div>

        <div style="border-bottom: 1px #999 dashed; margin-bottom: 20px"></div>

        <div class="row-fluid">
            <div id="laporanPage">
                <form class="form-horizontal" method="post" action="<?= site_url('admin/C_Admin/cari')?>">
                    <div class="control-group">
                        <label class="control-label" for="start_date">Tanggal Awal</label>
                        <div class="controls">
                            <input type="date" id="tgl_awal" name="start_date">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="end_date">Tanggal Akhir</label>
                        <div class="controls">
                            <input type="date" id="tgl_akhir" name="end_date">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button id="btnCari" type="submit" class="btn btn-info"><i class="icon icon-white icon-search"></i> Search...</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div style="border-bottom: 1px #999 dashed; margin-bottom: 20px"></div>

        <div class="row-fluid">
            <div id="result"></div>
        </div>

    </div>
            
</div>
        <!-- /#page-wrapper -->

<?php $this->load->view('main/V_Script');?>