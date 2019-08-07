<div class="body_cont">
        	<div>
				<!--banner-->
                <div id="acc-banners-ph" class="banner-contain">
                </div>
				<!--banner ends-->
                
			</div>	
        </div>
	</div>
    <div id="find-placing" class="find-trust trust-safety">
        <div class="red-subtitle top-red-subtitle">Contact Us</div>
        <div class="profile_back">
        	<div class="container">
            	<div class="db-rightinfo db-rightinfo-inner db-contact-main-inner" style="margin:0px 0 0 0; padding:30px; min-height:330px;">
                    <div class="contact-left-block pull-left">
                        <div class="elevio-box-warning">
                            <p>Before you submit your query, please check to see if your question has already been answered in our knowledge base FAQ.</p>
                            <!-- <div><a class="btn btn-default" href="http://demoplace.co.in/newsite/index.php/content/help">Visit FAQ</a></div> -->
                            <div><a class="btn btn-default" href="#">Visit FAQ</a></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <script type="text/javascript">
                    function subm_contact()
        {
        
                if($('#fname').val()=="")
                {
                    alert('Please Enter your First name');
                    return false;
                }
                if($('#lname').val()=="")
                {
                    alert('Please Enter your Last name');
                    return false;
                }
                if($('#contact_email').val()=="")
                {
                    alert('Please enter your email');
                    return false;
                }
                var email=$('#contact_email').val();
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(!email.match(mailformat))
                { 
                    alert("You have entered an invalid email address!");
                    return false;
                }
                if($('#subject_msg').val()=="")
                {
                    alert('Please enter the Subject');
                    return false;
                }
                if($('#full_msg').val()=="")
                {
                    alert('Please enter your Message');
                    return false;
                }
        
                jQuery.ajax({
                            type:'POST',
                            //url:'http://Entowork.co.za/home/business_con/',
                            url:'http://localhost/snm/home/contact_us/',
                            data:{
                                first_name: $('#fname').val(),
                                lastname_name : $('#lname').val(),
                                contact_email :$('#contact_email').val(),
                                subject_msg : $('#subject_msg').val(),
                                full_msg : $('#full_msg').val()
                            },
                            success:function(results){ 
                            $('#mess').text('Thank you for submitting your details.A member of the Hireadronepilot team will be in contact with you soon.');
                            $('#fname').val('');
                            $('#lname').val('');
                            $('#contact_email').val('');
                            $('#subject_msg').val('');
                            $('#full_msg').val('');
                            }
                        });

        }
        
        </script>
                	<div class="contact-right-block pull-right">
                        <div class="contact-form-main">
                        	<?php
                        $attributes = array('name'=>'frm_contact','id'=>'frm_contact');
                        //print_r($attributes);
                        //echo form_open_multipart('business_con',$attributes);
                        echo form_open_multipart('contact_us',$attributes);
                    ?>
                            	<div class="contact-form-r1">
                                	<label class="contact-form-r1-title">Name</label>
                                    <div class="">
                                        <div class="contact-field1 pull-left">
                                            <input type="text" name="fname" placeholder="First Name" onblur="placeholder='First Name'" id="fname" onclick="placeholder=''" />
                                        </div>
                                        <div class="contact-field1 pull-right">
                                            <input type="text" name="lname" placeholder="Last Name" onblur="placeholder='Last Name'" id="lname" onclick="placeholder=''" />
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="contact-form-r1">
                                	<label class="contact-form-r1-title">Email</label>
                                    <div class="">
                                        <div class="contact-field1 contact-field-email">
                                            <input type="text" name="email" placeholder="Email" onblur="placeholder='Email'" id="contact_email" onclick="placeholder=''" />
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="contact-form-r1">
                                	<label class="contact-form-r1-title">Subject</label>
                                    <div class="">
                                        <div class="contact-field1 contact-field-email">
                                            <input type="text" name="sub" placeholder="Subject" onblur="placeholder='Subject'" id="subject_msg" onclick="placeholder=''" />
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="contact-form-r1">
                                	<label class="contact-form-r1-title">Message</label>
                                    <div class="">
                                        <div class="contact-massage-field">
                                            <textarea cols="1" rows="1" name="mess" placeholder="Describe your issue here..." onblur="placeholder='Describe your issue here...'" id="full_msg" onclick="placeholder=''" ></textarea>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-submit-btn">
                                    <input type="submit" name="sub" class="btn btn-default btn-contact-ticket" value="Submit query" onclick="return subm_contact();">
                                	
                                </div>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
            	</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    
    