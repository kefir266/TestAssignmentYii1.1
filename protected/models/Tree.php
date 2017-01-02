<?php

/**
 * This is the model class for table "tree".
 *
 * The followings are the available columns in table 'tree':
 * @property string $id
 * @property string $parent_id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Tree $parent
 * @property Tree[] $trees
 */
class Tree extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tree';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id', 'length', 'max'=>10),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, parent_id, name', 'safe', 'on'=>'search'),
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
			'parent' => array(self::BELONGS_TO, 'Tree', 'parent_id'),
			'trees' => array(self::HAS_MANY, 'Tree', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'name' => 'Name',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('parent_id',$this->parent_id,true);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tree the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getTree()
	{
		$items = Tree::model()->findAll();
		return self::_getTree($items);
	}

	private static function _getTree($allElements = null) {
		if ($allElements == null) return [];
		$tree = [];
		$references = [];
		$firstLevel = true;
		foreach ( $allElements as $id => $item ){

			$node[$id]['item'] = $item;

			$references[$item->id] = &$node[$id];
			$node[$id]['items'] = array();

			if (is_null($node[$id]['item']->parent_id) || $firstLevel)
			{
				$tree[$item->id] = &$node[$id];
				$firstLevel = false;
			}
			else
			{
				$references[$item->parent_id]['items'][$item->id] = &$node[$id];
			}
		}

		return $tree;
	}
}
