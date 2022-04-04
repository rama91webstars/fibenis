<?PHP

     // echo("test");
	  
	  //$a= mkdir("pg_a");
	  
	 //echo dirname("__FILE__");
	 
	 
	 
	 
	 $a=basename( __DIR__);
		//mkdir("pg/test",0777,true);
		
		$b=$a."/test/text";
		//mkdir($a."/test",0777,true);
		
		//$c = str_replace("/","_",$b);
		$c=array();
		$c = explode("/",$b);
		$cnt=array();
	//mkdir($c,0777,true);
	/* $cnt = count($c);
	  $dir_path='';
	echo $cnt[0];
	 for($i=1;$i<$cnt;$i++){
		 $dir_path = $dir_path .$cnt[$i] ."/";
		 
		 echo $dir_path;
		 if (!is_dir($dir_path)) {
          //mkdir($dir_path, 0777);
		 }
	 }*/
        
		
        echo " Create folder name:" ;
		$a= '_a_b_c_d';
		$c = str_replace("_","/",$a);
		echo $c;
		
		
     make_path($c);
	// print_r(make_path);
    function make_path($path)
	{
			$dir = pathinfo($path , PATHINFO_DIRNAME);
			
			if( is_dir($dir) )
			{
				return true;
			}
			else
			{
				if( make_path($dir) )
					{
					if( mkdir($dir) )
					{
						chmod($dir , 0777);
						return true;
					}
				}
			}
	
			return false;
	}

	 //print_r($c);
	//echo "\n".$_SERVER["REQUEST_URI"];
	
	//echo getcwd();
	
	 	
	  
	/*  $file=$a;
	  if(is_dir($file)){
		    echo "$file is a directory";
	  }
	  else{
		  echo "$file is not a directory";
	  }*/
?>