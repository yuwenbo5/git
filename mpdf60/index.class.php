<?php
/**
 * 使用mpdf将html页面转为pdf
 */
require_once 'mpdf.php';

//获取打印标签内容
$url = '';
$html = file_get_contents($url);

//开始生成
$mpdf = new mPDF('UTF-8','',0,'',1,1,1,1,0,0);
//设置字体，解决中文乱码
$mpdf -> useAdobeCJK = TRUE;
$mpdf ->autoScriptToLang = true;
$mpdf -> autoLangToFont = true;
$mpdf->WriteHTML($html);
$mpdf->Output('test.pdf','F');
