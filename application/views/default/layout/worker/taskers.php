<style>
.abc{
float: left;
width: 55px;
}
</style>
<?php
$site_setting=site_setting(); 
$data['site_setting']=$site_setting;
?>
<!--banner start-->
<div class="banner body_cont1">
            	<div class="slider-back-main" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url().getThemeName();?>/images/home-and-garden.jpg) no-repeat scroll center top / 100% auto;"><!--id="home-slider"-->
                	<h1 class="slider_text">Get a Quote from our verified Taskers</h1>
                    <div class="top-slider">
                        <div id="main" role="main">
                         	<?php 
//echo "<pre>";print_r($toptaskers);
if($toptaskers){ ?>
                            <div class="slider">
                            
                                <div class="flexslider">
                                    <ul class="slides">
                                      <?php
                                     	foreach ($toptaskers as $toptasker) {
                                        $total_rate=get_user_total_rate($toptasker->user_id);
                                        $total_review=get_user_total_review($toptasker->user_id);

                                        $user_image= base_url().'upload/no_image.png';
                         
                                       if($toptasker->profile_image!='') {  
                                    
                                        if(file_exists(base_path().'upload/user/'.$toptasker->profile_image)) {
                                      
                                          $user_image=base_url().'upload/user/'.$toptasker->profile_image;
                                          
                                        }
                                        
                                      }

                                      ?>
                                        <li>
                                            <div class="inner-divs inner-divs-main">
                                                <a href="<?php echo base_url().'user/'. $toptasker->profile_name ?>">
                                                    <div class="overlay"></div>
                                                    <!--<div class="view-more">Post Job</div>-->
                                                    <img src="<?php echo $user_image ?>" alt="" />
                                                    <p><?php echo $toptasker->first_name ?> <?php echo $toptasker->last_name ?> </p>
                                                    <div class="review-system">
                                                    <div class="strmn strmn-2">
                                                        <div class="str_sel str_sel-2" style="width:<?php if($total_rate>5) { ?>100<?php } else { echo round($total_rate*2);?>0<?php } ?>%;"></div>
                                                      </div>
                                                      <div class="clear"></div>
                                                      <div class="review-text"><?php echo anchor('user/'.$toptasker->profile_name.'/reviews',$total_review.' reviews','class="fpass"');  ?></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </li>
                                        <?php } 
										?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="clear"></div>
                        <a href="<?php echo base_url(); ?>index.php/task/newhome_task" class="btn btn-default find-friends-btn btn-default-join-hiw" style="margin-top:65px; font-size:26px; padding:6px 35px;">Post a Job Now</a>
                        <h1 class="slider_text" style="padding:0;"><span>IT'S FREE. <a href="<?php echo base_url(); ?>index.php/how_it_works" style="color:#fff;">How Hireadronepilot Works</a></span></h1>
                    </div>
                </div>
                
            </div>
<script type="text/javascript" src="<?php echo base_url().getThemeName(); ?>/js/jquery.flexslider-min.js"></script>        
<!--<script type="text/javascript" src="<?php echo base_url().getThemeName(); ?>/js/jquery.flexslider.js"></script>-->
<!--<script type="text/javascript" src="<?php echo base_url().getThemeName(); ?>/js/isotope.js"></script>-->
<script type="text/javascript">
		jQuery('.flexslider').flexslider({						
			  animation: "slide",
			  slideshow: false,
			  startAt: 0,
			  move: 1,
			  maxItems:4, 
			  pauseOnHover: true,
			  itemWidth: 200,
			  slideshowSpeed: 3500,
			  animationDuration: 1000,
			  directionNav: true,
			  controlNav: true,
			  smootheHeight:true,
			  after: function(slider) {
				slider.removeClass('loading');
			  }
				  
		});
    </script>			
<link type="text/css" href="<?php echo base_url().getThemeName(); ?>/css/flexslider_category.css" rel="stylesheet"  media="screen" />
<!--banner ends-->
<div>
<div>
<div class="red-subtitle top-red-subtitle">Chose from our List of verified Taskers based on your selected task category</div>
<div class="profile_back">
	<div class="container">
    	<div class="db-rightinfo db-rightinfo-inner db-rightinfo-inner-taskers" style="width:100%; margin:0px 0 0 0">
            <div class="home-signpost-content">
                <!--<div class="page-title mbot20">
                    <h1 class="mleft15">Worker bees</h1>
                </div>-->
                <div class="dbleft dbleft-main dbleft-main-taskers">
                    <div class="abttb3-2-taskers">
                        <ul class="ultaskers all_taskers">
                            <?php if($taskers) { foreach($taskers as $tasker) {
                                 $user_image= base_url().'upload/no_image.png';
                                 if($tasker->profile_image!='') {  
                                    if(file_exists(base_path().'upload/user/'.$tasker->profile_image)) {
                                        $user_image=base_url().'upload/user/'.$tasker->profile_image;
                                    }	
                                }
                                $total_rate=get_user_total_rate($tasker->user_id);
                                $total_review=get_user_total_review($tasker->user_id);	
                            ?>
                            <li>
                                <div class="tasker-img">
									<?php echo anchor('user/'.$tasker->profile_name,'<img src="'.$user_image.'" alt="" width="120" height="120" class="round-corner" />');?>
                                    <div class="clear"></div>
                                    <div class="level-font">
                                        <a class="tooltip tooltip-2" id="twoonebr1">Level <?php echo $tasker->worker_level;?><span>Level <?php echo $tasker->worker_level;?></span></a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="level-name">
                                        <?php echo anchor('user/'.$tasker->profile_name,ucfirst($tasker->first_name).' '.ucfirst(substr($tasker->last_name,0,1)).'.',' class="abmarks unl"'); ?>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="review-system">
                                    	<div class="strmn strmn-2">
                                        	<div class="str_sel str_sel-2" style="width:<?php if($total_rate>5) { ?>100<?php } else { echo round($total_rate*2);?>0<?php } ?>%;"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="review-text"><?php echo anchor('user/'.$tasker->profile_name.'/reviews',$total_review.' reviews','class="fpass"');  ?></div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="desc-tasker">
                                        <?php 
                                            $strlen = strlen($tasker->worker_skills);
                                            if($strlen > 100) { echo substr($tasker->worker_skills,0,100).' ...';}
                                            else { echo $tasker->worker_skills; } 
                                        ?>
                                        <div class="clear"></div>
                                        <?php echo anchor('user/'.$tasker->profile_name,'View Profile',' class="unl abmarks view-profile-taksers"');?>
                                    </div>
                                    <!--<div class="top-tasks">
                                        <b>Top Task Types: </b>
                                        <br /> 
                                        <?php 
                                            $task_type_detail='';
                                            $types=$tasker->worker_task_type;
                                            if($types!='') { 
                                 
                                
                                 
											 $ex_type=explode(',',$types);
											 
											 foreach($ex_type as $type) 
											 {
												
												 $get_task_type=$this->worker_model->get_task_type_detail($type);
												 
												 if($get_task_type)
												 {
													if(isset($get_task_type->task_name))				
													{
												 
														$task_type_detail .=$get_task_type->task_name.' , ';
													}
												 }
												 
												
											}
													
											 if($task_type_detail!='') { echo  substr(substr($task_type_detail,0,-1),0,120).'...'; }  }
													?>
                                     </div>-->
                                    <div class="hire_me hire_me-1">        
                                        <?php 
                                         if(!check_user_authentication()) 
                                         {  
                                              echo anchor('login','<b>Get a Quote</b>',' class="btn btn-default btn-color" ');  
                                         }  
                                         else 
                                         { 
                                              if($site_setting->subscription_need==0)
                                              {
                                              echo anchor('task/new_task/'.$tasker->worker_id,'<b>Get a Quote</b>',' id="hireme_'.$tasker->worker_id.'" class="btn btn-default btn-color" '); 
                                         ?>
                                          <script type="text/javascript">
                                              jQuery(document).ready(function() {	
                                                  jQuery("#hireme_<?php echo $tasker->worker_id;?>").fancybox();	
                                              });
                                          </script>
              
                                    <?php 	} 
                                              else
                                              {
                                                  $user_setting=user_profilestatus(get_authenticateUserID());
                                                  if($user_setting->profile_active==1)
                                                  {
                                                      echo anchor('task/new_task/'.$tasker->worker_id,'<b>Get a Quote</b>',' id="hireme_'.$tasker->worker_id.'" class="btn btn-default btn-color" '); 
                                     ?>
                                          <script type="text/javascript">
                                              jQuery(document).ready(function() {	
                                                  jQuery("#hireme_<?php echo $tasker->worker_id;?>").fancybox();	
                                              });
                                          </script>
                                          <?php
                                                  }
                                                  else
                                                  {
                                          ?>
                                                       <a href="javascript:void(0)" class="pupload15 btn btn-default btn-color" >Get a Quote</a>
                                                       <!--<a href="<?php echo base_url(); ?>dashboard#horizontalTab3" onclick="return confirm('Sorry !!! In order to hire worker you must subscribe for membership ')" class=""><b></b></a>-->
                
                                           <?php      
                                                  }
              
                                              }
                                          }
                                          ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <?php } } else { ?>
                            <div style="font-size:18px; font-weight:bold; padding:20px 0; color:#F00; text-align:center;"> No worker has been added yet.</div>
                            <?php } ?>
                            <div class="clear"></div>           
                        </ul>
                    </div>
                    <?php if($total_rows>10) { ?>
                        <div class="gonext">
                            <?php echo $page_link; ?>
                        </div>
                    <?php } ?>
                    <div class="clear"></div>
                    <div class="red-subtitle top-red-subtitle">Recent posted task</div>
                    <ul class="ulsty">
                    <?php 
                    
                    //echo "<pre>";print_r($tasklist);
                    if(isset($tasklist))
                    {
                       foreach ($tasklist as $ftasklist) {

                        $user_detail=$this->user_model->get_user_profile_by_id($ftasklist->user_id);
                        $user_image= base_url().'upload/no_image.png';
                         
                         if($user_detail->profile_image!='') {  
                      
                          if(file_exists(base_path().'upload/user/'.$user_detail->profile_image)) {
                        
                            $user_image=base_url().'upload/user/'.$user_detail->profile_image;
                            
                          }
                          
                        }
        
                       
                    ?>

                    <li>
                        <div class="abct3">
                            <?php echo anchor('user/'.$ftasklist->profile_name,'<img src="'.$user_image.'" alt="" width="50" height="50" class="round-corner" />');?>
                        </div>
                        <div class="catle3n ">
                          <?php echo anchor('tasks/'.$ftasklist->task_url_name,ucfirst($ftasklist->task_name),' class="abmarks abmarks-2"'); ?>
                           
                                <p class="colmark colmark-2 marT5">
                          <?php 
                              $task_description= $ftasklist->task_description;    
                              $task_description=str_replace('KSYDOU','"',$task_description);
                              $task_description=str_replace('KSYSING',"'",$task_description);
                    
                              $strlen = strlen($task_description);
                              if($strlen > 50) { echo substr($task_description,0,80).' ...';}
                              else { echo $task_description; }                                       
                                    ?>
                                </p>
                                <p class="geo geo-2"><?php echo getDuration($ftasklist->task_post_date,$ftasklist->task_id);?></p>
                                
                        </div>
                    </li>

                    <?php } 

                    }

                    ?>
                  </ul>





                </div>
                <div class="clear"></div>
            </div>
             <!--<div class="dbright-task dbright-task-main">
            <?php //echo $this->load->view($theme.'/layout/worker/tasker_sidebar'); ?>  
            </div>-->
        	<div class="clear"></div>
		</div>
		<div class="clear"></div>
    </div>
    <style type="text/css">
    #alldetails ul li {
          list-style: square inside url("<?php echo base_url().getThemeName(); ?>/images/drone1.png") !important;
             text-align: justify !important;
             padding: 5px !important;
             line-height: 1.6;
             /*letter-spacing: 0.5px !important;*/

    }

