function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      return $key; // Returns the key where 'target' is found
    }
  }
  return false; // Returns false if 'target' is not found
}

$array = [10, 20, 'target', 40, 50];
$key = foo($array);

if ($key !== false) {
  echo "The key is: " . $key; // Outputs the key
} else {
  echo "The target value was not found in the array";
}

//Uncommon bug: Strict comparison
//The code uses strict comparison (===) to check if the value is equal to 'target'. If the array contains a value that is loosely equal to 'target' (e.g., 0 == 'target' in PHP), this code would not find the target value.
//In PHP, comparing string and integer using loose comparison (==) results in boolean value false but it is not the case if you compare it using strict comparison (===). The correct code below handles this scenario.