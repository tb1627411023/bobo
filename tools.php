<?php

    if(!function_exists('tb_debug')){
    	function tb_debug($data){
    		echo "<pre>";
    		print_r($data);
    		echo "</pre>";
    	}
    	
    }