---
author: admin
date: '2007-09-19 18:04:30'
layout: post
slug: ie-and-the-demise-of-borgzilla
status: publish
title: IE and the Demise of Borgzilla
wordpress_id: '1948'
categories:
- Mozilla
- Technology
---
I could have titled this "Things that will not make me new friends on the Internet Explorer team" but this is written out of a real desire to see some things change. I know many many of the people working on IE, some of whom I worked with for five or nine years on a number of projects.

One of the last things I worked on when I was at Microsoft was "<a href="https://connect.microsoft.com/site/sitehome.aspx?SiteID=136">Internet Explorer Feedback</a>" aka <strong>Borgzilla</strong> (the PR flacks refused to allow me to call it that at the time but I worked it into every conversation I could...).

Borgzilla was officially an open bug database for the last part of the Internet Explorer 7 release. Less officially, it was a semi-open bug database that only a few people looked at directly. I detailed it with a FAQ in a <a href="http://blogs.msdn.com/ie/archive/2006/03/24/560095.aspx">blog post</a> on the <a href="http://blogs.msdn.com/ie/">IEBlog</a>, one of the few under my name there.  Borgzilla ran on the larger "<a href="https://connect.microsoft.com/">Microsoft Connect</a>" site. Connect is used largely for Betas and beta feedback by a number of teams but the idea of having a (semi)open bug database was really brought to live by the guys at Visual Studio, who did a great job at it.

The idea with the Borgzilla was to start a part of the virtuous cycle that Firefox and open source projects have used to their advantage over time in interacting with community and participants. I pitched this as something to help build our user community, when I was on IE, and to help people feel less frustrated about the black hole, which is where IE Feedback generally seemed to go except on the IEBlog. IE was working to dig itself out of the hole of years of neglect and getting the community to help by reporting issues and to know their feedback was being heard seemed like a really good idea. The team also wanted a better understanding of how people were using IE in web development and day to day use.<!--more-->

So, that was the idea. Implementation was a little more problematic as it turned out. As soon as the site went live, it was immediately deluged in bugs. Hundreds would appear over the course of a few hours. Also, since Microsoft refused to have the bug database on the Connect site be the same as the main IE bug database (which was part of the Vista one), there was a disconnect in information. Basically, bugs reported by the community were linked to copies made in the main IE bug database. When the main IE bug was resolved, the status was passed back. This worked in practice except that it isolated the bugs from the main team since they didn't work in the same database in which users were reporting issues.

I (and eventually a contractor) was supposed to triage bugs and mark the ones for porting that were seen as passing basic muster and not simply being noise. When thousands of bugs showed up within a week, this became something akin to bailing out the sinking Titanic with a large wooden bucket (which happened to be on fire). Whenever we got nearly caught up, a new build of IE7 would go out and it would start again.

Community members could validate bugs or add comments but were not empowered to edit bugs beyond that or resolve them in any way. This means instead of being something where the community was fully empowered to log and resolve issues on its own, everything had to be passed through a gatekeeper or two and then given to the rest of the IE team. Also, since the main Windows bug database (unlike Bugzilla for Firefox) was not viewable by community members, they had no idea if issues were already known or had even been fixed (since the community could not get nightly or weekly builds).

Needless to say, the members of the IE team were not terribly thrilled with aspects of this system as well. Because of the strong push to ship Vista, there was a "bug bar" in place on the maximum number of active bugs a team could have on their plate, usually on the level of 30 or 50 bugs, not hundreds. If groups exceeded this, they were called to task by various higher level groups in Windows to see why their quality was slipping and they weren't moving in the right direction to ship Vista. When you're working under that kind of limitation and 120 new UI or CSS bugs suddenly show up for four or five people to triage and work on, people become less happy.  This was even more true when many of the bugs were issues that they either knew about or which had to be sent to the QA team to create reproduction steps and clear test cases.

This process was in place up until IE7 shipped after the last Beta, I don't believe that anything was done with the reported bugs. I could be wrong. I left the team in early May, 2006 in order to move to California.

If you go to the site today, you are told: "The site is temporarily closed. It will re-open in the future." This message has been in place for about a year now, which probably redefines "temporary." No information has been given about this and the few times I've asked about it on the IEBlog have been ignored. I get the impression that no one really wants to talk about the site.

I've tried to find out through contacts at Microsoft why the site no longer exists and heard things from a variety of people but it seems to largely come down to a lack of interest by the IE team. The feedback from a user community in this direct of a manner was never really wanted by certain members of the IE team. The project, as a whole, was never given enough resources (staffing) to do a good job and the software used, Connect, did not empower the community to solve its own problems or to police the incoming bugs. When bugs did come in, the various teams within IE that received them found them to be a resource drain to deal with and, I believe, resented all of the work that they created.

We've heard this week that there might be an IE8 Beta before the end of the year. I would certainly hope so since coding on IE7 was complete a year ago. I would hope that they have been working hard on IE8 since that time. This seems like a reoccurrence of this historical black hole problem that IE has had. The IEBlog has been pretty silent on anything forward looking during the last year as well.

I'd like to call on the IE team to do the following:
<ul>
	<li> <strong>Make regular alpha builds of IE available.</strong> If not nightly, then weekly. If not weekly, then monthly. The IE team builds every night and runs daily tests on the build quality. There is no reason that the IE team cannot make builds available except for a desire to do so and a willingness on the part of Microsoft's management to let them do so.</li>
	<li><strong>Turn IE's MS Connect Site Back On</strong>: Flip the bit on the site that still exists and re-open it. Actually put some staff on it this time and dedicate them to getting issues triaged during the alpha period, not just late beta, so the IE development and program management teams aren't buried by issues when under pressure to ship. Alternatively, use some better bug tracking software and actually empower members of your user community to resolve, validate, and close issues so IE team members don't have to do all of the work themselves.</li>
	<li><strong>Start Talking about IE8 and the Future</strong>: IE is very present in a number of theW3C working groups now. I hear that many discussions are occurring and that IE members are pretty engaged. Start talking about the future direction of Internet Explorer so that the rest of us in the same ecosystem can see where you are going, at least in a general sense.</li>
</ul>
The IE team liked to speak during the IE7 development period about putting the past behind them and being engaged with the rest of the web community, especially web developers. This shouldn't have gone on hold when IE7 shipped. Engagement is not something that you do for a year and then turn off for another year before repeating. It is a regular process of communication and openness.

Come on, IE, let's talk.
