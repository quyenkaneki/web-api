<?php
$url = array(
"https://i.imgur.com/bIE0qpK.mp4",
"https://i.imgur.com/XvoEKCS.mp4",
"https://i.imgur.com/tMC7HQA.mp4",
"https://i.imgur.com/Xl2HpDd.mp4",
"https://i.imgur.com/OkE1FxU.mp4",
"https://i.imgur.com/1f8WTQn.mp4",
"https://i.imgur.com/GnPnQcY.mp4",
"https://i.imgur.com/DU5bMuJ.mp4",
"https://i.imgur.com/pJqo5dF.mp4",
"https://i.imgur.com/aPXMwog.mp4",
"https://i.imgur.com/0GAe6L8.mp4",
"https://i.imgur.com/kTg6HQY.mp4",
"https://i.imgur.com/kTg6HQY.mp4",
"https://i.imgur.com/3o2OW8J.mp4",
"https://i.imgur.com/9fYTwZk.mp4",
"https://i.imgur.com/3DmIJ1A.mp4",
"https://i.imgur.com/MAB9Md5.mp4",
"https://i.imgur.com/hU0GIDa.mp4",
"https://i.imgur.com/K601tWe.mp4",
"https://i.imgur.com/gf4aF0j.mp4",
"https://i.imgur.com/iByriFm.mp4",
"https://i.imgur.com/x2j6CmF.mp4",
"https://i.imgur.com/ghV6WRE.mp4",
"https://i.imgur.com/RJ0MzxB.mp4",
"https://i.imgur.com/CxMmz0u.mp4",
"https://i.imgur.com/0KslBt5.mp4",
"https://i.imgur.com/IJ8Ot9f.mp4",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$gaixinhtik = array(
"data" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($gaixinhtik , JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
