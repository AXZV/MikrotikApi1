<!DOCTYPE html>
<html>
<head>
  <title></title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" 
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

body {
padding: 0;
margin: 0;
height: 100%;
list-style: none;
/*overflow: hidden;*/
font-family: 'Lato', Calibri, Arial, sans-serif;
}
.progressDiv {
width: 64%;
background: #fcfcfca;
height: 1050px;
border: 1px solid #ccc;
position: relative;
left: 17%;
top: 100px;
display: inline-block;
border-radius: 2px;
box-shadow: 0px 1px 1px 1px #ccc;
}

.statChartHolder {
width: 35%;
height: 90%;
position: relative;
border-right: 1px solid #ccc;
top: 45px;
    display: inline-block;
}

.statRightHolder {
display: inline-block;
height: 1050px;
width: 64%;
position: relative;
top: 70px;
margin: 0;
}
.statRightHolder ul {
list-style: none;
    margin: 0;
}
.statRightHolder li {
border-bottom: 1px solid #ccc;
height: 85px;
width: 95%;
position: relative;
top: -65px;
}
.statRightHolder h3 {
display: block;
color: #B6B5B5;
font-weight: 300;
font-size: 28px;
text-align:  center;
}
.statRightHolder span {
display: inline-block;
color: #B6B5B5;
font-size: 21px;
font-weight: 300;
margin-top: 30px;
}

/*.statsLeft {
    list-style:none;
    display:inline-block;
    width:45%;
}*/
/*.statsLeft li {
width: 100%;
height: 14px;
border: none;
top: 5px;
margin-bottom: 5px;
}
.statsLeft h3{
    font-size:17px;
    display: inline-block;
}
.statsLeft span{
    font-size: 17px;
    display:inline-block;
}
.statsRight {
width: 45%;
display: inline-block;
position: absolute;
}
.statsRight li {
width: 100%;
height: 14px;
border: none;
top: 5px;
margin-bottom: 5px;
}
.statsRight h3{
    font-size:17px;
    display: inline-block;
}
.statsRight span{
    font-size: 17px;
    display:inline-block;
}*/
/* Pie Chart */
.progress-pie-chart {
  width:200px;
  height: 200px;
  border-radius: 50%;
  background-color: #E5E5E5;
  position: relative;
}
.progress-pie-chart.gt-50 {
  background-color: #81CE97;
}

.ppc-progress {
  content: "";
  position: absolute;
  border-radius: 50%;
  left: calc(50% - 100px);
  top: calc(50% - 100px);
  width: 200px;
  height: 200px;
  clip: rect(0, 200px, 200px, 100px);
}
.ppc-progress .ppc-progress-fill {
  content: "";
  position: absolute;
  border-radius: 50%;
  left: calc(50% - 100px);
  top: calc(50% - 100px);
  width: 200px;
  height: 200px;
  clip: rect(0, 100px, 200px, 0);
  background: #81CE97;
  transform: rotate(60deg);
}
.gt-50 .ppc-progress {
  clip: rect(0, 100px, 200px, 0);
}
.gt-50 .ppc-progress .ppc-progress-fill {
  clip: rect(0, 200px, 200px, 100px);
  background: #E5E5E5;
}

.ppc-percents {
  content: "";
  position: absolute;
  border-radius: 50%;
  left: calc(50% - 173.91304px/2);
  top: calc(50% - 173.91304px/2);
  width: 173.91304px;
  height: 173.91304px;
  background: #fff;
  text-align: center;
  display: table;
}
.ppc-percents span {
  display: block;
  font-size: 2.6em;
  font-weight: bold;
  color: #81CE97;
}

.pcc-percents-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.progress-pie-chart {
  margin: 50px auto 0;
}

@media(max-width: 980px){
  
  .progressDiv{
    height: auto;
  }
  .statChartHolder{
    width: 100%;
    display: block;
    padding-bottom: 65px;
    border-right: none;
    border-bottom: 1px solid #ccc
    
  }
  .statRightHolder {
    display: block;
    height: auto;
    width: 100%;
    position: relative;
    padding-top: 50px;
    margin-bottom: 100px;
}
  .
}
  </style>
