<?php 

require __DIR__ . '/vendor/autoload.php';

use App\InsertionSort;

$insertionSort = new InsertionSort();

$sortedNumbers = $insertionSort->orderByInsertion([]);

foreach ($sortedNumbers as $number) {
	echo "$number ";
}