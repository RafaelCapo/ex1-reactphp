<?php 

	require_once 'vendor/autoload.php';

	$loop = React\EventLoop\Factory::create();

		echo 'inicio<br>';

		$loop->addTimer(0, function () {
			sleep(3);
		    echo 'meio<br>';		
		});

		echo 'fim<br>';

	$loop->run();
	