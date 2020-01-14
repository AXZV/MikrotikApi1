<?php

			require('routeros_api.class.php');

			$API = new RouterosAPI();

			$API->debug = false;

			if ($API->connect('192.168.10.1', 'admin', '')) 
			{

				$netwatch = $API->comm("/tool/netwatch/getall");
				
				$dhcp = $API->comm("/ip/dhcp-server/lease/getall");

				$resource=$API->comm('/system/resource/getall');

				$interface=$API->comm('/interface/getall');
	
			}
			else
			{
				

			 }
			?>