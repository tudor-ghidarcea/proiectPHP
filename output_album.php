<html>
    <body>
        <table>
            <tr>
                <th>
                    ID Piesa: 
                </th>
                <th>
                    Nume Piesa:
                </th>
                <th>
                    Durata piesa:
                </th>
                <th>
                    Gen piesa: 
                </th>
                <th>
                    Artisti:
                </th>
            </tr>
<?php
ob_start();

include("connect.php");
include("functions.php");

$sql = "select * from album";
$result= $con->query($sql);
if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row['id_album']."</td><td>".$row['nume_album']."</td><td>".$row['durata_album']."</td><td>".$row['gen_album']."</td><td>".$row['artist']."</td><tr>";
    }
    
}else{echo"Niciun rezultat";}



?>
        </table>
    </body>
</html>