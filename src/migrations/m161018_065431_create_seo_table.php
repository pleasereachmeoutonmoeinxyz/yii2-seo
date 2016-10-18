<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seo`.
 */
class m161018_065431_create_seo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%seo}}', [
            'id'            =>  $this->primaryKey(),
            'entity'        =>  $this->text(),
            'entity_id'     =>  $this->text(),
            'title'         =>  $this->text(),
            'keywords'      =>  $this->text(),
            'description'   =>  $this->text(),
            'meta_tags'     =>  $this->text()
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%seo}}');
    }
}
