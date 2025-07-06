<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }



    public function getstockdetails()
    {
        $getsizenumberdata = $this->Home_model->select('size_number');
        $getsizecharacterdata = $this->Home_model->select('size_character');
        $getcolordata = $this->Home_model->select('color');
        $vno = $this->input->post('vno');
        $itemid = $this->input->post('itemid');
        $count = $this->input->post('count');
        $stock_details = $this->db->query("SELECT * from stock_details where Item_Id = '$itemid'")->result();
        ?>

        <!-- <form class="" id="addpurchasestoc  k" method="POST" name="" novalidate>-->

            <input type="hidden" id="itemidmdl"  name="itemidmdl"  value="<?=$itemid;?>" class="">
            <input type="hidden" id="vno"  name="vno"  value="<?=$vno;?>" class="">

            <div class="form-group field">
                <div class="controls">
                    <input type="hidden" id="countdata<?=$itemid;?>"  name="countdata<?=$itemid;?>"  value="<?=sizeof($stock_details);?>" class="customvalidation form-control">
                </div>
            </div>

            <table id="additemstock" class="table additemstock edititemstock table-responsive" style="width: 100%;">
            <thead>
            <tr>
                <td>Size Number</td>
                <td>Size Alphabet</td>
                <td>Color</td>
                <td>Stock</td>
                <td>Purchase Stock</td>
            </tr>
            </thead>
            <tbody>

            <?php
            $y = 0;
            foreach ($stock_details as $stock_detailsval)
            {
                ?>
                <tr id="additemtr<?=$y;?>" class="additemtr<?=$y;?>">
                    <td style="padding: 0.2rem !important;">
                        <select style="pointer-events: none;outline:none;"  name="sizenumber<?=$itemid;?>[]" id="sizenumber<?=$itemid;?><?=$y;?>"  class="form-control fordisable custom-select sizenumber<?=$y;?>" style="width: 100%">
                            <option value=""> --Select Size Number -- </option>
                            <?php
                            foreach ($getsizenumberdata as $value)
                            {
                                ?>
                                <option <?php if($stock_detailsval->Size_Number_Id == $value->Size_Number_Id){echo "selected";}?> value="<?=$value->Size_Number_Id;?>"><?=$value->Size_Number_Name;?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td style="padding: 0.2rem !important;">
                        <select style="pointer-events: none;outline:none;"   name="sizecharacter<?=$itemid;?>[]" id="sizecharacter<?=$itemid;?><?=$y;?>"  class="form-control fordisable custom-select sizecharacter<?=$y;?>" style="width: 100%">
                            <option value=""> --Select Size Character -- </option>
                            <?php
                            foreach ($getsizecharacterdata as $value)
                            {
                                ?>
                                <option <?php if($stock_detailsval->Size_Character_Id == $value->Size_Character_Id){echo "selected";}?>
                                    value="<?=$value->Size_Character_Id;?>"><?=$value->Size_Character_Name;?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>

                    <td style="padding: 0.2rem !important;">
                        <select  style="pointer-events: none;outline:none;" name="color<?=$itemid;?>[]" id="color<?=$itemid;?><?=$y;?>"  class="form-control fordisable custom-select color<?=$y;?>" style="width: 100%">
                            <option value=""> --Select Color -- </option>
                            <?php
                            foreach ($getcolordata as $value)
                            {
                                ?>
                                <option <?php if($stock_detailsval->Color_Id == $value->Color_Id){echo "selected";}?>
                                    value="<?=$value->Color_Id;?>"><?=$value->Color_Name;?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>

                    <td style="padding: 0.2rem !important;">
                        <input style="pointer-events: none;outline:none;"  type="text" name="stock<?=$itemid;?>[]" id="stock<?=$itemid;?><?=$y;?>" class="form-control fordisable stock<?=$y;?>" placeholder="Stock" value="<?=$stock_detailsval->Stock;?>" />
                    </td>

                    <td style="padding: 0.2rem !important;">
                        <input  type="text" onkeyup="forstockcalculation('<?=$itemid;?>','<?=$y;?>');" onfocusout="totalpurcal('<?=$itemid;?>','<?=$count;?>','<?=$count;?>');"  name="purchasestock<?=$itemid;?>[]" id="purchasestock<?=$itemid;?><?=$y;?>" class="form-control totalpurcal purchasestock<?=$itemid;?>" placeholder="Quantity" value="" />
                    </td>

                </tr>
                <?php
                $y++;
            }
            ?>
            </tbody>
        </table>

<!--            <div class="row">-->
<!--                <div class="form-group">-->
<!--                    <div class="text-xs-right" style="margin-left: 8px;">-->
<!--                        <button type="button" onclick="addpurchasestock();" class="btn btn-success">Submit</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </form>-->

        <?php
    }

    public function addpurchasestock()
    {
        $itemid = $this->input->post('itemidmdl');
        $vno = $this->input->post('vno');
        $forrowcount = $this->input->post('countdata');

        $frresult = $this->Stock_model->addpurchasestock($itemid,$_POST,$forrowcount,$vno);
        print_r($frresult);
    }
}