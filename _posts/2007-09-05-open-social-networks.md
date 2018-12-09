---
author: admin
date: '2007-09-05 18:13:36'
layout: post
slug: open-social-networks
status: publish
title: Open Social Networks
wordpress_id: '1814'
categories:
- Mozilla
- Technology
---
As something related to my post yesterday,<strong> </strong><a href="/2007/09/04/messaging-clients-in-the-post-web-20-world/">Messaging Clients in a Post-Web 2.0 World</a>, this post by Cedric called "<a href="http://www.allpeers.com/blog/2007/09/05/top-15-features-for-an-open-social-network/">Top 15 Features of an Open Social Network</a>" is spot on.

Cedric calls out his list of the required features of an open social network. He cites an interest in this space as part of why AllPeers was started.

I'm going to reproduce them because it is relatively short. They are:
<ol>
	<li>Store all my contacts from all the social services I use (including IM contacts) on my computer and make that consolidated contacts list appear instantly whenever I need it.</li>
	<li>Let me access that contacts list from any computer.</li>
	<li>Let me broadcast my presence status across all my services at once.</li>
	<li>Run inside my browser (I don’t want another icon in my system tray).</li>
	<li>Give me ONE way to send a message to a friend or a group of friends and work out the most efficient way internally. I don’t care what route it takes, I just want my friend(s) to receive the message.</li>
	<li>Use a peer-to-peer network to allow me to attach a 500MB video or a folder with 100 files to a message without any size or format restrictions.</li>
	<li>Let me manage multiple facets of my profile and more importantly let me decide who can see which facet or subset of a facet.</li>
	<li>Let me retain all the rights to my data. It’s mine, not yours!</li>
	<li>Let me create dynamic groups of people and allow me to put the same person in multiple groups for maximum flexibility.</li>
	<li>Let me decide who I want to receive information from.</li>
	<li>When I join a new service, use my existing profile and alert me if people I know are already members or when they join that service.</li>
	<li>Let me create private sharing communities on-the-fly for friends to join.</li>
	<li>Allow me to add new functionality using some form of add-ons/extensions mechanism.</li>
	<li>Let me “do things” while offline and automatically push the data to my social graph when I come online.</li>
	<li>Make the communications between my friends and me completely secure and private.</li>
</ol>
Some of these seem pretty familiar to me from my comments yesterday, such as 1, 5, 6, and 15. Quite a few of the others are implicit in my own thinking though I didn't explicitly mention them, such as 8 and 12. Cedric has obviously thought some of this out more than I have in some areas.

What is the different between an open social network with a client and the All-Singing, All-Dancing messaging client that I discussed? Perhaps very little when it comes down to it. A large part of what is necessary to have the client that I mentioned is some kind of persistent identity store and to have this identity available anywhere. You have to be able to represent who you are as a user and make data about yourself available. You also have to have control over how this data is available to others, whether users or applications. Conversely, other people that you know (whether you want to call them "Friends" or use some other nomenclature) need to be able to offer their data to you and others in a controlled manner.

One of the things I dislike about services like Facebook (even though I have an account) is that they are walled gardens. Facebook, Myspace, Livejournal, and others all have identities that are restricted to their own spaces. These identities contain information and manage relationships to others but only within that service. Part of these relationships is the ability to access the data that others make available and to offer data to them as well. This includes messaging, which is both e-mail and IM-like, depending on the service. Some services, such as Livejournal, also offer their own actual <a href="http://www.livejournal.com/chat/">chat</a> and <a href="http://www.livejournal.com/chat/download/">VOIP</a> services but only easily to other users within the same walled garden, at least if you want to use that identity and communicate with users from that service.

This can be a problem in many ways but the two most immediate are:
<ol>
	<li>What happens if you lose access to your account on the system?</li>
	<li>All of the data resides "out there" on these systems and not locally or at least not at a location of your choosing.</li>
</ol>
These two problems are related in a way. I've seen people lose access to their Livejournal accounts (I've been a user since 2001) because of really stupid reasons, on their part or on the part of volunteers who police LJ. Some of these users are people who have been using the service for years and they lose access to all data associated with their account. That means all of the posts they've made, any comments they've stored in the local e-mail-like system, and their relationships to others. They often have a difficult time contacting people they know on the service once their account is suspended or terminated and people often ask "What happened to so-and-so?  Their account is suspended." and no one knows unless they have some pre-existing mechanism to contact the former user.

The other part of the second problem is why should I have to visit myspace, facebook, tribe.net, etc. etc. one by one in a browser to retrieve all of my messages there or see changes that have occurred? Livejournal has, in the past, made some APIs open to the public so you could, for example, see changes in your "Friends" or make changes from a client but these have never solved the underlying issue. Facebook e-mails you when someone sends you a message within Facebook but it doesn't actually send you the contents of the message. You have to go log into the site and go to the messaging area to find out what was said. I'm pretty sure that Myspace does the same thing.

Brad Fitzpatrick, who was the creator of Livejournal, has recently left Six Apart, where he had worked since LJ was purchased.  About the same time he left, he posted an essay, "<a href="http://bradfitz.com/social-graph-problem/">Thoughts on the Social Graph</a>," on his personal site. In this essay, he outlines many of the same problems, espousing a decentralized social graph. He also suggests the use of <a href="http://openid.net/">OpenID</a> to help solve the problem of distributed identity.

How does this relate to Mozilla and its work? Well, Cedric and Brad are both looking at aspects of the same problem that I was dancing around yesterday. In their examples, it is focused on social networks but instant messaging networks are really just another kind of very simplified social network (as shown by LJ's ability to add support for using an IM client to chat with fellow users). All of this is tied up in the problem of identity, communication or messaging between people, and the exchange of data. I expect that AllPeers is going to continue to do good work in this space (if only they added support for Firefox 3 trunk builds to their extension!) and I somehow think that Brad is going to be working on this space in his new work, as yet unannounced.

I'm hoping that Mozilla can find ways to contribute to this space as well over time. I'm still interested in comments in my previous posts. I'd love to hear more thoughts from people on this problem space, potential solutions or even why it is a dumb thing to worry about.
