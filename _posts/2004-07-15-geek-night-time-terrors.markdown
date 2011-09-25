---
author: admin
date: '2004-07-15 23:36:08'
layout: post
slug: geek-night-time-terrors
status: publish
title: Geek Night Time Terrors
wordpress_id: '179'
categories:
- Technology
---
<p>The strangest things occur to you when you're falling asleep. This is a 
thought series that I had last night as I waited to drop off.</p>
<p>I started to think about using encrypted NNTP servers as a mechanism for 
non-email-list-based secure communications (and a storage and conversation 
mechanism that didn't use a web server). I then thought about ways to encrypt 
the session by having a tool similar to <a href="http://jaybe.org/info.htm">
PGtGM</a> that acts as a local NNTP gateway for your news client. You speak to 
it via localhost and it has an encrypted backchannel to the server. The question 
that came immediately to mind is whether using some kind of public key crypto at 
both ends would be good for this as well, rather than something weak like SSL.</p>
<p>In the light of day, after I woke up the next, the immediate question did 
arise of &quot;Why not build a webserver and use SSL but that seemed to have its own 
special issues and problems. The advantage of NNTP servers and the like is that 
NNTP is a relatively simple protocol and there are numerous different sorts of 
backends for it. For a web-based solution, you'd have to use some off the shelf 
discussion board and file hosting system and then hope no one cracked your 
server or SSL in general. Then you'd have to get a certificate for SSL.</p>
<p>Of course, I did wonder if this sort of thing would be a good modified
<a href="http://freenet.sourceforge.net/">Freenet</a> application. Could you 
host some kind of store and forward messaging system with Freenet? This led to 
thoughts, probably prompted by my recent looking at
<a href="http://bitconjurer.org/BitTorrent/">Bittorrent</a>, about whether there 
is a way to do the whole backend as some kind of distributed store, which is 
what Freenet is really for. Rather than having one NNTP server backend, have 
some kind of data store with your newsgroup/discussion/comment system and 
whatever files you are wanting to store. You would want some kind of access 
controls and level of administration though.</p>
<p>What prompted this kind of thinking? I'm involved in fairly heretical, by 
many standards, spiritual groups. Sure, this is America in the 21st century and 
no one gives a shit really but 100 years ago I might have been hounded out of 
job and home in places for what I believe, say, practice and teach. Similarly, 
some of the other groups that I've been involved with in relation to Burning Man 
and other activities aren't always socially on the up and up. Having some kind 
of private discussion and file sharing mechanism that is off of the public radar 
on some kind of
<a href="http://www.google.com/search?num=30&hl=en&lr=&ie=UTF-8&safe=off&c2coff=1&q=Darknet&btnG=Search">
Darknet</a> with the nodes composed only of your krewe and friends seems to be a 
dandy mechanism for things.</p>
<p>Of course, I don't have the coding ability, right now, to write this sort of 
thing off-hand but if I can PM it, I can probably pick it up otherwise. I 
suppose I can have my geek card back for a little while if this is the way my 
thoughts run when I'm not pondering the nature of Samsara or summoning
<a href="http://www.ummo.cc/webpage300.html">Goetic demons</a>.</p>
