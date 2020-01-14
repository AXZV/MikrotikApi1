<!DOCTYPE html>
<html>
<head>
	<title> Monitoring </title>
	<style type="text/css">
		.contable
{
  margin-top: -5%;
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


	</style>
</head>
<body>

<div class="contable">
                      <h1>Netwatch</h1>
                      <hr class="hr2">
                      </hr>
                    <div class="tbl-header">
                    <?php
                    include '../../koneksi.php';

                        $netwatch = $API->comm("/tool/netwatch/getall");
                      ?>
                      <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Ip address</th>
                            <th>Name</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="tbl-content">
                      <table cellpadding="0" cellspacing="0" border="0" class="table_data"  id="table">
                  <?php
                      $no=1;  
                      foreach($netwatch as $value1)
                      { ?>
                        <tbody >
                          <tr data-status="<?php echo $value1['status'];  ?>">
                            <td><?php echo $no++;?></td>
		                        <td><?php echo $value1['host'];?></td>
                            <?php if(!empty($value1['comment']))

                            {
                              ?>
                              <td><?php echo $value1['comment'];?></td>
                              <?php
                              }
                               else 
                               {
                                ?>
                              <td><?php echo "Unknown";?></td>
                              <?php
                              }

                            ?>


		                        <!-- <td><?php echo $value1['comment'];?></td> -->

		                        <?php
		                        if($value1['status']=="up") {?>
		                        <td><span class="label label-success">ACTIVE</span></td>
		                                  <?php    }
		                        if($value1['status']=="down") { ?>
		                        <td><span class="label label-danger">NOT ACTIVE</span></td>                       
		                          <?php   }     
		                        if($value1['status']=="unknown") { ?>
		                        <td><span class="label label-warning">UNKNOWN</span></td>                       
		                          <?php   }      ?>  
                        </tr>
                        </tbody>
                        <?php } ?>
                        </table> 
                     </div>
	                    <div class="col col-xs-6 text-right">
	                        <div class="filter">
	                        <div class="btn-group">
	                          <button type="button" class="btn btn-success btn-filter btn-xs" data-target="up">Active</button>
	                          <button type="button" class="btn btn-warning btn-filter btn-xs" data-target="unknown">Unknown</button>
	                          <button type="button" class="btn btn-danger btn-filter btn-xs" data-target="down">Not Active</button>
	                          <button type="button" class="btn btn-default btn-filter btn-xs" data-target="all">All</button>
	                        </div>
	                        </div>
	                    </div>
  </div>

</body>
<script type="text/javascript">
	$(document).ready(function () {

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table_data tr').css('display', 'none');
        $('.table_data tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table_data tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
</script>
</html>