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
                if($('#email').val()=="")
                {
                    alert('Please enter your email');
                    return false;
                }
                var email=$('#email').val();
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(!email.match(mailformat))
                { 
                    alert("You have entered an invalid email address!");
                    return false;
                }
                if($('#sub').val()=="")
                {
                    alert('Please enter the Subject');
                    return false;
                }
                if($('#msg').val()=="")
                {
                    alert('Please enter your Message');
                    return false;
                }
/*        console.log($('#fname').val()+$('#lname').val()+$('#email').val()+$('#sub').val()+$('#msg').val());*/
                jQuery.ajax({
                            type:'POST',
                            //url:'http://Entowork.co.za/home/business_con/',
                            url:'/home/business_con/',
                            data:{
                                first_name: $('#fname').val(),
                                lastname_name : $('#lname').val(),
                                contact_email :$('#email').val(),
                                subject_msg : $('#sub').val(),
                                full_msg : $('#msg').val()
                            },
                            success:function(response){
                            alert("Success");
                            $('#mess').text('Thank you for submitting your details.A member of the Hireadronepilot team will be in contact with you soon.');
                            $('#fname').val('');
                            $('#lname').val('');
                            $('#email').val('');
                            $('#sub').val('');
                            $('#msg').val('');
                            }
                        });
        }
        
        </script>
<?php $fsa ="gasfasfasfsasa";
                    setcookie("var_attribute",$fsa); ?>
                    <div class="contact-right-block pull-right">
                        <div class="contact-form-main">
                            <?php
                        $attributes = array('name'=>'frm_contact','id'=>'frm_contact');
                        //print_r($attributes);
/*                        $js_code = '<script>' . $attributes . '</script>';
            echo $js_code;*/
            /*console_log($js_code);*/
                        echo form_open_multipart('business_con',$attributes);

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
                                            <input type="text" name="email" placeholder="Email" onblur="placeholder='Email'" id="email" onclick="placeholder=''" />
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="contact-form-r1">
                                    <label class="contact-form-r1-title">Subject</label>
                                    <div class="">
                                        <div class="contact-field1 contact-field-email">
                                            <input type="text" name="sub" placeholder="Subject" onblur="placeholder='Subject'" id="sub" onclick="placeholder=''" />
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="contact-form-r1">
                                    <label class="contact-form-r1-title">Message</label>
                                    <div class="">
                                        <div class="contact-massage-field">
                                            <textarea cols="1" rows="1" name="mess" placeholder="Describe your issue here..." onblur="placeholder='Describe your issue here...'" id="msg" onclick="placeholder=''" ></textarea>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-submit-btn">
                                    <input type="submit" name="sub" class="btn btn-default btn-contact-ticket" value="Submit query" onclick="return subm_contact();">
                                    <div><span id="mess"></span></div>
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

<!--     <div><h2>Let AJAX change this text</h2></div>

<button>Change Content</button>
                    <script>
$(document).ready(function(){
  $(document).ajaxSuccess(function(){
    alert("AJAX request successfully completed");
  });
  $("button").click(function(){
    $("div").text("hai");
  });
});
</script> -->
    <!-- <script>console.log('<?php echo "hello"; ?>');</script> -->