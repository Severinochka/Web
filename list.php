<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Goal List</title>
</head>
<body>

<?php
$dom = new DOMDocument();
$dom->load('data/data.xml');
$products = $dom->getElementsByTagName('products')->item(0);
?>


<ul id="myUL">
    <li id="const">
        <a class="head">ID</a>
        <a class="head">Goal</a>
        <a class="head">DeadLine</a>
        <a class="head"></a>
    </li>
    <?php
    $i = 1;
    $product=$products->getElementsByTagName('product');
    foreach ($product as $tmp){
        ?>
        <li>
            <a href="index.php?page_layout=update&id=<?php echo  $product->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>"> <?php echo $tmp->getElementsByTagName('id')->item(0)->nodeValue?></a>
            <a href="index.php?page_layout=update&id=<?php echo  $product->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>"> <?php echo $tmp->getElementsByTagName('goal')->item(0)->nodeValue?></a>
            <a href="index.php?page_layout=update&id=<?php echo  $product->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>"> <?php echo $tmp->getElementsByTagName('deadline')->item(0)->nodeValue?></a>
            <a onclick="return Del('<?php echo $product->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue;?>')" href="index.php?page_layout=delete&id=<?php echo  $product->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>"> DELETE </a>
        </li>
        <?php
        $i++;
    } ?>
</ul>



<div class="CRUD">
    <a href="create.php" style="color: #483d8b; font: normal small-caps 120%/105% sans-serif;">ENTER THE GOAL</a>
</div>

<script src="script/main.js"></script>

</body>
</html>
