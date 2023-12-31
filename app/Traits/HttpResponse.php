<?php

namespace App\Traits;

trait HttpResponse{

    protected function success($data, $message = null, $code = 200){
        return response()->json([
            'error' => false,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function error($data, $message = null, $code){
        return response()->json([
            'error' => true,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

}
