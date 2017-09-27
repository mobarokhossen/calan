<!DOCTYPE html>
<html lang="en" class="no-js">

    <!-- Mirrored from themegrids.com/themes/devin/theme/particles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 05:12:05 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come after these tags -->

        <!-- Fill in the following meta tags -->
        <meta name="keywords" content="keyword1, keyword2, keyword3"/>
        <meta name="description" content="Description">
        <meta name="author" content="Author">

        <!-- Change the site title -->
        <title>মেসার্স হাজী আবুল কাশেম এন্ড সন্স</title>

        <!-- You can regenerate the favicons as you wish using http://realfavicongenerator.net/, see the theme documentation -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo base_url(); ?>favicon/manifest.json">
        <link rel="mask-icon" href="<?php echo base_url(); ?>favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,700" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- Pretty Photo -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css"/>

        <!-- Flickity -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/flickity.css"/>

        <!-- animate.css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css"/>

        <!-- Skills bar -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/skills-bar.css"/>

        <!-- custom.css - the styling for this theme -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/menu.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/from.css">
        <!-- Modernizr -->
        <script src="<?php echo base_url(); ?>js/modernizr-custom.js"></script>

    </head>

    <body>

        <!-- status spinner showing while loading the page -->
        <div id="preloader"></div>

        <!-- HEADER -->
        <header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top navbar-inverse">
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="col-sm-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul>
                            <li><a class="active" href="<?php echo base_url(); ?>welcome/home.html">হোম</a></li>
                            
                            <li><a href="<?php echo base_url(); ?>welcome/cash_memu.html">ক্যাশ মেমো</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/customer.html">ডেলিভারি চালান</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/payment.html">লেনদেন</a></li>

                            <li><a href="<?php echo base_url(); ?>welcome/daily.html">প্রতিদিন এর হিসাব</a></li>
                             <li ><a href="<?php echo base_url(); ?>welcome/mahajon.html">মহাজন তথ্য</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/customer_infoo.html">কাস্টমার তথ্য</a></li>
                             </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- HEADER END -->

        <div id="content-wrap">

            <!-- HERO AREA -->
            <div class="jumbotron" id="#hero" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                <link href="css/custom.css" rel="stylesheet" type="text/css"/>
                <div class="container">
                    <h1>মেসার্স হাজী আবুল কাশেম এন্ড সন্স</h1>
                    <h3>ব্রাহ্মানবাড়িয়া  অফিস</br>
                        ফুলবাড়িয়া বাসস্ট্যান্ড,ব্রাহ্মানবাড়িয়া </br>
                        মোবাইলঃ০১৭৬৬-৬৫৬৪৮৫</h3>
                </div>
            </div>
            <!-- HERO AREA END -->

            <!-- bouncing arrow -->

            <!-- ABOUT -->

            <!-- ABOUT END -->

            <!-- SERVICES -->
            <section id="services">
                <div class="section-header">
                    <div>
                        <h2>পণ্য সমূহ</h2>
                        <!-- Trigger/Open The Modal -->
                   
                        <input id="myBtn" type="submit" value="নতুন পণ্য" onclick="return confirm('Are you sure?')" class="alt_btn" target="blank">

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                
                        <?php
                        

                        class Converter {

                            public static $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
                            public static $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

                            public static function bn2en($number) {
                                return str_replace(self::$bn, self::$en, $number);
                            }

                            public static function en2bn($number) {
                                return str_replace(self::$en, self::$bn, $number);
                            }

                        }
                        ?>
                                <form  action="<?php echo base_url(); ?>welcome/product" method="post">
                   
                                    <table>
                                        <tbody>
                                            <tr>
                                             
                                                <td> <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>"></td>
                                            </tr>
                                            <tr><legend><span class="number">1</span>Add New Product</legend>
                                               <label for="name">পণ্যের ধরন</label>
      
          
                                                    <select id="job" name="product_type" >
                                                        <option value="রড">রড</option>
                                                        <option value="সিমেন্ট">সিমেন্ট</option>
                                                        <option value="রিং">রিং</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                              
                                               <label for="name">নতুন পণ্যের নাম</label>
                                          <input type="text" id="name" name="product_name">
                                           <label for="name">পরিমাণ</label>
                                           <input name="product_quantity" type="text">
                                          <select id="job" name="quantity_type" >
                                                         <option value="kg">কেজি</option>
                                                        <option value="mon">মণ</option>
                                                        <option value="ton">পিস </option>
                                                         <option value="paket">প্যাকেট</option>
                                                    </select>
                                            </tr>
                                    
                                        
                                            <tr>
                                           
                                               <button onclick="return confirm('Are you sure?')"> Save</button>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form></br></br>
                                <form  action="<?php echo base_url(); ?>welcome/product_update" method="post">
                                 <legend><span class="number">2</span>Update Product</legend>
                                    <label for="name">নতুন পণ্যের নাম</label>
                                     <select id="job" name="product_name" >
                                         <option value="0">Select Product Name</option>
                                                        <?php
                                                        foreach ($all_product as $row) {
                                                            echo '<option value="' . $row->product_name . '">' . $row->product_name . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                       
                                           <label for="name">পরিমাণ</label>
                                           <input name="product_quantity" type="text"></td>
                                          <select id="job" name="quantity_type" >
                                                         <option value="kg">কেজি</option>
                                                        <option value="mon">মণ</option>
                                                        <option value="ton">পিস </option>
                                                         <option value="paket">প্যাকেট</option>
                                          </select>
                                          <button onclick="return confirm('Are you sure?')"> Update</button>
                                </form></br></br>
                                 <form  action="<?php echo base_url(); ?>welcome/delete_product" method="post">
                                 
                                  
                                       
                                          <legend><span class="number">3</span>Delete Product</legend>
                                                 <label for="name">নতুন পণ্যের নাম</label>
                                     <select id="job" name="product_name" >
                                         <option value="0">Select Product Name</option>
                                                        <?php
                                                        foreach ($all_product as $row) {
                                                            echo '<option value="' . $row->product_name . '">' . $row->product_name . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                           
                                          
                                         
                                          
                                                   <button onclick="return confirm('Are you sure?')" target="blank"> Delete</button>
                                       
                                </form>
                                
                            </div>

                        </div>

                        <script>
                            // Get the modal
                            var modal = document.getElementById('myModal');

                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal 
                            btn.onclick = function () {
                                modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function () {
                                modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function (event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                           
                        
                        

                    </div>
                </div>
                <div></br>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 nopadding">
                                <div class="box">
                                    <div class="circle"><i class="fa fa-home"></i></div>
                                    <h3>রড</h3>
                                    <table>
                                        <tr>

                                        <table  bgcolor="#dedede">


                                            <tr >

                                                <td height="20" width="140"  bgcolor="#7cae31" ><h3>পণ্যনের বিবরন   </h3></td>
                                                <td height="20" width="180"  bgcolor="#7cae31" ><h3>পরিমাণ</h3></td>
                                                <td height="20" width="190"  bgcolor="#7cae31" ><h3>কেজি/গ্রাম</h3></td>
                                              

                                            </tr>
                                            <tr>
                                            <tbody>
                                               
                                                <?php foreach ($first_product as $gallery_image) { ?>
                                                    <tr> 

                                                        <td><?php echo $gallery_image->product_name ?></td>  
                                             
                                                        <td><?php 
                                                        $quan=$gallery_image->product_quantity;
                                                        $value=$quan;
                                                        echo Converter::en2bn($value); ?></td>
                                                       <td>কেজি </td>



                                                        </tr>
                                                <?php } ?>
                                                    
                                                    
                                            </tbody>
                 
                                            </tr>
                                        </table>
                                    </tr>

                                    </table>

                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 nopadding">
                                <div class="box">
                                    <div class="circle"><i class="fa fa-print"></i></div>
                                    <h3>সিমেন্ট</h3>
                                    <table  bgcolor="#dedede">


                                        <tr >

                                            <td height="20" width="140"  bgcolor="#7cae31" ><h3>পণ্যনের বিবরন   </h3></td>
                                            <td height="20" width="180"  bgcolor="#7cae31" ><h3>পরিমাণ</h3></td>
                                            <td height="20" width="190"  bgcolor="#7cae31" ><h3>কেজি/গ্রাম</h3></td>
                                           


                                        </tr>
                                        <tr>
                                              <tbody>
                                               
                                                <?php foreach ($second_product as $gallery_image) { ?>
                                                    <tr> 

                                                        <td><?php echo $gallery_image->product_name ?></td>  
                                             
                                                        <td><?php echo Converter::en2bn($gallery_image->product_quantity); ?> </td>
                                                        <td>প্যাকেট</td>
                                                          
                                                    </tr>
                                                <?php } ?>
                                                    
                                            </tbody>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 nopadding">
                                <div class="box">
                                    <div class="circle"><i class="fa fa-camera"></i></div>
                                    <h3>রিং</h3>
                                    <table  bgcolor="#dedede">


                                        <tr >

                                            <td height="20" width="140"  bgcolor="#7cae31" ><h3>পণ্যনের বিবরন   </h3></td>
                                            <td height="20" width="180"  bgcolor="#7cae31" ><h3>পরিমাণ</h3></td>
                                            <td height="20" width="190"  bgcolor="#7cae31" ><h3>কেজি/গ্রাম</h3></td>
                                                

                                        </tr>
                                         <tr>
                                              <tbody>
                                               
                                                <?php foreach ($third_product as $gallery_image) { ?>
                                                    <tr> 

                                                        <td><?php echo $gallery_image->product_name ?></td>  
                                             <td><?php 
                                                        $quan=$gallery_image->product_quantity;
                                                        $value=$quan;
                                                        echo Converter::en2bn($value); ?></td>
                                                       <td>কেজি </td>

                                                                       </tr>
                                                <?php } ?>
                                                    
                                            </tbody>
                                        </tr>


                                    </table>   </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- SERVICES END -->

            <!-- HIRE ME -->

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                      
                            
                            
                        </div>
                        <div class="col-12 col-sm-6 social">
                           <p class="pull-right">
                                <a class="menuitem_red" href="<?php echo base_url(); ?>welcome/logout" onclick="return confirm('Are you sure?')">LOGOUT</a>
                               </i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="<?php echo base_url(); ?>js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-migrate-3.0.0.min.js"></script>
        <script src="<?php echo base_url(); ?>js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.stellar.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>js/flickity.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>js/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.debouncedresize.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>js/typed.min.js"></script>
        <script src="<?php echo base_url(); ?>js/skill.bars.jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/particles.min.js"></script>
        <script src="<?php echo base_url(); ?>js/config.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMYUCUdT1WkZJFkrpI4IzEObG8_YNcZPg&amp;callback=myMap"></script>

    </body>

    <!-- Mirrored from themegrids.com/themes/devin/theme/particles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 05:13:18 GMT -->
</html>