</style>
    <div class="container" id="alldetails">
  <ul>
    <li style="list-style: none !important;">
      <div id="agriculture">
      <h2><b style="color:#ec6600;">Agriculture</b></h2>
      <ul><br>
        <li>
        In these modern times, monitoring the health of acres of crops can be handled with an experienced drone pilot. In fact, the potential uses of drone services in agriculture is so strong that The Association for Unmanned Vehicle Systems International, which is a trade group, estimates that about 80% of all drone commercial use could soon be attributed to farmers using them for estimation and checking the health of their crops.
      </li><br>
      <li>New, modern agriculture methods can now provide accurate, real-time data with the help of drone technology. Important, vital information can be provided to the farmer, helping him estimate his harvest at exactly the right time in order to give the maximum yield</li><br>
      <li>Operated by a drone pilot, the videographer can get a high-res data view of a farmer’s fields accurately, helping him to figure out what to plant, and when. With the help of a drone, pesticides and fertilizers can be precisely targeted where they are most needed, instead of spraying an entire field. This saves money, and is much better for the environment.</li><br>
      <li>
        The main advantage of drone agriculture is that it saves valuable time by covering more ground in more time than the farmer himself physically ever can. Even though human eyes might miss something, a drone can make several fly-bys to cover each and every inch of the ground. They can also be used to monitor livestock and even identify sick and unwell animals from the air, ensuring prompt treatment. Drones can also monitor feeding and and can even take part in herding.
      </li><br><br>
    </ul>
      </div>
    </li>
    <li style="list-style: none !important;">
      <div id="cinema">
      <h2><b style="color:#ec6600;">Cinematography</b></h2>
      <ul><br>
        <li>
        Cinematography is the technique of taking moving pictures, and a radical change came into this industry when the medium shifted from analog to digital film. Though aerial photography isn’t new, as back then, they used to stick cameras to kites and fly them high to get aerial shots. However, the introduction of drones has made a similar ground-breaking change.
      </li><br>
      <li>Drones are being used all over the world for getting stunning aerial shots to production teams that were simply impossible to take by hand. Also, more creative aerial options at a lower cost is driving renewed interest in scenic photography among the masses, and if you’re a person involved in the cinematography business, drones might just serve your needs.</li><br>
      <li>They’re easier to maneuver than cable cameras, cranes or helicopters, and also much quieter. And of course, they’re also much, much cheaper than either of those options. You also get an unprecedented range - an expert drone photographer can cover large, sweeping shots from just a few feet in the air to a range of several hundred feet. Drones are also faster to set up, and they also have high endurance; a fully charged drone can stay in the air for almost an hour.</li><br><br>
    </ul>
      </div>
    </li>
    <li style="list-style: none !important;">
      <div id="construction">
      <h2><b style="color:#ec6600;">Construction</b></h2>
      <ul><br>
        <li>
        In the construction business, drones have found widespread use, and are beginning to play a vital role in their work. Used in land-surveying, monitoring job-sites to ensure security and safety, aerial overviews, and visual inspections of bridges and other public infrastructure, drones are becoming an indispensable part of the construction industry.
      </li><br>
      <li>For mapping and surveying, drone construction pilots can provide you firm access to information and survey data that can only be obtained aerially. On-site information can be accessed more safely and faster than ever before. Also, the data collected is highly accurate, and it can be collected again, rapidly, if there has been an update in the architectural plans. Aerial survey data can also be used in calculating fill-in volumes and extractions.</li><br>
      <li>Site-surveillance can also be carried out. Monitoring huge construction sites can be quite daunting, because of the security, safety issues and progress-evaluation, and drone services can carry out all of these in real-time. Site progress photography can be done from unique aerial angles in the site, to get a better general sense of scale than is possible from ground photography.</li><br><br>
    </ul>
      </div>
    </li>
    <li style="list-style: none !important;">
      <div id="weddingsevents">
      <h2><b style="color:#ec6600;">Weddings and Events</b></h2>
      <ul><br>
        <li>
        Aerial wedding photography and videography is perfect for anyone who’s looking to capture their favorite moments with dazzling photography. Regardless of whether you’re planning for your own wedding, or are related to the couple and want to give them memories to cherish for a lifetime, drone shots might just turn out to be the much needed special touch.
      </li><br>
      <li>Drones can take shots that a regular photographer or videographer never can, as a drone has an unprecedented level of freedom across different levels.</li><br><br>
    </ul>
      </div>
    </li>
    <li style="list-style: none !important;">
      <div id="surveyingmapping">
      <h2><b style="color:#ec6600;">Surveying and Mapping</b></h2>
      <ul><br>
        <li>
        The technique of taking measurements using photographs is called photogrammetry. The result is a drawing, a map, or a 3D model of a land mass or object. GPS enabled drones are being used for LIDAR mapping and aerial photogrammetry already, and this use is continuously going to increase in the future, as more and more construction is built up around the world.
      </li><br>
      <li>For 3D mapping, a drone pilot can skillfully fly the drone in a pre-programmed fashion, and take overlapping, multiple different photographs of the object or ground, with about 80-90% overlap. This would prove impossible to accomplish accurately using an aeroplane, while it is ridiculously cost-effective to execute with the help of drones.</li><br>
      <li>LIDAR mapping involves using a laser scanner mounted on a drone to gauge the height of points on the ground. Drones fitted with LIDAR scanners can cover a lot of ground in a single day, all the while penetrating any dense vegetation or canopy, making it easier to scan earthen structures that are too detailed to appear invisible to space satellites.</li><br>
      <li>Drones are also used in general mapping and cartography, in coastline management, urban planning, transport planning, pollution modelling, and quarries - and a skilled drone pilot can do all of these.</li><br><br>
    </ul>
      </div>
    </li>
    <li style="list-style: none !important;">
      <div id="watersports">
      <h2><b style="color:#ec6600;">Water Sports and Boating</b></h2>
      <ul><br>
        <li>
        After you select a water and boating sports drone pilot, you’ll be able to negotiate with your pilot, and pay by the hour, or per project, depending on what they’ve specified in the bid. Once the pilot has completed your requested work, they’ll submit a detailed invoice containing all the specific charges to you, whereupon you will have a week to evaluate and review it. Once you’re done with the review, you can pay using our secure, trustworthy payment platform in the site, using a credit or debit card for your payment.
      </li><br>
    </ul>
      </div>
    </li>
  </ul>
</div>
</div>

