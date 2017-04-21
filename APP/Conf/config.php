<?php
return array(
	'APP_GROUP_LIST' =>'Index,Admin',
	'DEFAULT_GROUP' =>'Index',
	'URL_MODEL'=> 1,
    'DB_HOST'=> '115.159.202.161', 
    'DB_NAME' => 'nature',          
    'DB_USER'=> 'root',   
    'DB_PWD'=>'root',   
    'DB_PREFIX'=> 'na_',    
    'TMPL_FILE_DEPR'=>'_',
	'MAIL_SMTP'=>'smtp.sina.cn', // 邮箱SMTP服务器
	'SHOW_PAGE_TRACE'=>true,
	'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/APP/Tpl/Public/',
    ),
);
?>