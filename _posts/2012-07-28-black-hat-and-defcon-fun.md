--- 
layout: post
date: '2012-07-28 15:33:00'
title: Black Hat and Defcon Fun
tags: 
- Black Hat
- Defcon
categories:
- Technology
---
I've spent the last few days at the Black Hat and Defcon security conventions in Las Vegas. I attend these every year for my work on the security team at Mozilla. This year, somehow, I seem to have wound up as one of the responsible adults, instead of an attendee, so I helped our group of 14 or so get tickets, hotel rooms, and so forth. 

The talks this year have been fairly hit or miss but that is true every year. For all of the chatter about it, Black Hat is only a two day conference, so the amount of things presented there is often quite limited. Defcon, for all of its pretensions of being the "hacker" convention as a counter to Black Hat being the "professional" one, contains much of the same people, is three days long instead of two, and often has more interesting talks. 

It is clear that phone hacking is still a big area of focus for people. As in recent years, there have been a lot of talks that look at hacking Android and iOS devices in various ways. Anyone who follows security news will have heard that Apple actually officially sent a presenter to speak on iOS for the first time ever (though I wasn't in that talk) and there have been a number of other presentations on iOS. The focus at Defcon so far has been more on hacking Android from what I've seen. Various people looking at malware on Android and ways to pwn the system. I attended a somewhat interesting talk on folks aborting the Java portion of an Android phone's system (which is where Android, itself, lives) and running a Linux distro, Inferno, on top of the stub of a system that instantiates Android. Very clunky but interesting in a geeky sort of way. I also just attended a talk on setting up a decent ad-hoc mesh network using transparent proxies running on Android systems (leaving aside the man-in-the-middle possibilities there). That one actually showed a lot of promise for networks during crises or disasters. I attended two similar talks last year and this one shows a lot more promise and robust design that those earlier presentations. You can actually see the [slides](https://github.com/monk-dot/SPAN/blob/master/SPAN%20DEFCON%20XX.pptx) and [paper](https://github.com/monk-dot/SPAN/blob/master/m0nk_Off_Grid_communications_with_Android_-_DCXX_paper.pdf) on Github, along with [other code](https://github.com/monk-dot) related to the project. 

The two things that I've had the most fun with so far were not directly related to my Mozilla work in any way. 

Yesterday, [Chris Anderson](http://en.wikipedia.org/wiki/Chris_Anderson_(writer) of Wired Magazine and [DIYDrones](http://diydrones.com) did a nice overview of the current state of the hobby drone market, what's going on, and discussed the business model and direction of 3D Robotics, the open source hardware company he founded to support what initially started as a hobby for him. He commented that economists always ask him about his business model as if it was something horribly complex or obtuse when, as he says, a 17th century fishmonger could understand it. They sell things (drone electronics and parts) for more than they cost. He said that the sweet spot for them is selling at 2.6 times the cost of the bill of materials. This leaves them enough space to sell at a margin as wholesalers to retailers and for the retailers to then do be able to do the same without trying to go crazy making things expensive. Because they have a huge DIYDrones community, they can do open source developments where they iterate quickly on improvements to the electronics (even making whole new platforms) and get them to market. The most successful and active of their community members can even get equity in 3D Robotics in return for their work on projects, making it a "win win" situation for everyone.

This morning, [Cory Doctorow](http://craphound.com/bio.php), of Boing Boing and writing fame, did a follow-up to his Chaos Communications Conference 28 talk on the "[The Coming War on General Purpose Computing](http://boingboing.net/2011/12/27/the-coming-war-on-general-purp.html)." This talk was "[Beyond the War on General Purpose Computing: What's Inside the Box?](http://defcon.org/html/defcon-20/dc-20-speakers.html#Doctorow)" This talk focused on the after events of that war, assuming that we win it and general purpose computing doesn't go away. In it, he discusses his actual support (surprisingly) of the "[Trusted Platform Module](rg/wiki/Trusted_Platform_Module)" in computing but with a twist. He focused on how it could be used to provide freedom for users by allowing them to both select and **know** what software (including operating systems) are running on their own machines, given people a potential for longterm control and security in the face of malware, root kits, and hostile governments or corporations. He proposed this as a tought experiment to try to kickstart a conversation that could eventually lead to solutions implementing his ideas or, he happily admitted, those of smarter and more skilled people in this space. He spoke about the weird union of Hayek and Marx in trusting the knowledge and ability of those at the edge, with boots on the ground, over centralized authority and control. I expect a transcript and video of this talk will be up soon but he's also doing a version of it at the Long Now Foundation in San Francisco this coming Tuesday. 

With both Chris and Cory, I got a chance to go to the lengthy Q&A session after their talks and to talk to them a bit about their thinking, as well as hearing them discuss the kind of stuff that doesn't really make it into a public presentation in front of a thousand or more people. In both instances, I'm reminded of what genuinely approachable and nice guys both of them are. I've interacted with both of them on and off before, mostly because of my involvement in my hackerspace or (in Cory's case) because I'm a science fiction geek. I've always found both of them to be the kind of guys that you could ask honest and real questions of and get genuinely thoughtful responses. That's always cool to find.

I also managed to give Cory and [Ace Monster Toys](http://www.acemonstertoys.org) sticker and snap a shot of him with it as well, which makes the hacker fanboy in me happy. 

<p style="text-align:center"><a href="http://www.flickr.com/photos/albill/7663639828/" title="Untitled by albill, on Flickr"><img src="http://farm9.staticflickr.com/8164/7663639828_8c0f142543.jpg" width="375" height="500" alt="Untitled"></a></p>

**Update from August 5**: Cory has done his talk a second time, at the [Long Now Foundation](http://longnow.org) in San Francisco. He has put his [slides](http://craphound.com/CivilWar.zip) up and you can listen to the [audio](http://longnow.org/seminars/02012/jul/31/coming-century-war-against-your-computer/) of the Long Now version of his talk.