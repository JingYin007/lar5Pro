> 注意：如果你看到了这个源代码，建议暂时不要使用，毕竟一年前写的不够严谨，估计2019年3月份 会与ThinkPHP版本进行同步测试上传，谢谢！

# 一.介绍

## ①. 项目名称
- lar5Pro

## ②. 运行环境
- 框架：       laravel 5.5*
- PHP版本：    php7
- composer版本：   Composer version 1.5.5

## ③. 上传目的

- 近期正在学习 laravel 框架
前期曾上传过一份“laravel 5.2*”框架代码，
鉴于laravel的更新换代，还是觉得花点时间跟上技术的进步才像话
- 不过只是自己作为初学者的入门代码，后期会根据自己的需求进行完善 ...

# 二、使用

- XXXXXXXXXXXXXX

## ①. 创建新的应用程序密钥
```shell
php artisan key:generate
```
## ②. 数据库信息配置

- 初次使用代码，需要更改对应的数据库信息

编辑`.env`文件

```
CACHE_DRIVER=array

DB_HOST=YOUR_DATABASE_HOST
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```
-  添加自动加载
```shell
composer dump-autoload
```

- 运行数据库迁移
```shell
php artisan migrate
```

- 运行数据填充
```shell
php artisan db:seed
```

## ③. 配置完成后的访问

> 举例：配置的虚拟域名为 `lar5Pro.com` ,则入口网址为：

- 前台 ： `lar5Pro.com/`
- 后台 ： `lar5Pro.com/cms/index`

> 后台登录数据
> [用户名]:moTzxx@admin [密码]:admin 

# 注意

## ①. `.gitignore` 文件的影响

- 因为Git 使用的普遍性，此文件可以进行目录的设置，
如此一来便可以避免一部分不需要同步上传的文件/夹

- 举例，最初 git 下载框架代码时的设置信息如下：
```
/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
/.idea
/.vagrant
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
.env
```
- 下载得到的框架，很多没有 `vendor` 目录，此时可以在项目根目录下运行命令：
```
composer update
composer install
```

- 注意，也会有个别的文件夹分别有自己的配置文件，可自行修改，
以保证代码和文件的同步性

## ②. 参考命令
- 数据库迁移 参考：
```
php artisan make:migration create_users_table
```


# 参考图片

## ①. 前台
![](https://raw.githubusercontent.com/JingYin007/lar5Pro/master/public/images/info/home1.png)
![](https://raw.githubusercontent.com/JingYin007/lar5Pro/master/public/images/info/home2.png)
![](https://raw.githubusercontent.com/JingYin007/lar5Pro/master/public/images/info/home3.png)

## ②. CMS 后台
![](https://raw.githubusercontent.com/JingYin007/lar5Pro/master/public/images/info/cms1.png)
![](https://raw.githubusercontent.com/JingYin007/lar5Pro/master/public/images/info/cms2.png)


# 附录

## 可参考博文
> [moTzxx-CMS —— [一个基于PHP代码的后台管理系统]](http://blog.csdn.net/u011415782/article/details/79307673)
 