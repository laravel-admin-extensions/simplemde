Simplemde editor extension for laravel-admin
======

[Simplemde](https://github.com/sparksuite/simplemde-markdown-editor)是一个非常优秀的markdown编辑器，这个扩展用来将`Simplemde`集成进`laravel-admin`的表单中

## 截图

![wx20180906-130207](https://user-images.githubusercontent.com/1479100/45136112-3deea300-b1d5-11e8-984d-9d1c8d53c97d.png)

## 安装

```bash
composer require laravel-admin-ext/simplemde
```

然后
```bash
php artisan vendor:publish --tag=laravel-admin-simplemde
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置
```php

    'extensions' => [

        'simplemde' => [
        
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
            
            // 如果要给调用方法设置别名
            //'alias' => 'markdown',
            
            // 编辑器的配置
            'config' => [
                
            ]
        ]
    ]

```

更多配置可以到[Simplemde文档](https://github.com/sparksuite/simplemde-markdown-editor#configuration)找到，比如
```php
    'config' => [
        'autofocus'   => true,
        'placeholder' => 'xxxx',
        ....
    ]
```

## 使用

在form表单中使用它：
```php
$form->simplemde('content');
```

设置高度
```php
$form->simplemde('content')->height(500);
```

如果在配置中指定了方法别名为`markdown`
```php
$form->markdown('content');
```

## 支持

如果觉得这个项目帮你节约了时间，不妨支持一下;)

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).