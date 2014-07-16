<?php
// This will return the path to the first virtual directory in iis.
function root(){
    global $root_function_cache;
    if(!isset($root_function_cache)){
        $file = explode('/', str_replace("\\", "/", dirname(__FILE__)));
        $script = explode('/', $_SERVER['SCRIPT_NAME']);
        array_pop($script);
        $loop_count = min(count($script), count($file));
        for($i = 0; $i < $loop_count; $i++){
            $a = array_pop($script);
            $b = array_pop($file);
            if($a != $b){
                array_push($script, $a);
                $root_function_cache = implode('/', $script) . '/';
                return implode('/', $script) . '/';
            }
        }
        if($i == $loop_count){
            $root_function_cache = '/';
        }
    }
    return $root_function_cache;
}
?>
<a href="<?php echo root() ?>test.php">correct link</a>