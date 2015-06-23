<?php

/**
 * This is the model class for table "TblDonors".
 *
 * The followings are the available columns in table 'TblDonors':
 * @property integer $DonorID
 * @property string $EmailID
 * @property string $DontationDate
 * @property double $Amount
 * @property string $PerkChoice
 * @property integer $OptMarketing
 * @property integer $AnonymousStatus
 * @property string $FirstName
 * @property string $LastName
 * @property string $CurrencyCode
 * @property string $DateCreated
 * @property string $DateUpdated
 */
class Donors extends BaseActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TblDonors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DontationDate, Amount', 'required'),
			array('OptMarketing, AnonymousStatus', 'numerical', 'integerOnly'=>true),
			array('Amount', 'numerical'),
			array('EmailID, PerkChoice, FirstName, LastName', 'length', 'max'=>100),
			array('CurrencyCode', 'length', 'max'=>5),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DonorID, EmailID, DontationDate, Amount, PerkChoice, OptMarketing, AnonymousStatus, FirstName, LastName, CurrencyCode, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DonorID' => 'Donor',
			'EmailID' => 'Email',
			'DontationDate' => 'Dontation Date',
			'Amount' => 'Amount',
			'PerkChoice' => 'Perk Choice',
			'OptMarketing' => 'Opt Marketing',
			'AnonymousStatus' => 'Anonymous Status',
			'FirstName' => 'First Name',
			'LastName' => 'Last Name',
			'CurrencyCode' => 'Currency Code',
			'DateCreated' => 'Date Created',
			'DateUpdated' => 'Date Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('DonorID',$this->DonorID);
		$criteria->compare('EmailID',$this->EmailID,true);
		$criteria->compare('DontationDate',$this->DontationDate,true);
		$criteria->compare('Amount',$this->Amount);
		$criteria->compare('PerkChoice',$this->PerkChoice,true);
		$criteria->compare('OptMarketing',$this->OptMarketing);
		$criteria->compare('AnonymousStatus',$this->AnonymousStatus);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('CurrencyCode',$this->CurrencyCode,true);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('DateUpdated',$this->DateUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Donors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
