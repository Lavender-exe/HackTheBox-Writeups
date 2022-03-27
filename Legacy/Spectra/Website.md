Wappalyzer:
WordPress 5.4.2		[https://www.tenable.com/plugins/was/112479]()
								[https://github.com/N4nj0/CVE-2020-35590]()
PHP 5.6.40				[[Boxes/Active Boxes/Spectra/Exploitation]]
[MySQL](mysql)

http://10.10.10.229/
![[Pasted image 20210518183242.png]]
if we click on the first button then we get redirected to this link
http://spectra.htb/main/index.php

let's add this `spectra.htb` to `/etc/hosts` 

![[Pasted image 20210518183017.png]]
`10.10.10.229	spectra.htb`

the testing button returns an error page
There was nothing in the source files except for a redirect to the Spectra website
remove index.php since that doesnt exist and you'll get the main dir for `/testing/`
There's an interesting dir `http://spectra.htb/testing/wp-config.php.save`
Let's [[curl]] that

----------------------------Config File--------------------------------------
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev' );

/** MySQL database username */
define( 'DB_USER', 'devtest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'devteam01' );

Let's try to login with these creds
Didn't work, good thing we found `administrator` for the username
----------------------------SPECTRA WEBSITE-----------------------------

Domains:
http://spectra.htb/main/?m=202006
http://spectra.htb/main/wp-login.php
http://spectra.htb/main/?p=1#comment-1
http://spectra.htb/main/readme.html

There's a username here: administrator
		http://spectra.htb/main/?author=1

		http://spectra.htb/main/?p=1#comment-1
		I'll take this to the sqlmap and see what i can get
		
While that's running, let's try some XSS or html injections
http://spectra.htb/main/?s=%3Ch1%3Ehello%3C%2Fh1%3E
The website encodes the / key 

Let's also run a [[WPScan]] 

http://spectra.htb/main/xmlrpc.php
