<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AFRIDI STONES</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/global.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
//email form validation

function everif(str) {

		var at="@"
		var punct="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var lpunct=str.indexOf(punct)
		if (str.indexOf(at)==-1){
		   alert("Valid email must be entered")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Valid email must be entered")
		   return false
		}

		if (str.indexOf(punct)==-1 || str.indexOf(punct)==0 || str.indexOf(punct)==lstr){
		    alert("Valid email must be entered")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Valid email must be entered")
		    return false
		 }

		 if (str.substring(lat-1,lat)==punct || str.substring(lat+1,lat+2)==punct){
		    alert("Valid email must be entered")
		    return false
		 }

		 if (str.indexOf(punct,(lat+2))==-1){
		    alert("Valid email must be entered")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Valid email must be entered")
		    return false
		 }

 		 return true					
	}

function evalid(){
	var emailID=document.contact_form.mail
	
	if (everif(emailID.value)==false){
		emailID.focus()
		return false
	}
	
//empty field validation
	
	var fname=document.contact_form.fname
	if ((fname.value==null)||(fname.value=="")){
        alert("Fields marqued with * must be entered")
        fname.focus()
        return false
        }
	
	var lname=document.contact_form.lname		
	if ((lname.value==null)||(lname.value=="")){
        alert("Fields marqued with * must be entered")
        lname.focus()
        return false
        }
 			
	return true
 }
 </script>
</head>

<body>

<div id="wrapper-contact">

 <div id="header-container">
  <div id="header">
          
    <div class="navigation">
      <div class="nav-left">
        <ul>
        	<li><a href="home.html">HOME</a></li><li><a href="stonesgallery.html">STONES GALLERY</a></li>
        </ul>
      </div>
      
      <div class="nav-right">
        <ul>
        	<li><a href="aboutus.html">ABOUT US</a></li><li><a href="contactus.php">CONTACT US</a></li>
        </ul>
      </div>
    <div class="clearfloat"></div>
    </div><!--end navigation-->
    
  </div><!--end header-->
 </div><!--end header-container-->
      
  <div id="content" >
    
    <div class="content-container" >
      <h1><img src="images/icon-mail.jpg"  alt=" " style="margin: 0 10px -4px 0;" />CONTACT AFRIDI STONES</h1>
      <div class="bar"></div><br />
      
      <div style="float:right">
          <img src="images/contactmap.jpg" width="235" height="191" alt=" " />
          <h1>AFRIDI STONES</h1>
          <p><span class="redtext">Head Office</span></p><br />
            <p><span class="redtext2" ><small>Phone</small> </span> 1300 786 900</p>	
            <p><span class="redtext2"><small>Email</small> </span> info@afridistones.com.au</p>	
            <p><span class="redtext2"><small>Address</small> </span>1 GIllingham Crescent</p>
            
            <p style="margin-left:80px;">Craigieburn VIC 3064</p>
            <p style="margin-left:80px;">Australia</p>	
       </div>
      
      <p>If you want to get more information, please feel free to contact us.</p><br />
      <div style="float:left; width:600px;">
            <form name="contact_form" method="post" action="mailer.php" onSubmit="return evalid()">
<table border="0"><tr>
    <td height="61"><input name="fname" type="text" class="form-fld" value="First Name *" size="30" /></td>
    <td width="271"><input name="lname" type="text" class="form-fld" value="Last Name *" size="30" /></td>
    </tr>
  <tr>
    <td height="61"><input name="mail" type="text" class="form-fld" value="E-mail *" size="30" /></td>
    <td><input name="phone" type="text" class="form-fld" id="phone" value="Phone" size="30" /></td>
    </tr>
  <tr>
    <td height="61"><input name="city" type="text" class="form-fld" value="City" size="30" /></td>
    <td>
    <!--
    <input name="country" type="text" class="form-fld" id="country" value="Country" size="30" />
    -->
    <select name="country" class="form-fld" style="width:222px;">
