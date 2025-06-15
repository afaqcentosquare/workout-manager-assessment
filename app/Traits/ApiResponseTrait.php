<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{
    public function sendResponseOk($message, $result = null, $pagination = null): JsonResponse
    {
        $response = [
            'isSuccessful' => true,
            'status' => 200,
            'message' => $message
        ];

        if ($result != null) {
            $response['data'] = $result;
        }

        if ($pagination != null) {
            $response['pagination'] = $pagination;
        }

        return response()->json($response);
    }

    public function sendResponseCreated($message, $result = null): JsonResponse
    {
        $response = [
            'isSuccessful' => true,
            'status' => 201,
            'message' => $message
        ];

        if ($result != null) {
            $response['data'] = $result;
        }

        return response()->json($response, 201);
    }

    public function sendResponseBadRequest(string $message = 'Bad Request'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 400,
            'message' => $message
        ], 400);
    }

    public function sendResponseUnauthorized(string $message = 'Unauthorized'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 401,
            'message' => $message
        ], 401);
    }

    public function sendResponsePaymentRequired(string $message = 'Payment Required'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 402,
            'message' => $message
        ], 402);
    }

    public function sendResponseForbidden(string $message = 'Access Not Allowed'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 403,
            'message' => $message
        ], 403);
    }

    public function sendResponseNotFound(string $message = 'Not Found'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 404,
            'message' => $message
        ], 404);
    }

    public function sendResponseMethodNotAllowed(string $message = 'Method Not Allowed'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 405,
            'message' => $message
        ], 405);
    }

    public function sendResponseUnprocessableEntity(mixed $result, string $message = 'Validation Errors'): JsonResponse
    {
        $response = [
            'isSuccessful' => false,
            'status' => 422,
            'message' => $message,
            'errors' => $result
        ];
        return response()->json($response, 422);
    }

    public function sendResponseTooManyRequests(string $message = 'Too Many Requests'): JsonResponse
    {
        return response()->json([
            'isSuccessful' => false,
            'status' => 429,
            'message' => $message
        ], 429);
    }

    public function sendResponseInternalServerError(Exception $exception): JsonResponse
    {
        $message = $exception->getMessage();

        $response = [
            'isSuccessful' => false,
            'status' => 500,
            'message' => $message
        ];

        return response()->json($response, 500);
    }
}
