<?php
class NewClass{

	public function doTask($p1){
		echo $p1;
	}

	public function doTask($p1,$p2){
		echo $p1+$p2;
	}
}

$obj = new NewClass;
$obj->doTask(2);