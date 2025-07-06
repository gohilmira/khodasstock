<script src="<?php echo base_url(); ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
function fun_edit(brokerID)
{
	var frmobj=window.document.frm_broker_list;
	frmobj.brokerID.value=brokerID;
	frmobj.action="<?php echo base_url()?>Broker_controller/index";
	frmobj.submit();
}

function fun_single_delete(brokerID)
{
	if(confirm("Are you sure want to delete this record? "))
	{
		$.ajax({
			type: "POST",
			url: "<?php echo base_url() ?>Broker_controller/singledelete",
			data: "brokerID=" + brokerID,
			success: function(total){
			$("#ID_"+brokerID).html(total);
			}
		
		});
	}
}

/******************* CHECK ALL CHECKBOX *****************/
jQuery(document).ready(function($)
{
	$('#checkall').click(function()
	{
		$(':checkbox').each(function()
		{
			if(this.checked)
			{
				this.checked = false;
			}
			else
			{
				this.checked = true;
			}
		});
		return false;
	}); 
}); 


/****************** MULTIPLE DELETE *************/
	function fun_multipleDelete()
	{
	  var count = $(":checkbox:checked").length;

	  if(count > 0)
	  {
		  var status = confirm("Are you sure want to delete this record?");
		  if(status==true)
		  {
		  	
			  frmobj=window.document.frm_broker_list;
			  frmobj.method.value="multipleDelete";
			  document.frm_broker_list.action="<?php echo base_url();?>Broker_controller/index";
			  frmobj.submit();
		  }
	  }
	  else
	  {
		alert('Please select atleast one record.');
	  }
	}
	
/****************** fun single Status *************/
function fun_single_status(brokerID)
{
	//alert(cityID);
	$.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>Broker_controller/singleStatus",
		data: "brokerID=" + brokerID,
		success: function(result){
		//alert(result);
			if(result == 0)
			{
				$('#broker_'+brokerID).html("Inactive");
			}
			if(result == 1)
			{
				$('#broker_'+brokerID).html("Active");
			}
		}
	});
}
</script>