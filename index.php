<?php
// Start the session
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
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    
    <!--
TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
    <title>Apprenticeship Contract Registration Form</title>

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



/*.heighttext{*/
  
/*}*/

input[type=text],input[type=number],input[type=email],input[list=state],input[type=date],input[list=course_name],input[list=month],input[list=district],input[list=year],select,select[name=state],select[name=course_name] {
  /*width:20%;*/
  /*padding: 12px 20px;*/
  height:43px;
  margin: 8px 0;
  box-sizing: border-box;
  border-color:blue;
  border-radius: 12px;
  padding-left: 10px;
}


#submit[disabled]
{
 background: red;
}

        
        
      
        
        
        
        
        
        
        
        
    </style>
    
    <style type="text/css">
	.form {
		width:600px;
		margin: auto;
	}
</style>  
    
    
    <script>
        function show_alert() {
  alert("Please Review & Edit The Form");
}
    </script>
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
    
    <!--<script>-->
<!--    function validateForm() {-->
<!--    var mobile_no = document.forms["reg_form"]["mobile_no"];-->
<!--    if (mobile_no.value == "")-->
<!--           {-->
<!--                document.getElementById("mobile_no_error").innerText = "Please Enter Mobile Number";-->
<!--                document.forms["reg_form"]["submit"].disabled = true;-->
<!--               return;-->
<!--           }-->
<!--           if (mobile_no.value.length != 10) -->
<!--           {-->
<!--                document.getElementById("mobile_no_error").innerText = "Please enter your 10 Digit Contact Number";-->
<!--                document.forms["reg_form"]["submit"].disabled = true;-->
<!--                return;-->
<!--           }-->
<!--           else{-->
<!--               document.getElementById("mobile_no_error").innerText = "";-->
<!--               document.forms["reg_form"]["submit"].disabled = false;-->
<!--                return;-->
<!--           }-->
           
<!--    }-->
<!--</script>-->
    
    
    
   
    
    
    

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
                        APPRENTICESHIP CONTRACT REGISTRATION FORM
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
                                        <form action="preview.php" method="POST" name="reg_form" id="reg_form" oninput="validateForm()">
                                            <p style="font-size:26px;font-weight:bold;text-align:center;">APPRENTICESHIP CONTRACT REGISTRATION FORM</p>
                                            <p style="font-size:16px;font-weight:bold;text-align:center;">(Graduate or equivalent in general streams such as B.A, B.Sc & B.Com)</p>
                                            <p style="font-size:16px;font-weight:bold;text-align:center;color:red;">Category of Apprentice - Graduate</p>
                                            
                                            
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h5>1. Subject field of training(Designated or Optional Trade) : </h5> 
                                                    <input type="text" name="subject_field" placeholder="subject field" required style="text-transform:uppercase"/>
                                                    (characters A-Z)
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
                                                    <input type="text" name="adhar_card_name" placeholder="name" required style="text-transform:uppercase"/>
                                                    (characters A-Z)
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Father's Name : </b><br>
                                                    <input type="text" name="father_name" placeholder="Father's Name" required style="text-transform:uppercase"/>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • Mother's Name : </b><br>
                                                    <input type="text" name="mother_name" placeholder="Mother's Name" required style="text-transform:uppercase"/>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Aadhar Number :</b><br>
                                                      <input type="text"  placeholder="Aadhar Card No." name="adhar_card" maxlength="12" style="text-transform:uppercase"/>
                                                      (max 12 digits)
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                                
                                                    
                                                    
                                            
                                            
                                            
                                            
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Community(Please tick in appropiate box) : <br><br>
                                                         <input type="radio" name="community" value="S.C"/> S.C &nbsp;
                                                         
                                                         <input type="radio" name="community" value="S.T"/> S.T &nbsp;
                                                      
                                                          <input type="radio" name="community" value="O.B.C"/> O.B.C &nbsp;
                                                      
                                                          <input type="radio" name="community" value="P.W.D"/> P.W.D &nbsp;
                                                      
                                                         <input type="radio" name="community" value="MINORITY"/> MINORITY &nbsp;
                                                      
                                                          <input type="radio" name="community" value="GENERAL"/> GENERAL  &nbsp;
                                                          </b> 
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Gender(Please Tick in appropiate box) :<br><br>
                                                      <input type="radio" name="gender" value="M"/> Male &nbsp;
                                                      
                                                       <input type="radio" name="gender" value="F"/> Female &nbsp;
                                                     
                                                       <input type="radio" name="gender" value="TG"/> Transgender &nbsp;
                                                      
                                                      </b>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                 
                                                    <b> • Date of Birth : </b><br>
                                                    <input type="date" name="dob" required/>
                                                </div>
                                                
                                                <div class="col-md-6 mb-3">
                                                    <b>• Email Address :</b> <br>
                                                    <input type="email" name="email" placeholder="Email ID" required></br><br>
                                                </div>
                                            </div>
                                                    <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <b>• Mobile Number :</b> <br>
                                                                <input type="text" name="mobile_no" placeholder="Contact No." required  maxlength="10" style="text-transform:uppercase">
                                                                (Max 10 Characters 0-9)
                                                                <p id="mobile_no_error" style="color:red"></p>
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
                                                    <input type="text" name="address" placeholder="address" required style="text-transform:uppercase">
                                                </div>
                                                
                                            
                                                <div class="col-md-6 mb-3">
                                                    
                                                    
                                                    <label><b>• State : </b><br>
                                            <!--          <input list="state"  placeholder="State" name="state" style="text-transform:uppercase"><br></label>-->
                                            <!--<datalist id="state" >-->
                                                <select name="state">
                                                            <option value="">SELECT STATE</option>
                                                            <option value="AN">Andaman and Nicobar Islands</option>
                                                            <option value="AR">Arunachal Pradesh</option>
                                                            <option value="AS">Assam</option>
                                                            <option value="BR">Bihar</option>
                                                            <option value="CH">Chandigarh</option>
                                                            <option value="CG">Chhattisgarh</option>
                                                            <option value="DD">Dadar and Nagar Haveli and Daman And Diu</option>
                                                            <option value="GA">Goa</option>
                                                            <option value="GJ">Gujarat</option>
                                                            <option value="HR">Haryana</option>
                                                            <option value="HP">Himachal Pradesh</option>
                                                            <option value="JK">Jammu and Kashmir</option>
                                                            <option value="JH">Jharkhand</option>
                                                            <option value="KA">Karnataka</option>
                                                            <option value="KL">Kerala</option>
                                                            <option value="LA">Ladakh</option>
                                                            <option value="LD">Lakshadweep</option>
                                                            <option value="MP">Madhya Pradesh</option>
                                                            <option value="MH">Maharashtra</option>
                                                            <option value="MN">Manipur</option>
                                                            <option value="ML">Meghalaya</option>
                                                            <option value="MZ">Mizoram</option>
                                                            <option value="NL">Nagaland</option>
                                                            <option value="DL">National Capital Territory of Delhi</option>
                                                            <option value="OD">Odisha</option>
                                                            <option value="PY">Puducherry</option>
                                                            <option value="PB">Punjab</option>
                                                            <option value="RJ">Rajasthan</option>
                                                            <option value="SK">Sikkim</option>
                                                            <option value="TN">Tamil Nadu</option>
                                                            <option value="TG">Telangana</option>
                                                            <option value="TR">Tripura</option>
                                                            <option value="UP">Uttar Pradesh</option>
                                                            <option value="UK">Uttarakhand</option>
                                                            <option value="WB">West Bengal</option>
                                                        

                                                </select>
                                            <!--</datalist>-->
                                                       
                                            </div>
                                            </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                             <b>• District : </b><br>
                                                      <select name="district">
                                                    <!-- andhra pradesh -->
                                                        <option value="">SELECT DISTRICT</option>
                                                        <option value="AN">Anantapur</option>
                                                        <option value="CH">Chittoor</option>
                                                        <option value="EG">East Godavari</option>
                                                        <option value="GU">Guntur</option>
                                                        <option value="CU">YSR Kadapa</option>
                                                        <option value="KR">Krishna</option>
                                                        <option value="KU">Kurnool</option>
                                                        <option value="PR">Prakasam</option>
                                                        <option value="NE">Sri Potti Sriramulu Nellore</option>
                                                        <option value="SR">Srikakulam</option>
                                                        <option value="VS">Vizianagram</option>
                                                        <option value="VZ">Vishakapatnam</option>
                                                        <option value="WG">West Godavari</option>
                                                    <!-- arunachal pradesh -->
                                                        <option value="AJ">Anjaw</option>
                                                        <option value="CH">Changlang</option>
                                                        <option value="EK">East Kameng</option>
                                                        <option value="ES">East Siang</option>
                                                        <option value="">Kamle</option>
                                                        <option value="">Kra Daddi</option>
                                                        <option value="KK">Kurung Kume</option>
                                                        <option value="">Lepa Rada</option>
                                                        <option value="EL">Lohit</option>
                                                        <option value="LD">Longding</option>
                                                        <option value="DV">Lower Dibang Valley</option>
                                                        <option value="">Lower Siang</option>
                                                        <option value="LB">Lower Subansiri</option>
                                                        <option value="">Namsal</option>
                                                        <option value="">Pakke-Kessang</option>
                                                        <option value="PA">Papum Pare</option>
                                                        <option value="">Shi Yomi</option>
                                                        <option value="">Siang</option>
                                                        <option value="TA">Tawang</option>
                                                        <option value="TI">Tirap</option>
                                                        <option value="UD">Upper Dibang Valley</option>
                                                        <option value="US">Upper Siang</option>
                                                        <option value="UB">Upper Subansiri</option>
                                                        <option value="WK">West Kameng</option>
                                                        <option value="WS">West Siang</option>
                                                    <!-- Assam -->
                                                        <option value="">Bajali</option>
                                                        <option value="BK">Baksa</option>
                                                        <option value="BP">Barpeta</option>
                                                        <option value="BS">Biswanath</option>
                                                        <option value="BO">Bongaigaon</option>
                                                        <option value="CA">Cachar</option>
                                                        <option value="CD">Chiraideo</option>
                                                        <option value="CH">Chirang</option>
                                                        <option value="DR">Darrang</option>
                                                        <option value="DM">Dhemaji</option>
                                                        <option value="DU">Dhubri</option>
                                                        <option value="DI">Dibrugarh</option>
                                                        <option value="NC">Dima Hasao</option>
                                                        <option value="GP">Goalpara</option>
                                                        <option value="GG">Golaghat</option>
                                                        <option value="HA">Hailakandi</option>
                                                        <option value="HJ">Hojai</option>
                                                        <option value="JO">Jorhat</option>
                                                        <option value="KU">Kamrup</option>
                                                        <option value="KM">Kamrup Metropolitan</option>
                                                        <option value="KG">Karbi Anglong</option>
                                                        <option value="KR">Karimganj</option>
                                                        <option value="KJ">Kokrajhar</option>
                                                        <option value="LA">Lakhimpur</option>
                                                        <option value="MJ">Majuli</option>
                                                        <option value="MA">Morigaon</option>
                                                        <option value="NN">Nagaon</option>
                                                        <option value="NB">Nalbari</option>
                                                        <option value="ST">Sivasagar</option>
                                                        <option value="SM">South Salmara Mankachar</option>
                                                        <option value="SO">Sonitpur</option>
                                                        <option value="TI">Tinksukia</option>
                                                        <option value="UD">Udalguri</option>
                                                        <option value="WK">West Karbi Anglong</option>
                                                    <!-- bihar -->
                                                        <option value="AR"> Araria</option>
                                                        <option value="AR">Arwal</option>
                                                        <option value="AU">Aurangabad</option>
                                                        <option value="BA">Banka</option>
                                                        <option value="BE">Begusarai</option>
                                                        <option value="BG">Bhagalpur</option>
                                                        <option value="BJ">Bhojpur</option>
                                                        <option value="BU">Buxar</option>
                                                        <option value="DA">Darbhanga</option>
                                                        <option value="EC">East Champaran</option>
                                                        <option value="GA">Gaya</option>
                                                        <option value="GO">Gopalganj</option>
                                                        <option value="JA">Jamui</option>
                                                        <option value="JE">Jehanabad</option>
                                                        <option value="KM">Kaimur</option>
                                                        <option value="KT">Katihar</option>
                                                        <option value="KH">Khagaria</option>
                                                        <option value="KI">Kishanganj</option>
                                                        <option value="LA">Lakhisarai</option>
                                                        <option value="MP">Madhepura</option>
                                                        <option value="MB">Madhubani</option>
                                                        <option value="MG">Munger</option>
                                                        <option value="MZ">Muzaffarpur</option>
                                                        <option value="NL">Nalanda</option>
                                                        <option value="NW">Nawada</option>
                                                        <option value="PA">Patna</option>
                                                        <option value="PU">Purnia</option>
                                                        <option value="RO">Rohtas</option>
                                                        <option value="SH">Saharsa</option>
                                                        <option value="SM">Samastipur</option>
                                                        <option value="SR">Saran</option>
                                                        <option value="SP">Sheikpura</option>
                                                        <option value="SO">Sheohar</option>
                                                        <option value="ST">Sitamarhi</option>
                                                        <option value="SW">Siwan</option>
                                                        <option value="SU">Supaul</option>
                                                        <option value="VA">Vaishali</option>
                                                        <option value="WC">West Champaran</option>
                                                    <!-- Chattisgarh -->
                                                        <option value="">Balod</option>
                                                        <option value="">Baloda Bazar-Bhatapara</option>
                                                        <option value="">Balrampur</option>
                                                        <option value="BA">Bastar</option>
                                                        <option value="">Bemetara</option>
                                                        <option value="BJ">Bijapur</option>
                                                        <option value="BI">Bilaspur</option>
                                                        <option value="DA">Dantewada</option>
                                                        <option value="DH">Dhamtari</option>
                                                        <option value="DU">Durg</option>
                                                        <option value="">Gariaband</option>
                                                        <option value="">Gaurella-Pendra-Marwahi</option>
                                                        <option value="JC">Janjgir-Champa</option>
                                                        <option value="JA">Jashpur</option>
                                                        <option value="KW">Kabirdham</option>
                                                        <option value="KK">Kanker</option>
                                                        <option value="">Kondagaon</option>
                                                        <option value="KB">Korba</option>
                                                        <option value="KJ">Korea</option>
                                                        <option value="MA">Mahasumund</option>
                                                        <option value="MG">Manendragarh-Chirmiri-Bharatpur</option>
                                                        <option value="MM">Mohla Manpur</option>
                                                        <option value="">Mungeli</option>
                                                        <option value="NR">Narayanpur</option>
                                                        <option value="RG">Raigarh</option>
                                                        <option value="RP">Raipur</option>
                                                        <option value="RN">Rajnandgaon</option>
                                                        <option value="SB">Sarangarh-Bilaigarh</option>
                                                        <option value="ST">Shakti</option>
                                                        <option value="SK">Sukma</option>
                                                        <option value="">Surajpur</option>
                                                        <option value="SJ">Surguja</option>
                                                    <!-- goa -->
                                                        <option value="SG">North Goa</option>
                                                        <option value="NG">South Goa</option>
                                                    <!-- Gujarat -->
                                                        <option value="AH">Ahmedabad</option>
                                                        <option value="AM">Amreli</option>
                                                        <option value="AN">Anand</option>
                                                        <option value="AR">Aravalli</option>
                                                        <option value="BK">Banaskantha</option>
                                                        <option value="BR">Bharuch</option>
                                                        <option value="BV">Bhavnagar</option>
                                                        <option value="BT">Botad</option>
                                                        <option value="CU">Chota Udaipur</option>
                                                        <option value="DA">Dahod</option>
                                                        <option value="DG">Dang</option>
                                                        <option value="DD">Devbhumi Dwarka</option>
                                                        <option value="GA">Gandhinagar</option>
                                                        <option value="GS">Gir Somnath</option>
                                                        <option value="JA">Jamnagar</option>
                                                        <option value="JU">Junagarh</option>
                                                        <option value="KH">Kheda</option>
                                                        <option value="KA">Kutch</option>
                                                        <option value="MH">Mahisagar</option>
                                                        <option value="MB">Morbi</option>
                                                        <option value="NR">Narmada</option>
                                                        <option value="NV">Navsari</option>
                                                        <option value="PM">Panchamahal</option>
                                                        <option value="PA">Patan</option>
                                                        <option value="PO">Porbandar</option>
                                                        <option value="RA">Rajkot</option>
                                                        <option value="SK">Sabarkantha</option>
                                                        <option value="ST">Surat</option>
                                                        <option value="SN">Surendranagar</option>
                                                        <option value="TA">Tapi</option>
                                                        <option value="VD">Vadodara</option>
                                                        <option value="VL">Valsad</option>

                                                    <!-- haryana -->
                                                        <option value="AM">Amabala</option>
                                                        <option value="BH">Bhiwani</option>
                                                        <option value="CD">Charkhi Dadri</option>
                                                        <option value="HR">Faridabad</option>
                                                        <option value="FT">Fatehabad</option>
                                                        <option value="GU">Gurugram</option>
                                                        <option value="HI">Hisar</option>
                                                        <option value="JH">Jhajjar</option>
                                                        <option value="JI">Jind</option>
                                                        <option value="KT">Kaithal</option>
                                                        <option value="KR">Karnal</option>
                                                        <option value="KU">Kurukshetra</option>
                                                        <option value="MA">Mahendragarh</option>
                                                        <option value="MW">Nuh</option>
                                                        <option value="PW">Palwal</option>
                                                        <option value="PK">Panchkula</option>
                                                        <option value="PP">Panipat</option>
                                                        <option value="RE">Rewari</option>
                                                        <option value="RO">Rohtak</option>
                                                        <option value="SI">Sirsa</option>
                                                        <option value="SNP">Sonipat</option>
                                                        <option value="YN">Yamunanagar</option>
                                                    <!-- Himachal Pradesh  -->
                                                        <option value="BI">Bilaspur</option>
                                                        <option value="CH">Chamba</option>
                                                        <option value="HA">Hamirpur</option>
                                                        <option value="KA">Kangra</option>
                                                        <option value="KI">Kinnaur</option>
                                                        <option value="KU">Kullu</option>
                                                        <option value="LS">Lahaul and Spiti</option>
                                                        <option value="MA">Mandi</option>
                                                        <option value="SH">Shimla</option>
                                                        <option value="SI">Sirmaur</option>
                                                        <option value="SO">Solan</option>
                                                        <option value="UN">Una</option>
                                                    <!-- Jharkhand -->
                                                        <option value="BO">Bokaro</option>
                                                        <option value="CH">Chatra</option>
                                                        <option value="DE">Deogarh</option>
                                                        <option value="DH">Dhanbad</option>
                                                        <option value="DU">Dumka</option>
                                                        <option value="ES">East Singhbhum</option>
                                                        <option value="GA">Garhwa</option>
                                                        <option value="GI">Giridh</option>
                                                        <option value="GO">Godda</option>
                                                        <option value="GU">Gumla</option>
                                                        <option value="HA">Hazirabag</option>
                                                        <option value="JA">Jamtara</option>
                                                        <option value="KH">Khunti</option>
                                                        <option value="KO">Koderma</option>
                                                        <option value="LA">Latehar</option>
                                                        <option value="LO">Lohardaga</option>
                                                        <option value="PK">Pakur</option>
                                                        <option value="PL">Palamu</option>
                                                        <option value="RM">Ramgarh</option>
                                                        <option value="RA">Ranchi</option>
                                                        <option value="SA">Sahibganj</option>
                                                        <option value="SK">Seraikela-Kharsawan</option>
                                                        <option value="SI">Simdega</option>
                                                        <option value="WS">West Singhbhum</option>
                                                    <!-- Karnataka -->
                                                        <option value="BK">Bagalkot</option>
                                                        <option value="BL">Ballari</option>
                                                        <option value="BG">Belgaum</option>
                                                        <option value="BR">Bengaluru Gramin</option>
                                                        <option value="BN">Bengaluru nagara</option>
                                                        <option value="BD">Bidar</option>
                                                        <option value="CJ">Chamarajanagara</option>
                                                        <option value="CK">Chikkaballapur</option>
                                                        <option value="CK">Chikkamagaluru</option>
                                                        <option value="CT">Chitradurga</option>
                                                        <option value="DK">Dakshina Kannada</option>
                                                        <option value="DA">Davanagere</option>
                                                        <option value="DH">Dharwad</option>
                                                        <option value="GA">Gadag</option>
                                                        <option value="GU">Kalaburagi</option>
                                                        <option value="HS">Hassan</option>
                                                        <option value="HV">Haveri</option>
                                                        <option value="KD">Kodagu</option>
                                                        <option value="KL">Kolar</option>
                                                        <option value="KP">Koppala</option>
                                                        <option value="MA">Mandya</option>
                                                        <option value="MY">Mysuru</option>
                                                        <option value="RA">Raichur</option>
                                                        <option value="RM">Ramanagara</option>
                                                        <option value="SH">Shivamogga</option>
                                                        <option value="TU">Tumakuru</option>
                                                        <option value="UD">Udipi</option>
                                                        <option value="UK">Uttara Kannada</option>
                                                        <option value="">Vijayanagara</option>
                                                        <option value="BJ">Vijayapura</option>
                                                        <option value="YG">Yadgir</option>
                                                    <!-- Kerala -->
                                                        <option value="AL">Alappuzha</option>
                                                        <option value="ER">Ernakulam</option>
                                                        <option value="ID">Idukki</option>
                                                        <option value="KN">Kannur</option>
                                                        <option value="KS">Kasaragod</option>
                                                        <option value="KL">Kollam</option>
                                                        <option value="KT">Kottayam</option>
                                                        <option value="KZ">Kozhikode</option>
                                                        <option value="MA">Mallappuram</option>
                                                        <option value="PL">Palakkad</option>
                                                        <option value="PT">Pathanamthitta</option>
                                                        <option value="TS">Thrissur</option>
                                                        <option value="TV">Thiruvananthapuram</option>
                                                        <option value="WA">Wayanad</option>
                                                    <!-- Madhya Pradesh -->
                                                        <option value="AG">Agar malwa</option>
                                                        <option value="AL">Alirajpur</option>
                                                        <option value="AP">Anuppur</option>
                                                        <option value="AS">Ashoknagar</option>
                                                        <option value="BL">Balaghat</option>
                                                        <option value="BR">Barwani</option>
                                                        <option value="BE">Betul</option>
                                                        <option value="BD">Bhind</option>
                                                        <option value="BP">Bhopal</option>
                                                        <option value="BU">Burhanpur</option>
                                                        <option value="CH">Chachaura-Binaganj</option>
                                                        <option value="CT">Chhatarpur</option>
                                                        <option value="CN">Chhindwara</option>
                                                        <option value="DM">Damoh</option>
                                                        <option value="DT">Datia</option>
                                                        <option value="DE">Dewas</option>
                                                        <option value="DH">Dhar</option>
                                                        <option value="DI">Dindori</option>
                                                        <option value="GU">Guna</option>
                                                        <option value="GW">Gwalior</option>
                                                        <option value="HA">Harda</option>
                                                        <option value="HO">Narmadapuram</option>
                                                        <option value="IN">Indore</option>
                                                        <option value="JA">Jabalpur</option>
                                                        <option value="JH">Jhabua</option>
                                                        <option value="KA">Katni</option>
                                                        <option value="EN">Khandwa (EAST NIMAR)</option>
                                                        <option value="WN">Khargone (WEST NIMAR)</option>
                                                        <option value="">Maihar</option>
                                                        <option value="ML">Mandla</option>
                                                        <option value="MS">Mandsaur</option>
                                                        <option value="MO">Morena</option>
                                                        <option value="NA">Narsinghpur</option>
                                                        <option value="">Nagda</option>
                                                        <option value="NE">Neemuch</option>
                                                        <option value="">Niwari</option>
                                                        <option value="PA">Panna</option>
                                                        <option value="RS">Raisen</option>
                                                        <option value="RG">Rajgarh</option>
                                                        <option value="RL">Ratlam</option>
                                                        <option value="RE">Rewa</option>
                                                        <option value="SG">Sagar</option>
                                                        <option value="ST">Satna</option>
                                                        <option value="SR">Sehore</option>
                                                        <option value="SO">Seoni</option>
                                                        <option value="SH">Shahdol</option>
                                                        <option value="SJ">Shajapur</option>
                                                        <option value="SP">Sheopur</option>
                                                        <option value="SV">Shivpuri</option>
                                                        <option value="SI">Sidhi</option>
                                                        <option value="SN">Singrauli</option>
                                                        <option value="TI">Tikamgarh</option>
                                                        <option value="UJ">Ujjain</option>
                                                        <option value="UM">Umaria</option>
                                                        <option value="VI">Vidisha</option>
                                                        <option value="LN">Lavkushnagar</option>
                                                    <!-- Maharashtra -->
                                                        <option value="AH">Ahmednagar</option>
                                                        <option value="AK">Akola</option>
                                                        <option value="AM">Amravati</option>
                                                        <option value="AU">Aurangabad</option>
                                                        <option value="BI">Beed</option>
                                                        <option value="BH">Bhandara</option>
                                                        <option value="BU">Buldhana</option>
                                                        <option value="CH">Chandrapur</option>
                                                        <option value="DH">Dhule</option>
                                                        <option value="GA">Gadchiroli</option>
                                                        <option value="GO">Gondia</option>
                                                        <option value="HI">Hingoli</option>
                                                        <option value="JG">Jalgaon</option>
                                                        <option value="JN">Jalna</option>
                                                        <option value="KO">Kolhapur</option>
                                                        <option value="LA">Latur</option>
                                                        <option value="MC">Mumbai City</option>
                                                        <option value="MU">Mumbai Subarban</option>
                                                        <option value="NG">Nagpur</option>
                                                        <option value="ND">Nanded</option>
                                                        <option value="NB">Nandurbar</option>
                                                        <option value="NS">Nashik</option>
                                                        <option value="OS">Osmanabad</option>
                                                        <option value="PL">Palghar</option>
                                                        <option value="PA">Parbhani</option>
                                                        <option value="PU">Pune</option>
                                                        <option value="RG">Raigad</option>
                                                        <option value="RT">Ratnagiri</option>
                                                        <option value="SN">Sangli</option>
                                                        <option value="ST">Satara</option>
                                                        <option value="SI">Sindhudurg</option>
                                                        <option value="SO">Solapur</option>
                                                        <option value="TH">Thane</option>
                                                        <option value="WR">Wardha</option>
                                                        <option value="WS">Washim</option>
                                                        <option value="YA">Yavatmal</option>

                                                    <!-- Manipur -->
                                                        <option value="BPR">Bishnupur</option>
                                                        <option value="CDL">Chandel</option>
                                                        <option value="CCPR">Churachandpur</option>
                                                        <option value="IE">Imphal East</option>
                                                        <option value="IW">Imphal West</option>
                                                        <option value="JBM">Jiribam</option>
                                                        <option value="KAK">Kakching</option>
                                                        <option value="KJ">Kamjong</option>
                                                        <option value="KPI">Kangpokpi</option>
                                                        <option value="NL">Noney</option>
                                                        <option value="PZ">Pherzawl</option>
                                                        <option value="SE">Senapati</option>
                                                        <option value="TML">Tamenglong</option>
                                                        <option value="TNL">Tengnoupal</option>
                                                        <option value="TBL">Thoubal</option>
                                                        <option value="UKR">Ukhurul</option>
                                                    <!-- Meghalaya -->
                                                        <option value="EG">East Garo Hills</option>
                                                        <option value="EK">East Khasi Hills</option>
                                                        <option value="">East Jaintia Hills</option>
                                                        <option value="">North Garo Hills</option>
                                                        <option value="RB">Ri Bhoi</option>
                                                        <option value="SG">South Garo Hills</option>
                                                        <option value="">South West Garo Hills</option>
                                                        <option value="">South West Khasi Hills</option>
                                                        <option value="WJ">West Jaintia Hills</option>
                                                        <option value="WG">West Garo Hills</option>
                                                        <option value="WK">West Khasi Hills</option>
                                                    <!-- Mizoram -->
                                                        <option value="AI">Aizawl</option>
                                                        <option value="CH">Champhai</option>
                                                        <option value="">Hnahthial</option>
                                                        <option value="">Khawzawl</option>
                                                        <option value="KO">Kolasib</option>
                                                        <option value="LA">Lawngtlai</option>
                                                        <option value="LU">Lunglei</option>
                                                        <option value="MA">Mamit</option>
                                                        <option value="SA">Saiha</option>
                                                        <option value="">Saitual</option>
                                                        <option value="SE">Serchhip</option>
                                                    <!-- Nagaland -->
                                                        <option value="DI">Chumukedima</option>
                                                        <option value="DI">Dimapur</option>
                                                        <option value="KI">Kiphire</option>
                                                        <option value="KO">Kohima</option>
                                                        <option value="LO">Longleng</option>
                                                        <option value="MK">Mokokchung</option>
                                                        <option value="MN">Mon</option>
                                                        <option value="">Niuland</option>
                                                        <option value="">Noklak</option>
                                                        <option value="PE">Peren</option>
                                                        <option value="PH">Phek</option>
                                                        <option value="">Tseminyu</option>
                                                        <option value="TU">Tuensang</option>
                                                        <option value="WO">Wokha</option>
                                                        <option value="ZU">Zunhebota</option>
                                                    <!-- Odisha -->
                                                        <option value="AN">Angul</option>
                                                        <option value="BD">Boudh</option>
                                                        <option value="BH">Bhadrak</option>
                                                        <option value="BL">Balangir</option>
                                                        <option value="BR">Bargarh</option>
                                                        <option value="BW">Balasore</option>
                                                        <option value="CU">Cuttack</option>
                                                        <option value="DE">Debagarh</option>
                                                        <option value="DH">Dhenkanal</option>
                                                        <option value="GN">Ganjam</option>
                                                        <option value="GP">Gajapati</option>
                                                        <option value="JH">Jharsuguda</option>
                                                        <option value="JP">Jajpur</option>
                                                        <option value="JS">Jagatsinghpur</option>
                                                        <option value="KH">Khordha</option>
                                                        <option value="KJ">Kendujhar</option>
                                                        <option value="KL">Kalahandi</option>
                                                        <option value="KN">Kandhamal</option>
                                                        <option value="KO">Koraput</option>
                                                        <option value="KP">Kendrapara</option>
                                                        <option value="ML">Malkangiri</option>
                                                        <option value="MY">Mayurbhanj</option>
                                                        <option value="NB">Nabarangpur</option>
                                                        <option value="NU">Nuapada</option>
                                                        <option value="NY">Nayagarh</option>
                                                        <option value="PU">Puri</option>
                                                        <option value="RA">Rayagada</option>
                                                        <option value="SA">Sambalpur</option>
                                                        <option value="SO">Subarnapur</option>
                                                        <option value="SU">Sundargarh</option>
                                                    <!-- Punjab -->
                                                        <option value="AM">Amritsar</option>
                                                        <option value="BNL">Barnala</option>
                                                        <option value="BA">Bathinda</option>
                                                        <option value="FI">Firozpur</option>
                                                        <option value="FR">Faridkot</option>
                                                        <option value="FT">Fatehgarh Sahib</option>
                                                        <option value="FA">Fazilka</option>
                                                        <option value="GU">Gurdaspur</option>
                                                        <option value="HO">Hoshiarpur</option>
                                                        <option value="JA">Jalandhar</option>
                                                        <option value="KA">Kapurthala</option>
                                                        <option value="LU">Ludhiana</option>
                                                        <option value="">Malerkotta</option>
                                                        <option value="MA">Mansa</option>
                                                        <option value="MO">Moga</option>
                                                        <option value="MU">Sri Mukhtar Sahib</option>
                                                        <option value="PA">Pathankot</option>
                                                        <option value="PA">Patiala</option>
                                                        <option value="RU">Rupnagar</option>
                                                        <option value="SAS">Sahibzada Ajit Singh Nagar</option>
                                                        <option value="SA">Sangrur</option>
                                                        <option value="PB">Sahid Bhagat Singh Nagar</option>
                                                        <option value="TT">Tarn Taran</option>
                                                    <!-- Rajasthan -->
                                                        <option value="AJ">Ajmer</option>
                                                        <option value="AL">Alwar</option>
                                                        <option value="BI">Bikaner</option>
                                                        <option value="BM">Barmer</option>
                                                        <option value="BN">Banswara</option>
                                                        <option value="BP">Bharatpur</option>
                                                        <option value="BR">Baran</option>
                                                        <option value="BU">Bundi</option>
                                                        <option value="BW">Bhilwara</option>
                                                        <option value="CR">Churu</option>
                                                        <option value="CT">Chittorgarh</option>
                                                        <option value="DA">Dausa</option>
                                                        <option value="DH">Dholpur</option>
                                                        <option value="DU">Dungarpur</option>
                                                        <option value="GA">Sri Ganganagar</option>
                                                        <option value="HA">Hanumangarh</option>
                                                        <option value="JJ">Jhunjhunu</option>
                                                        <option value="JL">Jalore</option>
                                                        <option value="JO">Jodhpur</option>
                                                        <option value="JP">Jaipur</option>
                                                        <option value="JS">Jaisalmer</option>
                                                        <option value="JW">Jhalawar</option>
                                                        <option value="KA">Karauli</option>
                                                        <option value="KO">Kota</option>
                                                        <option value="NA">Nagaur</option>
                                                        <option value="PA">Pali</option>
                                                        <option value="PG">Pratapgarh</option>
                                                        <option value="RA">Rajasmand</option>
                                                        <option value="SK">Sikar</option>
                                                        <option value="SM">Sawai Madhopur</option>
                                                        <option value="SR">Sirohi</option>
                                                        <option value="TO">Tonk</option>
                                                        <option value="UD">Udaipur</option>
                                                    <!-- Sikkim -->
                                                        <option value="ES">East Sikkim </option>
                                                        <option value="NS">North Sikkim</option>
                                                        <option value="PS">Pakyong</option>
                                                        <option value="">Soreng</option>
                                                        <option value="SS">South Sikkim</option>
                                                        <option value="WS">West Sikkim</option>
                                                    <!-- Tamil Nadu -->
                                                        <option value="AY">Ariyalur</option>
                                                        <option value="CGL">Chengalpattu</option>
                                                        <option value="CH">Chennai</option>
                                                        <option value="CO">Coimbatore</option>
                                                        <option value="CU">Cuddalore</option>
                                                        <option value="DH">Dharmapuri</option>
                                                        <option value="DGL">Dindigul</option>
                                                        <option value="ER">Erode</option>
                                                        <option value="KL">Kallakurichi</option>
                                                        <option value="KC">Kanchipuram</option>
                                                        <option value="KK">Kanyakumari</option>
                                                        <option value="KA">Karur</option>
                                                        <option value="KR">Krishnagiri</option>
                                                        <option value="MDU">Madurai</option>
                                                        <option value="MUI">Mayiladuthurai</option>
                                                        <option value="MUI">Nagapattinam</option>
                                                        <option value="NM">Namakkal</option>
                                                        <option value="NI">Nilgiris</option>
                                                        <option value="PE">Perambalur</option>
                                                        <option value="PU">Pudukkottai</option>
                                                        <option value="RA">Ramanathapuram</option>
                                                        <option value="RN">Ranipet</option>
                                                        <option value="SA">Salem</option>
                                                        <option value="SVG">Sivaganga</option>
                                                        <option value="TS">Tenkasi</option>
                                                        <option value="TJ">Thanjavur</option>
                                                        <option value="TH">Theni</option>
                                                        <option value="TK">Thoothukudi (Tuticorin)</option>
                                                        <option value="TC">Tiruchirappalli</option>
                                                        <option value="TI">Tirunelveli</option>
                                                        <option value="TP">Tirupathur</option>
                                                        <option value="TP">Tiruppur</option>
                                                        <option value="TL">Tiruvallur</option>
                                                        <option value="TV">Tiruvannamalai</option>
                                                        <option value="TR">Tiruvarur</option>
                                                        <option value="VE">Vellore</option>
                                                        <option value="VL">Viluppuram</option>
                                                        <option value="VR">Virudhunagar</option>
                                                    <!-- Telengana -->
                                                        <option value="AD">Adilabad</option>
                                                        <option value="">Bhadradri Kothagudem
                                                        <option value="HY">Hyderabad</option>
                                                        <option value="WL">Hanamkonda</option>
                                                        <option value="">Jagtial</option>
                                                        <option value="">Jangaon</option>
                                                        <option value="">Jayashankar Bhoopalpally</option>
                                                        <option value="">Jogulamba Gadwal</option>
                                                        <option value="">Kamareddy</option>
                                                        <option value="KA">Karimnagar</option>
                                                        <option value="KH">Khammam</option>
                                                        <option value="">Komaram Bheem Asifabad</option>
                                                        <option value="">Mahabubabad</option>
                                                        <option value="MA">Mahabubnagar</option>
                                                        <option value="">Mancherial</option>
                                                        <option value="ME">Medak</option>
                                                        <option value="">Medchal-Malkajgiri</option>
                                                        <option value="">Mugulu</option>
                                                        <option value="">Nagarkurnool</option>
                                                        <option value="">Narayanpet</option>
                                                        <option value="NA">Nalgonda</option>
                                                        <option value="">Nirmal</option>
                                                        <option value="NI">Nizamabad</option>
                                                        <option value="">Peddapalli</option>
                                                        <option value="">Rajanna Sircilla</option>
                                                        <option value="RA">Rangareddy</option>
                                                        <option value="">Sangareddy</option>
                                                        <option value="">Siddipet</option>
                                                        <option value="">Suryapet</option>
                                                        <option value="">Vikarabad</option>
                                                        <option value="">Wanaparthy</option>
                                                        <option value="">Warangal</option>
                                                        <option value="">Yadadri Bhuvanagiri</option>
                                                    <!-- Tripura -->
                                                        <option value="DH">Dhalai</option>
                                                        <option value="GM">Gomati</option>
                                                        <option value="KH">Khowai</option>
                                                        <option value="NT">North Tripua</option>
                                                        <option value="SP">Sephahijala</option>
                                                        <option value="ST">South Tripura</option>
                                                        <option value="UK">Unokoti</option>
                                                        <option value="WT">West Tripura</option>
                                                    <!-- Uttar Pradesh -->
                                                        <option value="AG">Agra</option>
                                                        <option value="AL">Aligarh</option>
                                                        <option value="FZ">Ayodhya</option>
                                                        <option value="AN">Ambedkar Nagar</option>
                                                        <option value="AM">Amethi</option>
                                                        <option value="JP">Amroha</option>
                                                        <option value="AU">Auraiya</option>
                                                        <option value="AZ">Azamgarh</option>
                                                        <option value="BG">Bagpat</option>
                                                        <option value="BH">Bahraich</option>
                                                        <option value="BL">Ballia</option>
                                                        <option value="BP">Balrampur</option>
                                                        <option value="BN">Banda</option>
                                                        <option value="BB">Bara Banki</option>
                                                        <option value="BR">Bareilly</option>
                                                        <option value="BH">Bhadohi</option>
                                                        <option value="BI">Bijnor</option>
                                                        <option value="BD">Badaun</option>
                                                        <option value="BU">Bulandshahr</option>
                                                        <option value="CD">Chandauli</option>
                                                        <option value="CT">Chitrakoot</option>
                                                        <option value="DE">Deoria</option>
                                                        <option value="ET">Etah</option>
                                                        <option value="EW">Etawah</option>
                                                        <option value="FR">Farrukhabad</option>
                                                        <option value="FT">Fatehpur</option>
                                                        <option value="FI">Firozabad</option>
                                                        <option value="GB">Gautam Buddha Nagar</option>
                                                        <option value="GZ">Ghaziabad</option>
                                                        <option value="GP">Ghazipur</option>
                                                        <option value="GN">Gonda</option>
                                                        <option value="GR">Gorakhpur</option>
                                                        <option value="HM">Hamirpur</option>
                                                        <option value="PN">Hapur</option>
                                                        <option value="HR">Hardoi</option>
                                                        <option value="HT">Hathras</option>
                                                        <option value="JL">Jalaun</option>
                                                        <option value="JU">Jaunpur</option>
                                                        <option value="JH">Jhansi</option>
                                                        <option value="KJ">Kannauj</option>
                                                        <option value="KD">Kanpur Dehat</option>
                                                        <option value="KN">Kanpur Nagar</option>
                                                        <option value="KR">Kasganj</option>
                                                        <option value="KS">Kaushambi</option>
                                                        <option value="KU">Kushinagar</option>
                                                        <option value="LK">Lakhimpur Kheri</option>
                                                        <option value="LA">Lalitpur</option>
                                                        <option value="LU">Lucknow</option>
                                                        <option value="MG">Maharajganj</option>
                                                        <option value="MH">Mahoba</option>
                                                        <option value="MP">Mainpuri</option>
                                                        <option value="MT">Mathura</option>
                                                        <option value="MB">Mau</option>
                                                        <option value="ME">Meerat</option>
                                                        <option value="MI">Mirzapur</option>
                                                        <option value="MO">Moradabad</option>
                                                        <option value="MU">Muzaffarnagar</option>
                                                        <option value="PI">Pilibhit</option>
                                                        <option value="PR">Pratapgarh</option>
                                                        <option value="AH">Prayagraj</option> 
                                                        <option value="RB">Raebareli</option>
                                                        <option value="RA">Rampur</option>
                                                        <option value="SA">Saharanpur</option>
                                                        <option value="SM">Sambhal</option>
                                                        <option value="SK">Sant Kabir Nagar</option>
                                                        <option value="SJ">Shahjahanpur </option>
                                                        <option value="SH">Shamli</option>
                                                        <option value="SV">Shravasti</option>
                                                        <option value="SN">Siddhartnagar</option>
                                                        <option value="SI">Sitapur</option>
                                                        <option value="SO">Sonbhadra</option>
                                                        <option value="SU">Sultanpur</option>
                                                        <option value="UN">Unnao</option>
                                                        <option value="VA">Varanasi</option>
                                                    <!-- Uttarakhand -->
                                                        <option value="AL">Almora</option>
                                                        <option value="BA">Bageshwar</option>
                                                        <option value="CL">Chamoli</option>
                                                        <option value="CP">Champawat</option>
                                                        <option value="DD">Dehra Doon</option>
                                                        <option value="">Didihat</option>
                                                        <option value="HA">Haridwar</option>
                                                        <option value="">Kotdwar</option>
                                                        <option value="NA">Nainital</option>
                                                        <option value="PG">Pauri Garhwal</option>
                                                        <option value="PI">Pithoragarh</option>
                                                        <option value="">Ranikhet</option>
                                                        <option value="RP">Rudraprayag</option>
                                                        <option value="TG">Tehri Garhwal</option>
                                                        <option value="US">Udham Singh Nagar</option>
                                                        <option value="UT">Uttarkashi</option>
                                                        <option value="">Yamunotri</option>
                                                    <!-- West Bengal -->
                                                        <option value="AD">Alipurduar</option>
                                                        <option value="BN">Bankura</option>
                                                        <option value="BR">Paschim Bardhaman</option>
                                                        <option value="BR">Purba Bardhaman</option>
                                                        <option value="BI">Birbhum</option>
                                                        <option value="KB">Cooch Behar</option>
                                                        <option value="DD">Dakshin Dinajpur</option>
                                                        <option value="DA">Darjeeling</option>
                                                        <option value="HG">Hoogly</option>
                                                        <option value="HR">Howrah</option>
                                                        <option value="JA">Jalpaiguri</option>
                                                        <option value="JH">Jhargram</option>
                                                        <option value="KA">Kalimpong</option>
                                                        <option value="KO">Kolkata</option>
                                                        <option value="MA">Maldah</option>
                                                        <option value="MSD">Murshidabad</option>
                                                        <option value="NA">Nadia</option>
                                                        <option value="PN">North 24 Paragan</option>
                                                        <option value="PM">Paschim Medinipur</option>
                                                        <option val="PR">Purba Medinipur</option>
                                                        <option value="PU">Purulia</option>
                                                        <option value="PS">South 24 Paragana</option>
                                                        <option value="UD">Uttar Dinajpur</option>
                                                    <!-- Andaman Nicobar -->
                                                        <option val="NI">Nicobar</option>
                                                        <option val="NA">North and Middle Andaman</option>
                                                        <option val="SA">South Andaman</option>
                                                    <!-- Dadra and Nagar Haveli And Daman and Diu -->
                                                        <option val="DA">Daman</option>
                                                        <option val="DI">Diu</option>
                                                        <option val="DN">Dadra and Nagar Haveli</option>
                                                    <!-- Jammu and kashmir -->
                                                        <option value="AN">Anantnag</option>
                                                        <option value="BD">Budgam</option>
                                                        <option value="BPR">Bandipora</option>
                                                        <option value="BR">Baramula</option>
                                                        <option value="DO">Doda</option>
                                                        <option value="GB">Ganderbal</option>
                                                        <option value="JA">Jammu</option>
                                                        <option value="KT">Kathua</option>
                                                        <option value="KW">Kishtwar</option>
                                                        <option value="KG">Kulgam</option>
                                                        <option value="KU">Kupwara</option>
                                                        <option value="PO">Poonch</option>
                                                        <option value="PU">Pulwama</option>
                                                        <option value="RA">Rajouri</option>
                                                        <option value="RB">Ramban</option>
                                                        <option value="RS">Reasi</option>
                                                        <option value="SB">Samba</option>
                                                        <option value="SH">Sophian</option>
                                                        <option value="SR">Srinagar</option>
                                                        <option value="UD">Udhampur</option>
                                                    <!-- Ladakh -->
                                                        <option val="KR">Kargil</option>
                                                        <option val="LE">Leh</option>
                                                    <!-- Lakshadweep -->
                                                        <option value="LD">Lakshadweep</option>    
                                                    <!-- National Capital of Delhi -->
                                                        <option value="CD  ">Central Delhi</option>
                                                        <option value="ED">East Delhi</option>
                                                        <option value="ND">New Delhi</option>
                                                        <option value="NO">North Delhi</option>
                                                        <option value="NE">North East Delhi</option>
                                                        <option value="NW">North West Delhi</option>
                                                        <option value="">Shahdara</option>
                                                        <option value="SD">South Delhi</option>
                                                        <option value="">South East Delhi</option>
                                                        <option value="SW">South West Delhi</option>
                                                        <option value="WD">West Delhi</option>
                                                    <!-- Puducherry -->
                                                        <option value="KA">Karaikal</option>
                                                        <option value="MA">Mahe</option>
                                                        <option value="PO">Puducherry</option>
                                                        <option value="YA">Yanam</option>



                                                </select>
                                                    </div>
                                                        
                                                    
                                                <div class="col-md-6 mb-3">
                                                    <b>• Pin Code :</b><br>
                                                    <input type="text" name="pin" placeholder="Pin Code" maxlength="6" required style="text-transform:uppercase">
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
                                                    <input type="text" name="pin" placeholder="Pin Code" maxlength="6" required style="text-transform:uppercase">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label><b>• Qualification :</b><br>
                                                    <!--<input list="course_name"  placeholder="Course Name" name="course_name" required style="text-transform:uppercase"><br></label>-->
                                                            <select name="course_name">
