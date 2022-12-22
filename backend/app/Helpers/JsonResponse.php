<?php


namespace App\Helpers;


class JsonResponse
{
    const MSG_ADDED_SUCCESSFULLY = 'responses.msg_added_successfully';
    const MSG_NOT_ALLOWED = "responses.msg_not_allowed";
    const MSG_NOT_FOUND = "responses.msg_not_found";
    const MSG_SUCCESS = "responses.msg_success";
    const MSG_FAILED = "responses.msg_failed";


    /**
     * @param null $content
     * @return \Illuminate\Http\JsonResponse
     */
    public static function respondSuccess($message, $content = null, $status = 200)
    {
        return response()->json([
            'result' => trans(self::MSG_SUCCESS),
            'data' => $content,
            'message' => $message,
            'status' => $status
        ]);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function respondError($message, $status = 500)
    {
        return response()->json([
            'result' => trans(self::MSG_FAILED),
            'data' => null,
            'message' => $message,
            'status' => $status
        ]);
    }


    public static function success()
    {
        return ['result' => trans(self::MSG_SUCCESS), 'message' => trans(self::MSG_SUCCESS), 'status' => 200];
    }

    public static function savedSuccessfully()
    {
        return ['result' => trans(self::MSG_SUCCESS), 'message' => trans(self::MSG_ADDED_SUCCESSFULLY), 'status' => 200];
    }

    public static function updatedSuccessfully()
    {
        return ['result' => trans(self::MSG_SUCCESS), 'message' => trans(self::MSG_UPDATED_SUCCESSFULLY), 'status' => 200];
    }
}
