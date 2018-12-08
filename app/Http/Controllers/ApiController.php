<?php

namespace App\Http\Controllers;


/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 */
/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{
    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }


    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(404)->responseError($message);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseError($message)
    {
        return $this->response([
            'status' => 'failed',
            'errors' => [
                'status_code' => $this->getStatusCode(),
                'message' => $message,
            ],
        ]);
    }

    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseSuccess($data)
    {
        return $this->response([
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'data' => $data,
        ]);
    }

    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($data)
    {
        return \Response::json($data);
    }
}