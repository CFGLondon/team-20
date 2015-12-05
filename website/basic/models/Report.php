<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Report".
 *
 * @property integer $idmain
 * @property double $lat
 * @property double $long
 * @property integer $location_is_precise
 * @property string $location_prose
 * @property string $problem_prose
 * @property integer $id_language
 * @property string $time_sent
 * @property integer $age
 * @property string $gender
 * @property integer $requires_editing
 * @property string $editor_comments
 * @property integer $problem_category
 * @property integer $is_solved
 * @property string $time_updated
 * @property integer $sms_id
 * @property integer $disability_category
 * @property string $disability_prose
 * @property string $name
 *
 * @property Language $idLanguage
 * @property ProblemCategory $problemCategory
 * @property RawSMSData $sms
 * @property DisabilityCategory $disabilityCategory
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lat', 'long', 'location_is_precise', 'time_sent', 'requires_editing', 'is_solved', 'time_updated'], 'required'],
            [['lat', 'long'], 'number'],
            [['location_is_precise', 'id_language', 'age', 'requires_editing', 'problem_category', 'is_solved', 'sms_id', 'disability_category'], 'integer'],
            [['location_prose', 'problem_prose', 'editor_comments', 'disability_prose'], 'string'],
            [['time_sent', 'time_updated'], 'safe'],
            [['gender', 'name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lat' => 'Latitude',
            'long' => 'Longitude',
            'location_is_precise' => 'Location Is Precise',
            'location_prose' => 'Location Prose',
            'problem_prose' => 'Problem Prose',
            'id_language' => 'Language',
            'time_sent' => 'Time Sent',
            'age' => 'Age',
            'gender' => 'Gender',
            'requires_editing' => 'Requires Editing',
            'editor_comments' => 'Editor Comments',
            'problem_category' => 'Problem Category',
            'is_solved' => 'Is Solved',
            'time_updated' => 'Time Updated',
            'sms_id' => 'Sms ID',
            'disability_category' => 'Disability Category',
            'disability_prose' => 'Disability Prose',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLanguage()
    {
        return $this->hasOne(Language::className(), ['id_language' => 'id_language']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProblemCategory()
    {
        return $this->hasOne(ProblemCategory::className(), ['id_problem_category' => 'problem_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSms()
    {
        return $this->hasOne(RawSMSData::className(), ['idRawSMSData' => 'sms_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisabilityCategory()
    {
        return $this->hasOne(DisabilityCategory::className(), ['id_disability_category' => 'disability_category']);
    }
}
