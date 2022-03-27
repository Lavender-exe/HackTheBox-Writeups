[[Nmap]]
[[Nikto]]

Going on http://10.10.10.223:80/ we find a default Apache2 Ubuntu page.

Wappalyzer tells us that we have:
-	Apache 2.4.29
-	Ubuntu ( But it points towards Debian)

there's a site in the [page source](https://launchpad.net/bugs/1288690) that takes us to a bugs page. There's a name attached to the ubuntu site (Robie Basak(racb)) and (Andreas Hasenack)

Scrolling down, we find some comments and a [site](https://lists.debian.org/debian-apache/2014/03/msg00023.html)

we find an email address here: robie.basak@ubuntu.com

[[nmap]] scan finished..

22/tcp open  ssh     OpenSSH 7.6p1 Ubuntu 4ubuntu0.3 (Ubuntu 

80/tcp open  http    Apache httpd 2.4.29 ((Ubuntu))
- https://www.rapid7.com/db/vulnerabilities/apache-httpd-cve-2019-0211/
- https://github.com/cfreal/exploits/blob/master/CVE-2019-0211-apache/README.md
- https://www.exploit-db.com/docs/english/44756-deserialization-vulnerability.pdf

arighty, clicking into Robie's account, we find some more stuff:
![[Pasted image 20210521062156.png]]

SSH keys:
[robie@mal](https://launchpad.net/%7Eracb/+sshkeys)
[ubuntu@gu-bionic](https://launchpad.net/%7Eracb/+sshkeys)
[robie@xps](https://launchpad.net/%7Eracb/+sshkeys)
[robie.basak@canonical.com](https://launchpad.net/%7Eracb/+sshkeys)
[robie@serverstack-dev](https://launchpad.net/%7Eracb/+sshkeys)

OpenPGP keys:

5C1951EB624DA2C7B70C9D8070CD422041D19AB2, D09A9933E053B1756F3ECDFC88ED0283C12A3B0D, D98F377EB47CC6DD257A9A07E564B9C275BDD52E

This is probably a rabbit hole..

---------------------------------------------------------------------

Let's try enumerating VHOSTs
tenet.htb

add this to /etc/hosts (sudo)

Looking around, it seems like a blog website with two blogs `This is Where our Worlds Collide` and `Migration`
It is also powered by WordPress

http://tenet.htb/index.php/2020/12/16/this-is-where-our-worlds-collide/
- Nothing interesting here
- Author proganonist

http://tenet.htb/index.php/2020/12/16/logs/
- protagonist said they're moving files over somewhere // host migration
- neil left an angry comment behind:
- `did you remove the sator php file and the backup?? the migration program is incomplete! why would you do this?!`

seems like there's a php file and a backup file
let's try a new vhost;

`sator.tenet.htb`

http://sator.tenet.htb/sator.php
- Opening this site, we get an output:
- `\[+\] Grabbing users from text file  
\[\] Database updated`

http://sator.tenet.htb/sator.php.bak
file:
```php

<?php

class DatabaseExport
{
        public $user_file = 'users.txt';
        public $data = '';

        public function update_db()
        {
                echo '[+] Grabbing users from text file <br>';
                $this-> data = 'Success';
        }


        public function __destruct()
        {
                file_put_contents(__DIR__ . '/' . $this ->user_file, $this->data);
                echo '[] Database updated <br>';
        //      echo 'Gotta get this working properly...';
        }
}

$input = $_GET['arepo'] ?? '';
$databaseupdate = unserialize($input);

$app = new DatabaseExport;
$app -> update_db();


?>
```

We can try a php deserialization attack

[[References]]
[[Boxes/Active Boxes/Tenet/Exploitation]]






