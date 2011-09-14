--- 
layout: post
title: Hey Drupal, !?$@!$#
published: true
meta: {}

tags: 
- Technology
type: post
status: publish
---
<p>Jesus Fucking Christ, could <a href="http://www.drupal.org">Drupal</a> be 
MORE of a pain in the ass to upgrade?</p>
<p>I decided to upgrade a drupal site to version 4.5.1 last night around 11:30 
PM after getting my ass handed to me one time too many in Half Life 2: 
Deathmatch. I figured that I&#39;d do something more constructive. I have a private 
site that I run for a bunch of the Buddhist tantric and dzogchen practitioners 
that I hang out with. Our own little home.</p>
<p>I went to bed at 3:45 AM still with issues... &lt;sigh&gt;</p>
<p>Really, the upgrade itself went relatively smoothly. It&#39;s all of the optional 
modules that screwed the pooch. I have the <b>IMAGE</b> and <b>FileStore2</b> 
modules installed. When I upgraded, the links to all of my images and uploaded 
documents were still there but the system couldn&#39;t find the files because the 
upgrade wiped out the code for the modules. I uploaded new versions of them but, 
of course, there are changes. Fast forward to me telneted into a unix box with a 
command line connection open to a mysql server hand typing in freakin&#39; SQL 
commands. It turns out that the upgraded forms of the modules changed their 
tables.</p>
<p>End result, <b>IMAGE</b> works now though I had to re-upload all of my 
original images. The <b>FileStore2</b> module is still busted. It says, when I 
upload a file, that it works and trying to download the new file pretends to 
work but the contents of the file are an &quot;access denied&quot; error message. After 
spending time chmod&#39;ing things, I&#39;m pretty convinced now that my mysql table 
from the old version is fux0red and I should delete it and try starting from 
scratch.</p>
<p>What a seamless fucking open source joy this was. I basically spent over four 
hours (with probably four more to come) dealing with this. That&#39;ll teach me to 
dare upgrade!!</p>
