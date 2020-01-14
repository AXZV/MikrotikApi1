
?>
<!DOCTYPE html>
<html>
<head>
	<title> Monitoring </title>
	<style type="text/css">
		.contable3
{
  margin-top: -5%;
  width: 100%;
}
.filter
{
  margin-right: -110%;
  font-size: 12px;
}

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}


table{
  width:100%;
  /*table-layout: fixed;*/
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-contentv3{
  height:100%;
  margin-bottom: 50px;
  overflow-x:auto;
  margin-top: 0px; 
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 13px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}



.responsivev3 {
    width: 100%;
    height: auto;
}
	</style>



</head>
<body>    
    <div class="contable3">                  
                    <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr><td><h1>Router Board Resource</h1></td></tr>
                        </thead>
                      </table>
                    </div>
                       <?php
                        include '../../koneksi.php';
                        $resource=$API->comm('/system/resource/getall');
                      ?>
                    <div class="tbl-contentv3">
                      <table cellpadding="0" cellspacing="0" border="0" class="table_data"  id="table">
                      <?php
                      foreach($resource as $value3)
                      { ?> 
                        <tbody >
                          <tr >
                              <td><span class="glyphicon glyphicon-time"></span>   Up Time</td>
                              <td>: <?php echo $value3['uptime'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-info-sign"></span>   Version</td>
                              <td>: <?php echo $value3['version'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-bold"></span>   Build Time</td>
                              <td>: <?php echo $value3['build-time'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-hdd"></span>   Free Memory</td>
                              <td>: <?php echo $value3['free-memory'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-hdd"></span>   Total Memory</td>
                              <td>: <?php echo $value3['total-memory'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-scale"></span>   Cpu</td>
                              <td>: <?php echo $value3['cpu'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-scale"></span>   Cpu Count</td>
                              <td>: <?php echo $value3['cpu-count'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-scale"></span>   Cpu Frequency</td>
                              <td>: <?php echo $value3['cpu-frequency'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-scale"></span>   Cpu Load</td>
                              <td>: <?php echo $value3['cpu-load'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-hdd"></span>   Free Hdd Space</td>
                              <td>: <?php echo $value3['free-hdd-space'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-hdd"></span>   Total Hdd Space</td>
                              <td>: <?php echo $value3['total-hdd-space'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-dashboard"></span>   Write Sect Since Reboot</td>
                              <td>: <?php echo $value3['write-sect-since-reboot'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-dashboard"></span>   Write Sect Total</td>
                              <td>: <?php echo $value3['write-sect-total'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-phone"></span>   Architecture Name</td>
                              <td>: <?php echo $value3['architecture-name'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-unchecked"></span>   Board Name</td>
                              <td>: <?php echo $value3['board-name'];?></td>
                          </tr>
                          <tr>
                              <td><span class="glyphicon glyphicon-compressed"></span>   Platform</td>
                              <td>: <?php echo $value3['platform'];?></td>
                          </tr>                      
                        
                        </tbody>
                        <?php } ?>
                        </table> 
                     </div>
                    
                  </div>
</body>
</html>