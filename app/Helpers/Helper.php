<?php

function ResponseSuccess($message="Success", $data=null, $statusCode=200) {
    return response()->json([
        'success' => true,
        'data' => $data,
        'message' => $message,
        'errors' => null
    ], $statusCode);
}

function ResponseError($message="Success", $data=null, $statusCode=200, $errors=null) {
    return response()->json([
        'success' => true,
        'data' => $categories,
        'message' => $message,
        'errors' => $errors
    ], $statusCode);
}
