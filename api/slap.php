<?php
$url = array(
"https://i.postimg.cc/Mc7rWvFv/12334wrwd534wrdf-1.gif",
"https://i.postimg.cc/R3LGk2Wt/12334wrwd534wrdf-2.gif",
"https://i.postimg.cc/CRj489H2/12334wrwd534wrdf-3.gif",
"https://i.postimg.cc/MMr0xwqn/12334wrwd534wrdf-4.gif",
"https://i.postimg.cc/KK2Jsm8F/12334wrwd534wrdf-5.gif",
"https://i.postimg.cc/dZLBT14R/12334wrwd534wrdf-6.gif",
"https://i.postimg.cc/Fd1cT63N/12334wrwd534wrdf-7.gif",
"https://i.postimg.cc/rKRjVDdM/12334wrwd534wrdf-8.gif",
"https://i.postimg.cc/G2fsCYtS/anime-slap.gif",
"https://i.postimg.cc/C5fnL1fM/slap-anime.gif",
"https://i.postimg.cc/ydxStn1Z/VW0cOyL.gif",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$slap = array(
"url" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($slap);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
