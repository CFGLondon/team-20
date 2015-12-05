<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ProblemCategory".
 *
 * @property string $category
 * @property integer $id_problem_category
 *
 * @property Report[] $reports
 */
class ProblemCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ProblemCategory';
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
            'category' => 'Category',
            'id_problem_category' => 'Id Problem Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['problem_category' => 'id_problem_category']);
    }
}
