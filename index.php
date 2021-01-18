<html>
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="flaticon.css"> 
    <link rel="stylesheet" type="text/css" href="first.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!-- For Google Material Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title> Index </title>
</head>
    <body>
        <?php session_start();?>
            <header>
              <!--  <div class="w3-container w3-#fdc900">  -->
                    <div class="firstnav">
                        <table>
                            <tr>
                                <td><p><img src="jm_logo.jpg" width="200" height="50"></p></td>
                                <td><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jash Patel </p> </td>
                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                <td><i class="material-icons" style="font-size:25px; margin-top:-10px;">mail</i></td>
                                <td><p>jash15patel@gmail.com </p></td>
                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><i class="material-icons" style="font-size:25px; margin-top:-10px;">phone</i></td>
                                <td><p style="font-weight:normal;">+91-9714936424</p></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><a href="#" class="fa fa-facebook"></a>&nbsp;<a href="#" class="fa fa-instagram"></a>&nbsp;<a href="#" class="fa fa-twitter">&nbsp;<a href="#" class="fa fa-google"></a></td>
                            </tr>
                        </table>
                    </div>
            </header>

            <!-- Navigation Bar-->

            <div class="topnav" id="nav1">
                <a href="#home" class="active">Home</a>
                <a href="#service">Services</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="login.php" style="float:right; background-color:green;"><b>Client Login</b></a>
            </div>

            <!-- For Slideshow -->

            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="banner1.jpg" alt="JM Investcare" style="width:100%; height:500px;">
                        </div>

                        <div class="item">
                            <img src="banner2.jpg" alt="Second Slide" style="width:100%; height:500px;">
                        </div>

                        <div class="item">
                            <img src="banner3.jpg" alt="Purple_Rose" style="width:100%; height:500px;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
            <!-- Start About 
    ============================================= -->
    <div id="about" class="about-area services-include default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2>Welcome to our
                        <br>
                        JM Invest Care</h2>
                    <p>
                        Dear Friends, I'd like to take a few minutes of your time to introduce myself to you. We specialize in helping families to maximize their saving for College Expenses and Retirement, while minimizing risk and income taxes through insurance products. Own the past 15 years plus working experience with 750 plus families, we have discovered that many of them are not able to save for the future. We understand, we believe we can help put your mind at ease, with some simple proven smart money management strategies. "Approach towards clients & customers" 'Customer First' this is our working approach we don't believe in selling anything. Our job is to provide assistance to our customers in buying Life Insurance, Savings, Child Education, Marriage, Retirement & many others customized products which are most suitable and useful for an individual and his family. We see needs from our customers point of view and then put our best effort and use professional approach to fulfill the same. I want you to know, that if you have any questions, want a second opinion, or I can be of assistance to you in any way, please do not hesitate to contact me.
                    </p>
                    <div class="bottom-info">
                        <ul>
                            <li>
                                <a class="btn btn-theme effect btn-sm" href="#" style="padding:14px;">contact us</a>
                            </li>
                            <li><button class="btn btn-success"><i class="fa fa-whatsapp fa-md"></i>(91) 9714936424</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 services text-center">
                    <div class="col-md-6 equal-height">
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <h4>Financial<br>Planning</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="#">
                            <i class="fa fa-money"></i>
                            <h4>Investment Planning</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="#">
                            <i class="fa fa-lock"></i>
                            <h4>Retirment<br>Planning</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <h4>Development Planning</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
        <div id="service" class="ser">
            <div class="container">
                <h3 style="text-align: center; font-weight:bold;"><u>Our Services</u></h3>
                <p style="text-align: center; font-size:17px;">Company offering services in Wealth Management and Financial Planning. Our strength lies in strong knowledge, vast experience and ethics which ensure best quality for our clients.Our Core philosophy is 'Growth is Everything' .We believe that our growth lies in the client's growth and prosperity. Hence, our business is led by creativity, entrepreneurship and all of our efforts are directed into providing growth to the client.</p><br><br>
                <div class="row">
                    <div class="col-md-4">
                        <img src="mutual_fund_1.png" height="350px" class="img-circle">
                         <div>
                             <h4 style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Financial Planning</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="mf2.jpg" height="350px" class="img-circle">
                         <div>
                            <h4 style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family Welfare Planning</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="mf3.jpg" height="350px" class="img-circle">
                         <div>
                            <h4 style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mutual Funds</h4>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-4">
                        <img src="mf4.jpg" height="350px" class="img-circle">
                         <div>
                             <h4 style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Life Insurance Planning</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="mf5.jpg" height="350px" class="img-circle">
                         <div>
                            <h4 style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Health Insurance Planning</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="mf6.jpg" height="350px" class="img-circle">
                         <div>
                            <h4 style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fixed Deposits</h4>
                        </div>
                    </div>
                </div>
        </div>
        </div>
<!--=====================================================================================================
                                                Form                                                     
=======================================================================================================-->
        <div id="contact" class="contact-form-area default-padding">
         <div class="container center_div">
            <div class="row">
                <!-- Start Contact Form -->
                <div class="contact-form">
                    <div class="content">
                        <div class="heading">
                            <h3>Let's Talk about Your Business</h3>
                        </div>
                        <form action="index_form.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="project" placeholder="Tell Us About Project *" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send<i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
        </div>
<!--======================== Start Footer ============================================= -->
        
    <footer class="default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items fv1">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <h4>About Us</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                            </p>
                            <p>
                                <span>Please write your email and get our amazing updates, news and support</span>
                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="text" name="email" class="form-control" placeholder="Enter your e-mail here" />
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fa fa-paper-plane"></i>
                                            </button>  
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item link full">
                            <h4>Our Support</h4>
                            <ul>
                                <li><a href="#">Financial Planning</a></li>
                                <li><a href="#">Investment Planning</a></li>
                                <li><a href="#">Mutual Funds</a></li>
                                <li><a href="#">Saving & Investments</a></li>
                                <li><a href="#">Retirements</a></li>
                                <li><a href="#">Business Services</a></li>
                                <li><a href="#">Markets Research</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                         <div class="f-item link full">
                            <h4>Contacts</h4>
                            <ul>
                                <li><i class="fa fa-envelope"></i><span style="color: white; font-size: 17px;">GETJASHPATEL@GMAIL.COM</span></li>
                                <li><i class="fa fa-phone"></i><span style="color: white; font-size: 17px;">+91-9714936424</span></li>
                                <li><i class="fa fa-envelope"></i><span style="color: white; font-size: 17px;">HARDIKWARLI@YAHOO.COM</span></li>
                                <li><i class="fa fa-phone"></i><span style="color: white; font-size: 17px;">+91-8980264472</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
     </body>
</html>