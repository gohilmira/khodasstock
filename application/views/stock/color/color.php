<?php $this->load->view('common/header'); ?>
<style>
    #success_message{ display: none;}
    .form-group{
        margin-bottom: 10px!important;
    }
    .form-control
    {
        min-height: 30px!important;
    }
</style>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Color List</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li> -->
                        <li class="breadcrumb-item active">Color</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 100%;">
                <div class="card-body p-b-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab2" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Color List</span></a> </li>

                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

                        <?php
                        if(!empty($editcolordata))
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
                                            <th>Sr. No.</th>
                                            <th>Color</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=1;
                                        foreach ($colordata as $value)
                                        {
                                            ?>
                                            <tr>
                                                <td class="editdelaction">
                                                    <a href="<?=base_url()?>Stock/Color_controller?Color_Id=<?=$value->Color_Id;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;

                                                    <a href="javascript:deletedata('<?=$value->Color_Id?>','colordelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?=$i++;?></td>
                                                <td><?=$value->Color_Name;?></td>
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
                            <form  class="" id="addcolorform" method="POST" name="" novalidate>
                                <?php
                                if(empty($editcolordata))
                                {
                                    ?>
                                    <input type="hidden" value="" id="Color_Id" name="Color_Id">
                                    <?php
                                }
                                ?>

                                <div class="row common_master_form_div">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                        <div class="formtitle">
                                            <div class="row removemargin">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="row">

                                                        <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex ">
                                                            <div class="form-group">
                                                                <label>Color <span class="fored"><b>*</b></span> :</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-8 col-md-3 col-lg-10 col-xl-3">
                                                            <div class="form-group field">
                                                                <div class="controls">
                                                                    <input type="text" name="color" id="color" class="form-control customvalidation" placeholder="Enter Color" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="text-xs-right" style="margin-left: 8px;">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <a  href="<?php echo base_url()?>Stock/Color_controller" class="btn btn-info">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                        if(!empty($editcolordata))
                        {
                            ?>
                            <!-- <input type="hidden" value="inside" id="inside"> -->
                            <div class="tab-pane  p-20" id="editform" role="tabpanel">
                                <form  class="" id="editcolorform" method="POST" name="" novalidate>
                                    <input type="hidden" value="<?=$editcolordata['Color_Id']?>" id="Color_Id" name="Color_Id">
                                    <div class="row common_master_form_div">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                            <div class="formtitle">
                                                <div class="row removemargin">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex ">
                                                                <div class="form-group">
                                                                    <label>NAME <span class="fored"><b>*</b></span> :</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-8 col-md-3 col-lg-10 col-xl-3">
                                                                <div class="form-group field">
                                                                    <div class="controls">
                                                                        <input type="text" name="color" id="color" value="<?=$editcolordata['Color_Name']?>" class="form-control customvalidation" placeholder="Enter Color Name" required data-validation-required-message="This field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="text-xs-right" style="margin-left: 8px;">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                        <a  href="<?php echo base_url()?>Stock/Color_controller" class="btn btn-info">Cancel</a>
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
<?php $this->load->view('common/footer'); ?>

<script>

    function insert()
    {
        $.toast({
            heading: 'Success'
            , text: 'your data save successfully.'
            , position: 'top-right'
            , loaderBg: '#ff6849'
            , icon: 'success'
            , hideAfter: 3500
            , stack: 6
        })
    }

    function update()
    {
        $.toast({
            heading: 'Success'
            , text: 'your data edit successfully.'
            , position: 'top-right'
            , loaderBg: '#ff6849'
            , icon: 'success'
            , hideAfter: 3500
            , stack: 6
        })
    }

    $("#addcolorform").find(".customvalidation").jqBootstrapValidation(
        {
            preventSubmit: true,
            submitError: function($form, event, errors) {
                // Here I do nothing, but you could do something like display
                // the error messages to the user, log, etc.
            },
            submitSuccess: function($form, event) {
                event.preventDefault();

                $.ajax({
                    url: base_url+'Stock/Color_controller/addcolorform',
                    data: new FormData($('#addcolorform')[0]),
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data){
                        insert();
                        setTimeout(function(){ window.location.href = base_url+"Stock/Color_controller"; }, 3500);

                    }
                });
            },
            filter: function() {
                return $(this).is(":visible");
            }
        });

    $("#editcolorform").find(".customvalidation").jqBootstrapValidation(
        {
            preventSubmit: true,
            submitError: function($form, event, errors) {
                // Here I do nothing, but you could do something like display
                // the error messages to the user, log, etc.
            },
            submitSuccess: function($form, event) {
                event.preventDefault();

                $.ajax({
                    url: base_url+'Stock/Color_controller/addcolorform',
                    data: new FormData($('#editcolorform')[0]),
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data){
                        update();
                        setTimeout(function(){ window.location.href = base_url+"Stock/Color_controller"; }, 3500);

                    }
                });
            },
            filter: function() {
                return $(this).is(":visible");
            }
        });

    $('.selectpicker').selectpicker();

    var inside = $("#Color_Id").val();

    if(inside != "")
    {
        $("#home7").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".foractive").addClass('active');
        $("#editform").addClass('active');
    }

    var base_url = '<?php echo base_url();?>';

    $(function() {
        $('#staticParent').on('keydown', '#child', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
    })
    $(function() {
        $('#staticParent1').on('keydown', '#child1', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
    })

</script>