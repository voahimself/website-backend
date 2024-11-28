<?php
$y = 22;
function myfunctions()  {
    echo $GLOBALS ['y'];
}



myfunction();


echo "<br>";
echo "<br>";



function myfunction()  {
  $y = 22;
 echo $y;
}

myfunction();

echo "<br>";
echo "<br>";




<input type ="text" placeholder="First Name" Name="fname">
<br><br>

<input type ="text" placeholder="First Name" Name="fname">

<br><br>
<button type="submit"> submit</button>
</form>

?>



<input type ="text" placeholder="First Name" Name="fname">
<br><br>

<input type ="text" placeholder="First Name" Name="fname">

<br><br>
<button type="submit"> submit</button>
</form>

<?php

$first_name = $last_name = "";
//initialize variable to empty string
if ($_SERVER['request_METHOD'] == 'POST') {
    //CHECKING IF FORM IS SUBMITTED VIA POST METHOD
    $first_name = htmlspecialchars ($_POST['frame']);
    //$_POST['frame'] holds form dataof a form thatused post method
    //htmlspecialchars helps to prevent malicious codes

    $last_name = $_POST['name'];

    echo "<h2>Good Afternoon $first_name $last_name </h2";

    //<script>malicious codes displayed as plain text</script>

}


?>