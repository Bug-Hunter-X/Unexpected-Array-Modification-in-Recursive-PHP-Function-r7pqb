```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, '!') !== false) {
      $data[$key] = str_replace('!', '', $value); // Removing exclamation marks
    }
  }
  return $data;
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