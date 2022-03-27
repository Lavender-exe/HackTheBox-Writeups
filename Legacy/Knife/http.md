Starting Nmap 7.91 ( https://nmap.org ) at 2021-05-24 04:07 EDT
NSE: Loaded 149 scripts for scanning.
NSE: Script Pre-scanning.
Initiating NSE at 04:07
Completed NSE at 04:07, 10.01s elapsed
Initiating NSE at 04:07
Completed NSE at 04:07, 0.00s elapsed
Initiating Ping Scan at 04:07
Scanning 10.129.137.10 [4 ports]
Completed Ping Scan at 04:07, 0.19s elapsed (1 total hosts)
Initiating SYN Stealth Scan at 04:07
Scanning knife.htb (10.129.137.10) [1 port]
Discovered open port 80/tcp on 10.129.137.10
Completed SYN Stealth Scan at 04:07, 0.25s elapsed (1 total ports)
Initiating Service scan at 04:07
Scanning 1 service on knife.htb (10.129.137.10)
Completed Service scan at 04:07, 6.28s elapsed (1 service on 1 host)
Initiating OS detection (try #1) against knife.htb (10.129.137.10)
Retrying OS detection (try #2) against knife.htb (10.129.137.10)
Initiating Traceroute at 04:07
Completed Traceroute at 04:07, 0.27s elapsed
Initiating Parallel DNS resolution of 1 host. at 04:07
Completed Parallel DNS resolution of 1 host. at 04:07, 0.16s elapsed
NSE: Script scanning 10.129.137.10.
Initiating NSE at 04:07
Completed NSE at 04:08, 31.61s elapsed
Initiating NSE at 04:08
Completed NSE at 04:08, 1.19s elapsed
Nmap scan report for knife.htb (10.129.137.10)
Host is up (0.25s latency).

PORT   STATE SERVICE VERSION
80/tcp open  http    Apache httpd 2.4.41 ((Ubuntu))
|_http-csrf: Couldn't find any CSRF vulnerabilities.
|_http-dombased-xss: Couldn't find any DOM based XSS.
| http-enum: 
|_  /icons/: Potentially interesting folder
|_http-server-header: Apache/2.4.41 (Ubuntu)
|_http-stored-xss: Couldn't find any stored XSS vulnerabilities.
|_http-vuln-cve2017-1001000: ERROR: Script execution failed (use -d to debug)
| vulners: 
|   cpe:/a:apache:http_server:2.4.41: 
|     	MSF:ILITIES/REDHAT_LINUX-CVE-2020-11984/	7.5	https://vulners.com/metasploit/MSF:ILITIES/REDHAT_LINUX-CVE-2020-11984/	*EXPLOIT*
|     	MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-11984/	7.5	https://vulners.com/metasploit/MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-11984/	*EXPLOIT*
|     	MSF:ILITIES/FREEBSD-CVE-2020-11984/	7.5	https://vulners.com/metasploit/MSF:ILITIES/FREEBSD-CVE-2020-11984/	*EXPLOIT*
|     	MSF:ILITIES/APACHE-HTTPD-CVE-2020-11984/	7.5	https://vulners.com/metasploit/MSF:ILITIES/APACHE-HTTPD-CVE-2020-11984/	*EXPLOIT*
|     	CVE-2020-11984	7.5	https://vulners.com/cve/CVE-2020-11984
|     	CVE-2020-1927	5.8	https://vulners.com/cve/CVE-2020-1927
|     	MSF:ILITIES/REDHAT_LINUX-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/REDHAT_LINUX-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/ORACLE_LINUX-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/ORACLE_LINUX-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/HUAWEI-EULEROS-2_0_SP9-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/HUAWEI-EULEROS-2_0_SP9-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/FREEBSD-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/FREEBSD-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/CENTOS_LINUX-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/CENTOS_LINUX-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/APACHE-HTTPD-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/APACHE-HTTPD-CVE-2020-9490/	*EXPLOIT*
|     	MSF:ILITIES/AMAZON-LINUX-AMI-2-CVE-2020-9490/	5.0	https://vulners.com/metasploit/MSF:ILITIES/AMAZON-LINUX-AMI-2-CVE-2020-9490/	*EXPLOIT*
|     	CVE-2020-9490	5.0	https://vulners.com/cve/CVE-2020-9490
|     	CVE-2020-1934	5.0	https://vulners.com/cve/CVE-2020-1934
|     	MSF:ILITIES/REDHAT_LINUX-CVE-2020-11993/	4.3	https://vulners.com/metasploit/MSF:ILITIES/REDHAT_LINUX-CVE-2020-11993/	*EXPLOIT*
|     	MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-11993/	4.3	https://vulners.com/metasploit/MSF:ILITIES/HUAWEI-EULEROS-2_0_SP8-CVE-2020-11993/	*EXPLOIT*
|     	MSF:ILITIES/APACHE-HTTPD-CVE-2020-11993/	4.3	https://vulners.com/metasploit/MSF:ILITIES/APACHE-HTTPD-CVE-2020-11993/	*EXPLOIT*
|     	MSF:ILITIES/AMAZON-LINUX-AMI-2-CVE-2020-11993/	4.3	https://vulners.com/metasploit/MSF:ILITIES/AMAZON-LINUX-AMI-2-CVE-2020-11993/	*EXPLOIT*
|_    	CVE-2020-11993	4.3	https://vulners.com/cve/CVE-2020-11993
Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port
Aggressive OS guesses: Linux 4.15 - 5.6 (95%), Linux 5.3 - 5.4 (95%), Linux 2.6.32 (95%), Linux 5.0 - 5.3 (95%), Linux 3.1 (95%), Linux 3.2 (95%), AXIS 210A or 211 Network Camera (Linux 2.6.17) (94%), ASUS RT-N56U WAP (Linux 3.4) (93%), Linux 3.16 (93%), Linux 5.0 (93%)
No exact OS matches for host (test conditions non-ideal).
Uptime guess: 49.524 days (since Sun Apr  4 15:34:06 2021)
Network Distance: 2 hops
TCP Sequence Prediction: Difficulty=261 (Good luck!)
IP ID Sequence Generation: All zeros

TRACEROUTE (using port 80/tcp)
HOP RTT       ADDRESS
1   267.86 ms 10.10.16.1
2   134.04 ms knife.htb (10.129.137.10)

NSE: Script Post-scanning.
Initiating NSE at 04:08
Completed NSE at 04:08, 0.00s elapsed
Initiating NSE at 04:08
Completed NSE at 04:08, 0.00s elapsed
Read data files from: /usr/bin/../share/nmap
OS and Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 57.39 seconds
           Raw packets sent: 59 (4.192KB) | Rcvd: 38 (4.949KB)
