<?php

namespace FlixTech\SchemaRegistryApi\Test\Schema;

use Generator;
use PHPUnit\Framework\TestCase;

class AvroReferenceTest extends TestCase
{
    /**
     * @dataProvider avroReferences
     */
    public function it_should_only_be_constructable_from_a_valid_Avro_reference(): void {}

    public static function avroReferences(): Generator {}
}
