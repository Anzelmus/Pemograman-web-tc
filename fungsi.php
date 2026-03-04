<?php

class zodiac{
    function cek_data($data){
        return (isset($_GET[$data])) ? ($_GET[$data] ==NULL) ? 0 : $_GET[$data] : 0;
    
    }

    function cek_zodiac($tgl, $bulan){
        // capricorn = 21 jan sd 31 des - 1 s.d 19 jan
        if(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Capricorn";
        }
        elseif(($tgl >= 1 && $tgl <=19) && $bulan == 1){
            return "Capricorn";
        }
        if(($tgl >= 20 && $tgl <=31) && $bulan == 1){
            return "Aquarius";
        }
        if(($tgl >= 1 && $tgl <=18) && $bulan == 2){
            return "Aquarius";
        }
        elseif(($tgl >= 19 && $tgl <=28) && $bulan == 2){
            return "Pisces";
        }
        elseif(($tgl >= 1 && $tgl <=20) && $bulan == 3){
            return "Pisces";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 3){
            return "Aries";
        }
        elseif(($tgl >= 1 && $tgl <=19) && $bulan == 4){
            return "Aries";
        }
        elseif(($tgl >= 20 && $tgl <=30) && $bulan == 4){
            return "Taurus";
        }
        elseif(($tgl >= 1 && $tgl <=20) && $bulan == 5){
            return "Taurus";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 5){
            return "Gemini";
        }
        elseif(($tgl >= 1 && $tgl <=20) && $bulan == 6){
            return "Gemini";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Cancer";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Cancer";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Leo";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Leo";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Virgo";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Virgo";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Libra";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Libra";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Scorpio";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Scorpio";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Sagitarius";
        }
        elseif(($tgl >= 21 && $tgl <=31) && $bulan == 12){
            return "Sagitarius";
        }
    }
}


// instansiasi
$x = new zodiac;
?>