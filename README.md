# Metrific APM
[![N|Solid]([https://ucd76b52131d8363825d063c9c39.previews.dropboxusercontent.com/p/thumb/AB7KWAo2PeaNnvnHmmn5qQzL6LHhJ4WZ4_IxtLC19DIJc4-8CXTULaqMMLkZ_5H4SZmfh8yMELlJXLByjHfQ64OrzHPZ1aXWWl0ylJcgL8wSctrRUYDwCDiSh6TfQUUFe-cv4uRfPQG5QtIPjlqv4r5YrQN6BvBkG1sI8EDtK6wwVruSOAtfnuloNOde1UWQzGbNTj9etmT-Sg4d1084QiknN9rMK9fTTt7jzfyOnh3ek-AQ33r_k2I0THha1uBuaxLqHEA6KgWUQQ8vZAtGFctN8_rYexvDQ7kw7U5AwdNYbv5fi9hGHwrturhjRNOF4sZrq-0wnvYWz9YgzPbY4NqiUtgv99xKKko0MUfI2f9x7Qh1M5UGzgMrznVEevR5yAnrSaSXnIEJIhrAosrxq3h3e8yT7bFYmVrqEH_igVmlEQ/p.png](https://previews.dropbox.com/p/thumb/AB6Nyyn0IXx3NkG1AR6wJkbzGsyecXp_-JSyQL6c1_8WrB6K4O449wXqikiPU4H2AzzUZ23WXTaS7qm3Gc7wO0upnCfU3OjIapiS8omVML6X8a01_IRAeWBhyP-yU6Ij6OnTtPwSWKa--mL0C6Cg2UNSmZMoQ6kfbtMGjVSR3_R6M4BkKMlndFrFsFyqDL0czR-RPV_UmhDy7JbcQDEj3Bfx0DmSNlfdT1oTa57l1EE5UOMapQtF6ZzpzClE6v6HcuZTf1dd2j5fB0OnHTI3rn7bTMtQxYTE_1iRcZizDBEjTzETv_t9wvQAzwwbltmjBOXmA4lthJPWTlhforfp4d14JkmoDxFZLJAD1s5ZrG8tIJ4NZ5RCdPG5_Bxf7H7hGAg/p.png)](https://nodesource.com/products/nsolid)

Introducing Metrific, an innovative GitHub project leveraging Elastic APM, PHP, and Docker to revolutionize application performance monitoring. Metrific empowers developers to gain deep insights into their PHP applications running within Docker containers, ensuring optimal performance and exceptional user experiences. With Metrific, you can effortlessly monitor key metrics such as response times, error rates, database queries, and resource consumption. Leverage Elastic APM's powerful features to detect and diagnose performance bottlenecks, enabling you to optimize your application's performance and deliver superior results. With its intuitive interface and seamless integration with PHP and Docker, Metrific simplifies the monitoring process and allows you to make data-driven decisions for enhanced application performance. Take control of your PHP applications with Metrific and unlock their true potential through advanced performance monitoring.

## How to setup project

### Prerequisites
``` bash
git clone https://github.com/mohammadalipour/metrific.git
cd metrific
docker-compose build --build-arg PHP_FPM=metrific-php
docker-compose up -d
```

### localhost URL
[Index page](http://localhost:8080 "Click here to visit our website")


### APM ELK panel
[APM ELK panel](http://localhost:5601/app/apm/services/metrific/overview?rangeFrom=now-2m&rangeTo=now&comparisonEnabled=true&comparisonType=day "Click here to visit our website")
