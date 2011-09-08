---
author: admin
date: '2007-09-17 16:22:40'
layout: post
slug: jabber-support-in-the-mozilla-platform
status: publish
title: Jabber support in the Mozilla Platform
wordpress_id: '1826'
categories:
- Mozilla
- Technology
---

As a follow-up to my previous posting about next generation messaging
clients (e-mail, IM, etc.), I wanted to mention the work that [Anders
Conbere](http://anders.conbere.org) has been doing. This does not
directly relate to the messaging ideas that I discussed but Anders is
obviously working in a related kind of space for python-based web
applications. This kind of work is necessary to move to a more open
social web. Anders announced that the first version of his
[XMPP-PSN](http://anders.conbere.org/journal/post/first-version-xmpp-psn-available/)
is available now. He states:

> You can find out more about the basics of the project
> [here](http://anders.conbere.org/journal/post/portable-social-networks-xmpp/),
> but basically it's an http layer on top of a common python XMPP
> library that lets you do most of the roster management available
> through XMPP by way of a simple restful api.The workflow for using it
> is simple, just install the app into an existing django project, and
> that will expose the api. From there you can post your jid and
> password to the /login/ url which returns a uuid and a roster in JSON
> format for your web app to digest. (note: this is horrible security
> practice, don't do this in the wild) Now that you have a uuid you have
> access to the rest of the api, which links to a thread on the sever
> that keep track of your jabber session.
>
As people may or may not recall, [XMPP](http://www.xmpp.org/) is the
Extensible Messaging and Presence Protocol and is largely used by IM
clients using [Jabber](http://www.jabber.org/). It is an open standard
and is not under the control of Yahoo, Microsoft, or any of the big
corporate players. There are a number of different add-ons that allow
Firefox to communicate using Jabber, such as:

-   [xmpp4moz](https://addons.mozilla.org/en-US/firefox/addon/3632) -
    This is used as the basis for:
    -   [JabBar](https://addons.mozilla.org/en-US/firefox/addon/4397)
    -   [SamePlace](https://addons.mozilla.org/en-US/firefox/addon/3633)
        ([home site](http://sameplace.cc/)) - *SamePlace also works with
        Thunderbird, I am told, but I haven't run it because it doesn't
        work with Firefox trunk builds. I run trunk as my main browser
        so it leaves me out...*

-   [Me.dium](http://me.dium.com/jabber/)
-   [OneTeam](http://oneteam.im/)

These last two are part of non-open source services run by companies but
the fact that people are doing so may be indicative that something is
out there. Unfortunately, running a bunch of separate clients for many
different services is not something that I am interested in doing.
That's why I run [Adium](http://www.adiumx.com/) on my Mac and encourage
people to run it or [Pidgin](http://www.pidgin.im/) in order to help
manage the chaos. At least [one person](https://stpeter.im/?p=2005) has
also seen that XMPP has some potential to act as the glue to add
messaging to Thunderbird as well. (Peter is the Executive Director of
the XMPP Foundation.) I'm not sure if adding messaging to Thunderbird
(or Firefox) as applications is really the right direction to solve
problems but it couldn't hurt to have the capabilities there. As I
[mentioned
before](http://www.arcanology.com/2007/09/04/messaging-clients-in-the-post-web-20-world/),
I think that we need to have a new messaging center application that
combines contact lists/friend lists, messaging as both IM and e-mail,
and add new areas such as direct file sharing and point to point (or
peer to peer, if you prefer) e-mail as well. I think that XMPP support
built into the Mozilla platform at a core level would be a step in the
right direction towards this overall goal in messaging. It would help
make it a first class citizen amongst protocols and encourage other
Mozilla applications (not just Firefox or Thunderbird) to support it.
Again, I'm interested in the thoughts that people have on this topic
though I probably don't need to be told again that "no one uses e-mail
except for work" as I don't actually think that is true. There is
definitely a huge divide in how people message but I think that
underscores the reasons to have a central application that handles all
of these uses all the more.
