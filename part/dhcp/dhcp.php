<!DOCTYPE html>
<html>
<head>
  
<!--     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	<title> Monitoring </title>
	<style type="text/css">
		.contablev2
{
  margin-top: -5%;
  width: 110%;
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
  table-layout: fixed;
  text-align: center;
  overflow-anchor: none;
}

.tbl-header{
  background-color: rgba(255,255,255,0.3);

 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
.contablev2 th{
  padding: 20px 3px;
  text-align: left;
  font-weight: 500;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
}
.contablev2 td{
  padding: 20px 3px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 13px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
  text-align: center;
}
.hr2 {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin-top: 2%;
    padding: 0;
}



	</style>
</head>
<body>

<div class="contablev2" id="contablev2">
                      
                      <h1>DHCP Client</h1>
                      <hr class="hr2">
                      </hr>
                    <div class="tbl-header">
                    <?php
                    include '../../koneksi.php';
                    $dhcp = $API->comm("/ip/dhcp-server/lease/getall");
                    ?>
                      <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Ip Address</th>
                            <th>Mac Address</th>
                            <th>Host Name</th>
                            <th>Expires-after</th>
                            <th>last-seen</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="tbl-content" id="tbl-contentv2">
                      <table cellpadding="0" cellspacing="0" border="0" class="table_datav2"  id="tablebodyv2">
                  <?php
                      $no=1;  
                      foreach($dhcp as $value2)
                      {
                       ?>
                    <tbody id="v2">
                      <tr data-status="<?php echo $value2['status'];  ?>" id='trv2'; >
                        <td><?php echo $no++;?></td> 
                        <td id="address"><?php echo $value2['address'];?></td>
                        <td><?php echo $value2['mac-address'];?></td>
                        <td><?php echo $value2['host-name'];?></td>
                        <td><span class="glyphicon glyphicon-time text-danger"></span>&nbsp;&nbsp;<?php echo $value2['expires-after'];?></td> 
                        <td><span class="glyphicon glyphicon-time text-success"></span>&nbsp;&nbsp;<?php echo $value2['last-seen'];?></td> 
                        <?php
                            if($value2['status']=="bound") {?>
                            <td><span class="label label-success">Bound</span></td>
                              <?php   }
                            if($value2['status']=="busy") { ?>
                            <td><span class="label label-danger">Busy</span></td>                       
                              <?php   }     
                            if($value2['status']=="offered") { ?>
                            <td><span class="label label-warning">Offered</span></td>                       
                              <?php   }  
                            if($value2['status']=="authorizing") {?>
                            <td><span class="label label-success">Authorizing</span></td>
                              <?php   }
                            if($value2['status']=="testing") { ?>
                            <td><span class="label label-danger">Testing</span></td>                       
                              <?php   }     
                            if($value2['status']=="waiting") { ?>
                            <td><span class="label label-warning">Waiting</span></td>                       
                        <?php  }  ?>                                 
                      </tr>
                    </tbody>
                        <?php   } ?>
                        </table> 
                     </div>
                     <div class="col col-xs-6 text-right ">
                          <div class="filter">
                          <div class="btn-group">
                            <button type="button" class="btn btn-success btn-filterv2 btn-xs" data-target="bound">Bound</button>
                            <button type="button" class="btn btn-warning btn-filterv2 btn-xs" data-target="offered">Offered</button>
                            <button type="button" class="btn btn-danger btn-filterv2 btn-xs" data-target="busy">Busy</button>
                            <button type="button" class="btn btn-primary btn-filterv2 btn-xs" data-target="authorizing">Authorizing</button>
                            <button type="button" class="btn btn-info btn-filterv2 btn-xs" data-target="testing">Testing</button>
                            <button type="button" class="btn btn-dark btn-filterv2 btn-xs" data-target="waiting">Waiting</button>
                            <button type="button" class="btn btn-default btn-filterv2 btn-xs" data-target="all">All</button>
                          </div>
                          </div>
                      </div>
                  </div>

</body>
<script type="text/javascript">
	$(document).ready(function () {

    $('.btn-filterv2').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') 
      {
        $('.table_datav2 tr').css('display', 'none');
        $('.table_datav2 tr[data-status="' + $target + '"]').fadeIn('slow');
      } else 
      {
        $('.table_datav2 tr').css('display', 'none').fadeIn('slow');
      }
    });

 });




</script>
</html>