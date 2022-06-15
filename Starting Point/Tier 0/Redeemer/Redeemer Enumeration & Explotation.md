[[Redeemer-init.html]]

To get started, we will first need to install redis onto our system:

`sudo apt-get install redis`

then we will need to access the ip address given

`redis-cli -h 10.129.189.65 -p 6379`
![[Pasted image 20220611011120.png]]

Once here, we can use [`INFO`](https://redis.io/commands/info/) to list out the server information
![[Pasted image 20220611011359.png]]
```
Version: 5.0.7
```

To select a database we use `SELECT`
To show the number of indexes we use `DBSIZE`
![[Pasted image 20220611012014.png]]
![[Pasted image 20220611012118.png]]

flag `03e1d2b376c37ab3f5319922053953eb`