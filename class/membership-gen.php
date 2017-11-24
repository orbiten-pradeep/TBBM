
<?php
$link = mysqli_connect("localhost", "root", "", "thebigbeachmarathon");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($result1 = mysqli_query($link,"SELECT count(membership_id) as a FROM membership "))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "BBR";
        $startdig = 6;
        $x = $row['a'] + 1;

        $str = strlen($hal);

        

        $zero = $startdig - $str;

        // echo $zero;
        // echo "</br>";
        
        for($i=0; $i<$zero;$i++)
        {
            $x = '0' . $x;
        }
             
            $mem = $hal . $x;
             // echo $biX;
             // echo "<br/>";
}
}


mysqli_close($link);
?>
