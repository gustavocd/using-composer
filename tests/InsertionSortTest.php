<?php

use App\InsertionSort;

class ClassName extends PHPUnit_Framework_TestCase
{
	
	public function test_can_order_by_insertion_sort()
	{
		$insertionSort = new InsertionSort();
		$this->assertEquals(
			[1,2,3,4,5], 
			$insertionSort->orderByInsertion([2,4,3,1,5])
		);
	}

	public function test_can_see_if_the_array_have_integers_only()
	{
		$insertionSort = new InsertionSort();
		$this->assertContainsOnly(
			'int',
			$insertionSort->orderByInsertion([5,2,4,3,1, 'gustavo', 'castillo', 'string'])
		);
	}

	public function test_can_see_if_class_has_attribute()
	{
		$obj = new InsertionSort();
		$this->assertClassHasAttribute('numbers', get_class($obj));
	}

}