---
author: admin
date: '2007-10-25 14:27:28'
layout: post
slug: vmware-fusion-talk-at-google
status: publish
title: VMware Fusion Talk at Google
wordpress_id: '2025'
categories:
- Mozilla
- Technology
---
I saw a <a href="http://infusion.vox.com/library/post/google-tech-talk-inside-vmware-fusion.html">notice last night</a> about a talk that <a href="http://infusion.vox.com/">Ben Gertzfield</a> gave at Google the other day as a <a href="http://www.youtube.com/user/googletechtalks">tech talk</a>. Ben works for <a href="http://www.vmware.com">VMware</a> and did a lot of work on VMware Fusion. Fusion is the Mac-based virtualization product that VMware released the 1.0 version of a few months ago.

I've written about virtualization a bit during the last few months because we use virtual machines quite a bit for our testing at MoCo. The advantages are the ability to run multiple operating systems, as needed, on the same machine and also the ability to save state or start from a known good state. This gives QA the flexibility to quickly test on multiple operating systems.

<a href="http://www.vmware.com/products/fusion/">VMware Fusion</a> is the software that we generally use for this because most of us in QA have Mac machines for our primary boxes. The others running Linux or Windows can use VMware Workstation and still share virtual machines with us because VMware uses a common format (for the most part...) between products. The one unsolved issue, something that is causing pain now that Leopard is coming out, is that there is still no way to create virtual machines for Mac OS X. This makes the testing of Mac products a little rougher (and is part of why many of us choose to have a Mac as our primary work machines).

Ben speaks in his talk a bit about the capabilities of Fusion and a lot about the internals of how it functions on the Mac. He also demonstrates things a bit and speaks a little about the future. There is also a bit of Q&amp;A at the end. I found it to be pretty interesting, even if it fairly long.

The talk is up on <a href="http://www.youtube.com/watch?v=QJPq_8ULpRg">YouTube</a> for viewing for those interested in watching it.
