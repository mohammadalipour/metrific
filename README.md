# Metrific APM
[![N|Solid](https://i.postimg.cc/2SR4b21G/f7H7hGAg.png)](https://nodesource.com/products/nsolid)


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
