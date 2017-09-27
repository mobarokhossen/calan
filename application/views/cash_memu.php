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
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="favicon/manifest.json">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
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
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/select2.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/print.css"/>

        <!-- Skills bar -->
        <link rel="stylesheet" href="css/skills-bar.css"/>

        <!-- custom.css - the styling for this theme -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/custom.css">
          <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/menu.css">
        <!-- Modernizr -->
          <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />  
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>  
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>  
        <meta charset="UTF-8">  
            
        <style>  
     
            .ui-menu {  
                list-style:none;  
                padding: 2px;  
                margin: 0;  
                display:block;  
            }  
            .ui-menu .ui-menu {  
                margin-top: -3px;  
            }  
            .ui-menu .ui-menu-item {  
                margin:0;  
                padding: 0;  
                zoom: 1;  
                float: left;  
                clear: left;  
                width: 100%;  
                font-size:80%;  
            }  
            .ui-menu .ui-menu-item a {  
                text-decoration:none;  
                display:block;  
                padding:.2em .4em;  
                line-height:1.5;  
                zoom:1;  
            }  
            .ui-menu .ui-menu-item a.ui-state-hover,  
            .ui-menu .ui-menu-item a.ui-state-active {  
                font-weight: normal;  
                margin: -1px;  
            }  
        </style>  
            
        <script type="text/javascript">  
        $(this).ready( function() {  
            $("#product_search").autocomplete({  
					
				var product = $('#product_search').val();	
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>welcome/lookup",  
                        dataType: {term: product},  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                                add(data.message);  
                                console.log(data);
                            }  
                        },  
                    });  
                },  
                     
            });  
        });  
        </script>  
    </head>

    <body>

        <!-- status spinner showing while loading the page -->
        <div id="preloader"></div>
        
        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>

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
                    </div> <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul  class="nav navbar-nav">
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

            <!-- bouncing arrow -->

            <!-- ABOUT -->

            <!-- ABOUT END -->

            <!-- SERVICES -->
            <section id="services" style="text-align:center; align: center;" >
          
                <h3>Cash Mamo Genaretor</h3>
             
           
                
                <form action="<?php echo base_url(); ?>welcome/genarate_memo" method="post">
                <table id="productinfo"  style="text-align:center; margin-left: 20%; " >
                    <tr>
					<td>Select Customer: </td>
						<td colspan="2" style="text-align: left;">
                                                    <select class="form-control" required  id="customer_id" name="customer_id" width="height: 50px;">
								
                                                                  <?php
                                                        echo'<option>Select Customer Name/ Number</option>';
                                                       foreach ($all_customers as $row) {
                                                           
                                                            echo '<option value="' . $row->customer_id . '">' . $row->customer_name .'  ('.$row->customer_id.')</option>';
                                                        }
                                                        ?>
							</select>
						</td>
                                                <td><a href="#" style="color:red;font-size: 18px;" id="myBtn">+ Add Customer</a> </td>
                                                <td><a href="<?php echo base_url(); ?>welcome/customer.html">calan number</a> </td>
					</tr>
                    <tr >
                        <th style="text-align: center !important;"> Product Name </th>
                        <th style="text-align: center !important;">type</th>
                        <th style="text-align: center !important;">Qty</th>
                        <th style="text-align: center !important;"> Price</th>
                        <th style="text-align: center !important;"> Total</th>
                        
                    </tr>
                    <tr>
					
                         <td>
                             <input type="text" class="form-control product_search" id="product_search"  required name="product[]"  >
						  </td>
                                                  <td style="text-align: center !important;"><input type="text" class="form-control"  id="type" name="type[]"></td>
						  <td> <input type="number" class="number per_product_price" onkeyup="total_products_price(0)" id="total_qty_0" required name="qty[]"></td>
                         <td><input type="number" class="number per_product_price" onkeyup="total_products_price(0)" id="per_price_0" required name="price[]"></td>
                           <td><input type="text" readonly class="number total_per_product"  id="total_product_price_0"></td>
                        
                    </tr>
                    
                    
                    <tfoot >
						<tr><td style="border: 0px;">
                <button id="blank-add"> + Add New Product</button>
                </td></tr>
					</tfoot>
                </table>
                <table  style="text-align:center; margin: 5% 20%; border:none;"  width="850px">
                   
                <tr>
                                    <td colspan="4" class="blank" width="500px;"> </td>
                                    <td colspan="1" class="total-line">গাড়ী ভাড়া : </td> 
                                    <td class="total-value"><div ><input type="number" class="number" style="text-align:right;" id="t_cost" name="t_cost" ></input></div></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="blank"> </td>
                                    <td colspan="1" class="total-line">লেবার চার্জ:</td> 
                                    <td class="total-value"><div ><input type="number" class="number"  style="text-align:right;" id="l_cost" name="l_cost" ></input></input></div></td>
                                </tr>

                               
                               
                                <tr>
                                    <td colspan="4" class="blank">
                                      
                                    </td>
                                    <td colspan="1" class="total-line">নগদ জমা:</td>
                                    <td class="total-value"><input style="text-align:right; color:blue; " class="number"  type="text" name="pay" id="advance_payment"></div></td>
                            </tr>
							 <tr>
                                    <td colspan="4" class="blank"> </td>
                                    <td colspan="1" class="total-line">সর্বমোট: </td> 
                                    <td class="total-value"><div id="subtotal"><input style="text-align:right; color:green; font-weight: bold;" type="text" readonly class="number" id="total" name="total_price"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="blank"> </td>
                                    <td colspan="1" class="total-line balance">বাকির পরিমাণ:</td>
                                    <td class="total-value"><div id="due-subtotal"><input style="text-align:right; color:red; font-weight: bold;" type="text" readonly id="due_amount" name="due_amount" class="number" ></div></td>
                              </tr>
                              
                          
                               
    <input type="hidden" id="last_row" value="0"/>
                                    </table>
                         <button class="btn btn-primary" type="submit">PRINT</button></a>
            </form>
                
                
                <script type="text/javascript">
