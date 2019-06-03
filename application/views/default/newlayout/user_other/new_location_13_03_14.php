<script type="text/javascript">
$(document).ready(function(){	
		$('#sub_newloc').click(function(){
		 validate_sub_newloc();	
		});
		
	validate_sub_newloc();
	
	function validate_sub_newloc()
	{
		var form = $("#frm_new_location");
		
		var location_name_symbol = $("#location_name_symbol");
		var location_name = $("#location_name");
		var location_nameInfo = $("#location_nameInfo");
		var location_nameTR = $("#location_nameTR");
		
		var location_address_symbol = $("#location_address_symbol");
		var location_address = $("#location_address");
		var location_addressInfo = $("#location_addressInfo");
		var location_addressTR = $("#location_addressTR");
		
		var location_city_symbol = $("#location_city_symbol");
		var location_city = $("#location_city");
		var location_cityInfo = $("#location_cityInfo");
		var location_cityTR = $("#location_cityTR");
		
		var location_state_symbol = $("#location_state_symbol");
		var location_state = $("#location_state");
		var location_stateInfo = $("#location_stateInfo");
		var location_stateTR = $("#location_stateTR");
		
		var location_zipcode_symbol = $("#location_zipcode_symbol");
		var location_zipcode = $("#location_zipcode");
		var location_zipcodeInfo = $("#location_zipcodeInfo");
		var location_zipcodeTR = $("#location_zipcodeTR");
		
		//On click	
		location_name.focus(function(){  
			location_nameTR.addClass('field_main');
		});
		location_address.focus(function(){  
			location_addressTR.addClass('field_main');
		});
		location_city.focus(function(){  
			location_cityTR.addClass('field_main');
		});
		location_state.focus(function(){  
			location_stateTR.addClass('field_main');
		});
		location_zipcode.focus(function(){  
			location_zipcodeTR.addClass('field_main');
		});
		
		//On blur
		location_name.blur(validate_location_name);
		location_address.blur(validate_location_address);
		location_city.blur(validate_location_city);
		location_state.blur(validate_location_state);
		location_zipcode.blur(validate_location_zipcode);
		
		//On key up
		location_name.keyup(validate_location_name);
		location_address.keyup(validate_location_address);
		location_city.keyup(validate_location_city);
		location_state.keyup(validate_location_state);
		location_zipcode.keyup(validate_location_zipcode);
		
		//On Submitting
		form.submit(function(){
			if(validate_location_name() & validate_location_address() & validate_location_city() & validate_location_state() & validate_location_zipcode())
				return true
			else
				return false;
		});
		
		//validation functions
		function validate_location_name()
		{	
			if(location_name.val()=='')
			{
				location_name_symbol.removeClass("tick_mark");
				location_name_symbol.removeClass("cross_mark");
				location_name.addClass("error1");
				location_nameInfo.text("Enter Location name!");
				location_nameInfo.addClass("error1");
				
				return false;
			}
			//if it's NOT valid
			else if(location_name.val().length < 10)
			{
				location_name.addClass("error1");
				location_nameInfo.text("10 letters minimum required!");
				location_nameInfo.addClass("error1");
				location_name_symbol.removeClass("tick_mark");
				location_name_symbol.addClass("cross_mark");
				return false;
			}
			//if it's valid
			else
			{
				location_name.removeClass("error1");
				location_nameInfo.text("");
				location_nameInfo.removeClass("error1");
				location_nameInfo.addClass("success");
				location_name_symbol.removeClass("cross_mark");
				location_name_symbol.addClass("tick_mark");
				return true;
				
			}
		}
		
		function validate_location_address()
		{	
			if(location_address.val()=='')
			{
				location_address_symbol.removeClass("tick_mark");
				location_address_symbol.removeClass("cross_mark");
				location_address.addClass("error1");
				location_addressInfo.text("Enter Location Address!");
				location_addressInfo.addClass("error1");
				
				return false;
			}
			//if it's NOT valid
			else if(location_address.val().length < 2)
			{
				location_address.addClass("error1");
				location_addressInfo.text("2 letters minimum required!");
				location_addressInfo.addClass("error1");
				location_address_symbol.removeClass("tick_mark");
				location_address_symbol.addClass("cross_mark");
				return false;
			}
			//if it's valid
			else
			{
				location_address.removeClass("error1");
				location_addressInfo.text("");
				location_addressInfo.removeClass("error1");
				location_addressInfo.addClass("success");
				location_address_symbol.removeClass("cross_mark");
				location_address_symbol.addClass("tick_mark");
				return true;
				
			}
		}
		
		function validate_location_city()
		{	
			if(location_city.val()=='')
			{
				location_city_symbol.removeClass("tick_mark");
				location_city_symbol.removeClass("cross_mark");
				location_city.addClass("error1");
				location_cityInfo.text("Enter City!");
				location_cityInfo.addClass("error1");
				
				return false;
			}
			//if it's NOT valid
			else if(location_city.val().length < 2)
			{
				location_city.addClass("error1");
				location_cityInfo.text("2 letters minimum required!");
				location_cityInfo.addClass("error1");
				location_city_symbol.removeClass("tick_mark");
				location_city_symbol.addClass("cross_mark");
				return false;
			}
			//if it's valid
			else
			{
				location_city.removeClass("error1");
				location_cityInfo.text("");
				location_cityInfo.removeClass("error1");
				location_cityInfo.addClass("success");
				location_city_symbol.removeClass("cross_mark");
				location_city_symbol.addClass("tick_mark");
				return true;
				
			}
		}
		
		function validate_location_state()
		{	
			if(location_state.val()=='')
			{
				location_state_symbol.removeClass("tick_mark");
				location_state_symbol.removeClass("cross_mark");
				location_state.addClass("error1");
				location_stateInfo.text("Enter State!");
				location_stateInfo.addClass("error1");
				
				return false;
			}
			//if it's NOT valid
			else if(location_state.val().length < 2)
			{
				location_state.addClass("error1");
				location_stateInfo.text("2 letters minimum required!");
				location_stateInfo.addClass("error1");
				location_state_symbol.removeClass("tick_mark");
				location_state_symbol.addClass("cross_mark");
				return false;
			}
			//if it's valid
			else
			{
				location_state.removeClass("error1");
				location_stateInfo.text("");
				location_stateInfo.removeClass("error1");
				location_stateInfo.addClass("success");
				location_state_symbol.removeClass("cross_mark");
				location_state_symbol.addClass("tick_mark");
				return true;
				
			}
		}
		
		function validate_location_zipcode()
		{	
			if(location_zipcode.val()=='')
			{
				location_zipcode_symbol.removeClass("tick_mark");
				location_zipcode_symbol.removeClass("cross_mark");
				location_zipcode.addClass("error1");
				location_zipcodeInfo.text("Enter Post Code!");
				location_zipcodeInfo.addClass("error1");
				
				return false;
			}
			//if it's NOT valid
			else if(location_zipcode.val().length < 4)
			{
				location_zipcode.addClass("error1");
				location_zipcodeInfo.text("4 characters minimum required!");
				location_zipcodeInfo.addClass("error1");
				location_zipcode_symbol.removeClass("tick_mark");
				location_zipcode_symbol.addClass("cross_mark");
				return false;
			}
			//if it's valid
			else
			{
				location_zipcode.removeClass("error1");
				location_zipcodeInfo.text("");
				location_zipcodeInfo.removeClass("error1");
				location_zipcodeInfo.addClass("success");
				location_zipcode_symbol.removeClass("cross_mark");
				location_zipcode_symbol.addClass("tick_mark");
				return true;
				
			}
		}
	
	}
});
</script>
<div>
	<div>
	<div class="page-title mbot20">
		<h1 class="mleft15">Create a location</h1>
	</div>
    	<div class="mconleft" style="0 0 0 15px;">    
  <?php 
		if($error != '') {
			echo '<div class="errmsgcl">'.$error.'</div>';
		}
	?>              


	<?php
        $attributes = array('name'=>'frm_new_location','id'=>'frm_new_location','class'=>'form_design');
        echo form_open('user_other/new_location',$attributes);
    ?>  

    <ul class="padli10" style="padding-left: 10px;">
    	<li id="location_nameTR">
         	<label class="lab1">Location name <span style="color:red;">*</span>: </label>
            <input type="text" name="location_name" id="location_name" value="<?php echo $location_name;?>" class="ntexttf11"  /><p id="location_name_symbol"></p><p id="location_nameInfo" style="height:5px;"></p>
		</li>
    	<li id="location_addressTR">
         	<label class="lab1">Address <span style="color:red;">*</span>: </label>
            <input type="text" name="location_address" id="location_address"value="<?php echo $location_address;?>" class="ntexttf11" /><p id="location_address_symbol"></p><p id="location_addressInfo" style="height:5px;"></p>
		</li>        
    	<li id="location_cityTR">
         	<label class="lab1">City <span style="color:red;">*</span>: </label>
            <input type="text" name="location_city" id="location_city" value="<?php echo $location_city;?>"  class="ntexttf11"  /><p id="location_city_symbol"></p><p id="location_cityInfo" style="height:5px;"></p>
		</li>
    	<li id="location_stateTR">
         	<label class="lab1">State <span style="color:red;">*</span>: </label>
            <input type="text" name="location_state" id="location_state" value="<?php echo $location_state;?>"  class="ntext11"  /><p id="location_state_symbol"></p><p id="location_stateInfo" style="height:5px;"></p>
		</li>        
    	<li id="location_zipcodeTR">
         	<label class="lab1">Post Code <span style="color:red;">*</span>: </label>
            <input type="text" name="location_zipcode" id="location_zipcode" value="<?php echo $location_zipcode;?>"  class="ntext11"  /><p id="location_zipcode_symbol"></p><p id="location_zipcodeInfo" style="height:5px;"></p>
		</li>
        <li>
        
        </li>
        	<input type="submit" id="sub_newloc" name="sub_newloc" class="submbg2" value="Create Location">
        </ul>

</form>
   
		</div>


 <?php echo $this->load->view($theme.'/layout/user/user_sidebar'); ?>
   <div class="clear"></div>     
</div>
</div>