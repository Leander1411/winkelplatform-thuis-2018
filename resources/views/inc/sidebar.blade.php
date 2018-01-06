<!-- [form code kevin] -->
<?php
if(isset($_POST["submit"])){
        $text = ($_POST["textfilter"]);
        $picker = ($_POST["picker"]);
        $radio = ($_POST["radio"]);
        if(isset($_POST["checkbox1"])){
            $checkbox1 = ($_POST["checkbox1"]);
        }
        if(isset($_POST["checkbox2"])){
            $checkbox2 = ($_POST["checkbox2"]);
        }
        if(isset($_POST["checkbox3"])){
            $checkbox1 = ($_POST["checkbox3"]);
        }
        if(isset($_POST["checkbox4"])){
            $checkbox2 = ($_POST["checkbox4"]);
        }
        $range = ($_POST["rangefilter"]);
        $email = ($_POST["emailfilter"]);
        $color = ($_POST["color"]);
        if(isset($_POST["date"])){
            $date = ($_POST["date"]);
        }
        $number = ($_POST['number']);
    }
?>

<form method="POST">
    <br><br><br>
    
    textfilter:<br>
    <input class="input" type="text" name="textfilter" placeholder="textfilter"
        value="<?php if(isset($_POST['textfilter'])){echo"$text";}else{echo"";} ?>"><br>
    <br>
    
    pickerfilter:<br>
    <select class="input" name="picker">
        <option <?php if (isset($picker) && $picker=="") echo "selected";?>
            value="">Filters</option>
        
        <option <?php if (isset($picker) && $picker=="goedkoopst") echo "selected";?>
            value="goedkoopst">goedkoopst</option>
        
        <option <?php if (isset($picker) && $picker=="duurst") echo "selected";?>
            value="duurst">duurst</option>
        
        <option <?php if (isset($picker) && $picker=="1") echo "selected";?>
            value="1">1</option>
        
        <option <?php if (isset($picker) && $picker=="2") echo "selected";?>
            value="2">2</option>
    </select><br>
    <br>
    
    radiofilter:<br>
    <input type="radio" name="radio" value="" checked > nofilter <br>
    <input type="radio" name="radio" value="1" <?php if (isset($radio) && $radio=="1") echo "checked"; ?> > 1 
    <input type="radio" name="radio" value="2" <?php if (isset($radio) && $radio=="2") echo "checked"; ?> > 2 
    <input type="radio" name="radio" value="3" <?php if (isset($radio) && $radio=="3") echo "checked"; ?> > 3 
    <input type="radio" name="radio" value="4" <?php if (isset($radio) && $radio=="4") echo "checked"; ?> > 4 <br>
    <input type="radio" name="radio" value="5" <?php if (isset($radio) && $radio=="5") echo "checked"; ?> > 5 
    <input type="radio" name="radio" value="6" <?php if (isset($radio) && $radio=="6") echo "checked"; ?> > 6 
    <input type="radio" name="radio" value="7" <?php if (isset($radio) && $radio=="7") echo "checked"; ?> > 7 
    <input type="radio" name="radio" value="8" <?php if (isset($radio) && $radio=="8") echo "checked"; ?> > 8 <br>
    <br>
    
    <input type="checkbox" name="checkbox1" value="check1" 
            <?php if(isset($_POST['checkbox1'])){echo "checked";} ?> 
            >check1
    <input type="checkbox" name="checkbox2" value="check2" 
            <?php if(isset($_POST['checkbox2'])){echo "checked";} ?> 
            >check2<br>
    <input type="checkbox" name="checkbox3" value="check3" 
            <?php if(isset($_POST['checkbox3'])){echo "checked";} ?> 
            >check3
    <input type="checkbox" name="checkbox4" value="check4" 
            <?php if(isset($_POST['checkbox4'])){echo "checked";} ?> 
            >check4<br>
    <br>
    
    rangefilter:<br>
    <input type="range" name="rangefilter" id="rangefilter" min="0" max="10" 
        value="<?php if(isset($_POST['rangefilter'])){echo"$range";}else{echo"0";} ?>"><br>
    Value:<span id="rangefilter1value"></span><br>
    <br>
    
    emailfilter:<br>
    <input class="input" type="email" name="emailfilter" placeholder="example@mail.com"
        value="<?php if(isset($_POST['emailfilter'])){echo"$email";}else{echo"";} ?>"><br>
    <br>
    
    Colorpicker:<br>
    <input class="input" type="color" name="color" value="<?php if(isset($_POST['color'])){echo"$color";}else{echo"#ffffff";} ?>"><br>
    <br>
    
    <input class="input" type="date" name="date" value="<?php if(isset($_POST['date'])){echo"$date";} ?>"><br>
    <br>
    
    <input type="number" name="number" min="0" max="25" value="<?php if(isset($_POST['number'])){echo"$number";}else{echo"0";} ?>" placeholder="input number"><br>
    <br>
    
    <input class="input" type="submit" name="submit" value="Filter zoekresultaat"><br>
    <br>
</form>

<!-- [/form code kevin] -->