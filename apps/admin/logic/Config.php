<?php
// 后台配置处理逻辑      
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\logic;

class Config extends Base
{

    /**
     * 获取子分组HTML，通过分组
     * @param  string $value [description]
     * @return [type] [description]
     * @date   2018-02-16
     * @author 心云间、凝听 <981248356@qq.com>
     */
    public function getSubGroup($group = 6)
    {
        $sub_group = [];
        $html = '';
        if ($group==6) {
            $sub_group = config('website_group');
            $html = <<<EOF
<script type="text/javascript">
 $(function () {
        var type = $('#switch_function').find("option:selected").attr("data-type");
        switch_form_item_function(type);
    $('#switch_function').on('change',function(){
        var type = $('#switch_function').find("option:selected").attr("data-type");
        switch_form_item_function(type);
    });
})
//事件方法
function switch_form_item_function(type){
        type=parseInt(type);
    if(type == 1){
        $('.item_function').show();
        $('.item_options').hide();
        $('.item_function input').val('role_type');
    }else if(type == 2){
        $('.item_function').show();
        $('.item_options').hide();
        $('.item_function input').val('');
    }else{
        $('.item_options').show();
        $('.item_function').hide();
    }
}
</script>
EOF;
        }
      
    return ['sub_group'=>$sub_group,'html'=>$html];
    }
}