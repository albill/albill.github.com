---
author: admin
date: '2008-08-10 14:43:09'
layout: post
slug: enjoying-defcon-and-black-hat
status: publish
title: Enjoying Defcon and Black Hat
wordpress_id: '2368'
categories:
- Daily Life
- Mozilla
- Technology
---
<a href="http://www.flickr.com/photos/albill/2750482555/" title="defcon16badge by albill, on Flickr"><img src="http://farm4.static.flickr.com/3023/2750482555_72938ac19e_m.jpg" width="191" height="240" align="right" hspace="10" border="1" alt="defcon16badge" /></a> I have been in Las Vegas since this last Tuesday attending <a href="http://www.blackhat.com">Black Hat</a> and <a href="http://www.defcon.org">Defcon</a> security conferences. As those familiar with these events know, Black Hat is the more industry or corporate event and <a href="http://en.wikipedia.org/wiki/DEF_CON">Defcon</a> is really a hacker convention. There is massive overlap in attendee and some duplication in talks but there are quite a few people who come for Defcon that don't go to Black Hat. This may partially be because Black Hat costs over $1,000 to attend (thank you, Mozilla!) and Defcon costs a little over $100. 

You can see the <a href="https://www.defcon.org/html/defcon-16/dc-16-schedule.html">schedule</a> for Defcon at their site and a lot of talks will have their slides posted either their or in the <a href="https://forum.defcon.org/">forum</a>. We did lose one talk, schedule for today, on subway card hacking in Boston for the MBTA. The presenters received an injunction to stop them (which came after we all received CDs with the slides from all presentations) on Friday. You can read about this <a href="http://news.cnet.com/8301-1009_3-10012612-83.html">here</a> and <a href="http://www.theregister.co.uk/2008/08/09/defcon_talk_halted/">here</a>.

I've attended a bunch of talks on phishing, <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Hamiel">social network exploitation</a> (including Livejournal for my friends there...), and man in the middle attacks. I particularly enjoyed Jay Beale's <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Beale">talk</a> on his tool, <a href="http://intelguardians.com/themiddler.html">The Middler</a>, which streamlines doing man in the middle attacks. For those unfamiliar, man in the middle attacks are attacks where an attacker is between two parties intercepting communications between them without their knowledge. In a common case (which Beale's tool covers), the man in the middle can be software that is intercepting all web traffic (by pretending to be your wifi access point, for example), replacing SSL certificates for sites with its own or, more easily, just logging all of your cleartext traffic. Since a lot of sites use secure communications for logging in, it may be difficult to get someone's password but, on most sites, communication after that is in the clear. So, I might not be able to log into your Gmail or Livejournal account as you but I can read over your shoulder as you do all of your private entries or e-mail...

I also attended a couple of sessions to do with <a href="http://www.torproject.org/">Tor</a>, which is one of the anonymity tools of which I am a proponent, both in general and in various ways at Mozilla. I got to see <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Perry">Mike Perry</a> again, who works on the <a href="https://addons.mozilla.org/en-US/firefox/addon/2275">Torbutton</a> Firefox extension, and to meet <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Dingledine">Roger Dingledine</a>, who is one of the main forces behind Tor and their former project manager. I spent a bit of time talking to both of them outside of sessions and it was nice to get more of a chance to chat and to meet Roger in the flesh. 

One area that I attended talks on that I hadn't expected is on Cable Modems. Like many people, I have a cable modem at home (it's Comtastic, which means it basically sucks). Even though I spend a lot of time in tech circles, with hackers, and on blogs, I had somehow missed the fact that people have been hacking cable modems for the last six or so years (and that there was a <a href="http://www.amazon.com/Hacking-Cable-Modem-What-Companies/dp/1593271018/">book</a> published on it two years ago). I attended a <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Self">talk</a> on anonymous Internet access through cable modem hacking. This is basically using a cable modem with modified firmware to be able to do things like have anonymous net access or to control the upload and download speeds available to it. I also attended a <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Martin">talk</a> on packet sniffing cable modem networks. I knew it was theoretically possible but hadn't really investigated the idea. It turns out that everyone within a particular subnet on a cable network is basically sharing data and that while encryption is part of the standard for these communications, it is optional and weak. So, all of your cable modem data is either being transmitted to everyone else in your local subnode (which can have something like 200 other installations in homes) in the clear or it is being done with encryption that can be brute forced. The speaker, Guy Martin, used a cheap tv tuner card (with coax input) to pull data from a test cable network and to show how you could use a normal packet sniffer to look at the data. Not rocket science, by any means, but something that bears some thought if you use a cable modem at home, as I do. 

This morning, I attended a <a href="https://www.defcon.org/html/defcon-16/dc-16-speakers.html#Berghammer">talk</a> by Peter Berghammer on <a href="http://www.spectrum.ieee.org/nov07/5668">Open Source Warfare</a> (OSW), which I have been interested in for a few years. This is the application of open source techniques and information sharing by military groups, especially insurgents, over the last few years. Think of the evolution of IEDs in Iraq and how various decentralized groups pass information and technology (or techniques) to each other around the world. John Robb was the first person whose work I read much of on this and he maintains a <a href="http://globalguerrillas.typepad.com/">blog</a> that is pretty well known, as well as having a <a href="http://www.amazon.com/exec/obidos/ASIN/0471780790">book</a> out on the topic. Berghammer's talk was fairly brief but he, I, and a few others spent most of the next hour in one of the Q&A rooms discussing OSW in more detail, which I found very informative.

For more posts about Defcon in blogs, try <a href="http://blogsearch.google.com/blogsearch?q=defcon&ie=UTF-8&oe=utf-8&um=1&sa=X&oi=blogsearch_group&resnum=14&ct=title">this search</a>. You can also read the high quality <a href="http://blog.wired.com/27bstroke6/defcon/index.html">posts on Defcon</a> over at the <a href="http://blog.wired.com/27bstroke6/">Threat Level</a> blog.

I have a couple of more talks to see and then I'll be catching my plane back to Oakland. The last couple weeks of mostly travel have kind of wiped me out and I'm ready to be home until Burning Man in a few weeks.

<strong>Update:</strong> Mike Conner and I attended a last minute talk that showed how certain people with large amounts of net access could do a man in the middle attack on chosen portions of the Internet. They also happened to explain how Youtube was taken offline briefly back in February.