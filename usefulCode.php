<?php

#数据URL可以直接嵌入到HTML/CSS/JS中，以节省大量的 HTTP请求。 下面的这段代码可利用$file轻松创建数据URL。
function data_uri($file, $mime) {
  $contents=file_get_contents($file);
  $base64=base64_encode($contents);
  echo "data:$mime;base64,$base64";
}


#当你在搭建网站时，从远程服务器下载某张图片并且将其保存在自己的服务器上，这一操作会经常用到。代码如下：	
$image = file_get_contents('http://www.url.com/image.jpg');
file_put_contents('/images/image.jpg', $image); //Where to save the image

#如果你的网站上有多种语言，那么可以使用这段代码作为默认的语言来检测浏览器语言。该段代码将返回浏览器客户端使用的初始语言。
function get_client_language($availableLanguages, $default='en'){
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $langs=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
 
        foreach ($langs as $value){
            $choice=substr($value,0,2);
            if(in_array($choice, $availableLanguages)){
                return $choice;
            }
        }
    }
    return $default;
}


?>