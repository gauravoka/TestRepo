<html>


<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="stylesheet1.css">
    
</head>
<body style="background-color:orange;margin-left:80px;margin-right:80px">
    <form id="form1" runat="server">

    <div style="background-color:white; width: auto; height:15%">
       
        <img src="Images/Logo & Name.png" style="width:15%; height: 70%" runat="server" alt="" /><br/>
     
        <font style="color:orange">COMPLETE ELECTRICAL SOLUTIONS</font>
       
        
            </div>
       
    
   
        <div style=" background-color:darkblue;max-width:100% ; height: auto;text-align:center;">
            <a href="index.php" style="color:white">Home</a>&nbsp
            <a href="services.php" style="color:white">Services</a>&nbsp
            <a href="contacts.php" style="color:white">Contacts</a>
             </div>

                
    
            <div>
              <img class="mySlides"  src="Images/company.jpg" style="height: 40%; width: 100%; margin-top: 0px;margin-left: 0px; " />
              <img class="mySlides"  src="Images/services.jpg" style="height: 40%; width: 100%; margin-top: 0px;margin-left: 0px; " />
              <img class="mySlides"  src="Images/office.jpg" style="height: 40%; width: 100%; margin-top: 0px;margin-left: 0px; " />
              <img class="mySlides"  src="Images/office1.jpg" style="height: 40%; width: 100%; margin-top: 0px;margin-left: 0px; " />
           </div>
              <script>
			var myIndex = 0;
			carousel();

			function carousel() {
    			var i;
    			var x = document.getElementsByClassName("mySlides");
    			for (i = 0; i < x.length; i++) {
       			x[i].style.display = "none";  
    			}
    			myIndex++;
    			if (myIndex > x.length) {myIndex = 1}    
    			x[myIndex-1].style.display = "block";  
    			setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			</script>
           
        <Table style="width: auto">
        <tr>
        <td colspan="5" style="width : 50%">
         <div style="height: 100%; width: auto; margin-top: 0px;">

        <h2>About Us</h2>
           <p>"ELCORE SOLUTIONS is a fast upcoming contractor providing electrical 
               design and execution services to major IT parks, Commercial centers,
                Industrial areas and Residential spaces."
           </p>
           <p>
                Established by two enthusiastic, passionate and dedicated engineers having huge experience in 
               electrical design and execution, Nikhlesh Gandhi (B.E Electrical) and 
               Harshal Fadnis (M.E Mechatronics) in early 2016 has been growing leaps and 
               bounds since the inception.    
             </p>  
           <p>
               We pride ourselves in striving to consistently supersede the expectation of all our
                valued customers by performing with un-compromising emphasis on safety, efficiency and accuracy. 
               We are committed to continuous improvement, and clearly understand the importance of training.
                And we always keep our team ready with the trainings in advancing technologies as to apply to our projects.                                                                                                                                                                                                        											
			</p>
           <p>
               Our team members are focused, developed, and proficient on the most advanced technologies,
                methods, and processes in the engineering design, construction, & maintenance sector.
                   thank you    											
		</p>
               
               </div>
       </td>
 
       <td colspan="5" style="width:50%" >
        <div style="height: 100%; width: auto; margin-left: 0px; margin-top: 0px;" aria-orientation="horizontal">
         <h2>MISSION THAT DRIVES OUR VISION</h2>
           <p>"Our performance is driven by our Passion and Values towards the delightment of our client by 
             engineering a solution that is the perfect balance of competitive, committed comprehensive, and
            cutting-edge ideas."         

           </p>
           <p>
                "Creation of Goodwill is the soul of our practice and we 
               will always strive to maintain And achieve Perfection."		
		
           </p>  
          <img src="Images/planning.png" />
               
               </div>
         </td>
            </tr>

            <tr>
          
                 
                <td><img src="Images/concur%20architects.jpg" style="width:140px; height: 72px"  /></td>
                <td><img src="Images/exfo-logo.JPG" style="width:140px; height: 72px" /></td>
                <td><img src="Images/hoganans%20logo.png" style="width:140px; height: 72px" /></td>
                <td><img src="Images/SDS%20logo.png"  style="width:140px; height: 72px"/></td>
                 <td><img src="Images/images.jpg"  style="width:140px; height: 72px"/></td>

                  
                 <td><img src="Images/download.jpg"  style="width:140px; height: 72px"/></td>                
                <td ><img src="Images/GS_logo.png" style="width:140px; height: 72px" /></td>
                <td><img src="Images/Genesis_logo.png" style="width:140px; height: 72px" /></td>
                <td><img src="Images/xdbs-corporation-logo.png" style="width:140px; height: 72px" /></td>
                <td class="auto-style2"><img src="Images/westin%20hotel%20logo.png" style="width:140px; height: 72px" />
                </td>
               

            </tr>

            </table>

         

    </form>
</body>


</body>
</html>
