---
layout: post
title: Windows missing from grub after update, dual boot linux.
tags: [Grub, Dual Boot, Linux, Windows]
excerpt_separator: <!--more-->
---

A recent update in kali removed the boot to windows option while dual booting with windows 10 & using grub bootloader, luckily in the change notes there is a fix for this: <!--more-->

![Travel]({{ "/assets/img/grub-1-1024x461.jpg" | relative_url}})


Open "/etc/default/grub" in a editor of your choice using sudo and add the below code to the end of the other options, next line is fine.

```shell
GRUB_DISABLE_OS_PROBER=false
```

![Travel]({{ "/assets/img/grub2-768x331.png" | relative_url}})

Now rerun os-prober & update-grub then reboot.

```shell
sudo os-prober
sudo update-grub
sudo reboot -f
```

Reboot & enjoy your refreshed grub menu

![Travel]({{ "/assets/img/grub-3-1024x461.jpg" | relative_url}})

