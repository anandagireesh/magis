<!DOCTYPE html>
<html>
<head>
	<title>MAGIS CLOUDS : Home</title>
  <link rel="shortcut icon" type="image/icon" href="images/magis.png">
	<link href="css/style.css" rel="stylesheet">
	<!-- Bootstrap -->
  <!-- <link href="css/bootstrap.css" rel="stylesheet">  -->
  <link id="switcher" href="css/default-theme.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body >
<!-- BEGAIN PRELOADER -->
  <div id="preloader" style="display: none;">
    <div id="status" style="display: none;">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#" style="display: none;"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  
   <!-- BEGIN MENU -->
   <section >
        <div  style="background-color: black ; height:100%; " >



      @include('header')

      </div>

</section>
  <section class="section1">

                    <img class="img1" src="/images/back3.jpg"  />
                   <!--    <img class="img3" src="/images/man.gif" /> -->
                <div class="bin">
                  <marquee behavior="scroll" direction="left" >
                    11100000011001010101001011010101010010001010100110101010<br>
                    01000001010101001011010101010010001010100010100110101010<br>
                    01100000011001010101001011010101010010001010100110101010<br>
                    11100001010101001011010101010010001010100010100110101010<br>
                    10100000011001010101001011010101010010001010100110101010<br>
                    00100001010101001011010101010010001010100110101010000011<br>
                  </marquee>
                </div >
               <div class="gif">
                <img  src="/images/bin1.gif" height="100px" width="100px" >
              </div>
              <!-- <div class="man">
                <img  src="/images/gif3.gif" height="70px" width="135px">
              </div> -->
 

            <div class="pgm">
             <marquee  WIDTH=400 HEIGHT=380 behavior="scroll" direction="up" scroll="continuous"
            data-duplicated='true' >

                   void sort_numbers_ascending(int number[], int count)<br>
                    {<br>
                       int temp, i, j, k;<br>
                       for (j = 0; j < count; ++j)<br>
                       {<br>
                          for (k = j + 1; k < count; ++k)<br>
                          {<br>
                             if (number[j] > number[k])<br>
                             {<br>
                                temp = number[j];<br>
                                number[j] = number[k];<br>
                                number[k] = temp;<br>
                             }<br>
                          }<br>
                       }<br>
                       printf("Numbers in ascending order:\n");<br>
                       for (i = 0; i < count; ++i)<br>
                          printf("%d\n", number[i]);<br>
                    }<br>
                    void main()<br>
                    {<br>
                       int i, count, number[20];<br>
                     
                       printf("How many numbers you are gonna enter:");<br>
                       scanf("%d", &count);<br>
                       printf("\nEnter the numbers one by one:");<br>
                       
                       for (i = 0; i < count; ++i)<br>
                          scanf("%d", &number[i]);<br>
                     
                       sort_numbers_ascending(number, count);<br>
                    }
               

             </marquee>
             </div>

  
</section>

      
<div class="section2">
            <img class="secglobe " src="images/glo4.gif"  >

            <img class="secglobe2" src="images/back6.png" height="400"  >


  <div class="secnddiv">
                  <div class="col-sm-5">
                     <b class="subhead">
                     <div class="blinking ">COMPANY NEWS<hr></div></b>
                    
                    <div class="marquee">
                     <marquee id="mar" behavior="scroll" direction="up"  width=300; height: =600;>
                         @foreach($tt as $vari)
                         <b style="font-size: 15px "><i style="color: orange"> {{$vari->heading}}</i>
                         </b><br><br>
                         <b style="color: white;">{{$vari->des}}</b><br><br>
                           @endforeach
                     </marquee>

                     </div>
                </div>
 
 
          <div class="col-sm-4 ">
             <b class="subhead">   
             <div class="blinking">OUR PORTFOLIO<hr></div></b>
            
                <div class="marquee">
                  <marquee behavior="scroll" direction="up"  width=300; height: =600;>
                   @foreach($tt2 as $varia)
                   <b style="font-size: 15px "><i style="color: orange"> 
                   {{$varia->heading}}</i></b><br>
                   <b style="color:orange;">&#10148;&nbsp;
                    {{$varia->subheading}}</b><br>
                   <b style="color: white;">
                    {{$vari->des}} {{$varia->des}}</b><br>
                   @endforeach
                  </marquee>

                </div>
          </div>
         <div class="col-md-3 " >
                 <b class="subhead">
                 <div class="blinking">BLOG<hr></div></b>
                
                  <div class="marquee">
                   <marquee  behavior="scroll" direction="up"  width=300; height: =600;>
                   @foreach($tt3 as $variab)
                   <b style="font-size: 15px "><i style="color: orange">
                   {{$variab->heading}}</i></b><br>
                  <b style="color: orange;">&#10148;&nbsp;
                  {{$variab->subheading}}</b><br><b style="color: white">
                  {{$variab->des}}<p><br>
  
                  @endforeach
                  </marquee>

                  </div>
          </div>
      </div>
