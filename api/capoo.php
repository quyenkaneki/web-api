<?php
$url = array(
"https://i.pinimg.com/originals/d6/48/b2/d648b221f68616ea76bed9c295e01a55.gif",
"https://i.pinimg.com/originals/e3/e9/65/e3e96589f524d83d230d136a096ed0b0.gif",
"https://i.pinimg.com/originals/2e/4b/d4/2e4bd480a8b0b0616016e095d43bef57.gif",
"https://i.pinimg.com/originals/1a/26/e5/1a26e51bfd0aa963e0a48618175a9836.gif",
"https://i.pinimg.com/originals/a4/65/34/a46534694207d74f6d06f67caa5f82f6.gif",
"https://media.giphy.com/media/m85llaN7ZkFIHtURiC/giphy.gif",
"https://i.pinimg.com/originals/c9/ac/20/c9ac204531d0a8834a316f272088dc08.gif",
"https://i.pinimg.com/originals/aa/1f/98/aa1f986f8a8e40db8aad1ad32759bb93.gif",
"https://i.pinimg.com/originals/20/59/5b/20595bcbfe289ca7054410c9938e63af.gif",
"https://c.tenor.com/yHMA6MMVfO0AAAAC/bluecat-cute.gif",
"https://c.tenor.com/ngxfrW4_xUUAAAAC/love-heart.gif",
"https://c.tenor.com/MKU57hv9JkwAAAAi/capoo-bugcat.gif",
"https://i.pinimg.com/originals/fc/41/21/fc41215ad55f888dd140586d4c0b57ac.gif",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$cosplay = array(
"data" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($cosplay);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
