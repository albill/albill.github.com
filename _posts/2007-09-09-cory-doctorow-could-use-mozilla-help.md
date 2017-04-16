---
author: admin
date: '2007-09-09 18:58:03'
layout: post
slug: cory-doctorow-could-use-mozilla-help
status: publish
title: Cory Doctorow Could Use Mozilla Help
wordpress_id: '1819'
categories:
- Mozilla
- Notable People
- Science Fiction
- Technology
---
I <a href="http://www.arcanology.com/2007/09/06/cory-doctorows-firefox-theme/">mentioned the other day</a> that writer, activist, and ne'erdowell , Cory Doctorow, wanted to release a theme and/or some kind of bundle alongside his next science fiction novel, <strong>Little Brother</strong>.  This is a young adult novel focused on hacker kids and includes some supporting activities to help get kids more involved with the ideas within the book.

Cory has read part of Chapter 12 from the book previously and released it as a <a href="http://craphound.com/?p=1819">podcast</a>.  I include a link to the audio of that below.

Since I posted the other day, Cory and I have discussed what he's trying to do in relation to <a href="http://www.mozilla.com">Firefox</a> and <a href="http://tor.eff.org">Tor</a> in some detail. Within the book, he has a character using Tor to get around his school's network restrictions to download a book. Cory wants, as an educational and promotional use together, to replicate this by making some kind of joint install of Tor (probably installing <a href="http://vidalia-project.net/">Vidalia</a>) and Firefox available. Also, this would use a Firefox theme based on the book's art. He also wants the <a href="http://foxyproxy.mozdev.org/">Foxyproxy</a> extension installed as well and configured to use Tor.

Simple, right? :-) <lj-cut text="Read the rest">

The issue here is that Cory is a Science Fiction writer, not a theme creator/artist or a Firefox guru. He could use some help from the community. Since much of his fan base are computer geeks who know of his work with the EFF and BoingBoing, I figure that might not be too hard to muster up but I do know it needs to be sought out. That's why I'm posting here today.

I'm a QA guy and I've already volunteered my help to him but my skills and knowledge are limited here. I'm not sure what the best solution is to fulfill Cory's relatively benign desires. I suggested to him that rolling a custom build of Firefox is <strong>not</strong> ideal as you'd want anyone who downloads this to get normal security updates and the like, which presupposes a normal build.

What I suggested, off the top of my head, is that someone could write an installer that grabs the current build of Firefox and the current build of Vidalia, installs theme, and then grabs his theme and FoxyProxy, configuring Firefox to use them. Maybe a zipfile with all of these could work though but grabbing the most current builds would be best since, in the last month, I know that Tor has released at least two updates and Firefox releases one every two months or so on average. The risk of installing out of date software is there otherwise. This gets around the idea of creating a custom Firefox build. 

I'm not sure if this is the best solution but it is what occurred to me. If anyone in the community is interested in helping with this installation/configuration problem or has a good solution, please e-mail me through my gmail account (<a href="mailto:albill@gmail.com">albill@gmail.com</a>). 

Also, beyond this, if anyone would be interested in helping with making a theme based on the artwork for Tor Books' (the publisher)  art department, that would be helpful and is a pretty self-contained issue.
