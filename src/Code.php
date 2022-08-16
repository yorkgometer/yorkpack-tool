<?php
//需要加下面命名空间
namespace Yorkpack\Tool;

class Code
{
    /**
     * 获取编号
     */
    public function getSn($type = 0)
    {
        list($msec, $sec) = explode(" ", microtime());
        $msectime = (float)sprintf("%.0f", (floatval($msec) + floatval($sec)) * 1000);

        switch ($type) {
            case 1:         //订单编号
                $str = $type . substr($msectime . rand(0, 9), 1);
                break;
            case 2:         //商品编号
                $str = 'G' . substr($msectime . rand(0, 5), 1);
                break;
            default:        //默认编号
                $str = substr($msectime . rand(0, 5), 1);
        }
        return $str;
    }
}