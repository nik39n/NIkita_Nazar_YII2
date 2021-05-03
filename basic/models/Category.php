<?php namespace app\models;
 use yii\db\ActiveRecord;
 class Category extends ActiveRecord {
      /** * Возвращает имя таблицы БД */ 
      
      public static function tableName() { return 'category'; }
       /** * Возвращает товары категории */
        public function getProducts() {
             //связь таблицы БД `category` с таблицей `product`
             return $this->hasMany(Product::class, ['category_id' => 'id']); }
              /** * Возвращает родительскую категорию */ 
              public function getParent() { // связь таблицы БД `category` с таблицей `category`
                 return $this->hasOne(self::class, ['id' => 'parent_id']); }
                  /** * Возвращает дочерние категории */
                  public function getChildren() { // связь таблицы БД `category` с таблицей `category`
                     return $this->hasMany(self::class, ['parent_id' => 'id']); }
}
