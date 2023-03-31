# TestResponse 

## Methods

|Method|Description|Note|
|---|---|---|
|`assertStatusCode($expected)`|Assert that the HTTP status code is the same as $expected||
|`assertHeader($name, $expected)`|Assert that the item specified by $name from the response header is the same as $expected||
|`assertHeaderLine($name, $expected)`|Assert the comma-concatenated string of the item specified by $name from the response header is the same as $expected||
|`assertContentType($expected)`|Assert that the Content-Type is the same as $expected||
|`assertLocation($expected)`|Assert that the Location is the same as $expected||
|`assertBody($expected)`|Assert that the response body is the same as $expected||
|`assertBodyContains($needle)`|Assert that the response body is contains $needle||
|`assertJson($expected)`|Assert that the json string is the same as $expected||
|`assertJsonKey($key, $expected)`|Assert that the item specified by $key in the json string is the same as $expected|If accessing a nested item, please assign the dot-separated values to $key|
|`dumpHeaders()`|Dump the all response headers||
|`dumpHeader($name)`|Dump the item specified by $name from the response header||
|`dumpBody()`|Dump the response body||
|`getHeader($name)`|Retrieve the item specified by $name from the response header||
|`getHeaderLine($name)`|Retrieve the comma-concatenated string of the item specified by $name from the response header||
|`getBody()`|Retrieve the response body||