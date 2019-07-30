<?php

namespace App\Siscopuig;

class ConfigParser
{

    protected $data;


    public function __construct($file)
    {
        $this->data = $this->parserFile($file);
    }

    public function getParam($group, $key, $default = null)
    {
        if ($this->data[$group][$key]) {
            return trim($this->data[$group][$key]);
        }

        return $default;
    }

    public function parserFile($file)
    {
        $data = json_decode(file_get_contents($file), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $error_msg = 'Syntax error';

            if (function_exists('json_last_error_msg')) {
                $error_msg = json_last_error_msg();
            }

            $error = [
                'msg' => $error_msg,
                'type' => json_last_error(),
                'file' => $file
            ];

            throw new ParseException($error);
        }
        return $data;
    }
}
