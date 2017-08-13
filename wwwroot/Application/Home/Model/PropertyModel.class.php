<?php
/**
 * Created by PhpStorm.
 * User: a5040
 * Date: 2017/8/10
 * Time: 14:57
 */

namespace Home\Model;


use Think\Model;

class PropertyModel extends Model
{
    protected $_validate = array(
        array('name', 'require', '标题不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('tel', 'require', 'URL不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('address', 'require', 'URL不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('problem', 'require', 'URL不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
    );
    protected $_auto = array(
        array('time', NOW_TIME, self::MODEL_INSERT),

    );
}