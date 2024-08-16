<?php

class Sample{
    public function show_hello(){
        return "Hello World";
    }

    public static function static_show_hello(){
        return "Hello World";
    }

    // 
    public static function dynamic_type_sample($x, $y){
        return $x +$y;
    }

    public static function int_type_sample(int $x, int $y): int{
        return $x * $y;
    }
    
    public static function string_type_sample(string $x, string $y): string{
        return $x + $y;
    }
}
?>