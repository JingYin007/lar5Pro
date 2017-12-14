
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

## ①. 数据库信息配置
- 初次使用代码，需要更改对应的数据库信息
把 `.env` 文件中的 DB_HOST、DB_PORT、DB_DATABASE、DB_USERNAME、DB_PASSWORD；  
改为自己实际的数据库链接；


# 注意

## ①. `.gitignore` 文件的影响

- 因为Git 使用的普遍性，此文件可以进行目录的设置，
如此一来便可以避免一部分不需要同步上传的文件/夹

- 举例，最初git下载框架代码时的设置信息如下：
```
/node_modules
/public/hot
/public/storage
/storage/*.key
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
composer install
```

- 注意，也会有个别的文件夹分别有自己的配置文件，可自行修改，
以保证代码和文件的同步性