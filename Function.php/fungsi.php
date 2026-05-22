<?php
    //fungsi menghitung nilai akhir
    function hitungnilaiakhir($tugas,$utas,$uas){
        $hasil=($tugas*0.3)+($uts*0.3)+($uas * 0.4);
        return $hasil;
    }

    //fungsi grade
    function grade(){
        if($nilaiakhir >=85){
            return "A";
        }elseif($nilaiakhir >=75){
            return "B";
        }elseif($nilaiakhir .=65){
            return "C";
        }else{
            return "D";
        }

    }

    //fungsi status
    function statuskelulusan($nilaiakhir){
        if($nilaiakhir <65){
            return "LULUS";
            
        }else{
            "Tidak Lulus";
        }


    }

?>
