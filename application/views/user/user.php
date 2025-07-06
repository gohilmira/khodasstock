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
                <h4 class="text-themecolor">User Master</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active">User Master</li>
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
                        if(!empty($editUserdata))
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
                                                <th>User Name</th>
                                                <th>User Level</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $i=1;
                                           foreach ($GetUserListData as $qGetUserListData)
                                           {
                                            ?>
                                            <tr>
                                                <td class="editdelaction">
                                                    <a href="<?=base_url();?>User_controller?uid=<?=$qGetUserListData->UserID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    <a href="javascript:deletedata('<?=$qGetUserListData->UserID;?>','userdelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?=$i++;?></td>
                                                <td><?=$qGetUserListData->UserName;?></td>
                                                <td><?=$qGetUserListData->UserLevel;?></td>
                                                <td><?=date("d-m-Y", strtotime($qGetUserListData->CreatedDate));?></td>
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
                            <form method="post" name="addUserform" id="addUserform" novalidate>
                                <?php
                                if(empty($editUserdata))
                                {
                                    ?>
                                    <input type="hidden" value="" id="UserID" name="UserID">
                                    <?php
                                }
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Enter User Name :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="UserName" id="UserName" class="form-control customvalidation" placeholder="Enter Cloth Type"  required> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Password :</h5>
                                                    <div class="">
                                                        <input type="password" name="UserPassword" id="UserPassword" class="form-control" placeholder="xxxxxxxxxxxxx"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>User Level :</h5>
                                                    <div class="">
                                                        <select name="UserLevel" id="UserLevel" class="form-control">
                                                            <option value="">Select User Level </option>
                                                            <option value="1">OPERATOR</option>
                                                            <option value="2">ALL DATA ENTRY</option>
                                                            <option value="3">SUPERVISOR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>UserKey :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="UserKey" id="UserKey" class="form-control" placeholder="UserKey"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5> Advance Toolbar :<input type="checkbox" value="1"  name="UserAdvanceToolbar" ></h5>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5> Hide Custom : <input type="checkbox" value="1" name="UserHideCustom" > </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="<?php echo base_url()?>User_controller" class="btn btn-info">Cancel</a>
                                    </div>
                                </div>
                            </form>
                                
                                
                        </div>

                        <?php
                        if(!empty($editUserdata))
                        {
                        ?>                  
                        <div class="tab-pane  p-20" id="editform" role="tabpanel">
                            <form  class="" id="editUserform" method="POST" name="editUserform" novalidate>
                                <input type="hidden" value="<?=$editUserdata['UserID']?>" id="UserID" name="UserID">
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Enter User Name :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="UserName" id="UserName" value="<?=$editUserdata['UserName']?>" class="form-control customvalidation" placeholder="Enter Cloth Type"  required> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>User Level :</h5>
                                                    <div class="">
                                                        <select name="UserLevel" id="UserLevel" class="form-control">
                                                            <option value="">Select User Level </option>
                                                            <option <?php if($editUserdata['UserLevel'] == "1"){echo "selected";}?>  value="OPERATOR"> OPERATOR </option>
                                                            <option <?php if($editUserdata['UserLevel'] == "2"){echo "selected";}?>  value="ALL DATA ENTRY"> ALL DATA ENTRY </option>
                                                            <option <?php if($editUserdata['UserLevel'] == "3"){echo "selected";}?>  value="SUPERVISOR"> SUPERVISOR </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>UserKey :</h5>
                                                    <div class="controls">
                                                        <input type="text" name="UserKey" id="UserKey" class="form-control" value="<?=$editUserdata['UserKey']?>" placeholder="UserKey"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5> Advance Toolbar :<input type="checkbox" value="1"  name="UserAdvanceToolbar" ></h5>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5> Hide Custom : <input type="checkbox" value="1" name="UserHideCustom" > </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="<?php echo base_url()?>User_controller" class="btn btn-info">Cancel</a>
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
    
    var inside = $("#UserID").val();

    if(inside != "")
    {
        $("#home7").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".foractive").addClass('active');
        $("#editform").addClass('active');
    }

 </script>