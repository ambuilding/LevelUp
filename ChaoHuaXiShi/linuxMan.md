## Linux Command Line

Control-L/Command-K: keep the terminal neat.

$ rm -rf //recursively&forcibly. $ rmdir dir

$ mv WATER.c water.c // change the file’s name. $ mv src/Person.php src/Users/Person.php

$ cd <directory> //input the first letters of dir hit tab. $ cd -  //the prior one and the current dir
$ pwd // print working directory. $ mkdir -p foo/bar/baz

$ touch folder/file. $ touch foo/{a,b,c,d,e}. $ touch a b c

$ man ls // help. $ grep //search. $ diff foo bar
$ cat composer.json  $ tree  $ echo {} > composer.json

$ ls -l > foo  $ wc -l < foo  $ wc -l foo  $ ls -l | wc -l

$ cp php.php php01.php $ cp -r // recursive copy entire directories



$ curl -I www.google.com
$ curl http://… | python -mjson.tool
$ alias prettify=“python -mjson.tool"



Apache:
Apachectl: $ apachectl restart
Php.ini: /usr/local/php5/lib/php.ini

Hosts: $ sudo vi /etc/hosts

$ cd /etc/apache2/
$ vi httpd.conf
/Library/WebServer/Documents

IP address: $ ifconfig


$ sudo su -   then: log out   exit

$ apachectl start/ stop/ restart

Apache: $ httpd -v

Server version: Apache/2.4.23 (Unix)
Server built:   Aug  8 2016 18:10:4

httpd.con
Apache.conf
Apache2.conf

Apache  Alias

X-Powered-By:

Apache/
Security
Service httpd restart


$ telnet www.google.com 80
GET / HTTP/1.1
$ telnet harvard.edu 80
GET / HTTP/2.0
Host: harvard.edu
$ telnet localhost 80

17381:
$ traceroute www.berkeley.edu  $ traceroute -q 1 www.mit.edu
$ nslookup www.facebook.com $ nslookup harvard.edu

$curl “https://www.google.com/search?q=mice”
$ curl -I http://31.13.95.36/
HTTP/1.1 301 Moved Permanently
Location: https://31.13.95.36/
Content-Type: text/html; charset=UTF-8
X-FB-Debug: A0gRmJOHBttt+QSlinh8hbbOWJqGGhqCwhhxbWbVbvE4Z17BXEAePunKvH3YVfS4Kv51C+9Z7HXtLDRpNlxfsg==
Date: Mon, 18 Sep 2017 05:55:28 GMT
Connection: keep-alive
Content-Length: 0

$ curl -I https://www.facebook.com/
HTTP/1.1 200 OK
X-XSS-Protection: 0
public-key-pins-report-only: max-age=500; pin-sha256="WoiWRyIOVNa9ihaBciRSC7XHjliYS9VwUGOIud4PB18="; pin-sha256="r/mIkG3eEpVdm+u/ko/cwxzOMo1bk4TyHIlByibiA5E="; pin-sha256="q4PO2G2cbkZhZ82+JgmRUyGMoAeozA+BSXVXQWB8XWQ="; report-uri="http://reports.fb.com/hpkp/"
Pragma: no-cache
Cache-Control: private, no-cache, no-store, must-revalidate
X-Frame-Options: DENY
Strict-Transport-Security: max-age=15552000; preload
X-Content-Type-Options: nosniff
Expires: Sat, 01 Jan 2000 00:00:00 GMT
Set-Cookie: fr=06pUwL0j0kDbE94zb..BZv2Eh.EW.AAA.0.0.BZv2Eh.AWXuQFag; expires=Sun, 17-Dec-2017 06:01:05 GMT; Max-Age=7776000; path=/; domain=.facebook.com; secure; httponly
Set-Cookie: sb=IWG_WaT4rafhdTFrPpXO3Oia; expires=Wed, 18-Sep-2019 06:01:05 GMT; Max-Age=63072000; path=/; domain=.facebook.com; secure; httponly
Vary: Accept-Encoding
Content-Type: text/html; charset=UTF-8
X-FB-Debug: YWqeyl4ojCymgq+PjZs2bZ2SYW5VF6LLUlrHhYRWm2Vgl0WKOHykRyZe38/xBLShvcoMkkT/Zt/dDdscQrHzdA==
Date: Mon, 18 Sep 2017 06:01:05 GMT
Connection: keep-alive

