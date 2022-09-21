<?php
function getImageViewOfAlgorithm($pole)
{
    $pole = preg_replace("[\\(]", "", $pole);
    $pole = preg_replace("[\\)]", "", $pole);
    $pole = str_replace(
        array(
            "x'",
            "y'",
            "x",
            "y"),
        array(
            "#31031", 
            "#33033",                     
            "#3100", 
            "#3300"),
        $pole
    ); 
    $pole = str_replace(
        array(
            "F2'",
            "f2'",
            "F'",
            "f'",
            "F2",
            "f2",
            "F",
            "f"),
        array(
            "#101010", 
            "#171717", 
            "#10010",                     
            "#17017",                     
            "#10100", 
            "#17170", 
            "#1000",
            "#1700"),
        $pole
    ); 
    $pole = str_replace(
        array(
            "B2'",
            "b2'",
            "B'",
            "b'",
            "B2",
            "b2",
            "B",
            "b"),
        array(
            "#181818", 
            "#191919", 
            "#18018",                     
            "#19019",                     
            "#18180", 
            "#19190", 
            "#1800",
            "#1900"),
        $pole
    ); 
    $pole = str_replace(
        array(
            "M2'",
            "M2",
            "M'",
            "E'",
            "M",
            "E",
            "S'",
            "S"),
        array(
            "#212121",
            "#202020",
            "#15015", 
            "#16016",                     
            "#1500", 
            "#1600",
            "#30030", 
            "#3000"),
        $pole
    ); 
    $pole = str_replace(
        array(
            "U2'",
            "u2'",
            "R2'",
            "r2'",
            "D2'",
            "d2'",
            "L2'",
            "l2'"),
        array(
            "#111", 
            "#333",                     
            "#444", 
            "#555",
            "#666", 
            "#777",                     
            "#888", 
            "#999"),
        $pole
    );            
    $pole = str_replace(
        array(
            "U2",
            "u2",
            "R2",
            "r2",
            "D2",
            "d2",
            "L2",
            "l2"),
        array(
            "#110", 
            "#330",
            "#440", 
            "#550",
            "#660", 
            "#770",
            "#880", 
            "#990"),
        $pole
    );            
    $pole = str_replace(
        array(
            "U'",
            "u'",
            "U",
            "u",
            "R'",
            "r'",
            "R",
            "r",
            "D'",
            "d'",
            "D",
            "d",
            "L'",
            "l'",
            "L",
            "l"),
        array(
            "#101", 
            "#303",
            "#100", 
            "#300",
            "#404", 
            "#505",
            "#400", 
            "#500",
            "#606", 
            "#707",
            "#600", 
            "#700",
            "#808", 
            "#909",
            "#800", 
            "#900"),
        $pole
    );       

    $pole = str_replace(
        array(
            "#202020",
            "#212121",
            "#101010", 
            "#171717", 
            "#10010",                     
            "#17017",                     
            "#10100", 
            "#17170", 
            "#1000",
            "#1700",
            "#30030", 
            "#3000",
            "#31031", 
            "#33033",                     
            "#3100", 
            "#3300",
            "#181818", 
            "#191919", 
            "#18018",                     
            "#19019",                     
            "#18180", 
            "#19190", 
            "#1800",
            "#1900"),
        array(
            "<img src='Notacje/1.567/kostka1.52.png'> ",
            "<img src='Notacje/1.567/kostka1.52ap.png'> ",
            "<img src='Notacje/1.4/kostka1.42ap.png'> ", 
            "<img src='Notacje/1.4/kostka(1.42)ap.png'> ", 
            "<img src='Notacje/1.4/kostka1.4ap.png'> ",
            "<img src='Notacje/1.4/kostka(1.4)ap.png'> ",
            "<img src='Notacje/1.4/kostka1.42.png'> ", 
            "<img src='Notacje/1.4/kostka(1.42).png'> ", 
            "<img src='Notacje/1.4/kostka1.4.png'> ",
            "<img src='Notacje/1.4/kostka(1.4).png'> ",
            "<img src='Notacje/1.567/kostka1.7ap.png'> ", 
            "<img src='Notacje/1.567/kostka1.7.png'> ",
            "<img src='Notacje/1.910/kostka(1.9)ap.png'> ", 
            "<img src='Notacje/1.910/kostka(1.10)ap.png'> ",
            "<img src='Notacje/1.910/kostka(1.9).png'> ", 
            "<img src='Notacje/1.910/kostka(1.10).png'> ",
            "<img src='Notacje/1.8/kostka1.82ap.png'> ",
            "<img src='Notacje/1.8/kostka(1.82)ap.png'> ",
            "<img src='Notacje/1.8/kostka1.8ap.png'> ", 
            "<img src='Notacje/1.8/kostka(1.8)ap.png'> ",
            "<img src='Notacje/1.8/kostka1.82.png'> ", 
            "<img src='Notacje/1.8/kostka(1.82).png'> ",
            "<img src='Notacje/1.8/kostka1.8.png'> ", 
            "<img src='Notacje/1.8/kostka(1.8).png'> "),
        $pole
    );
    $pole = str_replace(
        array(
            "#15015", 
            "#16016",                     
            "#1500", 
            "#1600"),
        array(
            "<img src='Notacje/1.567/kostka1.6ap.png'> ", 
            "<img src='Notacje/1.567/kostka1.5ap.png'> ",
            "<img src='Notacje/1.567/kostka1.6.png'> ", 
            "<img src='Notacje/1.567/kostka1.5.png'> "),
        $pole
    );
    $pole = str_replace(
        array(
            "#111", 
            "#333",                     
            "#444", 
            "#555",
            "#666", 
            "#777",                     
            "#888", 
            "#999"),
        array(
            "<img src='Notacje/1/kostka12ap.png'> ", 
            "<img src='Notacje/1/kostka(12)ap.png'> ", 
            "<img src='Notacje/1.1/kostka1.12ap.png'> ", 
            "<img src='Notacje/1.1/kostka(1.12)ap.png'> ",
            "<img src='Notacje/1.2/kostka1.22ap.png'> ", 
            "<img src='Notacje/1.2/kostka(1.22)ap.png'> ", 
            "<img src='Notacje/1.3/kostka1.32ap.png'> ", 
            "<img src='Notacje/1.3/kostka(1.32)ap.png'> "),
        $pole
    );    
  
    $pole = str_replace(
        array(
            "#110", 
            "#330",
            "#440", 
            "#550",
            "#660", 
            "#770",
            "#880", 
            "#990"),
        array(
            "<img src='Notacje/1/kostka12.png'> ", 
            "<img src='Notacje/1/kostka(12).png'> ",
            "<img src='Notacje/1.1/kostka1.12.png'> ", 
            "<img src='Notacje/1.1/kostka(1.12).png'> ",
            "<img src='Notacje/1.2/kostka1.22.png'> ", 
            "<img src='Notacje/1.2/kostka(1.22).png'> ",
            "<img src='Notacje/1.3/kostka1.32.png'> ", 
            "<img src='Notacje/1.3/kostka(1.32).png'> "),
        $pole
    );    

    $pole = str_replace(
        array(
            "#101", 
            "#303",
            "#100", 
            "#300",
            "#404", 
            "#505",
            "#400", 
            "#500",
            "#606", 
            "#707",
            "#600", 
            "#700",
            "#808", 
            "#909",
            "#800", 
            "#900"),
        array(
            "<img src='Notacje/1/kostka1ap.png'> ", 
            "<img src='Notacje/1/kostka(1)ap.png'> ",
            "<img src='Notacje/1/kostka1.png'> ", 
            "<img src='Notacje/1/kostka(1).png'> ",
            "<img src='Notacje/1.1/kostka1.1ap.png'> ", 
            "<img src='Notacje/1.1/kostka(1.1)ap.png'> ",
            "<img src='Notacje/1.1/kostka1.1.png'> ", 
            "<img src='Notacje/1.1/kostka(1.1).png'> ",
            "<img src='Notacje/1.2/kostka1.2ap.png'> ", 
            "<img src='Notacje/1.2/kostka(1.2)ap.png'> ",
            "<img src='Notacje/1.2/kostka1.2.png'> ", 
            "<img src='Notacje/1.2/kostka(1.2).png'> ",
            "<img src='Notacje/1.3/kostka1.3ap.png'> ", 
            "<img src='Notacje/1.3/kostka(1.3)ap.png'> ",
            "<img src='Notacje/1.3/kostka1.3.png'> ", 
            "<img src='Notacje/1.3/kostka(1.3).png'> "),
        $pole
    );  
    return $pole;  
}
?>