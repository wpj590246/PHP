<?php

#����URL����ֱ��Ƕ�뵽HTML/CSS/JS�У��Խ�ʡ������ HTTP���� �������δ��������$file���ɴ�������URL��
function data_uri($file, $mime) {
  $contents=file_get_contents($file);
  $base64=base64_encode($contents);
  echo "data:$mime;base64,$base64";
}


#�����ڴ��վʱ����Զ�̷���������ĳ��ͼƬ���ҽ��䱣�����Լ��ķ������ϣ���һ�����ᾭ���õ����������£�	
$image = file_get_contents('http://www.url.com/image.jpg');
file_put_contents('/images/image.jpg', $image); //Where to save the image

#��������վ���ж������ԣ���ô����ʹ����δ�����ΪĬ�ϵ������������������ԡ��öδ��뽫����������ͻ���ʹ�õĳ�ʼ���ԡ�
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