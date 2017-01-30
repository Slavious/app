<?php

namespace app\models;
class Task extends \yii\db\ActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::className($className);
    }

    public static function tableName()
    {
        return 'p_task';
    }

    public static function primaryKey()
    {
        return array('id');
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'for_who_id' => 'For_Id',
            'for_who_title' => 'For_Name',
            'prior' => 'Priority',
            'author_id' => 'Author_Id',
            'author_title' => 'Author_Name',
            'created_time' => 'When_Create',
            'status' => 'Status'
        );
    }
}