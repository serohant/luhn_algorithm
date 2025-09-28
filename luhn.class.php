<?php 


class luhn{
    public function generate($prefix = '', $length = 16) {
        $prefix = preg_replace('/\D+/', '', $prefix);
        if ($length < 2) {
            return "Length too short!";
        }
        $body = $prefix;
        while (strlen($body) < $length - 1) {
            $body .= random_int(0, 9);
        }
        $sum = 0;
        $double = true;
        for ($i = strlen($body) - 1; $i >= 0; $i--) {
            $d = (int)$body[$i];
            if ($double) {
                $d *= 2;
                if ($d > 9) $d -= 9;
            }
            $sum += $d;
            $double = !$double;
        }

        $checkDigit = (10 - ($sum % 10)) % 10;
        return $body . $checkDigit;
    }

    public function check($number){
        $tx = 0;
        $ty = 0;
        $number = str_split($number);
        for ($i=count($number)-1; $i >= 0; $i--) { 
            if($i==0 || $i%2 == 0){
                $ti = $number[$i]*2;
                $sti = str_split($ti);
                if(count($sti) == 2){
                    $total = intval($sti[0]) + intval($sti[1]);
                    $tx+=$total;
                }else{
                    $tx+=$ti;
                }
                
            }else{
                $ty+=$number[$i];
            }
        }
        
        if(($tx+$ty) % 10 == 0){
            return "Valid!";
        }else{
            return "Not Valid!";
        }
    }
}


?>
