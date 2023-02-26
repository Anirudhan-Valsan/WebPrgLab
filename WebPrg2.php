<html>
    <head>
        <style>
            table{
                border-collapse:collapse;
            }
            table,th,td{
                border:1px solid blue;
            }
        </style>
    </head>
    <body>
        <form action="WebPrg2.php" method="POST">
            <center>
                <h1>Enter details of items</h1>
                <h3>Item code<input type="text" name="ic" placeholder="eg 11,12,13,14,15..."></h3>
                <h3>Item Name<input type="text" name="name" ></h3>
                <h3>Units sold<input type="text" name="us" ></h3>
                <h3>Rate<input type="text" name="rt" ></h3>
                <input type="submit" value="SUBMIT">
            </center>
            
        </form>
    </body>
</html>

<?php
if($_POST)
{
    $itemcode=$_POST['ic'];
    $itemname=$_POST['name'];
    $itemunit=$_POST['us'];
    $itemrate=$_POST['rt'];
    
    $i_code= explode(',', $itemcode);
    $i_name= explode(',', $itemname);
    $i_unit= explode(',', $itemunit);
    $i_rate= explode(',', $itemrate);
    $total=0;
    
    for($x=0;$x<5;$x++)
    {
        $total+=($i_unit[$x]*$i_rate[$x]);
    }
    echo '<table align="center" boarder=1>';
    echo '<tr><td><b>ITEM CODE</b></td><td><b>ITEM NAME</b></td><td><b>Rate</b></td>';
    echo '<tr><td>"$i_code[$x]."</td><td>$i_name[$x].<t/d><td>$i_unit[$x].<t/d><td>$i_rate[$x].<t/d></tr>';
    echo '<tr><th colspan="4"></th></tr>';
    echo '<tr><th colspan="3">Total amount</th><td>"$total"</td></tr>';
    echo '</table>';
}
?>








