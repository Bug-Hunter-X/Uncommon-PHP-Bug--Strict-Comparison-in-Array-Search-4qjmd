function foo(array $arr, $target) {
  foreach ($arr as $key => $value) {
    if ($value == $target) { // Loose comparison
      return $key; // Returns the key where 'target' is found
    }
  }
  return false; // Returns false if 'target' is not found
}

$array = [10, 20, 'target', 0, 50]; // added 0 for demonstration
$key = foo($array, 'target');

if ($key !== false) {
  echo "The key is: " . $key; // Outputs the key
} else {
  echo "The target value was not found in the array";
}

//The improved code uses loose comparison (==) which handles various data types correctly and avoids the strict comparison error. It will correctly find the 'target' even if there are loosely equal values in the array.