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

<html>
    <head>
        <title>Latihan Fungsi</title>
        
    </head>
    <body>
        <h2>Input Nilai Mahasiswa</h2>
        <form method="POST">

            <label>Nama Mahasiswa</label>
            <input type="text" name="nama">
            <br>
            <label>Nilai Tugas</label>
            <input type="number" name="Tugas">
            <br>
            <label>Nilai UTS</label>
            <input type="number" name="UTS">
            <br>
            <label>NNilai UAS</label>
            <input type="number" name="UAS">
            <br>
            <input type="submit" value="proses">
        </form>
        <?php
             if(isset($_POST['submit'])){
                $nama=$_POST['nama'];
                $tugas=$_POST['tugas'];
                $uts=$_POST['uts'];
                $uas=$_POST['uas'];

                //pemanggilan fungsi
                $nilaiakhir = hitungnilaiakhir($tugas,$uts,$uas);
                $grade = grade($nilaiakhir);
                $status = statuskelulusan($nilaiakhir);
            ?>

            <h3>Hasil Penilaian</h3>
            <p>
                <b>Nama:</b>
                <?php echo $nama; ?>
               
            </p>
            <p>
                <b>Nilai Akhir: </b>
                <?php echo $nilaiakhir; ?>
               
            </p>
            <p>
                <b>Grade: </b>
                <?php echo $grade; ?>
               
            </p>
            
            <?php
            }
            ?>
    </body>
</html>