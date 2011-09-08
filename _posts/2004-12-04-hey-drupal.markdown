---
author: admin
date: '2004-12-04 23:52:42'
layout: post
slug: hey-drupal
status: publish
title: Hey Drupal, !?$@!$#
wordpress_id: '309'
categories:
- Technology
---

Jesus Fucking Christ, could [Drupal](http://www.drupal.org) be MORE of a
pain in the ass to upgrade?

I decided to upgrade a drupal site to version 4.5.1 last night around
11:30 PM after getting my ass handed to me one time too many in Half
Life 2: Deathmatch. I figured that I'd do something more constructive. I
have a private site that I run for a bunch of the Buddhist tantric and
dzogchen practitioners that I hang out with. Our own little home.

I went to bed at 3:45 AM still with issues... <sigh\>

Really, the upgrade itself went relatively smoothly. It's all of the
optional modules that screwed the pooch. I have the **IMAGE** and
**FileStore2** modules installed. When I upgraded, the links to all of
my images and uploaded documents were still there but the system
couldn't find the files because the upgrade wiped out the code for the
modules. I uploaded new versions of them but, of course, there are
changes. Fast forward to me telneted into a unix box with a command line
connection open to a mysql server hand typing in freakin' SQL commands.
It turns out that the upgraded forms of the modules changed their
tables.

End result, **IMAGE** works now though I had to re-upload all of my
original images. The **FileStore2** module is still busted. It says,
when I upload a file, that it works and trying to download the new file
pretends to work but the contents of the file are an "access denied"
error message. After spending time chmod'ing things, I'm pretty
convinced now that my mysql table from the old version is fux0red and I
should delete it and try starting from scratch.

What a seamless fucking open source joy this was. I basically spent over
four hours (with probably four more to come) dealing with this. That'll
teach me to dare upgrade!!
