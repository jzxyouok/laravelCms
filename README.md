# laravelCms
使用laravel框架搭建一个内容管理系统，练习如何使用laravel框架。
> 参考网址: http://laravelacademy.org/post/2720.html
> 
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

>如果是直接从git拉取代码则无需创建项目，只需更新laravel包即可。

###更新laravel包
```sh
cd ./laravelCms
composer.phar update
```

###更新本地配置
> 应用在不同环境配置不同，'.env.example'文件为配置基本示例文件，如果要使用应用则复制此文件，然后重命名拷贝文件为'.env',然后配置.env文件为当前环境配置，git在提交代码是已经过滤掉不必要的代码了。

然后使用如下命令生成应用key,当然前提是已经存在.env文件，否则执行失败，使用如下 Artisan 命令即可：
```sh
php artisan key:generate
```


###常用的laravel操作命令

创建迁移，生成的新迁移文件位于database/migrations目录下
```sh
php artisan make:migration create_tasks_table --create=tasks
```
要运行迁移
```sh
php artisan migrate
```


创建模型
```sh
php artisan make:model Task
```




