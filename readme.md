

![](https://paprika-dev.b0.upaiyun.com/To6gaz3l2SwL82jyKBdZtWxOhqcSRZy5i64LIlLM.jpeg)

.valet 安装在 /var/root/.valet 目录下的解决方法:

```bash
1. Stop and uninstall services
sudo brew services stop php71 dnsmasq nginx
brew uninstall php71 dnsmasq nginx
2. Remove related config files and valet home folder
sudo rm -r /usr/local/etc/php /usr/local/etc/nginx /usr/local/etc/dnsmasq.conf
sudo rm -r ~/.valet /var/root/.valet
3. Install services
brew install php71 dnsmasq nginx
4. Hardcode your home path into valet source
   Modify 2 files: helpers.php and DnsMasq.php. Change $_SERVER['HOME'] to '/Users/user'
5. Install valet and don't forget to park
6. valet install
```

<img src="https://paprika-dev.b0.upaiyun.com/8UWjFzpaNX9LeXVLMT9lxCzFuLvrTlKLtcWpR9Ds.jpeg" width="500"/>


<img src="https://paprika-dev.b0.upaiyun.com/4mTllxinJcGybK1BrPsmyE3r6EnSdk3893GezuhM.jpeg" width="500"/>