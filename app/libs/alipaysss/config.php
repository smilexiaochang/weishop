<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092700605499",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA08ekJ9RAY0nW17+xAi0rSGLl3pUA7fDrkyD1cm9dN1JK0RERL7KMV3ykfNKdtbmMNh4wVuzMeE4FrDvES9apJPVLNwzXCzG4aUrVv66hMKb/jtHDr6cx1vz2ST9x6xlopCspfgHxxr+PgEkjxBZA7oiCyB/hYtZ4aDx+WJRlrhWYFuXqDFrhH9r+oAE9UMULBG3GkW4WrbypnPle0Y0qPruO4hzHI/t8YVV8Rl4oju5qnpoNPjeRqyWaq778ZLXgDYzow3OJT6jnmM2BhxV4hsKed0wIV0y6hMJpCsmHrBOBWcRs4pOULbKVh+xdVXyGyT8lSX55aYlS9SCcl44muwIDAQABAoIBAQCxtetICNHm/0UrUg3k96ZEXcjq2DopcGsd0SBl4JFmJMXnXd0AG2Gs4Eje/ZWdso+3sel6Z8bEhSQ5fQWhZgYVn0h4b2vcVuKaaFOpP46/VsNIQzlkInauIyNAH98mGvI2IIn21QbfckumqLk8iDgAccjcyfPFjpcHUQvspMoWIz0lwPZtIcEcBIsF/YpxY5dSDvqtaNgPAZv5uAd9SEOHepnRuU0YCYb4LRR/XDsZSgyWfTZRUUdWUiZkEMbDMMXl1t9coQWSNo24AGeLQgPSB0kIrBhqL9LE6sZ4oaki1nklGwYfTPi8HKn/xtl/0bQi2C39HKIlvnDKB/V7JLahAoGBAPgg9xdvvWFlPb/Yv9SrQOgG7nCm++C3EJ2aNCe7U5LstdirUXM2VDMJ9N/F4FTx3XMD9BSSAXfvBXkT5A2Uh/pypEBATJUvCplZPzrYHXgU9xof30VzWJ8Hzf66Xpx3C8EvffUkOUP0rM4JlQ3Lgc0Pk+ZNgFIGMAaBKO1qrV6DAoGBANp/fT0SiURXQiZ5+p88l1JOSgNhQS+uEGfBeCGVa7jk0s6wVR0V6FAaEfJ1yBAyVtSwTffvSuMO+B9Ub288qa3TTkznNySZccHSQ4vGfPayVjkpn4iW2Jw0yPCf3pawC+mPUSss/S8oUrLoJX7leTjcjWwAg70ciI3kPA9aVqFpAoGBAIOQDxO5JqQGp0gaqBQePYsJadIHaBQNXN0Dz1WlyLllk0HwDH7XNqvdQp6H79t6Zt2+IePqSqcJ8E/zkP72W2ca9CYxMaoESE1o+dK8llt+WkrazWqorzubSskejl3N7UigYtvhOg/jIuEYSZUH66oL8XKyczCKoVpBj67a2lP7AoGAasHB2lY1NWwBCTWuK6F6Oh/Ab/hT1k0Q/PD9lkMgl/1NtulXHNf4YzLps/KyZp+B53ehENQdXeWRfBVQQSR9r03AQzjxq3NBrrbig+feZNbr5BAfP6ice24bA97I7g1kNKDuws6/ggwMpBdjQqYyXYL9olh6BatsWQ+7/LBiBYkCgYBKSQE0yJmooInAc5mbhqmSuTnrqt0z7ZUQFNTKNorJY1t/wa0xnEgnXPh36x1gmhNoFnkLHGhXms9OD5vPc5VSX2n7tsNcl0mYhCYng1QdXVRHdFZa3bQ7sUrIzFUk1dBMOmbFDOXLN0je38Sl4o4mi7tbPm/K8YiJ6+ahGD+vBg==",
		
		//异步通知地址
		'notify_url' => "http://localhost/alipay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://localhost/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA08ekJ9RAY0nW17+xAi0rSGLl3pUA7fDrkyD1cm9dN1JK0RERL7KMV3ykfNKdtbmMNh4wVuzMeE4FrDvES9apJPVLNwzXCzG4aUrVv66hMKb/jtHDr6cx1vz2ST9x6xlopCspfgHxxr+PgEkjxBZA7oiCyB/hYtZ4aDx+WJRlrhWYFuXqDFrhH9r+oAE9UMULBG3GkW4WrbypnPle0Y0qPruO4hzHI/t8YVV8Rl4oju5qnpoNPjeRqyWaq778ZLXgDYzow3OJT6jnmM2BhxV4hsKed0wIV0y6hMJpCsmHrBOBWcRs4pOULbKVh+xdVXyGyT8lSX55aYlS9SCcl44muwIDAQAB",
);