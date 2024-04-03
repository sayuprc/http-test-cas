# TestResponse 

## メソッド

|メソッド|説明|備考|
|---|---|---|
|`assertStatusCode($expected)`|HTTP ステータスコードが `$expected` と同じであることを保証します||
|`assertNotStatusCode($expected)`|HTTP ステータスコードが `$expected` とは異なることを保証します||
|`assertHeader($name, $expected)`|`$name` で指定したレスポンスヘッダーのフィールドが `$expected` と同じであることを保証します||
|`assertNotHeader($name, $expected)`|`$name` で指定したレスポンスヘッダーのフィールドが `$expected` とは異なることを保証します||
|`assertHeaderLine($name, $expected)`|`$name` で指定したレスポンスヘッダーのフィールドをカンマ区切りにした文字列が `$expected` と同じであることを保証します||
|`assertNotHeaderLine($name, $expected)`|`$name` で指定したレスポンスヘッダーのフィールドをカンマ区切りにした文字列が `$expected` とは異なることを保証します||
|`assertContentType($expected)`|Content-Type が `$expected` と同じであることを保証します||
|`assertNotContentType($expected)`|Content-Type が `$expected` とは異なることを保証します||
|`assertLocation($expected)`|Location が `$expected` と同じであることを保証します||
|`assertNotLocation($expected)`|Location が `$expected` とは異なることを保証します||
|`assertBody($expected)`|レスポンスボディが `$expected` と同じであることを保証します||
|`assertNotBody($expected)`|レスポンスボディが`$expected` とは異なることを保証します||
|`assertBodyContains($needle)`|レスポンスボディに `$needle` が含まれていることを保証します||
|`assertNotBodyContains($needle)`|レスポンスボディに `$needle` が含まれていないことを保証します||
|`assertJson($expected)`|JSON 文字列が `$expected` と同じであることを保証します||
|`assertNotJson($expected)`|JSON 文字列が `$expected` とは異なることを保証します||
|`assertJsonKey($key, $expected)`|`$key` で指定した JSON 文字列の値が `$expected` と同じであることを保証します|入れ子になった項目にアクセスする場合は、ドット区切りの値を `$key` に設定してください|
|`assertNotJsonKey($key, $expected)`|`$key` で指定した JSON 文字列の値が `$expected` とは異なることを保証します|入れ子になった項目にアクセスする場合は、ドット区切りの値を `$key` に設定してください|
|`dumpHeaders()`|レスポンスヘッダーをダンプします||
|`dumpHeader($name)`|`$name` で指定したレスポンスヘッダーのフィールドをダンプします||
|`dumpBody()`|レスポンスボディをダンプします||
|`getHeader($name)`|`$name` で指定したレスポンスヘッダーのフィールドを取得します||
|`getHeaderLine($name)`|`$name` で指定したレスポンスヘッダーのフィールドをカンマ区切りの文字列で取得します||
|`getBody()`|レスポンスボディを取得します||
