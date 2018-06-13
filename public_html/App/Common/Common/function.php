<?php

if( !function_exists('startsWith') ){
    /**
     * @ 字符串以...开始
     * @param $haystack
     * @param $needles
     * @return bool
     */
    function startsWith($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle !== '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }
}

if( !function_exists('endsWith') ){
    /**
     * @ 字符串以...结束
     * @param $haystack
     * @param $needles
     * @return bool
     */
    function endsWith($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if (substr($haystack, -strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }
}

if( !function_exists('value') ){
    function value($value)
    {
        return $value instanceof Closure ? $value() : $value;
    }
}

if( !function_exists('env') ){
    /**
     * @ 获取env值
     * @param $key
     * @param null $default
     * @return array|bool|false|mixed|string|void
     */
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return value($default);
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }

        if (strlen($value) > 1 && startsWith($value, '"') && endsWith($value, '"')) {
            return substr($value, 1, -1);
        }

        return $value;
    }
}