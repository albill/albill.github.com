--- 
layout: post
title: "Lazy Web QA Questions: Flash UI Testing"
published: true
meta: 
  _podPressPostSpecific: a:6:{s:15:"itunes:subtitle";s:15:"##PostExcerpt##";s:14:"itunes:summary";s:15:"##PostExcerpt##";s:15:"itunes:keywords";s:17:"##WordPressCats##";s:13:"itunes:author";s:10:"##Global##";s:15:"itunes:explicit";s:2:"No";s:12:"itunes:block";s:2:"No";}
tags: 
- Technology
type: post
status: publish
---
I'm trying to figure out what tools are out there, if any, to easily automate UI testing for Flash-based web applications.

So far, I've only found <a href="http://automatedqa.com/products/testcomplete/"><strong>TestComplete</strong></a> from <strong>AutomatedQA</strong>. This is a typical script driven web automation framework that is also able to be used for whitebox testing as well as load testing on HTTP. It can access ActiveX objects on a web page using Microsoft Active Accessibility (MSAA), which is actually something that we had to do in Internet Explorer. Microsoft used its own tools for this internally (actually, just about every org at Microsoft had their very own and different tools for this but that's a story for another day...).

If anyone has actually done QA on web applications using Flash, please let me know if you had a solution. Otherwise, I spend a lot of time clicking on flash objects with my mouse....
