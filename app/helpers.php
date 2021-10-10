<?php
/**
 * 转换路由名称为 css class
 * @return string
 */
if (!function_exists('route_class')) {
    function route_class() {
        return str_replace('.', '-', Route::currentRouteName());
    }
}