<option selected="selected" >Country</option>
<option value='Afghanistan'>Afghanistan</option>
<option value='Albania'>Albania</option>
<option value='Algeria'>Algeria</option>
<option value='American Samoa'>American Samoa</option>
<option value='Andorra'>Andorra</option>
<option value='Angola'>Angola</option>
<option value='Anguilla'>Anguilla</option>
<option value='Antarctica'>Antarctica</option>
<option value='Antigua and Barbuda'>Antigua and Barbuda</option>
<option value='Argentina'>Argentina</option>
<option value='Armenia'>Armenia</option>
<option value='Aruba'>Aruba</option>
<option value='Australia'>Australia</option>
<option value='Austria'>Austria</option>
<option value='Azerbaijan'>Azerbaijan</option>
<option value='Bahamas'>Bahamas</option>
<option value='Bahrain'>Bahrain</option>
<option value='Bangladesh'>Bangladesh</option>
<option value='Barbados'>Barbados</option>
<option value='Belarus'>Belarus</option>
<option value='Belgium'>Belgium</option>
<option value='Belize'>Belize</option>
<option value='Benin'>Benin</option>
<option value='Bermuda'>Bermuda</option>
<option value='Bhutan'>Bhutan</option>
<option value='Bolivia'>Bolivia</option>
<option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
<option value='Botswana'>Botswana</option>
<option value='Bouvet Island'>Bouvet Island</option>
<option value='Brazil'>Brazil</option>
<option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
<option value='Brunei Darussalam'>Brunei Darussalam</option>
<option value='Bulgaria'>Bulgaria</option>
<option value='Burkina Faso'>Burkina Faso</option>
<option value='Burundi'>Burundi</option>
<option value='Cambodia'>Cambodia</option>
<option value='Cameroon'>Cameroon</option>
<option value='Canada'>Canada</option>
<option value='Cape Verde'>Cape Verde</option>
<option value='Cayman Islands'>Cayman Islands</option>
<option value='Central African Republic'>Central African Republic</option>
<option value='Chad'>Chad</option>
<option value='Chile'>Chile</option>
<option value='China'>China</option>
<option value='Christmas Island'>Christmas Island</option>
<option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
<option value='Colombia'>Colombia</option>
<option value='Comoros'>Comoros</option>
<option value='Congo'>Congo</option>
<option value='Congo, The Democratic Republic of The'>Congo, The Democratic Republic of The</option>
<option value='Cook Islands'>Cook Islands</option>
<option value='Costa Rica'>Costa Rica</option>
<option value='Cote D'ivoire'>Cote D'ivoire</option>
<option value='Croatia'>Croatia</option>
<option value='Cuba'>Cuba</option>
<option value='Cyprus'>Cyprus</option>
<option value='Czech Republic'>Czech Republic</option>
<option value='Denmark'>Denmark</option>
<option value='Djibouti'>Djibouti</option>
<option value='Dominica'>Dominica</option>
<option value='Dominican Republic'>Dominican Republic</option>
<option value='Ecuador'>Ecuador</option>
<option value='Egypt'>Egypt</option>
<option value='El Salvador'>El Salvador</option>
<option value='Equatorial Guinea'>Equatorial Guinea</option>
<option value='Eritrea'>Eritrea</option>
<option value='Estonia'>Estonia</option>
<option value='Ethiopia'>Ethiopia</option>
<option value='Falkland Islands (Malvinas)'>Falkland Islands (Malvinas)</option>
<option value='Faroe Islands'>Faroe Islands</option>
<option value='Fiji'>Fiji</option>
<option value='Finland'>Finland</option>
<option value='France'>France</option>
<option value='French Guiana'>French Guiana</option>
<option value='French Polynesia'>French Polynesia</option>
<option value='French Southern Territories'>French Southern Territories</option>
<option value='Gabon'>Gabon</option>
<option value='Gambia'>Gambia</option>
<option value='Georgia'>Georgia</option>
<option value='Germany'>Germany</option>
<option value='Ghana'>Ghana</option>
<option value='Gibraltar'>Gibraltar</option>
<option value='Greece'>Greece</option>
<option value='Greenland'>Greenland</option>
<option value='Grenada'>Grenada</option>
<option value='Guadeloupe'>Guadeloupe</option>
<option value='Guam'>Guam</option>
<option value='Guatemala'>Guatemala</option>
<option value='Guinea'>Guinea</option>
<option value='Guinea-bissau'>Guinea-bissau</option>
<option value='Guyana'>Guyana</option>
<option value='Haiti'>Haiti</option>
<option value='Heard Island and Mcdonald Islands'>Heard Island and Mcdonald Islands</option>
<option value='Holy See (Vatican City State)'>Holy See (Vatican City State)</option>
<option value='Honduras'>Honduras</option>
<option value='Hong Kong'>Hong Kong</option>
<option value='Hungary'>Hungary</option>
<option value='Iceland'>Iceland</option>
<option value='India'>India</option>
<option value='Indonesia'>Indonesia</option>
<option value='Iran, Islamic Republic of'>Iran, Islamic Republic of</option>
<option value='Iraq'>Iraq</option>
<option value='Ireland'>Ireland</option>
<option value='Israel'>Israel</option>
<option value='Italy'>Italy</option>
<option value='Jamaica'>Jamaica</option>
<option value='Japan'>Japan</option>
<option value='Jordan'>Jordan</option>
<option value='Kazakhstan'>Kazakhstan</option>
<option value='Kenya'>Kenya</option>
<option value='Kiribati'>Kiribati</option>
<option value='Korea, Democratic People's Republic of'>Korea, Democratic People's Republic of</option>
<option value='Korea, Republic of'>Korea, Republic of</option>
<option value='Kuwait'>Kuwait</option>
<option value='Kyrgyzstan'>Kyrgyzstan</option>
<option value='Lao People's Democratic Republic'>Lao People's Democratic Republic</option>
<option value='Latvia'>Latvia</option>
<option value='Lebanon'>Lebanon</option>
<option value='Lesotho'>Lesotho</option>
<option value='Liberia'>Liberia</option>
<option value='Libyan Arab Jamahiriya'>Libyan Arab Jamahiriya</option>
<option value='Liechtenstein'>Liechtenstein</option>
<option value='Lithuania'>Lithuania</option>
<option value='Luxembourg'>Luxembourg</option>
<option value='Macao'>Macao</option>
<option value='Macedonia, The Former Yugoslav Republic of'>Macedonia, The Former Yugoslav Republic of</option>
<option value='Madagascar'>Madagascar</option>
<option value='Malawi'>Malawi</option>
<option value='Malaysia'>Malaysia</option>
<option value='Maldives'>Maldives</option>
<option value='Mali'>Mali</option>
<option value='Malta'>Malta</option>
<option value='Marshall Islands'>Marshall Islands</option>
<option value='Martinique'>Martinique</option>
<option value='Mauritania'>Mauritania</option>
<option value='Mauritius'>Mauritius</option>
<option value='Mayotte'>Mayotte</option>
<option value='Mexico'>Mexico</option>
<option value='Micronesia, Federated States of'>Micronesia, Federated States of</option>
<option value='Moldova, Republic of'>Moldova, Republic of</option>
<option value='Monaco'>Monaco</option>
<option value='Mongolia'>Mongolia</option>
<option value='Montserrat'>Montserrat</option>
<option value='Morocco'>Morocco</option>
<option value='Mozambique'>Mozambique</option>
<option value='Myanmar'>Myanmar</option>
<option value='Namibia'>Namibia</option>
<option value='Nauru'>Nauru</option>
<option value='Nepal'>Nepal</option>
<option value='Netherlands'>Netherlands</option>
<option value='Netherlands Antilles'>Netherlands Antilles</option>
<option value='New Caledonia'>New Caledonia</option>
<option value='New Zealand'>New Zealand</option>
<option value='Nicaragua'>Nicaragua</option>
<option value='Niger'>Niger</option>
<option value='Nigeria'>Nigeria</option>
<option value='Niue'>Niue</option>
<option value='Norfolk Island'>Norfolk Island</option>
<option value='Northern Mariana Islands'>Northern Mariana Islands</option>
<option value='Norway'>Norway</option>
<option value='Oman'>Oman</option>
<option value='Pakistan'>Pakistan</option>
<option value='Palau'>Palau</option>
<option value='Palestinian Territory, Occupied'>Palestinian Territory, Occupied</option>
<option value='Panama'>Panama</option>
<option value='Papua New Guinea'>Papua New Guinea</option>
<option value='Paraguay'>Paraguay</option>
<option value='Peru'>Peru</option>
<option value='Philippines'>Philippines</option>
<option value='Pitcairn'>Pitcairn</option>
<option value='Poland'>Poland</option>
<option value='Portugal'>Portugal</option>
<option value='Puerto Rico'>Puerto Rico</option>
<option value='Qatar'>Qatar</option>
<option value='Reunion'>Reunion</option>
<option value='Romania'>Romania</option>
<option value='Russian Federation'>Russian Federation</option>
<option value='Rwanda'>Rwanda</option>
<option value='Saint Helena'>Saint Helena</option>
<option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
<option value='Saint Lucia'>Saint Lucia</option>
<option value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon</option>
<option value='Saint Vincent and The Grenadines'>Saint Vincent and The Grenadines</option>
<option value='Samoa'>Samoa</option>
<option value='San Marino'>San Marino</option>
<option value='Sao Tome and Principe'>Sao Tome and Principe</option>
<option value='Saudi Arabia'>Saudi Arabia</option>
<option value='Senegal'>Senegal</option>
<option value='Serbia and Montenegro'>Serbia and Montenegro</option>
<option value='Seychelles'>Seychelles</option>
<option value='Sierra Leone'>Sierra Leone</option>
<option value='Singapore'>Singapore</option>
<option value='Slovakia'>Slovakia</option>
<option value='Slovenia'>Slovenia</option>
<option value='Solomon Islands'>Solomon Islands</option>
<option value='Somalia'>Somalia</option>
<option value='South Africa'>South Africa</option>
<option value='South Georgia and The South Sandwich Islands'>South Georgia and The South Sandwich Islands</option>
<option value='Spain'>Spain</option>
<option value='Sri Lanka'>Sri Lanka</option>
<option value='Sudan'>Sudan</option>
<option value='Suriname'>Suriname</option>
<option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option>
<option value='Swaziland'>Swaziland</option>
<option value='Sweden'>Sweden</option>
<option value='Switzerland'>Switzerland</option>
<option value='Syrian Arab Republic'>Syrian Arab Republic</option>
<option value='Taiwan, Province of China'>Taiwan, Province of China</option>
<option value='Tajikistan'>Tajikistan</option>
<option value='Tanzania, United Republic of'>Tanzania, United Republic of</option>
<option value='Thailand'>Thailand</option>
<option value='Timor-leste'>Timor-leste</option>
<option value='Togo'>Togo</option>
<option value='Tokelau'>Tokelau</option>
<option value='Tonga'>Tonga</option>
<option value='Trinidad and Tobago'>Trinidad and Tobago</option>
<option value='Tunisia'>Tunisia</option>
<option value='Turkey'>Turkey</option>
<option value='Turkmenistan'>Turkmenistan</option>
<option value='Turks and Caicos Islands'>Turks and Caicos Islands</option>
<option value='Tuvalu'>Tuvalu</option>
<option value='Uganda'>Uganda</option>
<option value='Ukraine'>Ukraine</option>
<option value='United Arab Emirates'>United Arab Emirates</option>
<option value='United Kingdom'>United Kingdom</option>
<option value='United States'>United States</option>
<option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
<option value='Uruguay'>Uruguay</option>
<option value='Uzbekistan'>Uzbekistan</option>
<option value='Vanuatu'>Vanuatu</option>
<option value='Venezuela'>Venezuela</option>
<option value='Viet Nam'>Viet Nam</option>
<option value='Virgin Islands, British'>Virgin Islands, British</option>
<option value='Virgin Islands, U.S.'>Virgin Islands, U.S.</option>
<option value='Wallis and Futuna'>Wallis and Futuna</option>
<option value='Western Sahara'>Western Sahara</option>
<option value='Yemen'>Yemen</option>
<option value='Zambia'>Zambia</option>
<option value='Zimbabwe'>Zimbabwe</option>    </select>
    
    </td>
    </tr>
  <tr>
    <td height="61" colspan="2"><input name="company" type="text" class="form-fld" id="company" onkeypress="return numere(event)" onkeyup="return limitarelungime(this, 10)" value="Company" size="30" style="width:450px;"  /></td>
    </tr>
  <tr>
    <td height="145" colspan="2"><textarea name="message"  class="form-fld-area" onkeyup="return limitarelungime(this, 255)">Message *</textarea></td>
    </tr><tr>
       <td height="61" colspan="2" valign="top"><p style="float:left; margin: 0 20px 0 0;">Security Code* </p>
         <img src="security_image.php" border="0" style="margin:0 20px -10px 0; float:left;" />         
         <input name="chapcha_code" type="text" class="form-fld" id="chapcha_code" style="width:100px;" /></td>
       </tr>
  <tr>
    <td height="61" colspan="2"><input name="reset" type="reset" class="bt" value="RESET" style=" width: 100px; padding: 5px;"/>      <input name="Submit" type="submit" class="bt" value="SUBMIT" style=" width: 100px; padding: 5px;" /></td>
    </tr>
</table>
</form>
      </div>
      
      
       <div class="clearfloat"></div>
        
      
      <p style=" height: 50px;"></p>

    <div class="clearfloat"></div>
    
    </div><!--end content container-->
  
  </div><!--end content-->
  
  
  <div id="footer">
  <div class="footer-container">
    <div class="copyright">COPYRIGHT 2011 - AFRIDI STONES</div>
    
    <div class="footer-navigation">
      <ul>
        	<li><a href="home.html">HOME</a></li><li><a href="stonesgallery.html">STONES GALLERY</a></li>
        	<li><a href="aboutus.html">ABOUT US</a></li><li><a href="contactus.php">CONTACT US</a></li>
      </ul>
    </div><!--end footer-navigation-->
  </div><!--end footer container-->
  <div class="clearfloat"></div>
  </div><!--end footer-->

</div><!--end wrapper-->

</body>
</html>
