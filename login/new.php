<?php
session_start();

//绘制验证码
$num = 4;//验证码长度
$str = getCode($num, 1);//使用下面自定义函数，获取需要验证码
//1.创建一个画布，分配颜色
$_SESSION['rand'] =$str;
$width = $num * 20;//宽度
$height = 30;//高度
$im = imagecreatetruecolor($width, $height);//创建画布

$color[] = imagecolorallocate($im, 111, 0, 55);//背景颜色
$color[] = imagecolorallocate($im, 0, 77, 0);//背景颜色
$color[] = imagecolorallocate($im, 0, 0, 160);//背景颜色
$color[] = imagecolorallocate($im, 221, 111, 0);//背景颜色
$color[] = imagecolorallocate($im, 220, 0, 0);//背景颜色
$bg = imagecolorallocate($im, 240, 240, 240);
//2.开始绘画
imagefill($im, 0, 0, $bg);
imagerectangle($im, 0, 0, $width - 1, $height - 1, $color[rand(0, 4)]);
for ($i = 0; $i < 200; $i++) {
    $c = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($im, rand(0, $width), rand(0, $height), $c);

}
for ($i = 0; $i < 5; $i++) {
    $c = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imageline($im, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $c);

}
//绘制验证码
for ($i = 0; $i < $num; $i++) {
    imagettftext($im, 18, rand(-40, 40), 8 + (18 * $i), 24, $color[rand(0, 4)], "SourceCodePro-Medium.ttf", $str[$i]);


}


//3.输出图像
header("Content-Type: image/png");//设置响应头信息
imagepng($im);

//4.销毁图片(释放内容)
imagedestroy($im);


/*生成随机数
 *@param $m=4随机数个数
 *@param $type 验证码类型:0:纯数字 1：数字+小写字母 2：数字+大小字符
 */

function getCode($m = 4, $type = 0)
{
    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFJHIJKLMNOPQRSTUVWXYZ';
    $t = array(9, 35, strlen($str) - 1);
    $c = "";
    for ($i = 0; $i < $m; $i++) {
        $c .= $str[rand(0, $t[$type])];

    }
    return $c;
}
//把验证码字符串写入session 


?>
