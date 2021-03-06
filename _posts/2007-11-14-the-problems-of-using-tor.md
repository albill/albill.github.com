---
author: admin
date: '2007-11-14 19:57:59'
layout: post
slug: the-problems-of-using-tor
status: publish
title: The Problems of Using Tor
wordpress_id: '2111'
categories:
- Daily Life
---
There was an aside about the hacking of the <a href="http://www.torproject.org/">Tor</a> network or, rather, the subverting of it, in a piece in <a href="http://blog.wired.com/27bstroke6">Threat Level</a> today.

I've <a href="/2007/08/29/using-tor/">blogged</a> in <a href="/2007/09/15/it-can-be-dangerous-to-run-tor/">the past</a> about using Tor to anonymize your traffic online. For those that don't know of it, Tor allows you, through the use of a local proxy along with the Tor software, to reroute your Internet traffic into the Tor network, which is parasitic on the normal Internet. Your traffic goes into a Tor node at one end and is encrypted as it passes through the network (and is untraceable to those outside) until it exits via a final Tor node (the "exit node"). This node decrypts the information to then send it on to your intended final destination. This acts to hide your IP address to parties on the final destination site you are accessing, say for web browsing, blogging, or accessing a webmail account.

There are a variety of legitimate and illegitimate uses for Tor but I've thought it a useful technology. The Electronic Frontier Foundation (EFF), to whom I donate, is a major supporter of Tor. That said, it is prone to abuses, as anyone who has browsed the contents of some of the servers accessible within the Tor network will know. Knowing themselves to be truly anonymous, Tor can be a haven for disreputable activities along with allowing people to circumvent political restrictions on the usage of the Internet. (I had a troll post today from a <a href="http://cs-tor.bu.edu">Tor node</a> run by <a href="http://www.bu.edu/">Boston University</a> today, in fact.)

A few months ago, a Swede named "Dan Egerstad" <a href="http://blog.wired.com/27bstroke6/2007/08/embassy-e-mail-.html">posted the usernames and passwords</a> for over 1,000 accounts belonging to members of embassies all over the planet as well as a number of people. I remember reading about this and the exposure that resulted. What I didn't see was the <a href="http://www.wired.com/politics/security/news/2007/09/embassy_hacks">follow-up piece</a> on Threat Level that exposed how Egerstad did it. It turns out that he set up five exit nodes on the Tor network and, since traffic is decrypted as it comes out of the network to be sent to its final destination, he harvested all of the plain text data that was passing through his exit nodes.

The potential for this to be done has been a known problem that I've seen discussed on Tor e-mail lists and I have even discussed with a coworker or two at Mozilla. This is the first mention that I've seen of someone doing this though.

It isn't clear why Egerstad started sniffing the traffic going through his nodes (one wonders at his intentions) but the <a href="http://www.wired.com/politics/security/news/2007/09/embassy_hacks">Threat Level entry</a> on this states that, "He was surprised to discover that 95 percent of the traffic that passed through his Tor nodes was not encrypted." When looking at the traffic, he began discovering how much of it was governmental.

Today, it was <a href="http://blog.wired.com/27bstroke6/2007/11/swedish-researc.html">reported</a> that Egerstad was raiding by Swedish police and an officer from a Swedish intelligence agency.  Apparently, he pissed someone off when he leaked the account and password information to the public a few month ago (a shock, I know).

The weird thing in all of this is that Egerstad doesn't think that the embassy employees (from a variety of nations), whose e-mail, IMs, and other communications he evesdropped on, were actually knowingly using Tor. He thinks that the traffic that he was intercepting was <strong>already</strong> being intercepted by someone else and being piped through the Tor network. This wasn't revealed in any of the other pieces but was mentioned today:
<blockquote>"As Egerstad and I discussed the problem in August, we both came to the conclusion that the embassy employees were likely not using Tor nor even knew what Tor was. Instead, we suspected that the traffic he sniffed belonged to someone who had hacked the accounts and was eavesdropping on them via the Tor network. As the hacked data passed through Egerstad's Tor exit nodes, he was able to read it as well."

"So who was responsible for hacking the accounts? The likely suspect -- given that most of the accounts Egerstad uncovered belonged to embassies, foreign and defense ministry officials, legislators and human rights groups -- was a government or intelligence agency. I attempted to contact several of the account holders in August to ask them whether they used Tor or knew that their accounts had been compromised but never received a response from any of them."</blockquote>
That is an interesting wrinkle in all of this (along with Egerstad being raided by the authorities, though that isn't very surprising, really). It also makes me that much less likely to use Tor at this point unless I'm already encrypting traffic via SSL or other mechanisms to keep it from being in the clear. At least one of my acquaintances is already of the opinion that the Chinese government, along with intelligence services, is already operating many of the Tor nodes. After all, if you knew people were going to use it for hidden communication, it only makes sense to try and hope that people broadcast things in the clear.

<strong>Update</strong>: Another article on this found via <a href="http://cryptome.org/">Cryptome</a> is at <a href="http://www.smh.com.au/articles/2007/11/12/1194766589522.html">http://www.smh.com.au/articles/2007/11/12/1194766589522.html</a>.
