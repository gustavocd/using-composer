<?php namespace App;

class InsertionSort {

	private $numbers;

	public function __construct()
	{
		
	}

	public function orderByInsertion(array $numbers)
	{
		$numbers = $this->deleteStrings($numbers);		
		for( $j = 1; $j < count($numbers); $j++ ){
			$key = $numbers[$j];
			$i = $j - 1;
			while ($i >= 0 && $numbers[$i] > $key) {
				$numbers[$i + 1 ] = $numbers[$i];
				$i -= 1;
			}
			$numbers[$i + 1] = $key;
		}

		return $numbers;
	}

	public function deleteStrings(array $numbers = array())
	{
		return array_filter($numbers, function($item) {
			return is_int($item);
		});
	}

}