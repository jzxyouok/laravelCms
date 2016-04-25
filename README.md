# laravelCms
使用laravel框架搭建一个内容管理系统，练习如何使用laravel框架。
> 参考网址: http://laravelacademy.org/post/2720.html
> 关于composer操作指令，http://docs.phpcomposer.com/03-cli.html#create-project

###安装步骤

####安装composer

#####全局安装
```sh
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```
#####局部安装
```sh
curl -sS https://getcomposer.org/installer | php
```

>注意： 如果上述方法由于某些原因失败了，你还可以通过 php >下载安装器：

```sh
php -r "readfile('https://getcomposer.org/installer');" | php
```

###创建laravel应用

```sh
composer create-project laravel/laravel ./laravelCms --prefer-dist
```

