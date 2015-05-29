<?php

abstract class BaseActiveRecord extends CActiveRecord {

    protected function beforeValidate() {
        if ($this->isNewRecord) {
            $this->DateCreated = $this->DateUpdated = new CDbExpression('NOW()');
        } else {
            $this->DateUpdated = new CDbExpression('NOW()');
        }
        return parent::beforeValidate();
    }
}
?>