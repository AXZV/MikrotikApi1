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

	</style>
</head>
<body>

<div class="contablev2" id="contablev2">
                      <h1>Interface</h1>
                      <hr class="hr2">
                      </hr>
                    <div class="tbl-header">
                    <?php
                    include '../../koneksi.php';
                    // include 'koneksi.php';
                    $interface=$API->comm('/interface/getall');

                    ?>
                      <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Time Up</th>
                            <th>Rx Byte</th>
                            <th>Tx Byte</th>
                            <th>Rx Packet</th>
                            <th>Tx Packet</th>
                            <th>running</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="tbl-content" id="tbl-contentv4">
                      <table cellpadding="0" cellspacing="0" border="0" class="table_datav4"  id="tablebodyv4">
                  <?php
                      $no=1;  
                      foreach($interface as $value4)
                      {
                       ?>
                    <tbody id="v4">
                      <tr>
                        <td><?php echo $no++;?></td> 
                        <td><?php echo $value4['name'];?></td>
                        <td><?php echo $value4['last-link-up-time'];?></td>
                        <td><span class="glyphicon glyphicon-arrow-down text-danger"></span>&nbsp;&nbsp;<?php echo $value4['rx-byte'];?></td>
                        <td><span class="glyphicon glyphicon-arrow-up text-success"></span>&nbsp;&nbsp;<?php echo $value4['tx-byte'];?></td>
                        <td><span class="glyphicon glyphicon-arrow-down text-danger"></span>&nbsp;&nbsp;<?php echo $value4['rx-packet'];?></td>
                        <td><span class="glyphicon glyphicon-arrow-up text-success"></span>&nbsp;&nbsp;<?php echo $value4['tx-packet'];?></td>
                        <?php
                            if($value4['running']=="true") {?>
                            <td><span class="label label-success">True</span></td>
                              <?php   }
                            if($value4['running']=="false") { ?>
                            <td><span class="label label-danger">False</span></td>                       
                              <?php   } 
                        ?>
                        <!-- <td><?php echo $value4['running'];?></td> -->
                      </tr>
                    </tbody>
                        <?php   } ?>
                        </table> 
                     </div>
                  </div>

</body>
<script type="text/javascript">

</script>
</html>