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
As a follow-up to my previous posting about next generation messaging clients (e-mail, IM, etc.), I wanted to mention the work that <a href="http://anders.conbere.org">Anders Conbere</a> has been doing. This does not directly relate to the messaging ideas that I discussed but Anders is obviously working in a related kind of space for python-based web applications. This kind of work is necessary to move to a more open social web.

Anders announced that the first version of his <a href="http://anders.conbere.org/journal/post/first-version-xmpp-psn-available/">XMPP-PSN</a> is available now. He states:
<blockquote>You can find out more about the basics of the project <a href="http://anders.conbere.org/journal/post/portable-social-networks-xmpp/">here</a>, but basically it's an http layer on top of a common python XMPP library that lets you do most of the roster management available through XMPP by way of a simple restful api.The workflow for using it is simple, just install the app into an existing django project, and that will expose the api. From there you can post your jid and password to the /login/ url which returns a uuid and a roster in JSON format for your web app to digest. (note: this is horrible security practice, don't do this in the wild) Now that you have a uuid you have access to the rest of the api, which links to a thread on the sever that keep track of your jabber session.
<ul></ul>
</blockquote>
As people may or may not recall, <a href="http://www.xmpp.org/">XMPP</a> is the Extensible Messaging and Presence Protocol and is largely used by IM clients using <a href="http://www.jabber.org/">Jabber</a>. It is an open standard and is not under the control of Yahoo, Microsoft, or any of the big corporate players.

There are a number of different add-ons that allow Firefox  to communicate using Jabber, such as:
<ul>
	<li><a href="https://addons.mozilla.org/en-US/firefox/addon/3632">xmpp4moz</a> - This is used as the basis for:
<ul>
	<li><a href="https://addons.mozilla.org/en-US/firefox/addon/4397">JabBar</a></li>
	<li><a href="https://addons.mozilla.org/en-US/firefox/addon/3633">SamePlace</a> (<a href="http://sameplace.cc/">home site</a>) - <em>SamePlace also works with Thunderbird, I am told, but I haven't run it because it doesn't work with Firefox trunk builds. I run trunk as my main browser so it leaves me out...</em></li>
</ul>
</li>
	<li><a href="http://me.dium.com/jabber/">Me.dium</a></li>
	<li><a href="http://oneteam.im/">OneTeam</a></li>
</ul>
These last two are part of non-open source services run by companies but the fact that people are doing so may be indicative that something is out there.  Unfortunately, running a bunch of separate clients for many different services is not something that I am interested in doing. That's why I run <a href="http://www.adiumx.com/">Adium</a> on my Mac and encourage people to run it or <a href="http://www.pidgin.im/">Pidgin</a> in order to help manage the chaos.

At least <a href="https://stpeter.im/?p=2005">one person</a> has also seen that XMPP has some potential to act as the glue to add messaging to Thunderbird as well. (Peter is the <span>Executive Director of the XMPP Foundation.)</span> I'm not sure if adding messaging to Thunderbird (or Firefox) as applications is really the right direction to solve problems but it couldn't hurt to have the capabilities there.

As I <a href="http://www.arcanology.com/2007/09/04/messaging-clients-in-the-post-web-20-world/">mentioned before</a>, I think that we need to have a new messaging center application that combines contact lists/friend lists, messaging as both IM and e-mail, and add new areas such as direct file sharing and point to point (or peer to peer, if you prefer) e-mail as well. I think that XMPP support built into the Mozilla platform at a core level would be a step in the right direction towards this overall goal in messaging. It would help make it a first class citizen amongst protocols and encourage other Mozilla applications (not just Firefox or Thunderbird) to support it.

Again, I'm interested in the thoughts that people have on this topic though I probably don't need to be told again that "no one uses e-mail except for work" as I don't actually think that is true. There is definitely a huge divide in how people message but I think that underscores the reasons to have a central application that handles all of these uses all the more.
