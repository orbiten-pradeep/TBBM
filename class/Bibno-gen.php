
<?php
$link = mysqli_connect("127.0.0.1", "thebigbeachmarat", "root@12", "thebigbeachmarathon");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM' AND city='Chennai'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "CHX";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

        
            $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $biX = $hal . $str;
            // echo $biX;
            // echo "<br/>";
            
}
}
if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '21.1KM' AND city='Chennai'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $ful = "CHF";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

      
        $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $biF = $ful . $str;
            // echo $biF;
            // echo "<br/>";
           
         
    }
}

if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM' AND city='Bangalore'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "BAX";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

        
            $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $BAX = $hal . $str;
            // echo $BAX;
            // echo "<br/>";
            
}
}
if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM' AND city='Bangalore'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "BAF";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

        
            $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $BAF = $hal . $str;
            // echo $BAF;
}
}
if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM' AND city='Mumbai'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "MUX";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

        
            $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $MUX = $hal . $str;
            // echo $BAX;
            // echo "<br/>";
            
}
}
if($result1 = mysqli_query($link,"SELECT count(Bibno) as a FROM `tickets` WHERE KM = '10KM' AND city='Mumbai'"))
{
    while ($row=mysqli_fetch_assoc($result1)) {
        # code...
        $hal = "MUF";
        $startdig = 4;
        $pad_char =0;
        $x = $row['a'] + 1;

        
            $str =str_pad($x, $startdig,$pad_char,STR_PAD_LEFT);
            $MUF = $hal . $str;
            // echo $BAF;
}
}

mysqli_close($link);
?>
