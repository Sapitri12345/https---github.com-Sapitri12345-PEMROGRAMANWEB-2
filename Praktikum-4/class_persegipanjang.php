<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<style>
    table {
    border-collapse: collapse;
    width: 40%;
    border: 2px solid #ddd;
    }

    th, td {
    text-align: left;
    padding: 16px;
    }
</style>
<body>
    <h2 align="center">Hasil Data Persegi Panjang</h2>
    <table align="center">
        <tr>
            <td>
                <?php
                    class Perpan{
                        private $panjang;
                        private $lebar;
                        function __construct($p, $l)
                        {
                            $this->panjang = $p;
                            $this->lebar = $l;
                        }
                        function getLuas()
                        {
                            return $this->panjang * $this->lebar;
                        }
                        function getKeliling()
                        {
                            return 2 * ($this->panjang + $this->lebar);
                        }
                    }
                
                        $perpan1 = new Perpan(10, 15);
                        $perpan2 = new Perpan(20, 5);

                        echo "<br/>Luas Persegi Panjang I : ".$perpan1->getLuas();
                        echo "<br/>Luas Persegi Panjang II : ".$perpan2->getLuas();
                        echo "<br/>Keliling Persegi Panjang I : ".$perpan1->getKeliling();
                        echo "<br/>Keliling Persegi Panjang II : ".$perpan2->getKeliling();
                ?>
            </td>
        </tr>       
    </table>
    
</body>
</html>