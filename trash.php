<?php


		$ch = curl_init();

		//设置选项，包括URL
		curl_setopt($ch, CURLOPT_URL, 'http://ip.taobao.com/service/getIpInfo.php?ip=222.90.212.158');

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);

		$output = curl_exec($ch);
		curl_close($ch);

		$arr = json_decode($output);

		print_r($arr);