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
    <h2 align="center">Hasil Data Lingkaran</h2>
    <table align="center">
        <tr>
            <td>
                <?php
                    class Lingkaran{
                        private $jari;
                        const phi = 3.14;
                        function __construct( $r )
                        {
                            $this->jari = $r;
                        }
                        function getLuas()
                        {
                            return self::phi * $this->jari * $this->jari;
                        }
                        function getKeliling()
                        {
                            return 2 * self::phi *$this->jari;
                        }
                    }
                        echo "Nilai PHI : ".Lingkaran::phi;
                        $lingkar1 = new Lingkaran( 10 );
                        $lingkar2 = new Lingkaran( 4 );

                        echo "<br/>Luas Lingkaran I : ".$lingkar1->getLuas();
                        echo "<br/>Luas Lingkaran II : ".$lingkar2->getLuas();

                        echo "<br/>Keliling Lingkaran I : ".$lingkar1->getKeliling();
                        echo "<br/>Keliling Lingkaran II : ".$lingkar2->getKeliling();
                    
                ?>
            </td>
        </tr>       
    </table>
    
</body>
</html>