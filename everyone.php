<?php
	session_start();
	
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. University Management System .::</title>
<link rel="stylesheet" type="text/css" href="css/everyone_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<link rel="stylesheet" type="text/css" href="font/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css"/>

</head>

<body>

   <div id="top">
      <div style="float:left; width:30%"> &nbsp; &nbsp; &nbsp; &nbsp; 
       <a href="http://www.facebook.com/UMS"> <i style="color:white;" class="fa fa-facebook"></i></a> &nbsp; &nbsp; &nbsp; &nbsp; 
       <a href="http://www.google.com/UMS"> <i style="color:white" class="fa fa-google"></i></a> &nbsp; &nbsp; &nbsp; &nbsp; 
       <a href="http://www.twitter.com/UMS"> <i style="color:white" class="fa fa-twitter"></i></a> &nbsp; &nbsp; &nbsp; &nbsp; 
       </div>
      <div style="float:left; width:30%"> language:</b>
            <select name="#" style="width:200px;border:0px; background-color:#03327e; color:white">
                <option value="#">English &nbsp; &nbsp; &nbsp; </option>
                <option value="#">Bangla   </option>
                <option value="#">Hindi   </option>
                <option value="#">Javanese   </option>
            </select>
      </div>
      <div style="clear:both"></div>
</div>



