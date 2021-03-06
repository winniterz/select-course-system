# 基于微信的专业课选课系统

## 技术栈
### 前端

- [vue2.0](https://vuefe.cn/v2/guide/)  框架
- [vue-router](https://router.vuejs.org/zh-cn/) 路由插件
- [axios](https://github.com/mzabriskie/axios) AJAX请求插件
- [mint-ui](http://mint-ui.github.io/docs/#!/zh-cn2) 微信移动端组件库
- [element-ui](http://element.eleme.io/#/zh-CN/component/installation) PC管理端组件库

### 后台

- [laravel](https://laravel-china.org/docs/5.1/installation) 后台框架
- [guzzle](https://github.com/guzzle/guzzle) 后台http请求插件
- [flexihash](https://github.com/pda/flexihash) 一致性哈希插件，用于组织多个队列任务
- redis 用于session与cache的
- mysql 持久数据化数据库


## 时间
1. 2017-2-27 初始化(由毕设互选系统而来)
3. 2017-3-17 完成初版

## 应用链接
微信端 http://select-course.wilsonliu.cn/FrontEnd/wechat/dist/#/register (请在微信中打开)

PC端 http://select-course.wilsonliu.cn/FrontEnd/admin/dist/#/login 

注：微信端需要使用姓名与学号登录，请在PC端登录后手动添加自己的姓名与学号(随便填写一个就好了)，再用自己添加的账号进行登录。
## TODO LIST
1. cache中课程对应的选中人数为0，正在执行的队列任务要执行退选该门课程操作。导致课程人数为负。 解决方案：重新到DB中校对一次数据，再对用户退选操作进行处理
