[[nmap]]
[[nikto]]

#### Website:

http://10.10.10.68/index.html

We're given a blogsite on first sight. Checking the menu, it says it's crafted by [[COLORLIB]] and uses [[SUPABLOG HTML TEMPLATE]].

The other side buttons don't seem to serve any functionality.
There is a search bar that we can try and inject things into

There is some information disclosure
![[Pasted image 20210520161948.png]]

http://10.10.10.68/js/main.js

Going through the main source code, we find an email function;
- ![[Pasted image 20210520162437.png]]
- ![[Pasted image 20210520162502.png]]

Back to the main website.
Clicking on the button `phpbash` we get sent to a blog about pentesting.
The user is called DEVELOPMENT and he date is Dec 4, 2017

There's a github here: 
[https://github.com/Arrexel/phpbash](https://github.com/Arrexel/phpbash)

Let's look at [[nikto]], there's a dir for /php http://10.10.10.68/php/
![[Pasted image 20210520163115.png]]

Let's try and see what sendMail.php has
`curl http://10.10.10.68/php/sendMail.php -v`

JUICY

http://10.10.10.68/dev/phpbash.php
There's a bash terminal here

```
www-data@bashed

:/var/www/html/dev# ls

  
phpbash.min.php  
phpbash.php  

www-data@bashed

:/var/www/html/dev# whoami

  
www-data
```

```
www-data@bashed

:/# nc

  
This is nc from the netcat-openbsd package. An alternative nc is available  
in the netcat-traditional package.  
usage: nc \[-46bCDdhjklnrStUuvZz\] \[-I length\] \[-i interval\] \[-O length\]  
\[-P proxy\_username\] \[-p source\_port\] \[-q seconds\] \[-s source\]  
\[-T toskeyword\] \[-V rtable\] \[-w timeout\] \[-X proxy\_protocol\]  
\[-x proxy\_address\[:port\]\] \[destination\] \[port\]
```

```www-data@bashed

:/# cd home

  

www-data@bashed

:/home# ls

  
arrexel  
scriptmanager  

www-data@bashed

:/home# cd arrexel

  

www-data@bashed

:/home/arrexel# ls

  
user.txt  

www-data@bashed

:/home/arrexel# cat user.txt

  
2c281f318555dbc1b856957c7147bfc1

www-data@bashed

:/home# sudo -l

  
Matching Defaults entries for www-data on bashed:  
env\_reset, mail\_badpass, secure\_path=/usr/local/sbin\\:/usr/local/bin\\:/usr/sbin\\:/usr/bin\\:/sbin\\:/bin\\:/snap/bin  
  
User www-data may run the following commands on bashed:  
(scriptmanager : scriptmanager) NOPASSWD: ALL
```

Let's go to [[Exploitation]]...