var collection = [<?php echo implode($row, ","); ?>]; 
</script>   
      
                

            </section>
            <!-- SERVICES END -->

            <!-- HIRE ME -->
<div class="row">
                                    <div class="col-12">
                                        
                                        
                                    </div>
                                </div>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <button >Registration</button>

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                   <form  action="<?php echo base_url(); ?>welcome/save_new_customer" method="post">

                                    <table border='0' width='100%' cellpadding='0' cellspacing='0' align='center'style="background:#333333;" >
                                        <center><tr align="center">
                                                <td><h2 style="background:#333333; color: white;">Customer Registration Form</h2></td>
                                            </tr></center>

                                        <table border='0' width='100%' cellpadding='0' cellspacing='0' align='center'style="background:#333333; color: white;" >
                                           
                                                                    <?php $id='0'?>
                          <?php foreach ($all_customer_id as $gallery_image) { ?>
                           <?php $id= $gallery_image->customer_id;?>

                          <?php }?>
                                                                  <tr>
                                                <td align='center'>Customer ID</td>
                                                <td>   <input id="sajib" class="form-control input-md" name="customer_id" value="<?php echo $id+1?>"  type="text" tabindex="1" ></td>
                                            </tr>
                                            <tr> <td>&nbsp;</td> </tr>
                                            <tr>
                                                <td align='center'>Customer Name:</td>
                                                <td><input  name="customer_name" class="form-control input-md" type="text"  required=""></td>
                                            </tr>
                                            <tr> <td>&nbsp;</td> </tr>
                                            <tr>
                                                <td align='center'>Address</td>
                                                <td><input  name="address" type="text" class="form-control input-md" required="name" size="20%"></td>
                                            </tr>
                                            <tr> <td>&nbsp;</td> </tr>
                                            <tr>
                                                <td align='center'>Mobile Number:</td>
                                                <td><input  name="number" type="text"  class="form-control input-md" required=""></td>
                                            </tr>
                                            
                                            <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center'></br>
                                                <tr>
                                                    <td align='center'><input class="btn btn-primary" type='submit' name='REGISTER' value="SignUp"></td>
                                                </tr>
                                            </table>
                                        </table>

                                    </table>
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
        
        
        
        <script src="<?php echo base_url(); ?>css/admin/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>js/skill.bars.jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/particles.min.js"></script>
        <script src="<?php echo base_url(); ?>js/config.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
        <script src="<?php echo base_url(); ?>css/admin/create_calan.js"></script>
   
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMYUCUdT1WkZJFkrpI4IzEObG8_YNcZPg&amp;callback=myMap"></script>

    </body>

    <!-- Mirrored from themegrids.com/themes/devin/theme/particles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 05:13:18 GMT -->
</html>