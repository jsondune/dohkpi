<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kpichild".
 *
 * @property integer $id
 * @property integer $subscriber_id
 * @property string $number
 *
 * @property Subscriber $subscriber
 */
class KpiChild extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kpichild';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subscriber_id'], 'integer'],
            [['number'], 'required'], 
            [['number'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subscriber_id' => 'Subscriber ID',
            'number' => 'หมายเลขโทรศัพท์',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKpiChild()
    {
        return $this->hasOne(Kpi::className(), ['id' => 'subscriber_id']);
    }
}
