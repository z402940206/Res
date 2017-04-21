<?php

function p($array){
	dump($array,1,'<pre>',0);
}

function replace_phiz($content){
	preg_match_all('/\[.*?\]/is', $content, $arr);

	if($arr[0]){
		$phiz=F('phiz','','./data/');
		foreach ($arr[0] as $v) {
			foreach ($phiz as $key => $value) {
				if($v=='['.$value.']'){
					$content=str_replace($v, '<img src="/group/Public/Images/phiz/'.$key.'.gif"/>',$content); 
				}
				continue;
			}
			
		}
	}
	return $content;
}
function SendMail($address,$title,$message)
{
import('ORG.Net.PHPMailer');
$mail=new PHPMailer();
// 设置PHPMailer使用SMTP服务器发送Email
$mail->IsSMTP();
// 设置邮件的字符编码，若不指定，则为'UTF-8'
$mail->CharSet='UTF-8';
// 添加收件人地址，可以多次使用来添加多个收件人
$mail->AddAddress($address);
// 设置邮件正文
$mail->Body=$message;
// 设置邮件头的From字段。
$mail->From="402940206@qq.com";
// 设置发件人名字
$mail->FromName='zyimm';
// 设置邮件标题
$mail->Subject=$title;
// 设置SMTP服务器。
$mail->Host="smtp.qq.com";
// 设置为“需要验证”
$mail->SMTPAuth=true;
// 设置用户名和密码。
$mail->Username="402940206@qq.com";
$mail->Password="edmbfjxrzkwbbhif";
$mail->SMTPDebug=1;  
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
// 发送邮件。
return($mail->Send());
}
?>