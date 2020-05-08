<?php

//Name file with name of welder
$filename = $_POST['fname'].$_POST['lname'].'.fdf';

//Create and open new file
$temp_file = fopen($filename, 'w');

//Write form data to file in appropriate .fdf format
fwrite($temp_file, 
'%FDF-1.2
%
1 0 obj
<</FDF<</Fields

[

<</T(First Name)/V(' .$_POST['fname'] .')>>
<</T(Last Name)/V(' .$_POST['lname'] .')>>
<</T(MI)/V(' .$_POST['MI'] .')>>

<</RV/' .$_POST['Address'] .'/T(Address)>>

<</T(Company?)/V(' .$_POST['Company'] .')>>
<</T(Address welder card will be sent to)/V(' .$_POST['Street'] .')>>
<</T(City and State  Province  Country)/V(' .$_POST['City'] .', ' .$_POST['State'] .' )>>
<</T(Zip Code)/V(' .$_POST['Zipcode'] .')>>

<</T(EMail Address)/V(' .$_POST['Email'] .')>>

<</T(US Social Security Number last 4 only)/V(' .$_POST['SSN'] .')>>

<</T(Home Number 1)/V(' .$_POST['HomePhone1'] .')>>
<</T(Home Number 2)/V(' .$_POST['HomePhone2'] .')>>
<</T(Home Number 3)/V(' .$_POST['HomePhone3'] .')>>

<</T(Mobile Number 1)/V(' .$_POST['CellPhone1'] .')>>
<</T(Mobile Number 2)/V(' .$_POST['CellPhone2'] .')>>
<</T(Mobile Number 3)/V(' .$_POST['CellPhone3'] .')>>

<</T(Work Number 1)/V(' .$_POST['WorkPhone1'] .')>>
<</T(Work Number 2)/V(' .$_POST['WorkPhone2'] .')>>
<</T(Work Number 3)/V(' .$_POST['WorkPhone3'] .')>>

<</T(Disclaimer)/V/Yes>>
<</T(No If Yes please initial here)/V()>>

]

>>/Type/Catalog/Version/1.5>>
endobj
trailer

<</Root 1 0 R>>

%%EOF');

// Close the file
fclose($temp_file);

// Save the file to the computer's desktop
$old=$filename;
$new='C:/Users/Integrity Welding/Desktop/'.$_POST['fname'].$_POST['lname'].'.fdf';
rename($old, $new);

//Resetting the application after information is submitted 
header('Location: http://localhost/Welder_Informaton_Form/Acknowledgment.html');

//echo 'Your information has been saved.  Thank you '.$_POST['fname'];

?>

