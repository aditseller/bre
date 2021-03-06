<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id_company
 * @property string $company
 * @property string $about
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $postal_code
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property string $join_date
 *
 * @property Career[] $careers
 * @property Location $province0
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company', 'about', 'address', 'city', 'province', 'postal_code', 'email', 'phone', 'password', 'authKey', 'accessToken', 'join_date'], 'required'],
            [['about'], 'string'],
            [['join_date'], 'safe'],
            [['company', 'city', 'province', 'email'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 500],
            [['postal_code', 'phone'], 'string', 'max' => 20],
            [['password', 'authKey', 'accessToken'], 'string', 'max' => 300],
            [['company', 'email'], 'unique', 'targetAttribute' => ['company', 'email'], 'message' => 'The combination of Company and Email has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_company' => 'Id Company',
            'company' => 'Company',
            'about' => 'About',
            'address' => 'Address',
            'city' => 'City',
            'province' => 'Province',
            'postal_code' => 'Postal Code',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'join_date' => 'Join Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCareers()
    {
        return $this->hasMany(Career::className(), ['company' => 'company']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince0()
    {
        return $this->hasOne(Location::className(), ['location' => 'province']);
    }
}
