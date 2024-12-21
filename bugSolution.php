```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, '!') !== false) {
      $newData[$key] = str_replace('!', '', $value);
    } else {
      $newData[$key] = $value; // Include non-string elements
    }
  }
  return $newData;
}

$data = [
  'name' => 'John! Doe!',
  'age' => 30,
  'address' => [
    'street' => '123 Main!',
    'city' => 'Anytown'
  ]
];

$processedData = processData($data);
print_r($processedData);
```