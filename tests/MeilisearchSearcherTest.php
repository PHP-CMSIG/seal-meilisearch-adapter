<?php

declare(strict_types=1);

/*
 * This file is part of the Schranz Search package.
 *
 * (c) Alexander Schranz <alexander@sulu.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Schranz\Search\SEAL\Adapter\Meilisearch\Tests;

use Schranz\Search\SEAL\Adapter\Meilisearch\MeilisearchAdapter;
use Schranz\Search\SEAL\Testing\AbstractSearcherTestCase;

class MeilisearchSearcherTest extends AbstractSearcherTestCase
{
    public static function setUpBeforeClass(): void
    {
        $client = ClientHelper::getClient();
        self::$adapter = new MeilisearchAdapter($client);

        parent::setUpBeforeClass();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testFindMultipleIndexes(): void
    {
        $this->markTestSkipped('Not supported by Meilisearch: https://github.com/schranz-search/schranz-search/issues/28');
    }
}
