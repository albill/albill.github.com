---
author: admin
date: '2008-04-03 21:49:52'
layout: post
slug: beta-users-and-security-releases
status: publish
title: Beta Users and Security Releases
wordpress_id: '2200'
categories:
- Mozilla
- Technology
---
<a href="http://www.deviantart.com/deviation/77329146/" title="Firefox by ~imagijester"><img align="right" hspace="10" vspace="5" border="0" src="http://farm3.static.flickr.com/2051/2386015763_e6447a085d_o.png" width="160" height="144"></a> Here is a problem that I am grappling with in my day to day work at Mozilla. I am the QA Lead for our security releases. These are the 2.0.0.x Firefox and Thunderbird releases that people not running Trunk builds (Firefox 3) receive every so often, depending on variables like exploits coming out or just a general need to fix issues that reduce stability.

The way that Mozilla, as a community, does a great job at making sure that releases are really solid is simply by running them and reporting issues in <a href="http://bugzilla.mozilla.org">Bugzilla</a> or otherwise. These are normally <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/">nightly builds</a> of Firefox or Thunderbird. The problem with this is that the latest and greatest Firefox gets all of this lovin' and not my (seemingly) tired security releases. (This makes me sad...)

The fact of the matter is that running the newest Firefox is exciting and what the early adopter and propeller heads really want to do. They want the shiny new thing. I completely sympathize and am writing this blog post on a Firefox 3 nightly as well. It isn't that I don't understand the desire. It is fun and interesting to see all of the new changes going into Firefox 3 as they are developed (if you don't mind the risk). Running iterations of Firefox 2 is not nearly as exciting in this regard.

The funny thing is that the <strong>vast</strong> majority of Firefox users are running this same older and non-sexy code. (I don't know the exact percentage but it is more than 99% given the numbers) This is the code that will take down everyone's machines or, at least, productivity and Youtube time-wasting (same thing?), if it behaves badly. This leaves the problem that the code with the most effect on people receives the least love from the day to day Mozilla community. 

To compensate for this to some degree, when we do a security release, we generally do a week long beta beforehand with a release candidate build. This is to get the final code in the hands of people for a little while before we give it everyone in the world. Unfortunately, the beta community is small, something like 40,000 people (compared to more than 100 <strong>million</strong> users otherwise). To make things worse, most of these people in the beta community, at a guess, don't even know that they are in this group. This is because we use different "channels" to release software and offer updates to users. There is a "release" channel for normal builds of Firefox that you download after a release. When an update ships, it is offered there and Firefox will prompt people to download it. Unknown to many, there is also a "beta" channel. This is used during official beta releases before a major version of Firefox or Thunderbird ships. So, if you download <a href="http://www.mozilla.com/en-US/firefox/all-beta.html">Firefox 3 Beta 5</a> (or a previous Beta) and a new one comes out, the update to the new beta is offered to the users of the previous one. When Firefox 2 was in development, a lot of people had their update channel set to "beta" for Firefox 2 beta releases when they downloaded them. Many never changed the channel back to the "release" channel after Firefox 2 shipped. So, when there is a beta period for a Firefox 2.0.0.x update, these same users are offered an update, whether they really want to be beta users or not. They simply see the update offered in their browser.

There is an extension, the <a href="https://addons.mozilla.org/en-US/firefox/addon/6263">Update Channel Selector</a>, that allows people to easily change their update channel but most people are unaware of it. For those that want to participate in betas, this is one of the easiest ways to join.

Ideally, I and others on the security team working on the various security releases would like to see an active beta community. The members of this community would be people people who have knowingly signed up to help and who make an active effort to report issues seen during the beta period before releases go out to the world.

So the <strong>real</strong> question in all of this "blah blah blah" from me is: <strong>How do we get more eyeballs on the betas for Firefox and Thunderbird 2.0.0.x who realize that they are beta users and will report issues in these betas?</strong>

One tactic that we took after one of the firedrills a couple of months ago was to create a <a href="http://wiki.mozilla.org/QA/Community/Betatesters_Mailing_List">Betatesters Mailing List</a> for people that wanted to know about upcoming releases of Firefox 2 and to get the builds before they were shipped. There are a number of companies and groups that could have their web applications, for example, broken in a release that want to see the builds early in order to make sure that there are no troubles. This mailing list has been growing strongly and seems to be useful to people.

What I would like to know is what else could we do? How can we (1) improve the quality of our security releases and (2) get more people to look at these releases before we ship in order to find issues before it is too late? When you compare the amount of people using Firefox and Thunderbird to the amount of people either coding or testing them, it is clear that some kind of help from the massive base of users can make a real difference.

Please take a moment and ponder this. Let me know your thoughts. You can leave comments here or e-mail me as "albill" at this domain. 
