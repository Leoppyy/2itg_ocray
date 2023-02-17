<html>
    <head>
        <title>PHP Calcu Taxy</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="style.css">
        <form method="post" action="">

        </head>

    <body>
<div class="content"> 

        <h1>ABACUS (Salary & Tax Calculator)</h1>
        <p style="background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwallpaper-mania.com%2Fpost%2Fwallpaper-id-777000118859%2F&psig=AOvVaw2PXUokeQNX2ns6kTfS20Ub&ust=1676698845304000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCJCrg4rsm_0CFQAAAAAdAAAAABAJ');">

        <form method="post">
            <table class="center"></table>
        <table class="center" border="8">
    <tr>
         <td> <input type="text" name="salary" value="" placeholder="Please Enter Salary"/> </td>
    </tr>
    
    <!-- Radio buttons/Bimonthly and monthly section-->        
            <label for="bimonthly"> <p style="font-family:'Courier New'"> Type:  </label> <br> <br>
            <input type="radio" name="bimonthly" value="HTML">
        <label for="html">Bi-monthly</label><br>


        <label for="monthly"> </label>
            <input type="radio" name="monthly" value="HTML">
        <label for="html"> Monthly</label><br>

        <br> <br> 

    <tr>
        <td> <input type="submit" name="submit" value="Submit"/> </td> 
    </tr>
    </table>
    </form>
<br>
<?php
    if(isset($_POST['submit']))
    {
    $salary = $_POST['salary'];
    $capital = 0.05121 * $salary;
    $finance = 0.61430 * $salary;

    //Annual Salary
    $sahod = $salary * 12;
    echo "Monthly Salary: <br> ".$salary." Pesos <br>" ;
    echo "<br> Estimated Monthly Tax: <br>" .$capital." Pesos <br>";
    echo "<br> Estimated Annual Tax : <br>" .$finance ." Pesos <br>";
    echo "<br> Annual Salary : <br>" .$sahod ." Pesos <br>";
    return 0;

}

        ?>
    </body>
</html>


       
    </body>
</html>