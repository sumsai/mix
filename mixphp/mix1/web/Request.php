<?php

/**
 * Request类
 * @author 刘健 <code.liu@qq.com>
 */

namespace mix\web;

use mix\base\Object;

class Request extends Object
{

    // GET参数
    private $get;

    // POST参数
    private $post;

    // FILES参数
    private $files;

    // 路由参数
    private $route;

    // 初始化
    public function init()
    {
        $this->setGet($_GET);
        $this->setPost($_POST);
        $this->setFiles($_FILES);
    }

    // 设置Route值
    public function setRoute($route)
    {
        $this->route = $route;
    }

    // 设置GET值
    public function setGet($get)
    {
        $this->get = $get;
    }

    // 设置POST值
    public function setPost($post)
    {
        $this->post = $post;
    }

    // 设置FILES值
    public function setFiles($files)
    {
        $this->files = $files;
    }

    // 提取GET值
    public function get($name = null)
    {
        return is_null($name) ? $this->get : $this->get[$name];
    }

    // 提取POST值
    public function post($name = null)
    {
        return is_null($name) ? $this->post : $this->post[$name];
    }

    // 提取POST值
    public function files($name = null)
    {
        return is_null($name) ? $this->files : $this->files[$name];
    }

    // 提取Route值
    public function route($name = null)
    {
        return is_null($name) ? $this->route : $this->route[$name];
    }

    // 提取全部
    public function all()
    {
        return $this->route + $this->get + $this->post + $this->files;
    }

}