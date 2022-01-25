<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<link rel="shortcut icon" href="image/logo.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
    <title>Apprenticeship Contract Registration Form Preview & Edit</title>

    <style type="text/css">
        #div1,
        #div2,
        #div3 {
            display: none
        }
        
        input[type=submit]
{
  /*background-color: blue;*/
  border: none;
  color: white;
  font-weight:bold;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  background-image: linear-gradient(darkgreen,#53c653);
}

#submit_1{
    border: none;
  color: white;
  font-weight:bold;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  background-image: linear-gradient(red,red);
}




input[type=text],input[type=number],input[type=email],input[list=state],input[type=date],input[list=course_name],input[list=month],input[list=district],input[list=year],select,select[name=state],select[name=course_name] {
    background: transparent;
    border: none;
}

#submit[disabled]
{
 background: red;
}

        
        
        
        
        
        
        
        
        
        
        
    </style>
    <script type="text/javascript">
        function showHide(elem) {
            if (elem.selectedIndex != 0) {
                //hide the divs
                for (var i = 0; i < divsO.length; i++) {
                    divsO[i].style.display = 'none';
                }
                //unhide the selected div
                document.getElementById('div' + elem.value).style.display = 'block';
            }
        }

        window.onload = function() {
            //get the divs to show/hide
            divsO = document.getElementById("frmMyform").getElementsByTagName('div');
        }
    </script>
    

</head>

