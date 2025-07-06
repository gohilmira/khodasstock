<?php $this->load->view('common/header'); 

// if (($recordcount)>0)
// {
//     $ItemsrNo=$recordcount + 1;
// }
// else
// {
//     $ItemsrNo=1;
// }


?>
<script>
    
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
      {
        $.toast({
            heading: 'Delete'
            , text: 'your data delete successfully.'
            , position: 'top-right'
            , loaderBg: '#ca2527'
            , icon: 'error'
            , hideAfter: 10000
            , stack: 6
        });
    }
     else
      return false;
    }
</script>    
<style>
    #success_message{ display: none;}
    .form-group{
        margin-bottom: 10px!important;
    }
    .form-control
    {
            min-height: 30px!important;
    }
    
    /* change css form design */    
    html body .p-20 {
        padding: 20px 0!important;
    }
    select.form-control:not([size]):not([multiple]) {
        height: calc(1.0625rem + 2px);
    }
</style>

<div class="page-wrapper">
    <div class="container-fluid">
        <div id="QRCodeMaster" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">QR Code Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form class=""  method="post" name="addScreenBrandForm" id="addScreenBrandForm" novalidate>
                            <input type="hidden" value="" id="screenBrandID" name="screenBrandID">
                            <div class="row common_master_form_div">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>QRCODE NAME :</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="form-group field">
                                                        <div class="">
                                                            <input type="text" name="QRCode" id="QRCode"  class="form-control" placeholder="ENTER CODE ...."> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="text-xs-right" style="margin-left: 8px;">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <button type="button" class="btn btn-default waves-effect mdlcloseScreenBrand" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="responsive-modal-qty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Content is Responsive</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">QRcode Detail Master</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active">QRcode Detail Master</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 100%;">
                <div class="card-body p-b-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab2" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">QRcode Detail List</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

                        <?php
                        if(!empty($editactypedetails))
                        {
                        ?>
                            <li class="nav-item"> <a class="nav-link foractive" data-toggle="tab" href="#editform" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Edit Form</span></a> </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home7" role="tabpanel">
                            <div class="p-20">
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Sr.No.</th>
                                                <th>QRcode Name</th>
                                                <th>QRCode Image</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=1;
                                            foreach ($GetCategoryData  as $qgetqrDetailsListData)
                                            {
                                            ?> 
                                            <tr>
                                                <td class="editdelaction">
                                                    <a href="<?php echo base_url() ?>QrCode_controller/edit/<?php echo $qgetqrDetailsListData->qr_id; ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    <!-- <a href="javascript:deletedata('<?=$qgetqrDetailsListData->qr_id;?>','qrdetaildelete');"><i class="fa fa-trash-o"></i></a> -->
                                                    <a href="<?php echo base_url() ?>QrCode_controller/qrdelete/<?php echo $qgetqrDetailsListData->qr_id; ?>"><i class="fa fa-trash-o" onclick="return ConfirmDelete();"></i></a>
                                                </td>
                                                <td><?=$i++;?></td>
                                                
                                            
                                                <td> <?=$qgetqrDetailsListData->QRCode;?> </td>
                                                <td><img height="100px" width="80px" src="<?=base_url()?>assets/images/<?=$qgetqrDetailsListData->QRImage;?>"></td>
                                                  <td><?=$qgetqrDetailsListData->CreatedDate;?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        <div class="tab-pane  p-20" id="profile7" role="tabpanel">
                            <form action="<?php echo site_url('QrCode_controller/addqrdetail');?>" class="" method="post" name="addqrdetailform" id="addqrdetailform" novalidate>
                                <?php
                                    if(empty($editactypedetails))
                                    {
                                    ?>
                                    <input type="hidden" name="qr_id" id="qr_id" value="">
                                    <?php
                                    }
                                ?>
                                <div class="row common_master_form_div">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                        <div class="formtitle">
                                            <div class="row removemargin">
                                                <input type="hidden" name="forrowcount" id="forrowcount" class="forrowcount" value="1">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
                                                            <div class="form-group">
                                                                <label>QRCODE NAME :</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
                                                            <div class="form-group field" >
                                                                <div class="">
                                                                    <input type="text" name="QRCode" id="QRCode"  class="form-control" placeholder="ENTER CODE ...."> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="text-xs-right" style="margin-left: 8px;">
                                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                                    <a href="<?=base_url();?>QrCode_controller" class="btn btn-info">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                        if(!empty($editactypedetails))
                                        {
                                            ?>
                                            <!-- <input type="hidden" value="inside" id="inside"> -->
                                            <div class="tab-pane  p-20" id="editform" role="tabpanel">
                                                <form action="" class="" method="post" name="qreditform" id="qreditform" novalidate>
                                                    <input type="hidden" name="qr_id" id="qr_id" value="<?=$editactypedetails['qr_id'];?>">
                                                    <div class="row common_master_form_div">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                                            <div class="formtitle">
                                                                <h4 class="backcolor">Account Information</h4>
                                                                <?php
                                                                $qr_id = $editactypedetails['qr_id'];
                                                                $stock_details = $this->db->query("SELECT * from  qr_detail where qr_id = '$qr_id'")->result();
                                                                ?>
                                                                <div class="row removemargin">
                                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
                                                                                <div class="form-group">
                                                                                    <label>QRCODE NAME :</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
                                                                                <div class="form-group field" >
                                                                                    <div class="">
                                                                                        <input type="text" name="QRCode" id="QRCode"  class="form-control" placeholder="ENTER CODE ....">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group">
                                                                                    <div class="text-xs-right" style="margin-left: 8px;">
                                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                                        <a href="<?=base_url();?>QrCode_controller" class="btn btn-info">Cancel</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php $this->load->view('common/footer'); ?>
            <script>
                $(document).ready(function() {
                // Basic
                $('.dropify').dropify();

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element) {
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element) {
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element) {
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e) {
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });

                $("body").delegate("#IName", "keydown", function(){
                var firstname,lastname;
                var name=this.value.split(" ");
                var firstname=name[0];
                var lastname=name[1];

                if(lastname == undefined)
                {
                    firstshortname = firstname.charAt(0);
                    $("#ICode").val(firstshortname);
                }
                else
                {
                    firstshortname = firstname.charAt(0);
                    secondshortname = lastname.charAt(0);
                    $("#ICode").val(firstshortname.toUpperCase()+''+secondshortname.toUpperCase());
                }
            });

            $(".Seriesselect").select2();
            $(".GreyQualityselect").select2();
            $(".Packingselect").select2();
            $(".ItemTypeselect").select2();
            $(".SeriesselectData").select2();
            $(".Categoryselect").select2();

            var inside = $("#qr_id").val();

            if(inside != "")
            {
                $("#home7").removeClass('active');
                $(".nav-link").removeClass('active');
                $(".foractive").addClass('active');
                $("#editform").addClass('active');
            }

            //multiple add

          

            

            function deleteitem(counter)
            {
                $(".additemtr"+counter).remove();

                var qr_id = $("#qr_id").val();
                if(qr_id != "")
                {
                    var totalrowcount = $('.edititemstock >tbody >tr').length;
                }
                else
                {
                    var totalrowcount = $('.additemstock >tbody >tr').length;
                }

                $(".forrowcount").val(totalrowcount);
            }
        </script>