<br /><br />
<div id="admin">
	
        <div id="lmain">
                <a href="#" title="logo" ><img src="picture/logo.png" /></a>
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">HOME</a><br />
                	</div>
                    
                   <?php /*?> 
                    <?php 
						$sql_menu=mysql_query("SELECT * FROM  article_tbl WHERE loca_id=1");
						while($row=mysql_fetch_array($sql_menu)){
						?>
						 <div><a href="?tag=view&v_id=<?php echo $row['a_id'];?>"><?php echo $row['title'];?></a></div>
						<?php	
							}
						?>  <?php */?>
                    
                    
                 <div>
                    	<a href="everyone.php?tag=student_entry" title="Shift+1"> &nbsp;Students Entry </a><br />
                    </div>
                    
                    <div>
                    	<a href="everyone.php?tag=teachers_entry" class="customer" title="Shift+2">&nbsp;Teachers Entry</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=faculties_entry" class="customer" title="Shift+3">&nbsp;Faculties Entry</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=subject_entry" class="customer" title="Shift+4">&nbsp;Subjects Entry</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=score_entry" class="customer" title="Shift+5">&nbsp;Scores Entry</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=susers_entry" class="customer" title="Shift+6">&nbsp;Users Entry</a>
                    </div>
                    
                     <div>
                    	<a href="?tag=location_entry" class="customer" title="Shift+7">&nbsp;Location Entry</a>
                    </div>
                    
                     <div>
                    	<a href="?tag=artical_entry" class="customer" title="Shift+8">&nbsp;Article Entry</a>
                    </div>
                    
                     <div>
                    	<a href="#" class="customer" title="Shift+9">&nbsp;About Us</a>
                    </div>
                    
                     <div>
                    	<a href="#" class="customer" title="Shift+Ctrl+C">&nbsp;Contact </a>
                    </div>
                    
                    
                     <div>
                    	<a href="everyone.php?tag=test_score" class="customer" title="Shift+Ctrl+T">&nbsp;Test Score</a>
                    </div>
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    		<a href="#" title="Studnt"><img src="picture/student.png" hspace="10px" /></a>
            <a href="#" title="Teacher"><img src="picture/teacher.png" hspace="20px" /></a>
            <a href="#" title="Faculties"><img src="picture/faculties.png" hspace="15px" /></a>
            <a href="#" title="Subject"><img src="picture/subject.png" hspace="10px" /></a>
            <a href="#" title="Score"><img src="picture/score.png" hspace="20px" /></a>
            <a href="#" title="User"><img src="picture/user.png" hspace="10px" /></a>
            <a href="#" title="Location"><img src="picture/location.png" hspace="10px" /></a>
            <a href="#" title="Article"><img src="picture/article.png" hspace="10px" /></a>
            <a href="#" title="About us"><img src="picture/about us.png" hspace="7px" /></a>
            <a href="#" title="Contact"><img src="picture/contact.png" hspace="7px" /></a>
         </div><!--end of pic_manu -->
        
        
        
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                <li id="li_menu"><a href="">Students</a>
                
                    
                    <ul>
                        <li id="li_submenu">
                        <a href="everyone.php?tag=student_entry" class="sales">Students Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_students" class="stocks">View Students</a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="#">Teachers</a>
                    
                    <ul>
                        <li id="li_submenu">
                        <a href="everyone.php?tag=teachers_entry" class="order">Teachers Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_teachers" class="stocks">View Teachers</a></li>
                    </ul>
                
                </li>
                <li id="li_menu"><a href="">Facuties</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="everyone.php?tag=faculties_entry" class=" order">Facuties Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_faculties" class="customer">View Facuties</a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="#">Subjects</a>
                
                    
                    <ul>
                    	<li id="li_submenu"><a href="everyone.php?tag=subject_entry" class=" customer">Subjects Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_subjects" class=" customer">View Subjects</a></li>
                    </ul>
                
                
                </li>
           <li id="li_menu"><a href="">Score</a>
                
                    
                    <ul>
                        
                        <li id="li_submenu"><a href="everyone.php?tag=score_entry" class="customer"> Score Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_scores" class="order">View Score</a></li>
                    </ul>
                
                
                </li>
                
                <li id="li_menu" style="border-right:#CCC"><a href="">Users</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="everyone.php?tag=susers_entry" class="customer">Users Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_users" class="sales">View Users</a></li>
                        <li id="li_submenu"><a href="#" class="order">Groups Entry</a></li>
                        <li id="li_submenu"><a href="#" class="supplier">View Groups</a></li>
                    </ul>
                    
                </li>
                <li id="li_menu"><a href="">Location</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="?tag=location_entry" class="stocks">Location Entry</a></li>
                        <li id="li_submenu"><a href="?tag=view_location" class="customer">View Location</a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="">Artical</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="?tag=artical_entry" class=" sales">Artical Entry</a></li>
                        <li id="li_submenu"><a href="?tag=view_artical" class="stocks">View Atical</a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="">AboutUs</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="#" class="stocks">Phnome Penh</a></li>
                        <li id="li_submenu"><a href="#" class="sales">Takeo Province</a></li>
                        <li id="li_submenu"><a href="#" class="sales">Batdom Bong </a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="">Contact</a>
                
                	<ul>
                    	 <li id="li_submenu"><a href="#" class="customer">Contact Entry</a></li>
                        <li id="li_submenu"><a href="#" class="order">Groups Contact</a></li>
                
                	</ul>
                </li>
                           
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        elseif($tag=="teachers_entry")
                            include("Teachers_Entry.php");
                        elseif($tag=="score_entry")
                            include("Score_Entry.php");	
                        elseif($tag=="subject_entry")
                            include("Subject_Entry.php");
                        elseif($tag=="faculties_entry")
                            include("Faculties_Entry.php");
                        elseif($tag=="susers_entry")
                            include("Users_Entry.php");	
                        elseif($tag=="view_students")
                            include("View_Students.php");
						elseif($tag=="view_teachers")
							include("View_Teachers.php");
						elseif($tag=="view_subjects")
							include("View_Subjects.php");
						elseif($tag=="view_scores")
							include("View_Scores.php");
						elseif($tag=="view_users")
							include("View_Users.php");
						elseif($tag=="view_faculties")
							include("View_Faculties.php");
						elseif($tag=="location_entry")
							include("Location_Entry.php");
						elseif($tag=="artical_entry")
							include("Artical_Entry.php");
						elseif($tag=="test_score")
							include("test_Scores .php");
						elseif($tag=="view_location")
							include("View_location.php");
						elseif($tag="view_artical")
							include("View_Articaly.php");
							/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->
    
   

<div  style="height:50px; color: white; background-color:#03327e; ">
<p style="text-align:center;"> @copyright by <a href="https://www.facebook.com/K.Hasan21" >Md. Kamrul Hassan</a>  from  <a href="">Stamford University</a></p>
</div>
</body>
</html>