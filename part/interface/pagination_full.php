<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Datatables</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/datatables.css">
	</head>
	<body>
		<div id="wrap">
			<div class="container">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
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
					<tbody> 

		<?php
                    // include 'koneksi.php';
		include '../../koneksi.php';
                    $interface=$API->comm('/interface/getall');

                    ?>


 <?php
                      $no=1;  
                      foreach($interface as $value4)
                      {
                       ?>
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
                      </tr>
                      <?php   } ?>
                    </tbody>
					
					<tfoot>
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
					</tfoot>
				</table>
			</div>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script src="js/datatables.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.datatable').dataTable({
				"sPaginationType": "bs_full"
			});	
			$('.datatable').each(function(){
				var datatable = $(this);
				// SEARCH - Add the placeholder for Search and Turn this into in-line form control
				var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
				search_input.attr('placeholder', 'Search');
				search_input.addClass('form-control input-sm');
				// LENGTH - Inline-Form control
				var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
				length_sel.addClass('form-control input-sm');
			});
		});
		</script>
	</body>
</html>