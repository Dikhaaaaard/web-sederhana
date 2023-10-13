<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    /* .container{
        display: grid;
        place-items: center;
    } */

</style>



</head>
<body>
<div class="container">
    <table border="1" cellspacing="0">




        <?php 
            for ($a=1; $a<4; $a++){
                echo "<tr>";
            for ($b=1; $b<6; $b++){
                echo "<td>$a, $b</td>";
                        }
                echo"</tr>";
                    }
        ?>

        
             


       






    </table>
</div>
</body>
</html>