<option value= "">SELECT COURSE</option>
<option value= "N001">Bachelor of Arts (B.A.) </option>
<option value= "N002">Bachelor of Science(B.Sc) </option>
<option value= "N003">Bachelor of Commerce (B.Com) </option>
<option value= "N004">Bachelor of Computer Application (BCA) </option>
<option value= "N005">Bachelor of Business Administration (BBA) </option>
<option value= "N006">Bachelor of Hotel Management (BHM) </option>
<option value= "N007">Bachelor of Fashion Designing (BFD) </option>
<option value= "N008">Bachelor of Management Science (BMS) </option>
<option value= "N009">Bachelor of Fine Arts (BFA) </option>
<option value= "N010">Bachelor of Event Management (BEM) </option>
<option value= "N011">Bachelor of Journalism and Mass Communication (BJMC) </option>
<option value= "N012">Bachelor of Social Work (BSW) </option>
<option value= "N013">Bachelor of Business Studies (BBS) </option>
<option value= "N014">Bachelor of Travel and Tourism Management (BTTM) </option>
<option value= "N015">Bachelor of Design (B. Design) </option>
<option value= "N016">Bachelor of Performing Arts (BPA) </option>
<option value= "N017">Bachelor of Physiotherapy (BPT) </option>
</select>
                                            </datalist>
                                                    
                                        
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Period of course (Yrs.) :</b><br>
                                                    <input type="text" name="course_duration" placeholder="Course Duration" required style="text-transform:uppercase">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Month & Year of Passing :</b><br>
                                                    
                                                    <input list="month"  placeholder="Month" name="month"  required style="text-transform:uppercase">
                                                     <datalist id="month" >
                                                            <select>
                                                                <option value="01">January</option>
                                                                <option value="02">February</option>
                                                                <option value="03">March</option>
                                                                <option value="04">April</option>
                                                                <option value="05">May</option>
                                                                <option value="06">June</option>
                                                                <option value="07">July</option>
                                                                <option value="08">August</option>
                                                                <option value="09">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                            </datalist>
                                                    
                                                    
                                                    <input list="year" name="year" placeholder="Year" required style="text-transform:uppercase">
                                                    <datalist id="year" >
                                                            <select>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                            </select>
                                            </datalist>
                                                    
                                                    
                                                    
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
                                                    <input type="date" name="commencement_training" required/>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Period of Training<br>(Minimum 6 months to Maximum 36 months):</b><br>
                                                    <input type="text" name="period_of_training" placeholder="Training Duration" required style="text-transform:uppercase">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Rate of Stipend payable by the establishment (<i class="fa fa-inr" aria-hidden="true"></i>):</b><br>
                                                    <input type="text" name="rate_stipend" placeholder="Stipend" required >
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Bank A/c No. to which STIPEND will be credited by the employer :</b><br>
                                                    <input type="text" name="bank_ac" placeholder="Bank a/c no." required style="text-transform:uppercase">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• IFS Code of the Bank Branch :</b><br>
                                                    <input type="text" name="ifs_bank" placeholder="IFSC code" required style="text-transform:uppercase" >
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
                                                    <input type="text" name="name_address_emp" required style="text-transform:uppercase" placeholder="name"  />
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                     <b>• Address of the Employer :</b><br>
                                                    <input type="text" name="address_emp" required style="text-transform:uppercase" placeholder="address"  />
                                                    
                                                    
                                                    
                                                </div>
                                                </div>
                                                
                                                
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • E-mail Id of Employer :</b><br>
                                                    <input type="email" name="email_emp" placeholder="Email ID" required/>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Telephone Number :</b><br>
                                                      <input type="text"  placeholder="Contact No." name="telephone_emp" maxlength="10"/>
                                                      (max 10 digits 0-9)
                                                </div>
                                            </div>
                                                
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                     <b>• State of the Employer : </b><br>
                                                     <select name="state_emp">
                                                            <option value="">SELECT STATE</option>
                                                            <option value="AN">Andaman and Nicobar Islands</option>
                                                            <option value="AR">Arunachal Pradesh</option>
                                                            <option value="AS">Assam</option>
                                                            <option value="BR">Bihar</option>
                                                            <option value="JH">Jharkhand</option>
                                                            <option value="MN">Manipur</option>
                                                            <option value="ML">Meghalaya</option>
                                                            <option value="MZ">Mizoram</option>
                                                            <option value="NL">Nagaland</option>
                                                            <option value="OD">Odisha</option>
                                                            <option value="SK">Sikkim</option>
                                                            <option value="TR">Tripura</option>
                                                            <option value="WB">West Bengal</option>
                                                         
                                                         
                                                         
                                                         
                                                     </select>
                                                    
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                 <b>• District of Employer : </b><br>
                                                    <select name="district_emp">
                                                    <!-- andhra pradesh -->
                                                        <option value="">SELECT DISTRICT</option>
                                                        <option value="AN">Anantapur</option>
                                                        <option value="CH">Chittoor</option>
                                                        <option value="EG">East Godavari</option>
                                                        <option value="GU">Guntur</option>
                                                        <option value="CU">YSR Kadapa</option>
                                                        <option value="KR">Krishna</option>
                                                        <option value="KU">Kurnool</option>
                                                        <option value="PR">Prakasam</option>
                                                        <option value="NE">Sri Potti Sriramulu Nellore</option>
                                                        <option value="SR">Srikakulam</option>
                                                        <option value="VS">Vizianagram</option>
                                                        <option value="VZ">Vishakapatnam</option>
                                                        <option value="WG">West Godavari</option>
                                                    <!-- arunachal pradesh -->
                                                        <option value="AJ">Anjaw</option>
                                                        <option value="CH">Changlang</option>
                                                        <option value="EK">East Kameng</option>
                                                        <option value="ES">East Siang</option>
                                                        <option value="">Kamle</option>
                                                        <option value="">Kra Daddi</option>
                                                        <option value="KK">Kurung Kume</option>
                                                        <option value="">Lepa Rada</option>
                                                        <option value="EL">Lohit</option>
                                                        <option value="LD">Longding</option>
                                                        <option value="DV">Lower Dibang Valley</option>
                                                        <option value="">Lower Siang</option>
                                                        <option value="LB">Lower Subansiri</option>
                                                        <option value="">Namsal</option>
                                                        <option value="">Pakke-Kessang</option>
                                                        <option value="PA">Papum Pare</option>
                                                        <option value="">Shi Yomi</option>
                                                        <option value="">Siang</option>
                                                        <option value="TA">Tawang</option>
                                                        <option value="TI">Tirap</option>
                                                        <option value="UD">Upper Dibang Valley</option>
                                                        <option value="US">Upper Siang</option>
                                                        <option value="UB">Upper Subansiri</option>
                                                        <option value="WK">West Kameng</option>
                                                        <option value="WS">West Siang</option>
                                                    <!-- Assam -->
                                                        <option value="">Bajali</option>
                                                        <option value="BK">Baksa</option>
                                                        <option value="BP">Barpeta</option>
                                                        <option value="BS">Biswanath</option>
                                                        <option value="BO">Bongaigaon</option>
                                                        <option value="CA">Cachar</option>
                                                        <option value="CD">Chiraideo</option>
                                                        <option value="CH">Chirang</option>
                                                        <option value="DR">Darrang</option>
                                                        <option value="DM">Dhemaji</option>
                                                        <option value="DU">Dhubri</option>
                                                        <option value="DI">Dibrugarh</option>
                                                        <option value="NC">Dima Hasao</option>
                                                        <option value="GP">Goalpara</option>
                                                        <option value="GG">Golaghat</option>
                                                        <option value="HA">Hailakandi</option>
                                                        <option value="HJ">Hojai</option>
                                                        <option value="JO">Jorhat</option>
                                                        <option value="KU">Kamrup</option>
                                                        <option value="KM">Kamrup Metropolitan</option>
                                                        <option value="KG">Karbi Anglong</option>
                                                        <option value="KR">Karimganj</option>
                                                        <option value="KJ">Kokrajhar</option>
                                                        <option value="LA">Lakhimpur</option>
                                                        <option value="MJ">Majuli</option>
                                                        <option value="MA">Morigaon</option>
                                                        <option value="NN">Nagaon</option>
                                                        <option value="NB">Nalbari</option>
                                                        <option value="ST">Sivasagar</option>
                                                        <option value="SM">South Salmara Mankachar</option>
                                                        <option value="SO">Sonitpur</option>
                                                        <option value="TI">Tinksukia</option>
                                                        <option value="UD">Udalguri</option>
                                                        <option value="WK">West Karbi Anglong</option>
                                                    <!-- bihar -->
                                                        <option value="AR"> Araria</option>
                                                        <option value="AR">Arwal</option>
                                                        <option value="AU">Aurangabad</option>
                                                        <option value="BA">Banka</option>
                                                        <option value="BE">Begusarai</option>
                                                        <option value="BG">Bhagalpur</option>
                                                        <option value="BJ">Bhojpur</option>
                                                        <option value="BU">Buxar</option>
                                                        <option value="DA">Darbhanga</option>
                                                        <option value="EC">East Champaran</option>
                                                        <option value="GA">Gaya</option>
                                                        <option value="GO">Gopalganj</option>
                                                        <option value="JA">Jamui</option>
                                                        <option value="JE">Jehanabad</option>
                                                        <option value="KM">Kaimur</option>
                                                        <option value="KT">Katihar</option>
                                                        <option value="KH">Khagaria</option>
                                                        <option value="KI">Kishanganj</option>
                                                        <option value="LA">Lakhisarai</option>
                                                        <option value="MP">Madhepura</option>
                                                        <option value="MB">Madhubani</option>
                                                        <option value="MG">Munger</option>
                                                        <option value="MZ">Muzaffarpur</option>
                                                        <option value="NL">Nalanda</option>
                                                        <option value="NW">Nawada</option>
                                                        <option value="PA">Patna</option>
                                                        <option value="PU">Purnia</option>
                                                        <option value="RO">Rohtas</option>
                                                        <option value="SH">Saharsa</option>
                                                        <option value="SM">Samastipur</option>
                                                        <option value="SR">Saran</option>
                                                        <option value="SP">Sheikpura</option>
                                                        <option value="SO">Sheohar</option>
                                                        <option value="ST">Sitamarhi</option>
                                                        <option value="SW">Siwan</option>
                                                        <option value="SU">Supaul</option>
                                                        <option value="VA">Vaishali</option>
                                                        <option value="WC">West Champaran</option>
                                                    <!-- Chattisgarh -->
                                                        <option value="">Balod</option>
                                                        <option value="">Baloda Bazar-Bhatapara</option>
                                                        <option value="">Balrampur</option>
                                                        <option value="BA">Bastar</option>
                                                        <option value="">Bemetara</option>
                                                        <option value="BJ">Bijapur</option>
                                                        <option value="BI">Bilaspur</option>
                                                        <option value="DA">Dantewada</option>
                                                        <option value="DH">Dhamtari</option>
                                                        <option value="DU">Durg</option>
                                                        <option value="">Gariaband</option>
                                                        <option value="">Gaurella-Pendra-Marwahi</option>
                                                        <option value="JC">Janjgir-Champa</option>
                                                        <option value="JA">Jashpur</option>
                                                        <option value="KW">Kabirdham</option>
                                                        <option value="KK">Kanker</option>
                                                        <option value="">Kondagaon</option>
                                                        <option value="KB">Korba</option>
                                                        <option value="KJ">Korea</option>
                                                        <option value="MA">Mahasumund</option>
                                                        <option value="MG">Manendragarh-Chirmiri-Bharatpur</option>
                                                        <option value="MM">Mohla Manpur</option>
                                                        <option value="">Mungeli</option>
                                                        <option value="NR">Narayanpur</option>
                                                        <option value="RG">Raigarh</option>
                                                        <option value="RP">Raipur</option>
                                                        <option value="RN">Rajnandgaon</option>
                                                        <option value="SB">Sarangarh-Bilaigarh</option>
                                                        <option value="ST">Shakti</option>
                                                        <option value="SK">Sukma</option>
                                                        <option value="">Surajpur</option>
                                                        <option value="SJ">Surguja</option>
                                                    <!-- goa -->
                                                        <option value="SG">North Goa</option>
                                                        <option value="NG">South Goa</option>
                                                    <!-- Gujarat -->
                                                        <option value="AH">Ahmedabad</option>
                                                        <option value="AM">Amreli</option>
                                                        <option value="AN">Anand</option>
                                                        <option value="AR">Aravalli</option>
                                                        <option value="BK">Banaskantha</option>
                                                        <option value="BR">Bharuch</option>
                                                        <option value="BV">Bhavnagar</option>
                                                        <option value="BT">Botad</option>
                                                        <option value="CU">Chota Udaipur</option>
                                                        <option value="DA">Dahod</option>
                                                        <option value="DG">Dang</option>
                                                        <option value="DD">Devbhumi Dwarka</option>
                                                        <option value="GA">Gandhinagar</option>
                                                        <option value="GS">Gir Somnath</option>
                                                        <option value="JA">Jamnagar</option>
                                                        <option value="JU">Junagarh</option>
                                                        <option value="KH">Kheda</option>
                                                        <option value="KA">Kutch</option>
                                                        <option value="MH">Mahisagar</option>
                                                        <option value="MB">Morbi</option>
                                                        <option value="NR">Narmada</option>
                                                        <option value="NV">Navsari</option>
                                                        <option value="PM">Panchamahal</option>
                                                        <option value="PA">Patan</option>
                                                        <option value="PO">Porbandar</option>
                                                        <option value="RA">Rajkot</option>
                                                        <option value="SK">Sabarkantha</option>
                                                        <option value="ST">Surat</option>
                                                        <option value="SN">Surendranagar</option>
                                                        <option value="TA">Tapi</option>
                                                        <option value="VD">Vadodara</option>
                                                        <option value="VL">Valsad</option>

                                                    <!-- haryana -->
                                                        <option value="AM">Amabala</option>
                                                        <option value="BH">Bhiwani</option>
                                                        <option value="CD">Charkhi Dadri</option>
                                                        <option value="HR">Faridabad</option>
                                                        <option value="FT">Fatehabad</option>
                                                        <option value="GU">Gurugram</option>
                                                        <option value="HI">Hisar</option>
                                                        <option value="JH">Jhajjar</option>
                                                        <option value="JI">Jind</option>
                                                        <option value="KT">Kaithal</option>
                                                        <option value="KR">Karnal</option>
                                                        <option value="KU">Kurukshetra</option>
                                                        <option value="MA">Mahendragarh</option>
                                                        <option value="MW">Nuh</option>
                                                        <option value="PW">Palwal</option>
                                                        <option value="PK">Panchkula</option>
                                                        <option value="PP">Panipat</option>
                                                        <option value="RE">Rewari</option>
                                                        <option value="RO">Rohtak</option>
                                                        <option value="SI">Sirsa</option>
                                                        <option value="SNP">Sonipat</option>
                                                        <option value="YN">Yamunanagar</option>
                                                    <!-- Himachal Pradesh  -->
                                                        <option value="BI">Bilaspur</option>
                                                        <option value="CH">Chamba</option>
                                                        <option value="HA">Hamirpur</option>
                                                        <option value="KA">Kangra</option>
                                                        <option value="KI">Kinnaur</option>
                                                        <option value="KU">Kullu</option>
                                                        <option value="LS">Lahaul and Spiti</option>
                                                        <option value="MA">Mandi</option>
                                                        <option value="SH">Shimla</option>
                                                        <option value="SI">Sirmaur</option>
                                                        <option value="SO">Solan</option>
                                                        <option value="UN">Una</option>
                                                    <!-- Jharkhand -->
                                                        <option value="BO">Bokaro</option>
                                                        <option value="CH">Chatra</option>
                                                        <option value="DE">Deogarh</option>
                                                        <option value="DH">Dhanbad</option>
                                                        <option value="DU">Dumka</option>
                                                        <option value="ES">East Singhbhum</option>
                                                        <option value="GA">Garhwa</option>
                                                        <option value="GI">Giridh</option>
                                                        <option value="GO">Godda</option>
                                                        <option value="GU">Gumla</option>
                                                        <option value="HA">Hazirabag</option>
                                                        <option value="JA">Jamtara</option>
                                                        <option value="KH">Khunti</option>
                                                        <option value="KO">Koderma</option>
                                                        <option value="LA">Latehar</option>
                                                        <option value="LO">Lohardaga</option>
                                                        <option value="PK">Pakur</option>
                                                        <option value="PL">Palamu</option>
                                                        <option value="RM">Ramgarh</option>
                                                        <option value="RA">Ranchi</option>
                                                        <option value="SA">Sahibganj</option>
                                                        <option value="SK">Seraikela-Kharsawan</option>
                                                        <option value="SI">Simdega</option>
                                                        <option value="WS">West Singhbhum</option>
                                                    <!-- Karnataka -->
                                                        <option value="BK">Bagalkot</option>
                                                        <option value="BL">Ballari</option>
                                                        <option value="BG">Belgaum</option>
                                                        <option value="BR">Bengaluru Gramin</option>
                                                        <option value="BN">Bengaluru nagara</option>
                                                        <option value="BD">Bidar</option>
                                                        <option value="CJ">Chamarajanagara</option>
                                                        <option value="CK">Chikkaballapur</option>
                                                        <option value="CK">Chikkamagaluru</option>
                                                        <option value="CT">Chitradurga</option>
                                                        <option value="DK">Dakshina Kannada</option>
                                                        <option value="DA">Davanagere</option>
                                                        <option value="DH">Dharwad</option>
                                                        <option value="GA">Gadag</option>
                                                        <option value="GU">Kalaburagi</option>
                                                        <option value="HS">Hassan</option>
                                                        <option value="HV">Haveri</option>
                                                        <option value="KD">Kodagu</option>
                                                        <option value="KL">Kolar</option>
                                                        <option value="KP">Koppala</option>
                                                        <option value="MA">Mandya</option>
                                                        <option value="MY">Mysuru</option>
                                                        <option value="RA">Raichur</option>
                                                        <option value="RM">Ramanagara</option>
                                                        <option value="SH">Shivamogga</option>
                                                        <option value="TU">Tumakuru</option>
                                                        <option value="UD">Udipi</option>
                                                        <option value="UK">Uttara Kannada</option>
                                                        <option value="">Vijayanagara</option>
                                                        <option value="BJ">Vijayapura</option>
                                                        <option value="YG">Yadgir</option>
                                                    <!-- Kerala -->
                                                        <option value="AL">Alappuzha</option>
                                                        <option value="ER">Ernakulam</option>
                                                        <option value="ID">Idukki</option>
                                                        <option value="KN">Kannur</option>
                                                        <option value="KS">Kasaragod</option>
                                                        <option value="KL">Kollam</option>
                                                        <option value="KT">Kottayam</option>
                                                        <option value="KZ">Kozhikode</option>
                                                        <option value="MA">Mallappuram</option>
                                                        <option value="PL">Palakkad</option>
                                                        <option value="PT">Pathanamthitta</option>
                                                        <option value="TS">Thrissur</option>
                                                        <option value="TV">Thiruvananthapuram</option>
                                                        <option value="WA">Wayanad</option>
                                                    <!-- Madhya Pradesh -->
                                                        <option value="AG">Agar malwa</option>
                                                        <option value="AL">Alirajpur</option>
                                                        <option value="AP">Anuppur</option>
                                                        <option value="AS">Ashoknagar</option>
                                                        <option value="BL">Balaghat</option>
                                                        <option value="BR">Barwani</option>
                                                        <option value="BE">Betul</option>
                                                        <option value="BD">Bhind</option>
                                                        <option value="BP">Bhopal</option>
                                                        <option value="BU">Burhanpur</option>
                                                        <option value="CH">Chachaura-Binaganj</option>
                                                        <option value="CT">Chhatarpur</option>
                                                        <option value="CN">Chhindwara</option>
                                                        <option value="DM">Damoh</option>
                                                        <option value="DT">Datia</option>
                                                        <option value="DE">Dewas</option>
                                                        <option value="DH">Dhar</option>
                                                        <option value="DI">Dindori</option>
                                                        <option value="GU">Guna</option>
                                                        <option value="GW">Gwalior</option>
                                                        <option value="HA">Harda</option>
                                                        <option value="HO">Narmadapuram</option>
                                                        <option value="IN">Indore</option>
                                                        <option value="JA">Jabalpur</option>
                                                        <option value="JH">Jhabua</option>
                                                        <option value="KA">Katni</option>
                                                        <option value="EN">Khandwa (EAST NIMAR)</option>
                                                        <option value="WN">Khargone (WEST NIMAR)</option>
                                                        <option value="">Maihar</option>
                                                        <option value="ML">Mandla</option>
                                                        <option value="MS">Mandsaur</option>
                                                        <option value="MO">Morena</option>
                                                        <option value="NA">Narsinghpur</option>
                                                        <option value="">Nagda</option>
                                                        <option value="NE">Neemuch</option>
                                                        <option value="">Niwari</option>
                                                        <option value="PA">Panna</option>
                                                        <option value="RS">Raisen</option>
                                                        <option value="RG">Rajgarh</option>
                                                        <option value="RL">Ratlam</option>
                                                        <option value="RE">Rewa</option>
                                                        <option value="SG">Sagar</option>
                                                        <option value="ST">Satna</option>
                                                        <option value="SR">Sehore</option>
                                                        <option value="SO">Seoni</option>
                                                        <option value="SH">Shahdol</option>
                                                        <option value="SJ">Shajapur</option>
                                                        <option value="SP">Sheopur</option>
                                                        <option value="SV">Shivpuri</option>
                                                        <option value="SI">Sidhi</option>
                                                        <option value="SN">Singrauli</option>
                                                        <option value="TI">Tikamgarh</option>
                                                        <option value="UJ">Ujjain</option>
                                                        <option value="UM">Umaria</option>
                                                        <option value="VI">Vidisha</option>
                                                        <option value="LN">Lavkushnagar</option>
                                                    <!-- Maharashtra -->
                                                        <option value="AH">Ahmednagar</option>
                                                        <option value="AK">Akola</option>
                                                        <option value="AM">Amravati</option>
                                                        <option value="AU">Aurangabad</option>
                                                        <option value="BI">Beed</option>
                                                        <option value="BH">Bhandara</option>
                                                        <option value="BU">Buldhana</option>
                                                        <option value="CH">Chandrapur</option>
                                                        <option value="DH">Dhule</option>
                                                        <option value="GA">Gadchiroli</option>
                                                        <option value="GO">Gondia</option>
                                                        <option value="HI">Hingoli</option>
                                                        <option value="JG">Jalgaon</option>
                                                        <option value="JN">Jalna</option>
                                                        <option value="KO">Kolhapur</option>
                                                        <option value="LA">Latur</option>
                                                        <option value="MC">Mumbai City</option>
                                                        <option value="MU">Mumbai Subarban</option>
                                                        <option value="NG">Nagpur</option>
                                                        <option value="ND">Nanded</option>
                                                        <option value="NB">Nandurbar</option>
                                                        <option value="NS">Nashik</option>
                                                        <option value="OS">Osmanabad</option>
                                                        <option value="PL">Palghar</option>
                                                        <option value="PA">Parbhani</option>
                                                        <option value="PU">Pune</option>
                                                        <option value="RG">Raigad</option>
                                                        <option value="RT">Ratnagiri</option>
                                                        <option value="SN">Sangli</option>
                                                        <option value="ST">Satara</option>
                                                        <option value="SI">Sindhudurg</option>
                                                        <option value="SO">Solapur</option>
                                                        <option value="TH">Thane</option>
                                                        <option value="WR">Wardha</option>
                                                        <option value="WS">Washim</option>
                                                        <option value="YA">Yavatmal</option>

                                                    <!-- Manipur -->
                                                        <option value="BPR">Bishnupur</option>
                                                        <option value="CDL">Chandel</option>
                                                        <option value="CCPR">Churachandpur</option>
                                                        <option value="IE">Imphal East</option>
                                                        <option value="IW">Imphal West</option>
                                                        <option value="JBM">Jiribam</option>
                                                        <option value="KAK">Kakching</option>
                                                        <option value="KJ">Kamjong</option>
                                                        <option value="KPI">Kangpokpi</option>
                                                        <option value="NL">Noney</option>
                                                        <option value="PZ">Pherzawl</option>
                                                        <option value="SE">Senapati</option>
                                                        <option value="TML">Tamenglong</option>
                                                        <option value="TNL">Tengnoupal</option>
                                                        <option value="TBL">Thoubal</option>
                                                        <option value="UKR">Ukhurul</option>
                                                    <!-- Meghalaya -->
                                                        <option value="EG">East Garo Hills</option>
                                                        <option value="EK">East Khasi Hills</option>
                                                        <option value="">East Jaintia Hills</option>
                                                        <option value="">North Garo Hills</option>
                                                        <option value="RB">Ri Bhoi</option>
                                                        <option value="SG">South Garo Hills</option>
                                                        <option value="">South West Garo Hills</option>
                                                        <option value="">South West Khasi Hills</option>
                                                        <option value="WJ">West Jaintia Hills</option>
                                                        <option value="WG">West Garo Hills</option>
                                                        <option value="WK">West Khasi Hills</option>
                                                    <!-- Mizoram -->
                                                        <option value="AI">Aizawl</option>
                                                        <option value="CH">Champhai</option>
                                                        <option value="">Hnahthial</option>
                                                        <option value="">Khawzawl</option>
                                                        <option value="KO">Kolasib</option>
                                                        <option value="LA">Lawngtlai</option>
                                                        <option value="LU">Lunglei</option>
                                                        <option value="MA">Mamit</option>
                                                        <option value="SA">Saiha</option>
                                                        <option value="">Saitual</option>
                                                        <option value="SE">Serchhip</option>
                                                    <!-- Nagaland -->
                                                        <option value="DI">Chumukedima</option>
                                                        <option value="DI">Dimapur</option>
                                                        <option value="KI">Kiphire</option>
                                                        <option value="KO">Kohima</option>
                                                        <option value="LO">Longleng</option>
                                                        <option value="MK">Mokokchung</option>
                                                        <option value="MN">Mon</option>
                                                        <option value="">Niuland</option>
                                                        <option value="">Noklak</option>
                                                        <option value="PE">Peren</option>
                                                        <option value="PH">Phek</option>
                                                        <option value="">Tseminyu</option>
                                                        <option value="TU">Tuensang</option>
                                                        <option value="WO">Wokha</option>
                                                        <option value="ZU">Zunhebota</option>
                                                    <!-- Odisha -->
                                                        <option value="AN">Angul</option>
                                                        <option value="BD">Boudh</option>
                                                        <option value="BH">Bhadrak</option>
                                                        <option value="BL">Balangir</option>
                                                        <option value="BR">Bargarh</option>
                                                        <option value="BW">Balasore</option>
                                                        <option value="CU">Cuttack</option>
                                                        <option value="DE">Debagarh</option>
                                                        <option value="DH">Dhenkanal</option>
                                                        <option value="GN">Ganjam</option>
                                                        <option value="GP">Gajapati</option>
                                                        <option value="JH">Jharsuguda</option>
                                                        <option value="JP">Jajpur</option>
                                                        <option value="JS">Jagatsinghpur</option>
                                                        <option value="KH">Khordha</option>
                                                        <option value="KJ">Kendujhar</option>
                                                        <option value="KL">Kalahandi</option>
                                                        <option value="KN">Kandhamal</option>
                                                        <option value="KO">Koraput</option>
                                                        <option value="KP">Kendrapara</option>
                                                        <option value="ML">Malkangiri</option>
                                                        <option value="MY">Mayurbhanj</option>
                                                        <option value="NB">Nabarangpur</option>
                                                        <option value="NU">Nuapada</option>
                                                        <option value="NY">Nayagarh</option>
                                                        <option value="PU">Puri</option>
                                                        <option value="RA">Rayagada</option>
                                                        <option value="SA">Sambalpur</option>
                                                        <option value="SO">Subarnapur</option>
                                                        <option value="SU">Sundargarh</option>
                                                    <!-- Punjab -->
                                                        <option value="AM">Amritsar</option>
                                                        <option value="BNL">Barnala</option>
                                                        <option value="BA">Bathinda</option>
                                                        <option value="FI">Firozpur</option>
                                                        <option value="FR">Faridkot</option>
                                                        <option value="FT">Fatehgarh Sahib</option>
                                                        <option value="FA">Fazilka</option>
                                                        <option value="GU">Gurdaspur</option>
                                                        <option value="HO">Hoshiarpur</option>
                                                        <option value="JA">Jalandhar</option>
                                                        <option value="KA">Kapurthala</option>
                                                        <option value="LU">Ludhiana</option>
                                                        <option value="">Malerkotta</option>
                                                        <option value="MA">Mansa</option>
                                                        <option value="MO">Moga</option>
                                                        <option value="MU">Sri Mukhtar Sahib</option>
                                                        <option value="PA">Pathankot</option>
                                                        <option value="PA">Patiala</option>
                                                        <option value="RU">Rupnagar</option>
                                                        <option value="SAS">Sahibzada Ajit Singh Nagar</option>
                                                        <option value="SA">Sangrur</option>
                                                        <option value="PB">Sahid Bhagat Singh Nagar</option>
                                                        <option value="TT">Tarn Taran</option>
                                                    <!-- Rajasthan -->
                                                        <option value="AJ">Ajmer</option>
                                                        <option value="AL">Alwar</option>
                                                        <option value="BI">Bikaner</option>
                                                        <option value="BM">Barmer</option>
                                                        <option value="BN">Banswara</option>
                                                        <option value="BP">Bharatpur</option>
                                                        <option value="BR">Baran</option>
                                                        <option value="BU">Bundi</option>
                                                        <option value="BW">Bhilwara</option>
                                                        <option value="CR">Churu</option>
                                                        <option value="CT">Chittorgarh</option>
                                                        <option value="DA">Dausa</option>
                                                        <option value="DH">Dholpur</option>
                                                        <option value="DU">Dungarpur</option>
                                                        <option value="GA">Sri Ganganagar</option>
                                                        <option value="HA">Hanumangarh</option>
                                                        <option value="JJ">Jhunjhunu</option>
                                                        <option value="JL">Jalore</option>
                                                        <option value="JO">Jodhpur</option>
                                                        <option value="JP">Jaipur</option>
                                                        <option value="JS">Jaisalmer</option>
                                                        <option value="JW">Jhalawar</option>
                                                        <option value="KA">Karauli</option>
                                                        <option value="KO">Kota</option>
                                                        <option value="NA">Nagaur</option>
                                                        <option value="PA">Pali</option>
                                                        <option value="PG">Pratapgarh</option>
                                                        <option value="RA">Rajasmand</option>
                                                        <option value="SK">Sikar</option>
                                                        <option value="SM">Sawai Madhopur</option>
                                                        <option value="SR">Sirohi</option>
                                                        <option value="TO">Tonk</option>
                                                        <option value="UD">Udaipur</option>
                                                    <!-- Sikkim -->
                                                        <option value="ES">East Sikkim </option>
                                                        <option value="NS">North Sikkim</option>
                                                        <option value="PS">Pakyong</option>
                                                        <option value="">Soreng</option>
                                                        <option value="SS">South Sikkim</option>
                                                        <option value="WS">West Sikkim</option>
                                                    <!-- Tamil Nadu -->
                                                        <option value="AY">Ariyalur</option>
                                                        <option value="CGL">Chengalpattu</option>
                                                        <option value="CH">Chennai</option>
                                                        <option value="CO">Coimbatore</option>
                                                        <option value="CU">Cuddalore</option>
                                                        <option value="DH">Dharmapuri</option>
                                                        <option value="DGL">Dindigul</option>
                                                        <option value="ER">Erode</option>
                                                        <option value="KL">Kallakurichi</option>
                                                        <option value="KC">Kanchipuram</option>
                                                        <option value="KK">Kanyakumari</option>
                                                        <option value="KA">Karur</option>
                                                        <option value="KR">Krishnagiri</option>
                                                        <option value="MDU">Madurai</option>
                                                        <option value="MUI">Mayiladuthurai</option>
                                                        <option value="MUI">Nagapattinam</option>
                                                        <option value="NM">Namakkal</option>
                                                        <option value="NI">Nilgiris</option>
                                                        <option value="PE">Perambalur</option>
                                                        <option value="PU">Pudukkottai</option>
                                                        <option value="RA">Ramanathapuram</option>
                                                        <option value="RN">Ranipet</option>
                                                        <option value="SA">Salem</option>
                                                        <option value="SVG">Sivaganga</option>
                                                        <option value="TS">Tenkasi</option>
                                                        <option value="TJ">Thanjavur</option>
                                                        <option value="TH">Theni</option>
                                                        <option value="TK">Thoothukudi (Tuticorin)</option>
                                                        <option value="TC">Tiruchirappalli</option>
                                                        <option value="TI">Tirunelveli</option>
                                                        <option value="TP">Tirupathur</option>
                                                        <option value="TP">Tiruppur</option>
                                                        <option value="TL">Tiruvallur</option>
                                                        <option value="TV">Tiruvannamalai</option>
                                                        <option value="TR">Tiruvarur</option>
                                                        <option value="VE">Vellore</option>
                                                        <option value="VL">Viluppuram</option>
                                                        <option value="VR">Virudhunagar</option>
                                                    <!-- Telengana -->
                                                        <option value="AD">Adilabad</option>
                                                        <option value="">Bhadradri Kothagudem
                                                        <option value="HY">Hyderabad</option>
                                                        <option value="WL">Hanamkonda</option>
                                                        <option value="">Jagtial</option>
                                                        <option value="">Jangaon</option>
                                                        <option value="">Jayashankar Bhoopalpally</option>
                                                        <option value="">Jogulamba Gadwal</option>
                                                        <option value="">Kamareddy</option>
                                                        <option value="KA">Karimnagar</option>
                                                        <option value="KH">Khammam</option>
                                                        <option value="">Komaram Bheem Asifabad</option>
                                                        <option value="">Mahabubabad</option>
                                                        <option value="MA">Mahabubnagar</option>
                                                        <option value="">Mancherial</option>
                                                        <option value="ME">Medak</option>
                                                        <option value="">Medchal-Malkajgiri</option>
                                                        <option value="">Mugulu</option>
                                                        <option value="">Nagarkurnool</option>
                                                        <option value="">Narayanpet</option>
                                                        <option value="NA">Nalgonda</option>
                                                        <option value="">Nirmal</option>
                                                        <option value="NI">Nizamabad</option>
                                                        <option value="">Peddapalli</option>
                                                        <option value="">Rajanna Sircilla</option>
                                                        <option value="RA">Rangareddy</option>
                                                        <option value="">Sangareddy</option>
                                                        <option value="">Siddipet</option>
                                                        <option value="">Suryapet</option>
                                                        <option value="">Vikarabad</option>
                                                        <option value="">Wanaparthy</option>
                                                        <option value="">Warangal</option>
                                                        <option value="">Yadadri Bhuvanagiri</option>
                                                    <!-- Tripura -->
                                                        <option value="DH">Dhalai</option>
                                                        <option value="GM">Gomati</option>
                                                        <option value="KH">Khowai</option>
                                                        <option value="NT">North Tripua</option>
                                                        <option value="SP">Sephahijala</option>
                                                        <option value="ST">South Tripura</option>
                                                        <option value="UK">Unokoti</option>
                                                        <option value="WT">West Tripura</option>
                                                    <!-- Uttar Pradesh -->
                                                        <option value="AG">Agra</option>
                                                        <option value="AL">Aligarh</option>
                                                        <option value="FZ">Ayodhya</option>
                                                        <option value="AN">Ambedkar Nagar</option>
                                                        <option value="AM">Amethi</option>
                                                        <option value="JP">Amroha</option>
                                                        <option value="AU">Auraiya</option>
                                                        <option value="AZ">Azamgarh</option>
                                                        <option value="BG">Bagpat</option>
                                                        <option value="BH">Bahraich</option>
                                                        <option value="BL">Ballia</option>
                                                        <option value="BP">Balrampur</option>
                                                        <option value="BN">Banda</option>
                                                        <option value="BB">Bara Banki</option>
                                                        <option value="BR">Bareilly</option>
                                                        <option value="BH">Bhadohi</option>
                                                        <option value="BI">Bijnor</option>
                                                        <option value="BD">Badaun</option>
                                                        <option value="BU">Bulandshahr</option>
                                                        <option value="CD">Chandauli</option>
                                                        <option value="CT">Chitrakoot</option>
                                                        <option value="DE">Deoria</option>
                                                        <option value="ET">Etah</option>
                                                        <option value="EW">Etawah</option>
                                                        <option value="FR">Farrukhabad</option>
                                                        <option value="FT">Fatehpur</option>
                                                        <option value="FI">Firozabad</option>
                                                        <option value="GB">Gautam Buddha Nagar</option>
                                                        <option value="GZ">Ghaziabad</option>
                                                        <option value="GP">Ghazipur</option>
                                                        <option value="GN">Gonda</option>
                                                        <option value="GR">Gorakhpur</option>
                                                        <option value="HM">Hamirpur</option>
                                                        <option value="PN">Hapur</option>
                                                        <option value="HR">Hardoi</option>
                                                        <option value="HT">Hathras</option>
                                                        <option value="JL">Jalaun</option>
                                                        <option value="JU">Jaunpur</option>
                                                        <option value="JH">Jhansi</option>
                                                        <option value="KJ">Kannauj</option>
                                                        <option value="KD">Kanpur Dehat</option>
                                                        <option value="KN">Kanpur Nagar</option>
                                                        <option value="KR">Kasganj</option>
                                                        <option value="KS">Kaushambi</option>
                                                        <option value="KU">Kushinagar</option>
                                                        <option value="LK">Lakhimpur Kheri</option>
                                                        <option value="LA">Lalitpur</option>
                                                        <option value="LU">Lucknow</option>
                                                        <option value="MG">Maharajganj</option>
                                                        <option value="MH">Mahoba</option>
                                                        <option value="MP">Mainpuri</option>
                                                        <option value="MT">Mathura</option>
                                                        <option value="MB">Mau</option>
                                                        <option value="ME">Meerat</option>
                                                        <option value="MI">Mirzapur</option>
                                                        <option value="MO">Moradabad</option>
                                                        <option value="MU">Muzaffarnagar</option>
                                                        <option value="PI">Pilibhit</option>
                                                        <option value="PR">Pratapgarh</option>
                                                        <option value="AH">Prayagraj</option> 
                                                        <option value="RB">Raebareli</option>
                                                        <option value="RA">Rampur</option>
                                                        <option value="SA">Saharanpur</option>
                                                        <option value="SM">Sambhal</option>
                                                        <option value="SK">Sant Kabir Nagar</option>
                                                        <option value="SJ">Shahjahanpur </option>
                                                        <option value="SH">Shamli</option>
                                                        <option value="SV">Shravasti</option>
                                                        <option value="SN">Siddhartnagar</option>
                                                        <option value="SI">Sitapur</option>
                                                        <option value="SO">Sonbhadra</option>
                                                        <option value="SU">Sultanpur</option>
                                                        <option value="UN">Unnao</option>
                                                        <option value="VA">Varanasi</option>
                                                    <!-- Uttarakhand -->
                                                        <option value="AL">Almora</option>
                                                        <option value="BA">Bageshwar</option>
                                                        <option value="CL">Chamoli</option>
                                                        <option value="CP">Champawat</option>
                                                        <option value="DD">Dehra Doon</option>
                                                        <option value="">Didihat</option>
                                                        <option value="HA">Haridwar</option>
                                                        <option value="">Kotdwar</option>
                                                        <option value="NA">Nainital</option>
                                                        <option value="PG">Pauri Garhwal</option>
                                                        <option value="PI">Pithoragarh</option>
                                                        <option value="">Ranikhet</option>
                                                        <option value="RP">Rudraprayag</option>
                                                        <option value="TG">Tehri Garhwal</option>
                                                        <option value="US">Udham Singh Nagar</option>
                                                        <option value="UT">Uttarkashi</option>
                                                        <option value="">Yamunotri</option>
                                                    <!-- West Bengal -->
                                                        <option value="AD">Alipurduar</option>
                                                        <option value="BN">Bankura</option>
                                                        <option value="BR">Paschim Bardhaman</option>
                                                        <option value="BR">Purba Bardhaman</option>
                                                        <option value="BI">Birbhum</option>
                                                        <option value="KB">Cooch Behar</option>
                                                        <option value="DD">Dakshin Dinajpur</option>
                                                        <option value="DA">Darjeeling</option>
                                                        <option value="HG">Hoogly</option>
                                                        <option value="HR">Howrah</option>
                                                        <option value="JA">Jalpaiguri</option>
                                                        <option value="JH">Jhargram</option>
                                                        <option value="KA">Kalimpong</option>
                                                        <option value="KO">Kolkata</option>
                                                        <option value="MA">Maldah</option>
                                                        <option value="MSD">Murshidabad</option>
                                                        <option value="NA">Nadia</option>
                                                        <option value="PN">North 24 Paragan</option>
                                                        <option value="PM">Paschim Medinipur</option>
                                                        <option val="PR">Purba Medinipur</option>
                                                        <option value="PU">Purulia</option>
                                                        <option value="PS">South 24 Paragana</option>
                                                        <option value="UD">Uttar Dinajpur</option>
                                                    <!-- Andaman Nicobar -->
                                                        <option val="NI">Nicobar</option>
                                                        <option val="NA">North and Middle Andaman</option>
                                                        <option val="SA">South Andaman</option>
                                                    <!-- Dadra and Nagar Haveli And Daman and Diu -->
                                                        <option val="DA">Daman</option>
                                                        <option val="DI">Diu</option>
                                                        <option val="DN">Dadra and Nagar Haveli</option>
                                                    <!-- Jammu and kashmir -->
                                                        <option value="AN">Anantnag</option>
                                                        <option value="BD">Budgam</option>
                                                        <option value="BPR">Bandipora</option>
                                                        <option value="BR">Baramula</option>
                                                        <option value="DO">Doda</option>
                                                        <option value="GB">Ganderbal</option>
                                                        <option value="JA">Jammu</option>
                                                        <option value="KT">Kathua</option>
                                                        <option value="KW">Kishtwar</option>
                                                        <option value="KG">Kulgam</option>
                                                        <option value="KU">Kupwara</option>
                                                        <option value="PO">Poonch</option>
                                                        <option value="PU">Pulwama</option>
                                                        <option value="RA">Rajouri</option>
                                                        <option value="RB">Ramban</option>
                                                        <option value="RS">Reasi</option>
                                                        <option value="SB">Samba</option>
                                                        <option value="SH">Sophian</option>
                                                        <option value="SR">Srinagar</option>
                                                        <option value="UD">Udhampur</option>
                                                    <!-- Ladakh -->
                                                        <option val="KR">Kargil</option>
                                                        <option val="LE">Leh</option>
                                                    <!-- Lakshadweep -->
                                                        <option value="LD">Lakshadweep</option>    
                                                    <!-- National Capital of Delhi -->
                                                        <option value="CD  ">Central Delhi</option>
                                                        <option value="ED">East Delhi</option>
                                                        <option value="ND">New Delhi</option>
                                                        <option value="NO">North Delhi</option>
                                                        <option value="NE">North East Delhi</option>
                                                        <option value="NW">North West Delhi</option>
                                                        <option value="">Shahdara</option>
                                                        <option value="SD">South Delhi</option>
                                                        <option value="">South East Delhi</option>
                                                        <option value="SW">South West Delhi</option>
                                                        <option value="WD">West Delhi</option>
                                                    <!-- Puducherry -->
                                                        <option value="KA">Karaikal</option>
                                                        <option value="MA">Mahe</option>
                                                        <option value="PO">Puducherry</option>
                                                        <option value="YA">Yanam</option>



                                                </select>
                                                    </div>
                                                    </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• PIN Code of Employer : </b><br>
                                                    <input type="text" name="pin_emp" placeholder="PIN Code" required/>
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
                                                    <input type="submit" value="Preview" name="submit" id="submit" onclick="show_alert();">
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