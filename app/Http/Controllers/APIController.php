<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\ Http\ Requests;
class APIController extends Controller
{

    public function login( Request $request)
    {
            $request->setUrl('https://arcane-mesa-51105.herokuapp.com/api/books');
            $request->setMethod(HTTP_METH_GET);
            
            $request->setHeaders(array(
              'Postman-Token' => 'd2c37c33-f6e2-4f89-b909-f79aeab93daa',
              'Cache-Control' => 'no-cache',
              'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImlzcyI6Imh0dHA6Ly9hcmNhbmUtbWVzYS01MTEwNS5oZXJva3VhcHAuY29tL2FwaS91c2VyL2xvZ2luIiwiaWF0IjoxNTI4NTM0MjEzLCJleHAiOjE1Mjg1Mzc4MTMsIm5iZiI6MTUyODUzNDIxMywianRpIjoiaGxkQXY5SDlXOVpxMzJEVCJ9.CfWBVidRKqiRVtIm-wf9tasI0YvmeluZhW2cVjzIJqU',
              'content-type' => 'multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW'
            ));
            
            $request->setBody('------WebKitFormBoundary7MA4YWxkTrZu0gW
            Content-Disposition: form-data; name="email"
            
            abdulaziz@abdulaziz.com
            ------WebKitFormBoundary7MA4YWxkTrZu0gW
            Content-Disposition: form-data; name="password"
            
            112233
            ------WebKitFormBoundary7MA4YWxkTrZu0gW--');
            
            try {
              $response = $request->send();
            
              echo $response->getBody();
            } catch (HttpException $ex) {
              echo $ex;
            }
    
    
           
    
        }
    
      
}