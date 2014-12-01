<?php

session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Thank you for Contacting us | CorpTag</title>
                        
    <!-- BEGIN .styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />                      
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/tipsy.css" type="text/css" media="screen" />              
    <link rel="stylesheet" href="css/jCarousel.css" type="text/css" media="screen" />  
    
    <!--[if IE]> 
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /> 
    <![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
	  
    <link rel="stylesheet" href="css/colors/blue.css" type="text/css" media="screen" />   <!-- COLOR -->                
	<!-- END .styles -->           
    
    <!-- BEGIN .scripts -->
	<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>
	<script src="js/Kozuka_Gothic_Pro_OpenType_700.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_900.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>     
    <script src="js/easyTooltip.js" type="text/javascript"></script> 
    <script src="js/script.js" type="text/javascript"></script>
	<!-- END .scripts -->           

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />  
    <!-- [favicon] end -->
      
    <script type="text/javascript">
        Cufon.replace('h1, h2, h3:not(#footer h3, .title-blog), h4, h5, h6, table th', {fontFamily: 'Waukegan'});
        //Cufon.replace('.sidebar-nav a', {fontFamily: 'Champagne', hover: true});       
        
        jQuery(document).ready(function($){
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'facebook'});
        });
    </script>             
    
	
</head>                   
        
<body class="no_js">
    <div id="top-space"></div>

    <!-- START HEADER -->
    <div id="header">
        
        <div class="inner">
        
            <!-- START LOGO -->
            <div id="logo">
                <a href="index.html" title="CorpTag">CorpTag</a>
            </div>
            <!-- END LOGO -->
			
			<!-- START NAV -->
            <div id="nav">
				
				<ul class="level-1 black">
					
					<li>
						<a href="index.html">Home</a><span> welcome</span>

					</li>
     					
					<li>
						<a href="about_us.html">About Us</a><span>Mission</span>
					 
					</li>
					
					<li>
						<a href="advertisers.html">Marketers</a><span>Maximizing Revenues</span>
					  <ul class="sub-menu">
							<li>
								<a href="advertisers.html">Reach Your Customers</a>
						</li>             
							<li>
								<a href="deep_insights.html">Deep Insights</a>   

						</li>
                            <li><a href="data_driven_targeting.html">Data Driven Targeting</a>      
                          
					  </ul>
					</li>
					
					
					
					<li>
					  <a href="publishers.html">Publishers</a><span>ROI Driven</span>
					  
					</li>
						
					
					
					
					<li>
						<a href="technology.html">Technology</a><span>Great team</span>
					</li>	
					<li>
						<a href="contact.html">Contact Us</a><span>Know Us</span>    
					  
					</li>	                    				
				</ul>
				
			</div>            
			<!-- END NAV -->           
            <div class="clear"></div>
            
        </div>
            
    </div>
    <!-- END HEADER -->   

    
    <!-- START CONTENT -->
    <div id="content">
    
        <div class="inner">                 
			<div class="text">
                <h2 class="title-page">Thank you for Contacting Us</h2>                    
                
				<p>We will get back to you at the earliest
					</p>

				<div id="usermessagea"></div>
				
				<table width="932" height="250" border="0" align="center" cellpadding="0" cellspacing="0">

             

              <tr>

                <td height="30" class="email">&nbsp;</td>

              </tr>

              <tr>

                <td valign="top"><p class="footertext">

				

				

				

			 <?php
			if(isset($_POST['Submit']))
			{
					 $strTo="sanjay@corptag.com";

							 $strSubject= $_POST['subject'];

							 $message = "\n";

							 $message = '<table width="700" border="0" cellspacing="0" cellpadding="5">

								<tr>

								  <td align="left" valign="top" width="89">First Name: </td>

								  <td colspan="3" width="600">'.$_POST['fname'].'</td>

								</tr>
								<tr>

								  <td align="left" valign="top" width="89">Last Name: </td>

								  <td colspan="3" width="600">'.$_POST['lname'].'</td>

								</tr>
								<<tr>

								  <td align="left" valign="top" width="89">Email: </td>

								  <td colspan="3" width="600">'.$_POST['email'].'</td>

								</tr>
								<tr>

								  <td align="left" valign="top" width="89">Company: </td>

								  <td colspan="3" width="600">'.$_POST['company'].'</td>

								</tr>
								<tr>

								  <td align="left" valign="top" width="89">URL:</td>

								  <td colspan="3" width="600">'.$_POST['urlname'].'</td>

								</tr>
								<tr>

								  <td align="left" valign="top" width="89">Contact Number</td>

								  <td colspan="3" width="600">'.$_POST['phone'].'</td>

								</tr>
								
								<tr>

								  <td align="left" valign="top" width="89">Country</td>

								  <td width="261">'.$_POST['country'].'</td>

								</tr>
								
															
								<tr>

								  <td align="left" valign="top" width="89">We are a(n):</td>

								  <td colspan="3" width="600">'.$_POST['we are'].'</td>

								</tr>
								
								<tr>

								  <td align="left" valign="top" width="89">Monthly Spend: </td>

								  <td colspan="3" width="600">'.$_POST['spend'].'</td>

								</tr>
								
								<tr>

								  <td align="left" valign="top" width="89">I have a Goal: </td>

								  <td colspan="3" width="600">'.$_POST['goal'].'</td>

								</tr>
								
								
								<tr>

								  <td align="left" valign="top" width="89">Best way to Contact :</td>

								  <td colspan="3" width="600">'.$_POST['hcontact'].'</td>

								</tr>
								
								<tr>

								  <td align="left" valign="top" width="89">Industry :</td>

								  <td colspan="3" width="600">'.$_POST['category'].'</td>

								</tr>

								 

								<tr>

								  <td align="left" valign="top" width="89">Message </td>

								  <td colspan="3" width="600">'.$_POST['message'].'</td>

								</tr>

								

							  </table>';

                             

							

								 $headers .= "From:".$_REQUEST['email'] ."\n";

                                 $headers .= "MIME-version: 1.0\n";

                                 $headers .= "Content-type: text/html; charset= iso-8859-1\n"; 

                             $result = mail($strTo,$strSubject,$message,$headers);

							 if ($result)

							 {

							 echo "<p align='left'  ><b>Thank you for contacting us, We will get in touch with you soon!</b></p>";

							 }

							 else

							 {

							  echo "<br><br><p align='center' class='violettxt' >sorry  Please try again.....</p>";

							 

							 }

						} 
			else 
			{
				// Insert your code for showing an error message here
				echo '<strong></strong>';
		   }
		
	?>
				
