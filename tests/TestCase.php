<?php
namespace juniorb2ss\LinioChallenge\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    /**
     * [getExpectedStringResultMock description]
     * @return [type] [description]
     */
    public function getExpectedStringResultMock(): string
    {
        return '1 2 Linio 4 IT Linio 7 8 Linio IT 11 Linio 13 14 Linianos 16 ' .
               '17 Linio 19 IT Linio 22 23 Linio IT 26 Linio 28 29 Linianos 31 ' .
               '32 Linio 34 IT Linio 37 38 Linio IT 41 Linio 43 44 Linianos 46 ' .
               '47 Linio 49 IT Linio 52 53 Linio IT 56 Linio 58 59 Linianos 61 ' .
               '62 Linio 64 IT Linio 67 68 Linio IT 71 Linio 73 74 Linianos 76 ' .
               '77 Linio 79 IT Linio 82 83 Linio IT 86 Linio 88 89 Linianos 91 ' .
               '92 Linio 94 IT Linio 97 98 Linio IT';
    }

    /**
     * [getExpectedJsonStringResultMock description]
     * @return [type] [description]
     */
    public function getExpectedJsonStringResultMock(): string
    {
        return '{"1":1,"2":2,"3":"Linio","4":4,"5":"IT","6":"Linio",' .
            '"7":7,"8":8,"9":"Linio","10":"IT","11":11,"12":"Linio",' .
            '"13":13,"14":14,"15":"Linianos","16":16,"17":17,"18":"Linio",' .
            '"19":19,"20":"IT","21":"Linio","22":22,"23":23,"24":"Linio",' .
            '"25":"IT","26":26,"27":"Linio","28":28,"29":29,"30":"Linianos",' .
            '"31":31,"32":32,"33":"Linio","34":34,"35":"IT","36":"Linio","37":37,' .
            '"38":38,"39":"Linio","40":"IT","41":41,"42":"Linio","43":43,"44":44,' .
            '"45":"Linianos","46":46,"47":47,"48":"Linio","49":49,"50":"IT","51":"Linio",' .
            '"52":52,"53":53,"54":"Linio","55":"IT","56":56,"57":"Linio","58":58,"59":59,' .
            '"60":"Linianos","61":61,"62":62,"63":"Linio","64":64,"65":"IT","66":"Linio",' .
            '"67":67,"68":68,"69":"Linio","70":"IT","71":71,"72":"Linio","73":73,"74":74,' .
            '"75":"Linianos","76":76,"77":77,"78":"Linio","79":79,"80":"IT","81":"Linio",' .
            '"82":82,"83":83,"84":"Linio","85":"IT","86":86,"87":"Linio","88":88,"89":89,' .
            '"90":"Linianos","91":91,"92":92,"93":"Linio","94":94,"95":"IT","96":"Linio",' .
            '"97":97,"98":98,"99":"Linio","100":"IT"}';
    }

    /**
    * Provide expected result to tests
    * @return array
    */
    protected function getExpectedArrayResultMock(): array
    {
        $array = [
            0,
            1,
            2,
            'Linio',
            4,
            'IT',
            'Linio',
            7,
            8,
            'Linio',
            'IT',
            11,
            'Linio',
            13,
            14,
            'Linianos',
            16,
            17,
            'Linio',
            19,
            'IT',
            'Linio',
            22,
            23,
            'Linio',
            'IT',
            26,
            'Linio',
            28,
            29,
            'Linianos',
            31,
            32,
            'Linio',
            34,
            'IT',
            'Linio',
            37,
            38,
            'Linio',
            'IT',
            41,
            'Linio',
            43,
            44,
            'Linianos',
            46,
            47,
            'Linio',
            49,
            'IT',
            'Linio',
            52,
            53,
            'Linio',
            'IT',
            56,
            'Linio',
            58,
            59,
            'Linianos',
            61,
            62,
            'Linio',
            64,
            'IT',
            'Linio',
            67,
            68,
            'Linio',
            'IT',
            71,
            'Linio',
            73,
            74,
            'Linianos',
            76,
            77,
            'Linio',
            79,
            'IT',
            'Linio',
            82,
            83,
            'Linio',
            'IT',
            86,
            'Linio',
            88,
            89,
            'Linianos',
            91,
            92,
            'Linio',
            94,
            'IT',
            'Linio',
            97,
            98,
            'Linio',
            'IT',
        ];

        $array = array_slice($array, 1, null, true);

        return $array;
    }
}
