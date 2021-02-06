# Controller
校验是否有必要处理请求，是否有权限和是否请求参数合法等。无权限或不合法请求直接 response 返回格式统一的数据

## 岗位职责
1. 校验是否有必要处理请求，是否有权限和是否请求参数合法等。无权限或不合法请求直接 response 返回格式统一的数据
2. 将校验后的参数或 Request 传入 Logic 中具体的方法，安排 Logic 实现具体的功能业务逻辑
3. Controller 中可以通过`__construct()`依赖注入多个 Logic。比如 `UserController` 中可能会注入 `UserLogic`（用户相关的功能业务）和 `EmailLogic`（邮件相关的功能业务）
