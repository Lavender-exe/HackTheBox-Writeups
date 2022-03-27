http://10.129.137.10:80

[[nmap]]
[[nikto]]

Tried opening the IP in a browser and it took me to a web page:
![[Pasted image 20210524033438.png]]

Scans: -

Nikto:
- + Server: Apache/2.4.41 (Ubuntu)
- + Retrieved x-powered-by header: PHP/8.1.0-dev.

Nmap:
- 22/tcp open  ssh     OpenSSH 8.2p1 Ubuntu 4ubuntu0.2 (Ubuntu Linux; protocol 2.0)
- 80/tcp open  http    Apache httpd 2.4.41 ((Ubuntu))

-----

I'll try adding knife.htb to my hosts list as there's nothing else on this website..
`Same website.`

There might be a code injection somewhere?
![[Pasted image 20210524034528.png]]

We can try to run [this](https://null-byte.wonderhowto.com/how-to/scan-for-vulnerabilities-any-website-using-nikto-0151729/)..
```sh
nikto -h <IP or hostname> -Format msf+
```

Nope

Nmap Vuln Scanning:

`sudo nmap -T4 -A -p 80 -v --script vuln 10.129.137.10`

[[http]]
- https://vulners.com/attackerkb/AKB:6639DB62-5B8A-47FF-8269-A1F22B5B9531
- https://vulners.com/metasploit/MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-9490/
- https://www.exploit-db.com/exploits/41885

```
curl -v http://10.129.137.10/concrete5-8.1.0/index.php/team/faq -H "Host: 10.10.17.19"
curl -v http://10.129.137.10/concrete5-8.1.0/index.php/services -H "Host: 10.10.17.19"
curl -v http://10.129.137.10/concrete5-8.1.0/index.php/portfolio -H "Host: 10.10.17.19"

Navigate to one of these URLs:

http://10.129.137.10/concrete5-8.1.0/index.php/services
http://10.129.137.10/concrete5-8.1.0/index.php/portfolio
```

https://portswigger.net/web-security/host-header/exploiting

https://www.sourceclear.com/vulnerability-database/security/remote-code-execution-rce/php/sid-6042

https://blog.csdn.net/zy15667076526/article/details/116447864

[[Boxes/Active Boxes/Knife/Exploitation]]