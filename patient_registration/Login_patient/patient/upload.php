<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
&lt;?php<br />
$target_dir = &quot;uploads/&quot;;<br />
$target_file = $target_dir . basename($_FILES[&quot;fileToUpload&quot;][&quot;name&quot;]);<br />
$uploadOk = 1;<br />
$imageFileType =  strtolower(pathinfo($target_file,PATHINFO_EXTENSION));<br />
// Check if image file is a actual image or fake image<br />
if(isset($_POST[&quot;submit&quot;])) {<br />
    $check = getimagesize($_FILES[&quot;fileToUpload&quot;][&quot;tmp_name&quot;]);<br />
    if($check !== false) {<br />
        echo &quot;File is an image - &quot; . $check[&quot;mime&quot;] . &quot;.&quot;;<br />
        $uploadOk = 1;<br />
    } else {<br />
        echo &quot;File is not an image.&quot;;<br />
        $uploadOk = 0;<br />
    }<br />
}<br />
// Check if file already exists<br />
if (file_exists($target_file)) {<br />
    echo &quot;Sorry, file already exists.&quot;;<br />
    $uploadOk = 0;<br />
}<br />
// Check file size<br />
if ($_FILES[&quot;fileToUpload&quot;][&quot;size&quot;] &gt; 500000) {<br />
    echo &quot;Sorry, your file is too large.&quot;;<br />
    $uploadOk = 0;<br />
}<br />
// Allow certain file formats<br />
if($imageFileType != &quot;jpg&quot; &amp;&amp; $imageFileType != &quot;png&quot; &amp;&amp; $imageFileType != &quot;jpeg&quot;<br />
&amp;&amp; $imageFileType != &quot;gif&quot; ) {<br />
     echo &quot;Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.&quot;;<br />
     $uploadOk = 0;<br />
 }<br />
 // Check if $uploadOk is set to 0 by an error<br />
 if ($uploadOk == 0) {<br />
     echo &quot;Sorry, your file was not uploaded.&quot;;<br />
 // if everything is ok, try to upload file<br />
 } else {<br />
     if (move_uploaded_file($_FILES[&quot;fileToUpload&quot;][&quot;tmp_name&quot;], $target_file)) {<br />
         echo &quot;The file &quot;. basename( $_FILES[&quot;fileToUpload&quot;][&quot;name&quot;]). &quot; has been uploaded.&quot;;<br />
     } else {<br />
         echo &quot;Sorry, there was an error uploading your file.&quot;;<br />
     }<br />
 }<br />
 ?&gt;
</body>
</html>