</div>

<section class="base2">
  <div class=" col-sm-2">
        <div class="base22 neon" style="text-decoration:bold underline orange;">
        COMPANY<hr>
        </div>

                    <br><br><div class="base22sub">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Leadership<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    News<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Events<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Awards<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Careers<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Contact
                            </div>
</div>



<div class="col-sm-2">
  <div class="base22 neon " style="text-decoration:bold underline orange;">
  CUSTOMERS<hr></div>

            <br><br><div class="base22sub">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            Customers<br>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            Case studies<br>

                </div>
</div>

<div class="col-sm-2">
  <div class="base22 neon" style="text-decoration:bold underline orange;">
  RESOURCES<hr></div>

                    <br><br><div class="base22sub">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Case studies<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Surveys<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Brochures<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Webinars<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Webiner Q&As<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Contact<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    News Letter<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    White papers<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Data sheets<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Videos<br>

                            </div>
</div>


<div class="col-sm-3">
  <div class="base22 neon" style="text-decoration:bold underline orange;">
  BLOG<hr></div>

          <br><br><div class="base22sub">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          Corporate Publishing<br>
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          Digital Content Production<br>
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          Digital Products<br>
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          Mobile Devices<br>
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          Professional Publishing<br>
          <i class="fa fa-chevron-right" aria-hidden="true"></i>  
          Trade<br>
                  </div>
</div>


<div class=" lastdiv col-md-3">
        <div class="blinking" style="padding-top: 90px ; font-size: 18px;">
        Sign up to connect with MagisClouds</div>
      <br>
      <form>
<div class="signup2"  style="font-size: 10px">
          <input type="email" class="sign" autocomplete="off"  name="signup" placeholder="Enter Email">&nbsp;&nbsp;
          <input type="button" class="but" name="but" value="Send">
</div>
</form>
</div>
</div>

<div class="f1"><hr>
   <div class="col-md-6 col-sm-6 ">
          <div >
            <p ><a href="http://www.magiscloudstech.com/"><b style="color: orange;">Magis Clouds Technologies</a> <!-- <i style="color: gray;font-size: 14px;"> --> <!-- Saphalya Nagar Ln, Kesavadasapuram, Thiruvananthapuram, Kerala, India 695004. -->&nbsp;Pvt.&nbspLtd.<!-- </i> --></b></p>
          </div>
        </div>
  </div>
    <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="https://www.facebook.com/magiscloudstech/"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
           </div>
        </div>
   
</section>


<!--  <div id="footer" >
        <div class="col-md-6 col-sm-6 ">
          <div >
            <p ><a href="http://www.magiscloudstech.com/"><b style="color: orange">Magis Clouds Technologies</b></a> <i style="color: gray;">,Saphalya Nagar Ln, Kesavadasapuram, Thiruvananthapuram, Kerala, India 695004.</i></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="https://www.facebook.com/magiscloudstech/"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
           </div>
        </div>
   
   </div> -->






          
  

</body>
</html>