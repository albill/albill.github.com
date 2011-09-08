---
author: admin
date: '2007-07-02 16:53:05'
layout: post
slug: virtualization-and-qa
status: publish
title: Virtualization and QA
wordpress_id: '1801'
categories:
- Mozilla
---

Part of the work that I'm doing in QA here right now is focusing on
virtualization technologies. This is kind of a project I've taken on in
order to help create a good environment for our day to day testing. Back
when I first began doing QA work in the mid-90's, most people involved
would have a stack of machines next to or under their desk and a switch
box. Tools would be used to wipe machines to a known good state before
putting new builds of software on them. If people were really lucky (and
moreso as time went on), they would have access to some nice tools,
which as client-server imaging software, to automate a lot of this
process of getting machines ready. One of the nice changes over the last
five years is the growing amount of virtualization technology being
used. Companies like VMware and Parallels are making good businesses at
it and there is a reason for it. At my last job, I had to test our
software on many different configurations of operating systems and
browser types in order to test that our web application was going to
work well across the board. Instead of having the bank of machines that
I used to have, I was able to do it all on a fairly beefy laptop by
using VMware for my work. Here in the QA group, we've been investigating
what we want to do with virtualization. I know that we've had some
discussion about having servers running virtual machines for the
community to log into when they have time so that people have access to
varied environments. We're not quite up to that level yet but one of the
things I've been doing is making a reference set of virtual machines
available internally (unfortunately internally because of licensing
issues with Windows) so that when a build comes out, we have stable and
clean environments to quickly test on. From there, we are working on
creating a variety of not-so-clean environments, because most people
don't run Firefox and Thunderbird in some kind of pure clean environment
(my home machine is a mess) so we need to be able to test the builds in
something more real. Our thoughts around this are being documented in an
ongoing basis [on the
wiki](http://wiki.mozilla.org/MozillaQualityAssurance:Environments). If
you have thoughts on any of this and the pros and cons of virtualization
in general, I'd love to hear about it. Please take a look at the wiki
page as well as the thoughts there are pretty preliminary also.
