<!DOCTYPE html>
<html>
<head>
  <title> Monitoring </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://code.jquery.com/jquery-3.3.1.js" 
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <style type="text/css">

/*//////////////////////////////////////////////////////////////////////////////////////////////////////////*/
#div1, #div2, #div3, #div4, #div5  
{
 display:none;   
}
.togglediv1 #div1, .togglediv2 #div2, .togglediv3 #div3, .togglediv4 #div4, .togglediv5 #div5
{
 display:block;   
}

h3
{
  margin-top: 15%;
  color: white;
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 32px;
  padding: 80px 50px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;

}

/*//////////////////////////////////////////////////////////////////////////////////////////////////////////*/
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  /*background: -webkit-linear-gradient(left,  #159957,#155799);
  background: linear-gradient(to right, #159957, #155799);*/
  /*background: -webkit-linear-gradient(left, #FC354C, #20003F);
  background: linear-gradient(to right, #FC354C, #20003F);*/

  background: -webkit-linear-gradient(left, #C04848, #480048);
  background: linear-gradient(to right, #C04848, #480048);
  font-family: 'Roboto', sans-serif;

}
section{
  margin: 50px;
}

/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin-top: -7%;
    padding: 0;
}

table, tbody
{
  overflow: auto;
}



  </style>
</head>
<body>
    <div id="wrapper">
        <div class="overlay"></div>
     <div id="wrapxx">
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav" id="divtoggle" >
                <li class="sidebar-brand" >
                  <a href="">
                    MONITORING
                  </a>

                </li>
                <li >
                    <a id="togglediv1" href="#"><span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
                <li >
                    <a id="togglediv2" href="#"><span class="glyphicon glyphicon-eye-open"></span> Netwatch</a>
                </li>
                <li>
                    <a id="togglediv3" href="#"><span class="glyphicon glyphicon-cloud"></span> DHCP Client</a>
                </li>
                <li>
                    <a id="togglediv4" href="#"><span class="glyphicon glyphicon-compressed"></span> Interface</a>
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
                <li>
                    <a id="togglediv5" href="#"><span class="glyphicon glyphicon-info-sign"></span> Router Board</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            <div class="container" id="conindex">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                      <div id="divconten">
                          <div id="div1">
                            <center>
                              <h3 class="hometext"> PROGRAM MONITORING JARINGAN </h3>
                              <hr/>     


                              <p style="color: white;">© 2018 Unknown, All rights reserved.</p>                  
                            </center>
                          </div >
                          <div id="div2">
                               <?php
                                  // include 'part/netwatch/netwatch.php';
                                  include 'koneksi.php';
                               ?>

                                <script type="text/javascript">
                                 function ajaxCall() {
                                    $.ajax({
                                        url: "part/netwatch/netwatch.php",
                                        type: "GET",

                                        success: (function (result) {
                                            $("#div2").html(result);
                                        })
                                    })
                                };

                                 ajaxCall();
                                  setInterval(ajaxCall, (1 * 1000));
                               </script>


                          </div>
                          <div id="div3">
                               <script type="text/javascript">

                                 

                                 function ajaxCall() {
                                    $.ajax({
                                        url: "part/dhcp/dhcp.php",
                                        type: "GET",

                                        success: (function (result) {
                                            $("#div3").html(result);
                                        })
                                    })
                                };

                                 ajaxCall();
                                  setInterval(ajaxCall, (1 * 1000));


                               </script>

                          </div>
                          <div id="div4">
                              <script type="text/javascript">                          
                                function ajaxCall() {
                                    $.ajax({
                                        url: "part/interface/interface.php",
                                        type: "GET",
                                        success: (function (result) {
                                            $("#div4").html(result);
                                        })
                                    })
                                };
                                 ajaxCall();
                                  setInterval(ajaxCall, (1 * 1000)); // x * 1000 to get it in seconds
                               </script>
                          </div>
                          

                          <div id="div5">
                              <?php
                                  // include 'part/rb/rb.php';
                              ?>
                              <script type="text/javascript">                          
                                function ajaxCall() {
                                    $.ajax({
                                        url: "part/rb/rb.php",
                                        type: "GET",
                                        success: (function (result) {
                                            $("#div5").html(result);
                                        })
                                    })
                                };
                                 ajaxCall();
                                  setInterval(ajaxCall, (1 * 1000)); // x * 1000 to get it in seconds
                               </script>
                          </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        </div>
    </div>
    <!-- /#wrapper -->

</body>
<script type="text/javascript">




/*//////////////////////////////////////////////////////////////////////////////////////////////////////////*/
  
  $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = true;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = true;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});


/*//////////////////////////////////////////////////////////////////////////////////////////////////////////*/


$("div#wrapxx").prop("class", 'togglediv1');
$("#divtoggle").delegate("a", "click", function(e) {
    var toggled = ($(this).prop("id"));
    $("div#wrapxx").prop("class", toggled);
});

/*//////////////////////////////////////////////////////////////////////////////////////////////////////////*/




</script>
</html>