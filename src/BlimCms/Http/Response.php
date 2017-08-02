<?php

namespace BlimCms\Http;

/**
 * Send controller response, send headers
 *
 * @author Sebastian Śliwiński
 */
class Response
{
    private $code = 200;
    private $body;
    private $headers = [
        'content' => 'Content-type: text/html;charset=utf=8'
    ];

    public function __construct($body = null, $code = null)
    {
        $this->body = $body;
        $this->code = $code;
    }

    /**
     * Add or unset header
     * Unset id value is empty ("")
     *
     * @param type $name
     * @param type $value
     */
    public function addHeader($name, $value)
    {
        if (!strlen($value)) {
            unset($this->headers[$name]);
        } else {
            $this->headers[$name] = $value;
        }
    }

    /**
     * Send all headers and content to client
     */
    public function send()
    {
        if (!empty($this->headers)) {
            foreach ($this->headers as $header) {
                header($header);
            }
        }

        http_response_code($this->code);

        echo $this->body;
    }
}
