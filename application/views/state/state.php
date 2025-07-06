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
                <h4 class="text-themecolor">State Master</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active">State Master</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 100%;">
                <div class="card-body p-b-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab2" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">User List</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
                        <?php
                        if(!empty($editStatedata))
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
                                                <th>State Name</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $i=1;
                                           foreach ($GetStateListData as $qGetStateListData)
                                           {
                                            ?>
                                            <tr>
                                                <td class="editdelaction">
                                                    <a href="<?=base_url();?>State_controller?sid=<?=$qGetStateListData->StateID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    <a href="javascript:deletedata('<?=$qGetStateListData->StateID;?>','statedelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?=$i++;?></td>
                                                <td><?=$qGetStateListData->StateName;?></td>
                                                <td><?=date("d-m-Y", strtotime($qGetStateListData->CreateDate));?></td>
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
                            <form method="post" name="addStateform" id="addStateform" novalidate>
                                <?php
                                if(empty($editStatedata))
                                {
                                    ?>
                                    <input type="hidden" value="" id="StateID" name="StateID">
                                    <?php
                                }
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Enter State Name :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="StateName" id="StateName" class="form-control customvalidation" placeholder="Enter State Name"  required> 
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
                                        <a href="<?php echo base_url()?>State_controller" class="btn btn-info">Cancel</a>
                                    </div>
                                </div>
                            </form>
                                
                                
                        </div>

                        <?php
                        if(!empty($editStatedata))
                        {
                        ?>                  
                        <div class="tab-pane  p-20" id="editform" role="tabpanel">
                            <form  class="" id="editStateform" method="POST" name="editStateform" novalidate>
                                <input type="hidden" value="<?=$editStatedata['StateID']?>" id="StateID" name="StateID">
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>State Name :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="StateName" id="StateName" value="<?=$editStatedata['StateName']?>" class="form-control customvalidation" placeholder="Enter State Name"  required> 
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
                                        <a href="<?php echo base_url()?>State_controller" class="btn btn-info">Cancel</a>
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
    
    var inside = $("#StateID").val();

    if(inside != "")
    {
        $("#home7").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".foractive").addClass('active');
        $("#editform").addClass('active');
    }

 </script>