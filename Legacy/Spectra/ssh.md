Module options (auxiliary/scanner/ssh/ssh_version):

   Name     Current Setting  Required  Description
   ----     ---------------  --------  -----------
   RHOSTS   10.10.10.229     yes       The target host(s), range CIDR identifier, or hosts
                                       file with syntax 'file:<path>'
   RPORT    22               yes       The target port (TCP)
   THREADS  1                yes       The number of concurrent threads (max one per host)
   TIMEOUT  30               yes       Timeout for the SSH probe

	[+] 10.10.10.229:22       - SSH server version: SSH-2.0-OpenSSH_8.1 ( service.version=8.1 service.vendor=OpenBSD service.family=OpenSSH service.product=OpenSSH service.cpe23=cpe:/a:openbsd:openssh:8.1 service.protocol=ssh fingerprint_db=ssh.banner )
[*] 10.10.10.229:22       - Scanned 1 of 1 hosts (100% complete)
[*] Auxiliary module execution completed
