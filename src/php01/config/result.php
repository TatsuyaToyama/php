<?php
$name= htmlspecialchars($_GET['name'], ENT_QUOTES);
$product= htmlspecialchars($_GET['product'], ENT_QUOTES);
$amount= htmlspecialchars($_GET['amount'], ENT_QUOTES);

print "私の名前は". $name;
echo "<br />";
print "ご希望の商品は". $product;
echo "<br />";
print "注文数は、". $amount;








