<!--banner start-->
<div id="acc-banners-ph" class="banner-contain"></div>
<!--banner ends-->
<div>
	<div>
	<!--<div class="page-title mbot20">
		<h1 class="mleft15">Gör en insättning </h1>
	</div>-->
    <div class="red-subtitle top-red-subtitle">Gör en insättning </div>
          <div class="profile_back">
<div class="container">
<div class="db-rightinfo db-rightinfo-inner" style="width:100%; margin:0px 0 0 0">
<div class="home-signpost-content"> 
    	<div class="dbleft dbleft-main">



<?php if($error!='') { ?> 
<div class="marTB10" id="error"><p><?php echo $error; ?></p></div><?php } ?>



        


          
<div class="borrdercol">

	<div class="alignright">
		<?php echo anchor('wallet/','Transaktionshistorik ('.$site_setting->currency_symbol.$total_wallet_amount.')','class="btn btn-default mar-bot-5"'); ?> 
      
      
        <?php if($total_wallet_amount>$wallet_setting->wallet_minimum_amount) { ?>
        
	       &nbsp;|&nbsp; <?php echo anchor('wallet/withdraw_wallet','Withdraw','class="btn btn-default mar-bot-5"'); ?> &nbsp;|&nbsp;
              <?php echo anchor('wallet/my_withdraw','Withdrawal History','class="btn btn-default mar-bot-5"'); ?> 
         <?php } ?>
         
      
        
	</div>


<?php
	$attributes = array('name'=>'frmAddWallet','id'=>'frmAddWallet','class'=>'form_design');
	echo form_open('wallet/add_wallet',$attributes);
?>


<div id="detail-bg2" class="marB30 padT20" style="overflow:hidden;">
	<div class="fl" style="color:#FF0000; padding-right:10px;">Observera: </div>
    <div class="fl"> 
    	<p>Transaktionsavgiften ligger på:  <b class="colblack"><?php echo $wallet_setting->wallet_add_fees; ?>(%)</b> och läggs på den totala summan av insättningen. Minsta insättningen som krävs är:  <b class="colblack"><?php echo $site_setting->currency_symbol.$wallet_setting->wallet_minimum_amount; ?></b>.
	</div>
</div>



<!--<p>1. Pay through paypal and wait for 24 hours for Administrator Approval.</p>
<p>2. Pay via Credit Card for Instant Approval.</p>-->



</div>



<table width="100%" cellspacing="4" cellpadding="4" border="0">
<tbody>
<tr>
    <td width="20%" valign="middle" align="left" class="lab1" style="font-size:17px;">Summa (<?php echo $site_setting->currency_symbol;?>)</td>
    
    <td width="80%" valign="top" align="left"><input type="text" value="<?php echo $credit ;?>" id="credit" name="credit" class="ntext ntext-val"></td>
</tr>


<tr>
    <td valign="top" align="left"  class="lab1" style="font-size:17px; padding:4px 0 0;">Betalningsmetod </td>
   
    <td valign="top" align="left"> 	

   
<?php	
	
		if($payment)
		{
			$i=0;
			foreach($payment as $row)
			{
			$check='';
			//var_dump($payment);exit;
			 if($gateway_type==$row->id)$check='checked=checked';
			else if($i==0)$check='checked=checked';
				?>
                                            
                                            
                                         
<p class="fs13" style="font-size:20px;"><input type="radio" name="gateway_type" id="gateway_type" value="<?php echo $row->id; ?>" <?php echo $check;?> />
	<img src="<?php echo base_url().getThemeName(); ?>/images/payu.png" width="70" style="margin: 6px 0 -10px 5px;    vertical-align: text-top;" alt="" /></p>
	                                        
			<?php
			}
		}
		
		?>    
	
	</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
    	<td></td>
        <td align="left"><input type="submit" name="add_detail" class="btn btn-default" value="Sätt in"></td>
    </tr>
</tbody>
</table>    
    

</form>    
  
                
</div>                

           
                
		</div>
        <div class="dbright-task dbright-task-main">
        <?php echo $this->load->view($theme.'/layout/user/user_sidebar'); ?>
        </div>
        
        </div>
        
    </div>
		<div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>




