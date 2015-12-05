<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RawSMSData".
 *
 * @property integer $idRawSMSData
 * @property string $msg_contents
 * @property string $phone_number
 *
 * @property Report[] $reports
 */
class RawSMSData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RawSMSData';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['msg_contents', 'phone_number'], 'required'],
            [['msg_contents'], 'string'],
            [['phone_number'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRawSMSData' => 'Id Raw Smsdata',
            'msg_contents' => 'Msg Contents',
            'phone_number' => 'Phone Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['sms_id' => 'idRawSMSData']);
    }
}
