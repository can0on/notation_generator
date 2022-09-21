<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Generator algorytmów</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>GENERATOR ALGORYTMÓW</h1>
    <form action="index.php" method="get">
        Wpisz notację:<br>
        <input type="text" name="pole-tekstowe"><br>
        <button type="submit">GENERUJ</button>
    </form>
    <?php
        require("getImageViewOfAlgorithm.php");
        if ($_GET)
        {
            $pole = $_GET["pole-tekstowe"];
            print "<h3>$pole</h3><br>";
                
            print getImageViewOfAlgorithm($pole);
        }
    ?>

    <br>
    <img src="PLL/A.png"><br>
    <?php
        print getImageViewOfAlgorithm("l' UR' D2 RU' R' D2R2");
    ?>

    <br>
    <img src="PLL/A_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("r U' L D2' L' ULD2'L2'");
    ?>

    <br>
    <img src="PLL/E.png"><br>
    <?php
        print getImageViewOfAlgorithm("l U' R' DRUR' D' (RUR' DRU' R' D')");
    ?>

    <br>
    <img src="PLL/F.png"><br>
    <?php
        print getImageViewOfAlgorithm("(LUF)(L' U' LULF' L2'ULUL' U' LU' L')");
    ?>

    <br>
    <img src="PLL/G.png"><br>
    <?php
        print getImageViewOfAlgorithm("(R' U' R B2) ( D L' U L U' L u' L2)");
    ?>

    <br>
    <img src="PLL/G_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("(L U L' B2) (D' R U' R' U R' u R2)");
    ?>

    <br>
    <img src="PLL/G2.png"><br>
    <?php
        print getImageViewOfAlgorithm("(R2uR' UR' U' Ru' R2)(F' UF)");
    ?>

    <br>
    <img src="PLL/G2_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("(L2u' LU' LUL' uL2)(FU' F')");
    ?>
    
    <br>
    <img src="PLL/H.png"><br>
    <?php
        print getImageViewOfAlgorithm("(M2'U') (M2'U2') (M2'U') M2'");
    ?>

    <br>
    <img src="PLL/J.png"><br>
    <?php
        print getImageViewOfAlgorithm("L U' R U2' L' U L U2' R' L' U");
    ?>

    <br>
    <img src="PLL/J_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("R' U L' U2 R U' R' U2' L R U'");
    ?>

    <br>
    <img src="PLL/N.png"><br>
    <?php
        print getImageViewOfAlgorithm("(R' UL' U2RU' L) (R' UL' U2RU' L) U");
    ?>
    
    <br>
    <img src="PLL/N_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("LU'RU2L'UR') (LU'RU2L'UR') U'");
    ?>
    
    <br>
    <img src="PLL/R.png"><br>
    <?php
        print getImageViewOfAlgorithm("(R' U2RU2) (R' FRUR' U') (R' F' R2U')");
    ?>

    <br>
    <img src="PLL/R_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("(LU2L' U2) (LF' L' U' LU) (LFL2U)");
    ?>
    
    <br>
    <img src="PLL/T.png"><br>
    <?php
        print getImageViewOfAlgorithm("(RUR' U') (R' FR2U') (R' U' RUR' F')");
    ?>

    <br>
    <img src="PLL/U.png"><br>
    <?php
        print getImageViewOfAlgorithm("(R' UR' U') (R' U') (R' URUR2)");
    ?>
    
    <br>
    <img src="PLL/U_P.png"><br>
    <?php
        print getImageViewOfAlgorithm("(R2U') (R' U' RU) (RURU' R)");
    ?>

    <br>
    <img src="PLL/V.png"><br>
    <?php
        print getImageViewOfAlgorithm("(L' UL' U') y'(R' F') (R2U' R' UR' FRF)");
    ?>
    
    <br>
    <img src="PLL/Y.png"><br>
    <?php
        print getImageViewOfAlgorithm("(FRU' R' U' RUR' F') (RUR' U') (R' FRF')");
    ?>

    <br>
    <img src="PLL/Z.png"><br>
    <?php
        print getImageViewOfAlgorithm("(UR' U' RU') (RURU' R' U) (RUR2U' R' U)");
    ?>
</body>
</html>