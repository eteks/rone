<script type="text/javascript" language="javascript">
	function delete_rec(id,offset)
	{
		var ans = confirm("Are you sure to delete user?");
		if(ans)
		{
			location.href = "<?php echo base_url(); ?>/worker/delete_user/"+id+"/"+offset;
		}else{
			return false;
		}
	}
	
	function getlimit(limit)
	{
		if(limit=='0')
		{
		return false;
		}
		else
		{
			window.location.href='<?php echo base_url();?>worker/list_worker/'+limit;
		}
	
	}	
	
	function getsearchlimit(limit)
	{
		if(limit=='0')
		{
		return false;
		}
		else
		{
			
			window.location.href='<?php echo base_url();?>worker/search_list_worker/'+limit+'/<?php echo $option.'/'.$keyword; ?>';
		}
	
	}
	
	function gomain(x)
	{
		
		if(x == 'all')
		{
			window.location.href= '<?php echo base_url();?>worker/list_worker';
		}
	}
</script>

<div id="content">        
	<?php if($msg != ""){
            if($msg == "insert"){ $error = 'New Record has been added Successfully.';}
            if($msg == "update"){ $error = 'Record has been updated Successfully.';}
            if($msg == "delete"){ $error = 'Record has been deleted Successfully.';}
    ?>
        <div class="column full">
            <span class="message information"><strong><?php echo $error;?></strong></span>
        </div>
    <?php } ?>
	<div class="clear"></div>
	<div class="column full">
	
	<div class="box">		
		<div class="box themed_box">
		<h2 class="box-header">Runners </h2>
			
			<div class="box-content box-table">
			<table class="tablebox">
            
                <div id="topbar" style="border:#CCC solid 1px;">
                    <div style="float:left;">
                        <strong>Show</strong>
                            <?php if($search_type=='normal') { ?>
                            <select name="limit" id="limit" onchange="getlimit(this.value)" style="width:80px;">
                            <?php } if($search_type=='search') { ?>
                             <select name="limit" id="limit" onchange="getsearchlimit(this.value)" style="width:80px;">
                            <?php } ?>
                                <option value="0">Per Page</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                      </div>
                    
                     <form name="frm_search" id="frm_search" method="post" action="<?php echo base_url(); ?>worker/search_list_worker/<?php echo $limit; ?>" onSubmit="return chk_valid();">
                     <strong>&nbsp;&nbsp;&nbsp;Search By</strong>&nbsp;
                        <select name="option" id="option" style="width:100px;" onchange="gomain(this.value)">
                            <option value="all">All</option> 
                            <option value="username" <?php if($option=='username'){?> selected="selected"<?php }?>>Username</option>
                        </select>
        
                        <input type="text" name="keyword" id="keyword" value="<?php echo $keyword;?>" class="textfield"/>                
                        <input type="submit" name="submit" id="submit" value="Search" class="button themed" /> 
                     </form> 

                 </div>

				<thead class="table-header">
					<tr> 
                        <th class="first tc">Runner Name</th>
                        <th>Email</th>
                        <th>Signup IP Address</th>                                    
                        <th>Zip Code</th>
                        <th>Active</th>   
                        <th >Registerd On</th> 
                        <th class="tc">View Detail</th>      
					</tr>
				</thead>
				
				<tbody class="openable-tbody">
				<?php
                    if($result)
                    {
                        $i=0;
                        foreach($result as $row)
                        { 
                            if($i%2=="0")
                            {
                                $cl = "odd";	
                            }else{	
                                $cl = "even";	
                            }
                  ?>
					<tr class="<?php echo $cl; ?>">
                        <td class="tc"><?php echo anchor(front_base_url().'user/'.$row->profile_name,ucfirst($row->first_name).' '.ucfirst(substr($row->last_name,0,1)),' style="color:#004C7A;" target="_blank"'); ?></td>
                        <td><?php echo $row->email; ?></td>              
                        <td><?php echo $row->sign_up_ip; ?></td>
                        <td><?php echo $row->zip_code; ?></td>
                        <td><?php if($row->worker_status=="1"){ echo "Active"; }else{ echo "Inactive"; } ?></td>
                        <td><?php echo date('d-m-Y',strtotime($row->sign_up_date)); ?></td> 
                        <td><?php echo anchor('worker/view_worker/'.$row->worker_id,'View Detail','class="button white"'); ?></td>
                  	</tr>
				  <?php
                            $i++;
                        }
                    } else { ?>
							<tr class="odd">
                                <td colspan="8">No Worker has been added yet.</td>
                            </tr>
					<?php }
                  ?>	
				</tbody>
			</table>
				<ul class="pagination">
                    <?php echo $page_link; ?>
				</ul>
                
			</div>
		</div>
	</div>
</div>