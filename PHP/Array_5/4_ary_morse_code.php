<html>
</head>
<style> 

	body { 
			background-color:gray;
	
		}

</style>
<body>

<fieldset>
<form method ="POST" action =" "> 

   <h4>enter message:<input type="text" name="str"></h4>
   <input type="submit" name="submit"> 
		 

</form> 
</fieldset> 
</body> 
<?php
  $i; 

if(isset($_POST['submit']))
 {

    $s=$_POST["str"];

 
   switch ($s)
   {
    case $s=='a':
        echo  ".-";
		break;

    case $s=='b':
         echo "-...";
		break;

    case $s=='c':
        echo "-.-.";
		break;

    case $s=='d':
        echo "-..";
		break;

    case $s=='e':
        echo ".";
		break;

    case $s=='f':
        echo "..-.";
		break;

    case $s=='g':
        echo "--.";
		break;

    case $s=='h':
        echo "....";
		break;

    case $s=='i':
        echo "..";
		break;

    case $s=='j':
        echo ".---";
		break;

    case $s=='k':
        echo "-.-";
		break;

    case $s=='l':
        echo ".-..";
		break;

    case $s=='m':
        echo "--";
		break;

    case $s=='n':
        echo "-.";
		break;

    case $s=='o':
        echo "---";
		break;

    case $s=='p':
        echo ".--.";
		break;

    case $s=='q':
        echo "--.-";
		break;

    case $s=='r':
        echo ".-.";
		break;

    case $s=='s':
        echo "...";
		break;

    case $s=='t':
        echo "-";
		break;

    case $s=='u':
        echo "..-";
		break;

    case $s=='v':
        echo "...-";
		break;

    case $s=='w':
        echo ".--";
		break;

    case $s=='x':
        echo "-..-";
		break;

    case $s=='y':
        echo "-.--";
		break;

    case $s=='z':
        echo "--..";
		break;

    case $s=='1':
        echo ".----";
		break;

    case $s=='2':
        echo "..---";
        break;

    case $s=='3':
        echo "...--";
         break;

    case $s=='4':
        echo "....-";
        break;

    case $s=='5':
        echo ".....";
        break;

    case $s=='6':
        echo "-....";
        break;

    case $s=='7':
        echo "--...";
        break;

    case $s=='8':
        echo "---..";
        break;

    case $s=='9':
        echo "----.";
        break;

    case $s=='0':
		echo "-----"; 
         
}


 echo "$s";
} 

?>
</html>
