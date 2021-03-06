---
author: admin
date: '2007-07-08 21:53:59'
layout: post
slug: more-virtualization
status: publish
title: More Virtualization
wordpress_id: '1802'
categories:
- Mozilla
---
I did manage to get all but one of our virtual machines finished for MoCo QA in the last week and up to where local QA can get them. Right now, we are using both Parallels and VMWare but sooner or later we'll have to standardize on one or the other.

Parallels has gotten a lot of good press lately and most of us are working on Apple hardware so it has been enticing to us. Since VMware Fusion is still in beta, we have not necessarily wanted to bet the farm on it. That being said, as most people in the community know if it is something they watch, we do use VMware on a lot of our servers. It would make sense for us to standardize on a VMware-based solution across the board.

If anyone has any thoughts on the pros and cons around that, I would like to hear them.

As I mentioned in my last post, we're currently working on putting together profiles for test environments. There is a <a href="http://wiki.mozilla.org/MozillaQualityAssurance:Environments">wiki page</a> up about this effort. I'll be importing a lot of this profile data into virtual machines that I've created, using the clean ones as a base. This will allow us to do quick QA on builds in environments that are a lot closer to what Firefox users actually have. Future plans beyond this are pretty open at this point.

One gaping hole in our virtualization strategy is what to do about OS X. Currently, none of the virtualization solutions allow you to work with OS X and Apple is pretty hostile to the whole idea. This makes things occasionally difficult as we sometimes have to either hunt down an appropriate Mac or run test builds on our work machines and hope something <strong>really</strong> bad doesn't happen. There is no way to abstract things out. As it is, I'm probably safer testing on Windows XP inside of a Parallels instance if I hit a really bad build because I can always restore back to a snapshot from before the installation. I do wish that there was a supported (heck, unsupported even) virtualization solution for Macs.
