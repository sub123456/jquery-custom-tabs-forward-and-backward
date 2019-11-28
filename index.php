<!DOCTYPE html>
<html>
<head>

 <title>Jquery Tabs</title>
 
 <meta charset="utf-8">
  
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----add icon link----> 
  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
 <!----add jquery link----> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
 
 <style>
 *{
	 
	 margin:0;
	 padding:0;
 }
  .body-container{
	  
	  width:100%;
	  height:100%;
  }
  .top-nav{
	  
	  width:60%;
	  margin:auto;
  }
  ul{
	  
	  list-style-type:none;
	  margin:0;
	  padding:0;
	  overflow:hidden;
	  height:50px;
	  width:100%;
	  background-color:black;
  }
  li{
	  
	  float:left;
	  width:25%;
	  text-align:center;
  }
  li a{
	  
	  display:block;
	  font-size:20px;
	  color:white;
	  line-height:50px;
	  opacity:0.5;
	  text-decoration:none;
	  cursor:pointer;
  }
  li a.active{
	  
	  color:white;
	  opacity:1;
  }
  .container{
	  
	  width:60%;
	  margin:auto;
	  background-color:#ccc;
	  height:500px;
	  margin-top:20px;
	  display:none;
  }
  .container.actives{
	
	display:block;
  }
  p{
	  
	  text-align:center;
	  font-size:25px;
	  margin-top:10px;
  }
 </style>
 </head>
 <body>

   <div class="body-container">
   
       <div class="top-nav">
         
		 <ul>
		  
		  <li><a class="active" href="home">HOME</a></li>
		  
		  <li><a href="news">NEWS</a></li>
		  
		  <li><a href="about">ABOUT</a></li>
		  
		  <li><a href="contact">CONTACT</a></li>
		 
	     </ul>
   
       </div>
	  
      <div class="container actives" id="home">
   
           <p>Home </p>
			 
      </div>
	  
	  <div class="container" id="news">
       
	       <p>News </p>
   
      </div>
	  
	  <div class="container" id="about">
   
          <p>About</p>
		  
      </div>
	  
	  <div class="container" id="contact">
   
          <p>Contact </p>
		  
      </div>
	  
   </div>
 
 <script>
 
  $(document).ready(function(){
	   
	     push = false;
	  
	     $('ul li a').click(function(){
			 
			 //$('') measns its select all tabs
			 
			  $('ul li a').removeClass('active');
			  
			  //$(this) measns its single tabs
			 
			  $(this).addClass('active');
			  
			   var href = $(this).attr('href');
	  
	           $('.container ').removeClass('actives');
			   
			   $('.container[id="'+href+'"]').addClass('actives');
			   
			    if(!push)
			  
			   //forward tab click
			   
			    history.pushState(null, null, href);
				
				push = false;
			   
			return false;
			
	  
         });
		 
		 //backword tabs click
		 
		 $(window).on('popstate', function(){
			 
			 push = true;
			 
			 var href = window.location.href.split('/').pop();
			 
			 //first tab
			 
			 if(href == 'index.php'){
				 
				 $('ul li a[href="home"]').click();
				 
			 }else{
				 
				$('ul li a[href="'+href+'"]').click(); 
			 }
			 
			// working fine
			 
		 });
  });
 
 </script>
    
 </body>
 </html> 