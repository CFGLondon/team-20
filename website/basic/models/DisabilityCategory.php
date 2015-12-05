<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DisabilityCategory".
 *
 * @property integer $id_disability_category
 * @property string $category
 *
 * @property Report[] $reports
 */
class DisabilityCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'DisabilityCategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_disability_category' => 'Id Disability Category',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['disability_category' => 'id_disability_category']);
    }
}
