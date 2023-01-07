<?php
namespace App\Helper;

use Exception;
use Illuminate\Support\ItemNotFoundException;

class TryCatchHelper {

    public static function tryCatchThrow(callable $callable)
    {
        try{
            return $callable();
        }
        catch(Exception $exception)
        {
            throw new Exception($exception->getMessage());
        }
        catch(ItemNotFoundException $exception)
        {
            throw new ItemNotFoundException($exception->getMessage());
        }
    }

    public static function tryCatchResponse(callable $callable)
    {
        try{
            return $callable();
        }
        catch(Exception $exception)
        {
            return ResponseJson::fail([],$exception->getMessage());
        }
        catch(ItemNotFoundException $exception)
        {
            return ResponseJson::fail([],$exception->getMessage(),$exception->getCode());
        }
    }
}