<a href="index.html">Click here to go back to the Home page</a>
				

				

               

                  </p></td>

              </tr>

          </table>
			</div>
			
			            
            <!-- START SIDEBAR -->
            <div class="sidebar">     
    			
				                       
	                
	            <div class="clear"></div>
	                                          
	            <div class="widget">
	                <h1>Social Channels</h1>
	                
	                <a href="#" class="socials facebook" title="Facebook">facebook</a>
					<a href="#" class="socials rss" title="Rss">rss</a>
					<a href="#" class="socials twitter" title="Twitter">twitter</a>
					<a href="#" class="socials youtube" title="Youtube">youtube</a>
					<a href="#" class="socials yahoo" title="Yahoo">yahoo</a>
					<a href="#" class="socials vimeo" title="Vimeo">vimeo</a>
					<a href="#" class="socials flickr" title="Flickr">flickr</a>
					<a href="#" class="socials blogger" title="Blogger">blogger</a>
	 
	                <div class="clear"></div> 
	            </div>                                    
	                
	            <div class="clear"></div>
	            
	            
				          
    		</div>            
            <!-- END SIDEBAR -->
                        
        </div>              
    
    	<div class="clear"></div>
    
    </div>
    <!-- END CONTENT -->  
    
	<!-- START FLASH NEWS
	<div class="news-home">
        
        <div class="inner">
            <h2>News</h2>
            
            <ul>
                <li><a href="#">Bolder, a new WordPress Theme – buy it on Theme Forest</a> | January 16, 2011</li>
                <li><a href="#">All right! Now the news are dynamics!</a> | January 16, 2011</li>
                <li><a href="#">Make your choice from 18 different skins</a> | January 16, 2011</li>
            </ul>
        </div>        
            
        <div class="clear"></div>
                      
    </div>
	END FLASH NEWS -->
    
	<!-- START FOOTER -->
    
    <!-- END FOOTER -->  
      
    
    <!-- START COPYRIGHT -->
    <p id="copyright">Copyright 2013 - CorpTag.com</p>
    <!-- END COPYRIGHT -->                                    
    

</body>
</html>
