//Absolute Path of a File
<?PHP

$absolute_path = realpath("fileDir.php");

print "Absolute path is: " . $absolute_path;

?>
// Directory for file
<?PHP

$dir = dirname("folder/myphp/fileDir.php");

print "directory is: " . $dir . "<BR>";

?>
// Filename for file
<?PHP

$bas = basename("folder/myphp/fileDir.php");

print "File Name is: " . $bas . "<BR>";

?>