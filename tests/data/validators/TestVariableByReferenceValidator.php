<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiiunit\data\validators;

use yii\validators\Validator;

class TestVariableByReferenceValidator extends Validator
{
    protected function validateValue(&$value)
    {
        $value += 1;

        return null;
    }
}
