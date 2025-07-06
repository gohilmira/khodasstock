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
        <div  class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">City Master</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li> -->
                        <li class="breadcrumb-item active">City Master</li>
                    </ol>
                    <!-- <a href="javascript:fun_multipleDelete();" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Delete</a> -->
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="card" style="width: 100%;">
                <div class="card-body p-b-0">
                
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab2" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">City List</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
                        <?php
                        if(!empty($editCitydata))
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
                                                <th>City Name</th>
                                                <th>State Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $i=1;
                                           foreach ($GetCityData as $qGetCityData)
                                           {
                                            ?>
                                            <tr>
                                                <td class="editdelaction">
                                                    <a href="<?=base_url();?>City_controller?cid=<?=$qGetCityData->CityID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    <a href="javascript:deletedata('<?=$qGetCityData->CityID;?>','Citydelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?=$i++;?></td>
                                                <td><?=$qGetCityData->CityName;?></td>
                                                <td><?=$qGetCityData->StateName;?></td>
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
                            <form method="post" name="addCityform" id="addCityform" novalidate>
                                <?php
                                if(empty($editCitydata))
                                {
                                    ?>
                                        <input type="hidden" value="" id="CityID" name="CityID">
                                    <?php
                                }
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>State :</h5>
                                                    <div class="">
                                                        <select name="StateID" id="StateID" class="form-control">
                                                            <option value="">Select Your State</option>
                                                            <?php 
                                                            foreach($getStateData as $qgetStateData)
                                                            {
                                                            ?>
                                                            <option value="<?php echo $qgetStateData->StateID; ?>"><?php echo $qgetStateData->StateName; ?></option>
                                                            <?php 
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>City Name :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="CityName" id="CityName" class="form-control customvalidation" required="" placeholder="Enter City Name"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Distance :</h5>
                                                    <div class="">
                                                        <input type="text" name="CityDistance" id="CityDistance" class="form-control" placeholder="Enter City Name"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="<?php echo base_url()?>City_controller" class="btn btn-info">Cancel</a>
                                    </div>
                                </div>
                            </form>
                                
                                
                        </div>

                        <?php
                        if(!empty($editCitydata))
                        {
                        ?>                  
                        <div class="tab-pane  p-20" id="editform" role="tabpanel">
                            <form  class="" id="editCityform" method="POST" name="editCityform" novalidate>
                                <input type="hidden" value="<?=$editCitydata['CityID']?>" id="CityID" name="CityID">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>State :</h5>
                                                    <div class="">
                                                        <select name="StateID" id="StateID" class="form-control">
                                                            <option value="">Select Your State</option>
                                                            <?php 
                                                            foreach($getStateData as $qgetStateData)
                                                            {
                                                            ?>
<option <?php if($editCitydata['StateID'] == $qgetStateData->StateID){echo "selected";}?> value="<?=$qgetStateData->StateID ?>"> <?=$qgetStateData->StateName?> </option>
                                                            <?php 
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>City Name :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="CityName" id="CityName" value="<?=$editCitydata['CityName']?>" class="form-control customvalidation" required="" placeholder="Enter Unit"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Distance :</h5>
                                                    <div class="">
                                                        <input type="text" name="CityDistance" id="CityDistance" value="<?=$editCitydata['CityDistance']?>" class="form-control" placeholder="Enter City Name"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="<?php echo base_url()?>City_controller" class="btn btn-info">Cancel</a>
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
 <script type="text/javascript">
    
    var inside = $("#CityID").val();

    if(inside != "")
    {
        $("#home7").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".foractive").addClass('active');
        $("#editform").addClass('active');
    }

 </script>