<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About seo/关于 seo

 本项目使用 PHP 框架 [Laravel 5.7](https://doc.laravel-china.org/docs/5.4/) 进行开发。 

### 功能具有以下功能

- seo查询管理
- seo查询接口调用

## 项目概述

* 项目名称：站长工具
* 项目运行地址：http://seo.webshowu.com

## 目前运行环境

- Nginx 1.2+
- PHP 7.2
- MySQL 5.7

## 部署/安装

需要在系统上安装了基本的PHP运行环境、PHP包管理工具composer

### 基础安装

#### 1. 克隆源代码

* github项目地址：https://github.com/lambq/seo
* 从github克隆源代码到本地：

```shell
git clone https://github.com/lambq/seo.git
```

* oschina项目地址：http://git.oschina.net/lambq/seo
* 从oschina克隆源代码到本地:

```shell
git clone https://git.oschina.net/lambq/seo.git
```


#### 3. 生成配置文件

```shell
cp .env.example .env
```

#### 4. 更新laravel框架安全 key

```shell
php artisan key:generate
```
    
#### 5. 执行数据库迁移

```shell
php artisan migrate
```

#### 6. 填充初始数据

```shell
php artisan db:seed
```
#### 7. 申请SEO_TOKEN
    
* 请加qq群:480774617
* 如果没有账户请注册一个，有账户请登陆请看下图
* 获取的了api_token填写在 网站.env文件里面的SEO_TOKEN

## License

> 使用 webshowu 构建，或者基于 webshowu 源代码修改的站点 **必须** 在页脚加上 `Powered by webshowu` 字样，并且必须链接到 `http://www.webshowu.com` 上。**必须** 在页面的每一个标题上加上 `Powered by webshowu` 字样。

在遵守以上规则的情况下，你可以享受等同于 MIT 协议的授权。

或者你可以联系 `any@rushangkeji.com` 购买商业授权，商业授权允许移除页脚和标题的 `Powered by webshowu` 字样。