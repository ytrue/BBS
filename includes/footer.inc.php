<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/5/26
     * Time: 13:14
     */
    if (!defined('IN_TG')) {
        exit('error');
    }
?>
<div id="footer">
    <p>本程序执行耗时为: <?php echo  round((_runtime() - START_TIME),4)?>秒</p>
    <p>版权所有 翻版必究</p>
    <p>本程序由<span>YANGweb俱乐部</span>提供 源代码可以任意修改或发布 (c) yangweb.com</p>
</div>