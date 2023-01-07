<?php

namespace App\Helper;

class ResponseJson {
    public static function success( $data=null,string $message="Operation Succeed",$statusCode=200)
    {
        return response()->json(
            [
                "status"=>$statusCode,
                "message"=>$message,
                "data"=>$data
            ]
        );
    }

    public static function fail(array $data=[],string $message="Operation Failed",$statusCode=400)
    {
        return response()->json(
            [
                "status"=>$statusCode,
                "message"=>$message,
                "data"=>$data
            ]
        );
    }
}
