# laravel_dynamodb

AWS DynamoDB with Laravel5

### aws sdk install
```composer require aws/aws-sdk-php-laravel```

### aws-sdk-php-laravel設定方法
* https://github.com/aws/aws-sdk-php-laravel
* .evnファイルにAWS接続情報追加
```
//AWS
AWS_KEY=YOUR_AWS_ACCESS_KEY_ID
AWS_SECRET=YOUR_AWS_SECRET_ACCESS_KEY
AWS_REGION=YOUR_AWS_REGION
```

### ブラウザ確認
* http://localhost/dynamotest

### 画面結果
```
DynamoTestController index..
Aws\Result Object
(
    [data:Aws\Result:private] => Array
        (
            [Item] => Array
                (
                    [fromMsg] => Array
                        (
                            [S] => hello
                        )
                    [updatedUtc] => Array
                        (
                            [S] => 2017-02-01T05:18:32.691Z
                        )
                    [replyToken] => Array
                        (
                            [S] => 5f4909fb9faa4f2c8dd0a874e576f
                        )
                    [sendMsg] => Array
                        (
                            [S] => hello lucen
                        )
                    [id] => Array
                        (
                            [S] => dfcecd20-e83d-11e6-bf43-7dc55ff52
                        )
                )
                ...
```
