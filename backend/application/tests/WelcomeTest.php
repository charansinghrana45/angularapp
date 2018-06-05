<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

use PHPUnit\Framework\TestCase;

class WelcomeTest extends TestCase {

	private $CI;

	public function setUp() { 	

	}

	public function testFirstCase()
	{
		$this->assertEquals(10, 10);
	}

	public function addDataProvider() {
		return [
		            'adding zeros'  => [0, 0, 0],
		            'zero plus one' => [0, 1, 1],
		            'one plus zero' => [1, 0, 1],
		            'one plus two'  => [1, 2, 3]
		        ];
    }

    /**
     * @dataProvider addDataProvider
     */
	public function testSCase($a = 1, $b = 2, $expected = 3)
	{
		$result = $a + $b;
		$this->assertEquals($expected, $result);
	}

	public function provider()
    {
        return [['provider1'], ['provider2']];
    }

    /**
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertEquals(
            ['provider1'],
            func_get_args()
        );
    }

}

