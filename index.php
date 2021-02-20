<?php 
function saveme($count){

	echo "This is tannos <br> ";
	if ($count !=1){
saveme(--$count);
}

}

saveme(3);

?>