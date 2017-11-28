
<?php
$link = mysqli_connect("localhost", "root", "", "thebigbeachmarathon");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM' OR city='Chennai'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "CHX";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

        // $str = strlen($hal);

        

        // $zero = $str - $startdig;

        // // echo $zero;
        // // echo "</br>";
        
        // for($i=0; $i<$zero;$i++)
        // {
        //     $x = '0' . $x;
        // }
            $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $biX = $hal . $str;
             // echo $biX;
             // echo "<br/>";
}
}
if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '21.1KM' OR city='Chennai'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $ful = "CHF";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

       //  $str = strlen($ful);

       // $zero = $str - $startdig;
       //  // echo $zero;
       //  //  echo "</br>";
        
       //  for($i=0; $i<$zero;$i++)
       //  {
       //      $x = '0' . $x;
       //  }
        $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $biF = $ful . $str;
             // echo $biF;
            // echo "<br/>";
         
    }
}

mysqli_close($link);
?>
