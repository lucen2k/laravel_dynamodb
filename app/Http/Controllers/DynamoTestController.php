<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use AWS;

class DynamoTestController extends Controller
{
    public function index()
    {
        echo "DynamoTestController index..";
        
        //DynamoDB
        $dynamo = AWS::createClient('DynamoDb');
        
        //取得
        $get_item_array['ConsistentRead'] = true;
        $get_item_array['TableName'] = 'dev-lineTalk';
        $get_item_array['Key']['id'] = array('S'=>'dfcecd20-e83d-11e6-bf43-7dc55ff52235');
        $result = $dynamo->getItem($get_item_array);
        
        //確認
        echo "<pre>"; print_r($result); echo "</pre>";
        exit;
    }
}
