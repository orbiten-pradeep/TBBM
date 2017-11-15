
<?php
$link = mysqli_connect("localhost", "root", "", "thebigbeachmarathon");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "TBBMX";
        $startdig = 2;
        $x = $row['a'] + 1;

        $str = strlen($hal);

        

        $zero = $str - $startdig;

        // echo $zero;
        // echo "</br>";
        
        for($i=0; $i<$zero;$i++)
        {
            $x = '0' . $x;
        }
             
            $biX = $hal . $x;
             // echo $biX;
             // echo "<br/>";
}
}
if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '21.1KM'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $ful = "TBBMF";
        $startdig = 2;
        $x = $row['a'] + 1;

        $str = strlen($ful);

       $zero = $str - $startdig;
        // echo $zero;
        //  echo "</br>";
        
        for($i=0; $i<$zero;$i++)
        {
            $x = '0' . $x;
        }
            $biF = $ful . $x;
             // echo $biF;
            // echo "<br/>";
         
    }
}

mysqli_close($link);
?>
