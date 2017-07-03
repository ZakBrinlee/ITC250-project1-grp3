<?php
//tempconverter.php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$StartTemp = $_POST["StartTemp"];

$FinalTemp = $StartTemp * 2;


if(isset($_POST["Submit"]))
{//show data
    
    
    //echo '<pre>';
    //var_dump($_POST);
    //echo '</pre>';
    
    echo '<p>Your starting temp was ' . $StartTemp . '</P>';
    echo '<p>Conversion: ' . $convertType . '</p>';
    echo '<p>Converted temp is ' . $FinalTemp . '</p>';
    $message = "This worked";
    echo '<p>' . $message . '</p>';
    echo '<p><a href="' . THIS_PAGE . '">Back</a></p>';

}
else
{//show form
    echo '

    <form action="' . THIS_PAGE . '" method="post">
        Temperature:<input type="text" name="StartTemp" /><br />
        
        <br />
        
        <label>
        <input type="radio" name="TempConvert" value="Fahrenheit" />Fahrenheit<br />
        <input type="radio" name="TempConvert" value="Kelvin" />Kelvin<br />
        <input type="radio" name="TempConvert" value="Celsius" />Celsius<br />
        <input type="radio" name="TempConvert" value="Rankine" />Rankine<br />
        </label>
        
        <br />
        
        Converted Temperature: <input type="text" name="FinalTemp" value="' . $FinalTemp . '"/><br />
                    
        <label>
        <input type="radio" name="ConvertedTemp" value="Fahrenheit" />Fahrenheit<br />
        <input type="radio" name="ConvertedTemp" value="Kelvin" />Kelvin<br />
        <input type="radio" name="ConvertedTemp" value="Celsius" />Celsius<br />
        <input type="radio" name="ConvertedTemp" value="Rankine" />Rankine<br />
        </label>
        <br />
        
        <input type="submit" name="Submit">
        <br />
        <input type="text" name="MessageBox" value="' . $message . '"/>
    </form>
    ';
}
?>
