<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel-authdemo

基于**Laravel5.5** 编写

## 介绍
laravel不同用户表登录（前后台分离demo）

## 安装

> 目前为 v1.0版本

### 1.克隆源码到本地
> git clone https://github.com/tnbcc/authdemo.git

### 2.进入项目目录
> cd authdemo

### 3.给目录权限
> chmod -R 777 storage bootstrap

### 4. 拷贝`.env`文件
一些 `secret key` 改成自己服务的`key`即可
> cp .env.example .env

### 5. 安装扩展包依赖
下载`laravel`相关依赖的包

> composer install

### 6. 生成秘钥
> php artisan key:generate

### 7. 生成数据表
> php artisan migrate 

### 8.假数据填充（默认密码123456会随机生成3个随机用户）
> php artisan db:seed --class=AdminsTableSeeder
至此, 安装完成 ^_^。
