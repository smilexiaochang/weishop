<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092700609145",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEogIBAAKCAQEAthsdvGXn+tDrDW1nWnhfYvMb5tFphX1pMbJSW2QLAayOyfyaLrfyctnwo+inBmyTaz8xD90M+5pm3ZGBKcTgZoFvQYUY2qf5qCsobJMZF+iflTNRS3UxpX3CRhBw9D73ecxtyvd0s5iq2Hk0yxepB6HIyyCeecL3bm2WFUPDAnZmTCDJvkO3vQcVknpCsIPDex6hCNGcP53lNgTRbHhy/jIhziYSwFujsqdI/25yOzLWrTY+hwSzdbNIRHXqCwhblojPAgFkiZWDAnI6pvyHfbnotGFaPWT6e0mLoS0UP4Gdlq0/THvGRbBswPabMnFIG1gbDGXBL4Kd8KG6w8TjwwIDAQABAoIBAF05eHmP+bgO56XSEgzgfoRbTDdXkRuDXizQyxR6HKBYxChnJk8wX++n3mcqnQbO4pEOooEqepD7NBnNeT/2x6HyNRBnoJefUlFi9qjOjRQORFPPF5j3f9jmjmPr2sdOzMYPf01ebOHcD+oN8pbdn+yGSBKkujw/MQfZFfIA5H4HXU7gnN8GuoYOSmjKBuTiL3CzslwnTTswiN442nTuaH1hXjIcJ2LfnGofqsZgcE6xbLfB2+D+E/kZh32DoEA2NUW9tWt4oow0QUipGayDHbW3PXpafa8v2hGupq6Nj1DaEcui7FP79N8UKG/+fEmqaqQOasD/l+/PIEEl9SSwhyECgYEA5ZxXtINKEknmEDiEnf0LQBLZgj2iSmqVnaANZgG7kprLHM/cin0/nxASbDHboH5cl5vOxwpZXv4d5dPjFHl24yyFnOzc9d1WAL8GMdgxouIKYJAp5W3wr2Sul4qeXbTcYh3Jh4MhnRUP+mE/+rj9N2HfY7z94SwuvCUkfGzs9nsCgYEAywkTubbN7XG4AfxcmF0Ge2tMWIbF8tCMJdag7nKmzG3D/dcIpa1Y+aY6a41glzv98bea7dAR4/SalX6TEKER2SMx4oTdwmcIwcmAIV2JPURfEVbWQosyPCbKoB0txwUmCzhFER3JvcqxJVInnZ6Xwg0rQuPUZxsv/PT/O5pEqVkCgYBT5wl1gPQ0MqTLEJwFT04pH7oziWogX0pEyxOaTs/IBqBp6trgEFyLN0hEGQP0ZbhX/itVOEboG1u5e+/ir2/uG3rHmRY1Eag3pZYR6LpaltbL6mIk4EOvE89ouNKd01Uk1VWrGxPRXrzz9U13xNliv3Tt8UWkXozFW501imgcuQKBgEAkPfcNqUC6DEeUUixQNxwGabgN27s55wyNIYoy7j7m7mPi6vhsKw+zVAFmSH1+llsmhetbMEuzmqJfulYmjFzsoXXOQ8CGjF2sKq5fvlt8ngv8QvQCxXv7RUgP78ZP+hTRUgB2SKWMwynnKlzBHXBQeLpI/3ETRbXEMF3D/q0BAoGAJz4no3FbV0A7zLVVpKBvjcv5dgAYfCwyWzIDWWPqfgwEFZBohKIngUlaooYs6ijoyocqKTs8Tlr2kf+u0xO2regqKRTE8WllSLr3MtVjpRiJTQI4eTzYun8BQ8aQxkEe56jJMLHLdJl7uDB63HXG2Mf85eiR9HUXALamBWE9Luk=",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAr/hu9WmXLb4hgCty3dlJ1BxQW+SpXfxNPj47Iet0YjLqSoCn328RXRw6bLjTLxedpe0hEMS0dUULHADVPrYsRbKnQc5ewimuFKiIy3jmRn1ZQ0pv9WHv9MKwOyfFpOplvSNoZP0VlVr3DYs/YMWnArinTWnRgTZEsZZmA5VSZmr7Dy83ZmY8rnkDsI6vuyTG2MneoFTPoU3DsZYZH07boKfcNwODUCWeodmKTgtF7jwNy4M+di8OLEHzO86qnFDmUpROEMKzit6lnLq6I0wEWVq9Uda2CADLKGl4pceJeLqnWI+W3Y/RCTq1TN4s+HlvvwdaWoxXOnhUfNW15TX+xQIDAQAB",
		
	
);