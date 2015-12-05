<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Language".
 *
 * @property integer $id_language
 * @property string $name
 * @property string $dialect
 *
 * @property Report[] $reports
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dialect'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_language' => 'Id Language',
            'name' => 'Name',
            'dialect' => 'Dialect',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['id_language' => 'id_language']);
    }
}
