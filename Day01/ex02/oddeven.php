!#usr/bin/php
<?PHP
echo "Enter a number: ";
$line = trim(fgets(STDIN));
if (is_numeric($line))
{
	if ($line % 2 == 0)
		echo "The number $line is even\n";
	else
		echo "The number $line is odd\n";
}
else
{
	if (feof(STDIN))
	{
		echo "\n";
		exit();
	}
	else 
		echo "'$line' is not a number\n";
}
?>
