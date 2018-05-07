<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($components,$version)
    {

    	$sketleton = [
            'version' => $version,
            'components'    => $components,
            //'message' => $message,
        ];

        //return response()->json($sketleton, 200);
        return response()->json($sketleton, 200);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$sketleton = [
            //'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $sketleton['components'] = $errorMessages;
        }

        return response()->json($sketleton, $code);
    }
}