<body>



     <!--Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-sm-6">
                    <div class="right-icons">
                        <ul>
                            <li><img src="image/logo2.png" alt="logo" height="100"></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-10 col-sm-8">
                              <div class="left-content">
                <p style="font-size:30px;font-weight:bold"><em>National Apprenticeship Training Scheme (NATS)</em></p>
                <p style="font-size:17px;font-weight:bold">Instituted by Board of Apprenticeship Practical Training</p>
                <p style="font-size:17px;font-weight:bold">Ministry of Education, Government of India</p>
          </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                        APPRENTICESHIP CONTRACT REGISTRATION FORM PREVIEW & EDIT
                      </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <!--<ul class="nav">-->
                            <!--<li><a href="index.html">Home</a></li>-->
                            <!--                          <li><a href="meetings.html" class="active">Meetings</a></li>
                          <li><a href="index.html">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.html">Meeting Details</a></li>
                              </ul>
                          </li>
                          <li><a href="index.html">Courses</a></li> -->
                            <!--<li><a href="index.html">Contact Us</a></li>-->
                        <!--</ul>-->
                        <!--<a class='menu-trigger'>-->
                        <!--    <span>Menu</span>-->
                        <!--</a>-->
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

  <!--    <section class="heading-page header-text" id="top">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-12">-->
  <!--        <h6>Get all details</h6>-->
  <!--        <h2>Online Teaching and Learning Tools</h2>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <!--                <div class="thumb">
                  <div class="price">
                    <span>$14.00</span>
                  </div>
                  <div class="date">
                    <h6>Nov <span>12</span></h6>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>
                </div>-->
                                <div class="down-content">
                                    <div class="row">
                                        <form action="Db_Insert.php" method="POST" name="reg_form" id="reg_form">
                                            <p style="font-size:26px;font-weight:bold;text-align:center;">APPRENTICESHIP CONTRACT REGISTRATION FORM PREVIEW & EDIT</p>
                                            <p style="font-size:16px;font-weight:bold;text-align:center;">(Graduate or equivalent in general streams such as B.A, B.Sc & B.Com)</p>
                                            <p style="font-size:16px;font-weight:bold;text-align:center;color:red;">Category of Apprentice - Graduate</p>
                                            <p style="font-size:16px;font-weight:bold;text-align:center;color:red;">(PLEASE GO THROUGH YOUR FORM AND EDIT IF NECESSARY)</p>
                                            
                                            
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h5>1. Subject field of training(Designated or Optional Trade) : </h5> 
                                                    <b><input type="text" name="subject_field" style="text-transform:uppercase" value="<?php echo $_POST["subject_field"]; ?>"></b>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>2. <u>Personal Details</u></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Name of the Apprentice(As per Aadhar Card) :</b><br>
                                                    <b><input type="text" name="adhar_card_name" style="text-transform:uppercase" value="<?php echo $_POST["adhar_card_name"]; ?>"></b>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Father's Name : </b><br>
                                                <b><input type="text" name="father_name" style="text-transform:uppercase" value="<?php echo $_POST["father_name"]; ?>"></b>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • Mother's Name : </b><br>
                                                    <b><input type="text" name="mother_name" style="text-transform:uppercase" value="<?php echo $_POST["mother_name"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Aadhar Number :</b><br>
                                                      <b><input type="text" name="adhar_card" style="text-transform:uppercase" value="<?php echo $_POST["adhar_card"]; ?>"></b>
                                                      
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                                
                                                    
                                                    
                                            
                                            
                                            
                                            
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Community : </b> <br>
                                                         <b><input type="text" name="community" style="text-transform:uppercase" value="<?php echo $_POST["community"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Gender : </b><br>
                                                      <b><input type="text" name="gender" style="text-transform:uppercase" value="<?php echo $_POST["gender"]; ?>"></b>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                 
                                                    <b> • Date of Birth : </b><br>
                                                    <b><input type="text" name="dob" style="text-transform:uppercase" value="<?php echo $_POST["dob"]; ?>"></b>
                                                </div>
                                                
                                                <div class="col-md-6 mb-3">
                                                    <b>• Email Address :</b> <br>
                                                    <b><input size="50" type="text" name="email" value="<?php echo $_POST["email"]; ?>"></b>
                                                </div>
                                            </div>
                                                    <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <b>• Mobile Number :</b> <br>
                                                                <b><input type="text" name="mobile_no" style="text-transform:uppercase" value="<?php echo $_POST["mobile_no"]; ?>"></b>
                                                                
                                                            </div>
                                                </div>

                                            
                                            
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>3. <u>Communication Details</u></h4>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Communication Address of the Appprentice :</b> <br>
                                                    <b><input type="text" name="address" style="text-transform:uppercase" value="<?php echo $_POST["address"]; ?>"></b>
                                                </div>
                                                
                                            
                                                <div class="col-md-6 mb-3">
                                                    
                                                    
                                                    <b>• State : </b><br>
                                                    <b><input type="text" name="state" style="text-transform:uppercase" value="<?php echo $_POST["state"]; ?>"></b>
                                                    
                                            
                                                       
                                            </div>
                                            </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                             <b>• District : </b><br>
                                                      <b><input type="text" name="district" style="text-transform:uppercase" value="<?php echo $_POST["district"]; ?>"></b>
                                                    </div>
                                                        
                                                    
                                                <div class="col-md-6 mb-3">
                                                    <b>• Pin Code :</b><br>
                                                    <b><input type="text" name="pin" style="text-transform:uppercase" value="<?php echo $_POST["pin"]; ?>"></b>
                                                </div>
                                          </div>
                                            

                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>4. <u>Education Qualification considered eligible for apprenticeship training under the Act</u></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Name of the Institution/College University :</b><br>
                                                    <b><input type="text" name="name_college" style="text-transform:uppercase" value="<?php echo $_POST["name_college"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Qualification :</b><br>
                                                    <b><input type="text" name="course_name" style="text-transform:uppercase" value="<?php echo $_POST["course_name"]; ?>"></b>
                                                    
                                        
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Period of course (Yrs.) :</b><br>
                                                    <b><input type="text" name="course_duration" style="text-transform:uppercase" value="<?php echo $_POST["course_duration"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Month & Year of Passing :</b><br>
                                                     Month : <b><input type="text" name="month" style="text-transform:uppercase" value="<?php echo $_POST["month"]; ?>"></b><br>
                                                     Year : <b><input type="text" name="year" style="text-transform:uppercase" value="<?php echo $_POST["year"]; ?>"></b>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                            </div>






                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>5. <u>Training Detailed Information</u></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Date of Commencement of Training :</b><br>
                                                    <b><input type="text" name="commencement_training" style="text-transform:uppercase" value="<?php echo $_POST["commencement_training"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Period of Training<br>(Minimum 6 months to Maximum 36 months):</b><br>
                                                    <b><input type="text" name="period_of_training" style="text-transform:uppercase" value="<?php echo $_POST["period_of_training"]; ?>"></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Rate of Stipend payable by the establishment (<i class="fa fa-inr" aria-hidden="true"></i>):</b><br>
                                                    <b><input type="text" name="rate_stipend" style="text-transform:uppercase" value="<?php echo $_POST["rate_stipend"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Bank A/c No. to which STIPEND will be credited by the employer :</b><br>
                                                    <b><input type="text" name="bank_ac" style="text-transform:uppercase" value="<?php echo $_POST["bank_ac"]; ?>"></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• IFS Code of the Bank Branch :</b><br>
                                                    <b><input type="text" name="ifs_bank" style="text-transform:uppercase" value="<?php echo $_POST["ifs_bank"]; ?>"></b>
                                                </div>
                                                </div>
                                            
                                            
                                            
                                   
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>6. <u>Employer Details</u></h4>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Name of the Employer :</b><br>
                                                    <b><input type="text" name="name_address_emp" style="text-transform:uppercase" value="<?php echo $_POST["name_address_emp"]; ?>"></b>
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                     <b>• Address of the Employer :</b><br>
                                                    <b><input type="text" name="address_emp" style="text-transform:uppercase" value="<?php echo $_POST["address_emp"]; ?>"></b>
                                                    
                                                    
                                                    
                                                </div>
                                                </div>
                                                
                                                
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • E-mail Id of Employer :</b><br>
                                                    <b><input type="text" name="email_emp" size="50" value="<?php echo $_POST["email_emp"]; ?>"></b>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Telephone Number :</b><br>
                                                      <b><input type="text" name="telephone_emp" style="text-transform:uppercase" value="<?php echo $_POST["telephone_emp"]; ?>"></b>
                                                </div>
                                            </div>
                                                
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                     <b>• State of the Employer : </b><br>
                                                            <b><input type="text" name="state_emp" style="text-transform:uppercase" value="<?php echo $_POST["state_emp"]; ?>"></b>
                                                    
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                 <b>• District of Employer : </b><br>
                                                    <b><input type="text" name="district_emp" style="text-transform:uppercase" value="<?php echo $_POST["district_emp"]; ?>"></b>
                                                    </div>
                                                    </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• PIN Code of Employer : </b><br>
                                                    <b><input type="text" name="pin_emp" style="text-transform:uppercase" value="<?php echo $_POST["pin_emp"]; ?>"></b>
                                                </div>
                                            </div>
                                            
                                            

                                            
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 mb-3">-->
                                            <!--        <h5>7. Signature of Surety with Name & Address :</h5> -->
                                            <!--        <input type="text" name="sign_surety" required placeholder="signature"/>-->
                                                    
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 mb-3">-->
                                            <!--        <h5>8. FOR BOARD's USE: Registered under Sec. 4 of the Apprentices Act Vide Registration :</h5> -->
                                            <!--        <input type="text" name="board_use" style="text-transform:uppercase" placeholder="Board's Use" required/>-->
                                                    
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 mb-3">-->
                                            <!--        <h5>9. REGIONAL CENTRAL APPRENTICESHIP ADVISER :</h5> -->
                                            <!--        <input type="text" name="regional_adviser" style="text-transform:uppercase" required/>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            <br>
                                            
                                            <div class="row">
                                                    <div align="center">
                                                    <b>We, the Employer, Apprentice (the Guardian in the case of Minor Apprentices) hereby declare that we have read the Apprenticeship Act, 1961, and the Apprenticeship Rules 1992 and amendedment made time to time regarding the contract of apprenticeship training including obligation and agree to abide by all the provisions made thereunder. In case of default by either the apprentice or the employer, we agree to compensate the other party as per the provisions of the Apprenticeship Rules, 1992. [Main Provisions of the Rules may be seen in the Enclouser.(*)]<b>
                                                </div>
                                            </div>
                                            
                                            <br>
 
 
 
                                                <div align="center">
                                                    <!--<button id="submit_1" formaction="index.php">Edit</button>-->
                                                    <input type="submit" value="Submit" name="submit" id="submit">
                                                    
                                                </div>
</form>
                     
<!-- <div class="button ">
    <br>
    <button type="submit " class="btn btn-success ">Submit</button>
              </div> -->
                </div>
              </div>
            </div>
<!--            <div class="col-lg-12 ">
              <div class="main-button-red ">
                <a href="meetings.html ">Back To Meetings List</a>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </div>
    <div class="footer ">
      <p>Copyright © 2022 BOPT(ER), KOLKATA All Rights Reserved. 
          
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <script src="assets/js/isotope.min.js "></script>
    <script src="assets/js/owl-carousel.js "></script>
    <script src="assets/js/lightbox.js "></script>
    <script src="assets/js/tabs.js "></script>
    <script src="assets/js/video.js "></script>
    <script src="assets/js/slick-slider.js "></script>
    <script src="assets/js/custom.js "></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section=" ' + direction + ' "]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>