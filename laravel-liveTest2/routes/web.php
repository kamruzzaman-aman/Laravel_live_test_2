<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

//Task-01
Route::post('/form-submit', function (Request $request) {
    $email = $request->input('email');
    if ($email) {
        return response()->json([
            "status" => "success",
            "message" => "Form submitted successfully.",
            "email" => $email
        ]);
    } else {
        return response()->json([
            "status" => "failed",
            "message" => "Form submission failed."
        ]);
    }
});


//Task-02
Route::get('/user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');
    return response($userAgent);
});