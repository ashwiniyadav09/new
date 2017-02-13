<?php
abstract class cms1{
	abstract public function drupal();
	abstract public function wordpress();
	abstract public function magento();
	
	
}

class indianic extends cms{
	public function drupal(){
		return 'drupal_project';
	}
	 public function wordpress(){
		 return 'wordpress';
	 }
	 public function magento(){
		 return 'magento';
	 }
	
	
}
$data= new indianic();
$get_result=$data->drupal();
$get_result1=$data->wordpress();
$get_result2=$data->magento();
print_r($get_result);
print_r($get_result1);
print_r($get_result2);

?>