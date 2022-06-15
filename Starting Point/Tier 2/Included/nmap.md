
Starting Nmap 7.92 ( https://nmap.org ) at 2021-11-09 01:52 EST
NSE: Loaded 155 scripts for scanning.
NSE: Script Pre-scanning.
Initiating NSE at 01:52
Completed NSE at 01:52, 0.00s elapsed
Initiating NSE at 01:52
Completed NSE at 01:52, 0.00s elapsed
Initiating NSE at 01:52
Completed NSE at 01:52, 0.00s elapsed
Initiating Ping Scan at 01:52
Scanning 10.129.188.32 [2 ports]
Completed Ping Scan at 01:52, 0.16s elapsed (1 total hosts)
Initiating Parallel DNS resolution of 1 host. at 01:52
Completed Parallel DNS resolution of 1 host. at 01:52, 0.02s elapsed
Initiating Connect Scan at 01:52
Scanning 10.129.188.32 [65535 ports]
Discovered open port 80/tcp on 10.129.188.32
Increasing send delay for 10.129.188.32 from 0 to 5 due to max_successful_tryno increase to 4
Increasing send delay for 10.129.188.32 from 5 to 10 due to 11 out of 14 dropped probes since last increase.
Connect Scan Timing: About 2.60% done; ETC: 02:12 (0:19:20 remaining)
Connect Scan Timing: About 6.40% done; ETC: 02:08 (0:14:52 remaining)
Connect Scan Timing: About 9.77% done; ETC: 02:08 (0:14:00 remaining)
Connect Scan Timing: About 17.37% done; ETC: 02:08 (0:13:10 remaining)
Connect Scan Timing: About 22.67% done; ETC: 02:08 (0:12:20 remaining)
Increasing send delay for 10.129.188.32 from 10 to 20 due to max_successful_tryno increase to 5
Increasing send delay for 10.129.188.32 from 20 to 40 due to 11 out of 13 dropped probes since last increase.
Connect Scan Timing: About 23.56% done; ETC: 02:10 (0:13:22 remaining)
Connect Scan Timing: About 25.02% done; ETC: 02:11 (0:14:17 remaining)
Connect Scan Timing: About 26.91% done; ETC: 02:13 (0:15:15 remaining)
Connect Scan Timing: About 29.51% done; ETC: 02:15 (0:16:24 remaining)
Connect Scan Timing: About 34.41% done; ETC: 02:19 (0:17:34 remaining)
Increasing send delay for 10.129.188.32 from 40 to 80 due to max_successful_tryno increase to 6
Increasing send delay for 10.129.188.32 from 80 to 160 due to max_successful_tryno increase to 7
Connect Scan Timing: About 36.24% done; ETC: 02:22 (0:18:57 remaining)
Connect Scan Timing: About 36.87% done; ETC: 02:25 (0:20:29 remaining)
Connect Scan Timing: About 37.59% done; ETC: 02:28 (0:22:07 remaining)
Connect Scan Timing: About 38.46% done; ETC: 02:31 (0:23:57 remaining)
Connect Scan Timing: About 39.50% done; ETC: 02:35 (0:25:55 remaining)
Connect Scan Timing: About 40.88% done; ETC: 02:40 (0:28:05 remaining)
Connect Scan Timing: About 42.55% done; ETC: 02:45 (0:30:28 remaining)
Connect Scan Timing: About 44.91% done; ETC: 02:52 (0:33:08 remaining)
Connect Scan Timing: About 48.32% done; ETC: 03:02 (0:36:10 remaining)
Starting Nmap 7.92 ( https://nmap.org ) at 2021-11-09 02:30 EST
NSE: Loaded 155 scripts for scanning.
NSE: Script Pre-scanning.
Initiating NSE at 02:30
Completed NSE at 02:30, 0.00s elapsed
Initiating NSE at 02:30
Completed NSE at 02:30, 0.00s elapsed
Initiating NSE at 02:30
Completed NSE at 02:30, 0.00s elapsed
Initiating Ping Scan at 02:30
Scanning 10.129.188.32 [2 ports]
Completed Ping Scan at 02:30, 0.17s elapsed (1 total hosts)
Initiating Parallel DNS resolution of 1 host. at 02:30
Completed Parallel DNS resolution of 1 host. at 02:30, 0.02s elapsed
Initiating Connect Scan at 02:30
Scanning 10.129.188.32 [1000 ports]
Discovered open port 80/tcp on 10.129.188.32
Increasing send delay for 10.129.188.32 from 0 to 5 due to max_successful_tryno increase to 5
Completed Connect Scan at 02:31, 23.77s elapsed (1000 total ports)
Initiating Service scan at 02:31
Scanning 1 service on 10.129.188.32
Completed Service scan at 02:31, 6.36s elapsed (1 service on 1 host)
NSE: Script scanning 10.129.188.32.
Initiating NSE at 02:31
Completed NSE at 02:31, 3.53s elapsed
Initiating NSE at 02:31
Completed NSE at 02:31, 0.73s elapsed
Initiating NSE at 02:31
Completed NSE at 02:31, 0.00s elapsed
Nmap scan report for 10.129.188.32
Host is up (0.17s latency).
Not shown: 998 closed tcp ports (conn-refused)
PORT     STATE    SERVICE   VERSION
80/tcp   open     http      Apache httpd 2.4.29 ((Ubuntu))
|_http-server-header: Apache/2.4.29 (Ubuntu)
| http-title: Site doesn't have a title (text/html; charset=UTF-8).
|_Requested resource was http://10.129.188.32/?file=home.php
| http-methods: 
|_  Supported Methods: GET HEAD POST OPTIONS
5051/tcp filtered ida-agent

NSE: Script Post-scanning.
Initiating NSE at 02:31
Completed NSE at 02:31, 0.00s elapsed
Initiating NSE at 02:31
Completed NSE at 02:31, 0.00s elapsed
Initiating NSE at 02:31
Completed NSE at 02:31, 0.00s elapsed
Read data files from: /usr/bin/../share/nmap
Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 35.13 seconds
Starting Nmap 7.92 ( https://nmap.org ) at 2021-11-09 02:32 EST
NSE: Loaded 155 scripts for scanning.
NSE: Script Pre-scanning.
Initiating NSE at 02:32
Completed NSE at 02:32, 0.00s elapsed
Initiating NSE at 02:32
Completed NSE at 02:32, 0.00s elapsed
Initiating NSE at 02:32
Completed NSE at 02:32, 0.00s elapsed
Initiating Ping Scan at 02:32
Scanning 10.129.188.32 [4 ports]
Completed Ping Scan at 02:32, 0.22s elapsed (1 total hosts)
Initiating Parallel DNS resolution of 1 host. at 02:32
Completed Parallel DNS resolution of 1 host. at 02:32, 0.04s elapsed
Initiating UDP Scan at 02:32
Scanning 10.129.188.32 [1000 ports]
Increasing send delay for 10.129.188.32 from 0 to 50 due to max_successful_tryno increase to 5
Increasing send delay for 10.129.188.32 from 50 to 100 due to 11 out of 12 dropped probes since last increase.
Increasing send delay for 10.129.188.32 from 100 to 200 due to max_successful_tryno increase to 6
Warning: 10.129.188.32 giving up on port because retransmission cap hit (6).
Increasing send delay for 10.129.188.32 from 200 to 400 due to 11 out of 11 dropped probes since last increase.
UDP Scan Timing: About 6.36% done; ETC: 02:40 (0:07:37 remaining)
Increasing send delay for 10.129.188.32 from 400 to 800 due to 11 out of 11 dropped probes since last increase.
UDP Scan Timing: About 9.63% done; ETC: 02:42 (0:09:33 remaining)
UDP Scan Timing: About 12.70% done; ETC: 02:44 (0:10:26 remaining)
UDP Scan Timing: About 16.17% done; ETC: 02:45 (0:11:14 remaining)
UDP Scan Timing: About 17.49% done; ETC: 02:47 (0:12:35 remaining)
UDP Scan Timing: About 21.93% done; ETC: 02:47 (0:11:48 remaining)
UDP Scan Timing: About 28.81% done; ETC: 02:47 (0:11:02 remaining)
UDP Scan Timing: About 34.64% done; ETC: 02:47 (0:10:13 remaining)
UDP Scan Timing: About 40.17% done; ETC: 02:47 (0:09:24 remaining)
UDP Scan Timing: About 45.84% done; ETC: 02:48 (0:08:35 remaining)
UDP Scan Timing: About 51.27% done; ETC: 02:48 (0:07:46 remaining)
UDP Scan Timing: About 56.59% done; ETC: 02:48 (0:06:55 remaining)
UDP Scan Timing: About 61.96% done; ETC: 02:48 (0:06:05 remaining)
UDP Scan Timing: About 67.09% done; ETC: 02:48 (0:05:17 remaining)
UDP Scan Timing: About 72.30% done; ETC: 02:48 (0:04:27 remaining)
UDP Scan Timing: About 77.30% done; ETC: 02:48 (0:03:39 remaining)
Stats: 0:12:30 elapsed; 0 hosts completed (1 up), 1 undergoing UDP Scan
UDP Scan Timing: About 77.71% done; ETC: 02:48 (0:03:35 remaining)
UDP Scan Timing: About 82.76% done; ETC: 02:48 (0:02:47 remaining)
UDP Scan Timing: About 88.07% done; ETC: 02:48 (0:01:55 remaining)
UDP Scan Timing: About 93.37% done; ETC: 02:48 (0:01:04 remaining)
Completed UDP Scan at 02:49, 1013.76s elapsed (1000 total ports)
Initiating Service scan at 02:49
Scanning 15 services on 10.129.188.32
Service scan Timing: About 6.67% done; ETC: 03:04 (0:14:14 remaining)
Starting Nmap 7.92 ( https://nmap.org ) at 2021-11-09 02:52 EST
NSE: Loaded 155 scripts for scanning.
NSE: Script Pre-scanning.
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Initiating Ping Scan at 02:52
Scanning 10.129.188.32 [4 ports]
Completed Ping Scan at 02:52, 0.21s elapsed (1 total hosts)
Initiating Parallel DNS resolution of 1 host. at 02:52
Completed Parallel DNS resolution of 1 host. at 02:52, 0.02s elapsed
Initiating SYN Stealth Scan at 02:52
Scanning 10.129.188.32 [1000 ports]
Discovered open port 80/tcp on 10.129.188.32
Completed SYN Stealth Scan at 02:52, 2.27s elapsed (1000 total ports)
Initiating Service scan at 02:52
Scanning 1 service on 10.129.188.32
Completed Service scan at 02:52, 6.46s elapsed (1 service on 1 host)
NSE: Script scanning 10.129.188.32.
Initiating NSE at 02:52
Completed NSE at 02:52, 3.79s elapsed
Initiating NSE at 02:52
Completed NSE at 02:52, 0.77s elapsed
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Nmap scan report for 10.129.188.32
Host is up (0.24s latency).
Not shown: 999 closed tcp ports (reset)
PORT   STATE SERVICE VERSION
80/tcp open  http    Apache httpd 2.4.29 ((Ubuntu))
| http-methods: 
|_  Supported Methods: GET HEAD POST OPTIONS
|_http-server-header: Apache/2.4.29 (Ubuntu)
| http-title: Site doesn't have a title (text/html; charset=UTF-8).
|_Requested resource was http://10.129.188.32/?file=home.php

NSE: Script Post-scanning.
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Initiating NSE at 02:52
Completed NSE at 02:52, 0.00s elapsed
Read data files from: /usr/bin/../share/nmap
Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 14.17 seconds
           Raw packets sent: 1122 (49.344KB) | Rcvd: 2194 (245.943KB)
