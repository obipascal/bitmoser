<?php
namespace App\Libraries\HTTP;

class BS_JSONResponse 
{
    /**
     * Send a json(javascript object ) response from server via [AjaxRequest].
     *
     * @param string $response The response data or message
     * @param boolean $s success: true on success, false on failure.
     * @param boolean $e error: true on failure, false on success.
     * @param boolean $r Redirect: weither to redirect user.
     * @param string $loc Location to be redirected to.
     * @param string $header The http header response content type.
     * @return void
     */
    public function send_json_response($response, $s = false, $e = false, $r = false, string $loc = null, string $header = 'application/json')
    {
        header('Content-Type: ' . $header . '');
        echo json_encode(['response' => $response, 'success' => $s, 'error' => $e, 'redirect' => $r, 'location' => $loc]);

        
    }

    /**
     * Send a json(javascript object ) response from server via [AjaxRequest].
     *
     * @param string $response The response data or message
     * @param boolean $s success: true on success, false on failure.
     * @param boolean $e error: true on failure, false on success.
     * @param string $header The http header response content type.
     * @return void
     */
    public function send_json_uploadfile_response(string $response, $s = false, $e = false, $rt = false, $r = false, string $loc = null, string $header = 'text/plain')
    {
        header('Content-Type: ' . $header . '');
        echo json_encode(['response' => $response, 'success' => $s, 'error' => $e, 'preventRetry' => $rt, 'redirect' => $r, 'location' => $loc]);
    }
}
