<?php

namespace brandonkelly\foo\migrations;

use Craft;
use craft\db\Migration;

/**
 * m161205_192533_test_migration migration.
 */
class m161205_192533_test_migration extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        // Place migration code here...
        Craft::info('m161205_192533_test_migration migration ran!', __METHOD__);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m161205_192533_test_migration cannot be reverted.\n";
        return false;
    }
}
