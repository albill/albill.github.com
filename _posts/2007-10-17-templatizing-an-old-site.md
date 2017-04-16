---
author: admin
date: '2007-10-17 23:43:25'
layout: post
slug: templatizing-an-old-site
status: publish
title: Templatizing an Old Site?
wordpress_id: '2016'
categories:
- Technology
---
I have a bit of a crufty old site (<a href="http://www.hermetic.com">hermetic.com</a>), which I handcoded in html the old fashion away. Some of this was done as long ago as ten or so years.

I'm looking to do a refresh on the site, both visually and otherwise, even though it isn't a core day to day interest. It is used by a lot of people and I host quite a bit of content there.

What I'm looking to do is twofold:
<ol>
	<li>Replace the existing flat html pages with some kind of database driven site delivering the stored html content (but not the surrounding formatting) from a database.</li>
	<li>Preserve existing page urls to not break the hundreds of people that link to the site.</li>
</ol>
I'm not entirely sure if #2 is do-able but I would like to not break every page that has linked to, say, Hakim Bey's "<a href="http://www.hermetic.com/bey/taz_cont.html">Temporary Autonomous Zone</a>" on my site.  I've got a lot of good Google whoofie from the existing links and I'd like to preserve that somehow.

For #1, I want to be able to templatize the sub-sites, such as /bey/ and to change the templates on the fly. This would allow me to change the look and feel of the site without having to edit 40,000 files (ok, more like 1,000, but still). This is a standard reason to serve from some kind of templatized system. This would also allow me to place Google ads on a few pages. Right now, I have ads on three pages that get a lot of traffic. Generally, this pays for the bandwidth cost of the site. I want to experiment with expanding this into a few places.

Does anyone have any preferred solutions or suggestions for this problem space? I prefer something that is based on PHP and MySQL but I'll listen to any suggestions at this point.
