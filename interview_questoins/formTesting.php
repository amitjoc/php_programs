<html>
<head><title>HTML form associative and nested array with variable.</title></head>
<body>
<p>creating the HTML form input variable with associative variable name array</p>
<form >
	 <div class="form-column col-md-4">
      <div class="form-group col-md-12">
         <input type="text" class="form-control" name="type[width]"  id="height" placeholder="height (cm)">
      </div>
      <div class="form-group col-md-12">
         <input type="text" class="form-control" name="type[height]" id="width" placeholder="width (cm)">
      </div>
      <div class="form-group col-md-12">
         <input type="text" class="form-control" name="type[length]" id="length" placeholder="length (cm)">
      </div>
   </div>
   
   <input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
<pre>
<?php  
 

$type = $_GET['type'];
print_r($type);
extract($type);

echo 'width:' . $width .'<br />';
echo 'height:' . $height .'<br />';
echo 'length:' . $length .'<br /><br />';

//serialize before inserting
 $mysql_value = serialize($type);
 echo $mysql_value;
 echo '<br /><br />';
 //retrive by unserialize
 $unserialize_mysql_value = unserialize($mysql_value);
 print_r($unserialize_mysql_value);
 

?></pre>