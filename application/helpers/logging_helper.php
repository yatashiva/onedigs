<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('write_audit_log')) {
	function write_audit_log($data){
		if(ENABLE_AUDIT_LOG == 1){
			$doc_path 	= FCPATH.'logs';
			$check_Year = strtotime("now");
			$checkYear 	= date('Y',$check_Year);
			$checkMonth	= date('F');
			$file_name1	= "audit_log_".date("dMY");
			$file_name	= $file_name1.'.json';
			$filename=$doc_path.'/'.$checkYear.'/'.$checkMonth.'/'.$file_name;
			$month=date('F');
			if (!file_exists( $doc_path."/".$checkYear )) {
				mkdir($doc_path."/".$checkYear,0777,true );
			}
			if (!file_exists( $doc_path."/".$checkYear."/".$month)) {
				mkdir($doc_path."/".$checkYear.'/'.$month , 0777, true);
			}
			$arr_data = array();
			if(file_exists($filename)) {
			  $jsondata = file_get_contents($filename);
			  $arr_data = json_decode($jsondata, true);
			}
			$arr_data[] = $data;
			  $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
			file_put_contents($filename, $jsondata);
		}
	}
}