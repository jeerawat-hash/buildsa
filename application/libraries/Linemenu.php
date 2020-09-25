<?php 

 class Linemenu 
 {
 	 

function uploadRandomImageToRichmenu($channelAccessToken, $richmenuId,$menu) {
  if(!isRichmenuIdValid($richmenuId)) {
    return 'invalid richmenu id';
  }
  $imagePath = realpath('') . '/menu/' .$menu. '.png';
  $sh = <<< EOF
  curl -X POST \
  -H 'Authorization: Bearer $channelAccessToken' \
  -H 'Content-Type: image/png' \
  -H 'Expect:' \
  -T $imagePath \
  https://api.line.me/v2/bot/richmenu/$richmenuId/content
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['message'])) {
    return $result['message'];
  }
  else {
    return 'success. Image #0' . $menu . ' has uploaded onto ' . $richmenuId;
  }
}


function createNewRichmenu($channelAccessToken,$menu) {

  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $menu))), true);
  if(isset($result['richMenuId'])) {
    return $result['richMenuId'];
  }
  else { 
    return $result['message'];
  }
}



function linkToUser($channelAccessToken, $userId, $richmenuId) {
/*if(!isRichmenuIdValid($richmenuId)) {
    return 'invalid richmenu id';
}*/
  $sh = <<< EOF
  curl -X POST \
  -H 'Authorization: Bearer $channelAccessToken' \
  -H 'Content-Length: 0' \
  https://api.line.me/v2/bot/user/$userId/richmenu/$richmenuId
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['message'])) {
    return $result['message'];
  }
  else {
    return 'success';
  }
}

function unlinkFromUser($channelAccessToken, $userId) {
  $sh = <<< EOF
  curl -X DELETE \
  -H 'Authorization: Bearer $channelAccessToken' \
  https://api.line.me/v2/bot/user/$userId/richmenu
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['message'])) {
    return $result['message'];
  }
  else {
    return 'success';
  }
}

function isRichmenuIdValid($string) {
  if(preg_match('/^[a-zA-Z0-9-]+$/', $string)) {
    return true;
  } else {
    return false;
  }
}

function checkRichmenuOfUser($channelAccessToken, $userId) {
  $sh = <<< EOF
  curl \
  -H 'Authorization: Bearer $channelAccessToken' \
  https://api.line.me/v2/bot/user/$userId/richmenu
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['richMenuId'])) {
    return $result['richMenuId'];
  }
  else {
    return $result['message'];
  }
}

function get_rich_list($channelAccessToken,$num) {
  $sh = <<< EOF
  curl -v -X GET \
	-H 'Authorization: Bearer $channelAccessToken' \
	https://api.line.me/v2/bot/richmenu/list
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);

  	return $result["richmenus"][$num]["richMenuId"];

}


function get_rich_menu($channelAccessToken,$rich) {
  $sh = <<< EOF
  curl -v -X GET \
	-H 'Authorization: Bearer $channelAccessToken' \
	https://api.line.me/v2/bot/richmenu/$rich
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);

  	return print_r($result);

}



function liff($channelAccessToken,$url) {
  $sh = <<< EOF
    curl -X POST https://api.line.me/liff/v1/apps \
  -H "Authorization: Bearer $channelAccessToken" \
  -H "Content-Type: application/json" \
  -d '{
    "view":{
      "type":"tall",
      "url":"$url"
    }
  }'
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['message'])) {
    return $result['message'];
  }
  else {
    return print_r($result);
  }
}


function liff_put($channelAccessToken,$url,$app) {
  $sh = <<< EOF
   curl -X PUT https://api.line.me/liff/v1/apps/$app/view \
-H "Authorization: Bearer $channelAccessToken" \
-H "Content-Type: application/json" \
-d '{
  "type":"tall",
  "url":"$url"
}'
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['message'])) {
    return $result['message'];
  }
  else {
    return print_r($result);
  }
}

function liff_get($channelAccessToken) {
  $sh = <<< EOF
   curl -X GET https://api.line.me/liff/v1/apps \
-H "Authorization: Bearer $channelAccessToken" 
EOF;
  $result = json_decode(shell_exec(str_replace('\\', '', str_replace(PHP_EOL, '', $sh))), true);
  if(isset($result['message'])) {
    return $result['message'];
  }
  else {
    return print_r($result);
  }
}




 } 









 ?>