</head>
<body>
<?php
                    function custom_echo($x, $length)
                      {
                        if(strlen($x)<=$length)
                        {
                          echo $x;
                        }
                        else
                        {
                          $y=substr($x,0,$length) . '...';
                          echo $y;
                        }
                      }
?>
<?php
                        include '../../koneksi.php';
                        $resource=$API->comm('/system/resource/getall');
                      foreach($resource as $value3)

                        $fhs=$value3['free-hdd-space']/1048.58;
                        $ths=$value3['total-hdd-space']/1048.58;
                        $hfhs=$fhs/$ths*100;


                        $fm=$value3['free-memory']/1048.58;
                        $tm=$value3['total-memory']/1048.58;
                        $hfm=$fm/$tm*100;

                        $wssr=$value3['write-sect-since-reboot'];
                        $wst=$value3['write-sect-total'];
                        $hwssr=$wssr/$wst*100;
                    {
                      ?>
                    

 <div class="progressDiv">
            <div class="statChartHolder">

            <!-- ============================================ FREE HDD CHART  =================================== -->

                <div class="progress-pie-chart" data-percent="<?php custom_echo($hfhs, 2); ?>"><!--Pie Chart -->
                    <div class="ppc-progress">
                        <div class="ppc-progress-fill"></div>
                    </div>
                    <div class="ppc-percents">
                    <div class="pcc-percents-wrapper">
                        <span>Mib</span>
                    </div>
                    </div>
                </div><!--End Chart -->

                <!-- ============================================ FREE MEMORY  =================================== -->

                <div class="progress-pie-chart" id="progress-pie-chart2" data-percent="<?php custom_echo($hfm, 2); ?>"><!--Pie Chart -->
                    <div class="ppc-progress" id="ppc-progress2">
                        <div class="ppc-progress-fill" id="ppc-progress-fill2"></div>
                    </div>
                    <div class="ppc-percents" id="ppc-percents2">
                    <div class="pcc-percents-wrapper" id="pcc-percents-wrapper2">
                        <span>Mib</span>
                    </div>
                    </div>
                </div>

               
            </div>

            <div class="statRightHolder">
                <ul>
                <li><h3>ROUTER BOARD RESOURCE</h3></li>
                <li><span>Up Time</span> <span style="margin-left: 120px;"><?php echo $value3['uptime'];?></span></li>
                <li><span>Version</span> <span style="margin-left: 125px;"><?php echo $value3['version'];?></span></li>
                <li><span>Build Time</span> <span style="margin-left: 100px;"><?php echo $value3['build-time'];?></span></li>
                <li><span>Cpu</span> <span style="margin-left: 155px;"><?php echo $value3['cpu'];?></span></li>
                <li><span>Cpu Count</span> <span style="margin-left: 95px;"><?php echo $value3['cpu-count'];?></span></li>
                <li><span>Cpu Frequency</span> <span style="margin-left: 55px;"><?php echo $value3['cpu-frequency'];?></span></li>
                <li><span>Cpu Load</span> <span style="margin-left: 105px;"><?php echo $value3['cpu-load'];?></span></li>
                <li><span>Architecture Name</span> <span style="margin-left: 20px;"><?php echo $value3['architecture-name'];?></span></li>
                <li><span>Board Name</span> <span style="margin-left: 80px;"><?php echo $value3['board-name'];?></span></li>
                <li><span>Platform</span> <span style="margin-left: 110px;"><?php echo $value3['platform'];?></span></li>
                </ul>
            </div>
            
</div>
        <?php } ?>


        <script type="text/javascript">
  $(function()
  {
      var $ppc = $('.progress-pie-chart'),
        percent = parseInt($ppc.data('percent')),
        deg = 300*percent/100;
      if (percent > 50) {
        $ppc.addClass('gt-50');
      }
      $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
      $('.ppc-percents span').html(percent+'%');
    });


    $(function()
  {
      var $ppc = $('#progress-pie-chart2'),
        percent = parseInt($ppc.data('percent')),
        deg = 300*percent/100;
      if (percent > 50) {
        $ppc.addClass('gt-50');
      }
      $('#ppc-progress-fill2').css('transform','rotate('+ deg +'deg)');
      $('#ppc-percents2 span').html(percent+'%');
    });


</script>
</body>
</html>