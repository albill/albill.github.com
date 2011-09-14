--- 
layout: post
title: Painful Web Standard Decision from IE
published: true
meta: 
  ljID: "3131"
  _podPressPostSpecific: s:269:"a:6:{s:15:\"itunes:subtitle\";s:15:\"##PostExcerpt##\";s:14:\"itunes:summary\";s:15:\"##PostExcerpt##\";s:15:\"itunes:keywords\";s:17:\"##WordPressCats##\";s:13:\"itunes:author\";s:10:\"##Global##\";s:15:\"itunes:explicit\";s:2:\"No\";s:12:\"itunes:block\";s:2:\"No\";}";
tags: 
- Mozilla
- Technology
type: post
status: publish
---
<a href="http://www.flickr.com/photos/albill/2213084348/" title="ban-ie by albill, on Flickr"><img src="http://farm3.static.flickr.com/2062/2213084348_c5c1a466e7_o.jpg" alt="ban-ie" align="right" border="0" height="181" hspace="5" vspace="5" width="187" /></a>I feel like I should have titled this, "Painful Web Standards Decision from IE (surprise!)", but that would be snarky, right?

The Internet Explorer team has <a href="http://blogs.msdn.com/ie/archive/2008/01/21/compatibility-and-ie8.aspx">detailed their implementation</a> of the switch between different rendering standards over on the<a href="http://blogs.msdn.com/ie/"> IEBlog</a>. Previously, as seen in IE7 and IE6, Internet Explorer had two rendering modes, "Quirks" mode and "Standards" mode. As Chris Wilson states in the blog post, they will be changing this to the following modes:
<blockquote>
<ol>
	<li> “Quirks mode” remains the same, and compatible with current content.</li>
	<li>“Standards mode” remains the same as IE7, and compatible with current content.</li>
	<li>If you (the page developer) really want the best standards support IE8 can give, you can get it by inserting a simple <meta /> element.</li>
</ol>
</blockquote>
The way to trigger standards mode was with a well-formed DOCTYPE declaration, like this:

&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" http://www.w3.org/TR/html4/DTD/strict.dtd"&gt;

There is a <a href="http://en.wikipedia.org/wiki/Quirks_mode">wikipedia entry</a> on this and an <a href="http://www.alistapart.com/stories/doctype/">article</a> on <a href="http://alistapart.com/">A List Apart</a> on DOCTYPE as well (or you can <a href="http://www.quirksmode.org/css/quirksmode.html">read here</a>) if you've managed to be blissfully unaware of this.

The meta element is detailed in a <a href="http://alistapart.com/articles/beyonddoctype">post</a> on <strong>A List Apart</strong>, which goes into all of this in great detail. (I'm not sure why <strong>A List Apart</strong> is effectively the mouthpiece for announcing this for Microsoft though.) This new meta element looks like:

&lt;meta http-equiv="X-UA-Compatible" content="IE=8" /&gt;

So, the net result is that there is an IE6 mode that is backwards compatible to pre-IE6, which is "quirks" mode and the the existing "standards" mode, which is now suddenly IE7's rendering mode, and a new IE8 mode.

To be blunt, in my opinion, this is <strong>pretty !#@$!! stupid</strong>.

Now, I understand the idea that Chris Wilson has suggested in the past about versioning HTML and letting browsers know what kind of HTML with which a website says it is compatible. I'm somewhat sympathetic to the mantra of "Don't Break the Web." Unfortunately, this seems more like, as a comment on a blog mentioned, "Don't Fix the Web." What this sets up is that even when IE6 is <strong>finally</strong> dead and not simply resting (like a parrot), we'll be stuck with sites declaring, "Hey, I'm coded for IE7!" by their use of standards mode, but only when rendered in IE. Suddenly, standards mode is not really about standards in any sense at all for IE (leaving aside previous criticisms) and IE diverges even farther from the rest of us. For the rest of us, like Firefox, this standards mode will be our latest and greatest, not some locked in the bowels of time older version of our browser.

I see no reason to expect that anyone else will implement this meta tag. Why would anyone bother? It isn't part of any spec and it doesn't help anyone but the IE team. The way it helps them is by allowing them to force compliance with older versions of their product. I'm sure that when IE9 comes out, the tag will have 'content="IE=9"' in it.

<strong>Forget it.</strong> If there is a quirks mode and a standards mode, fine, but there should <strong>only</strong> be these two, existing, modes, not an endless plethora of them until the end of time, constantly muddying the waters for everyone (including web developers working on IE). I also think that standards mode should be the default, not the other way around, but I may be in the minority there. The IE team making standards mode really be "IE7 mode" within IE is just damning and something that people don't seem to be really thinking about in the comments I've seen.

If this is really a good decision, then the IE team should convince everyone in the HTML working group to add it to the new HTML5 standard. <em>As an aside, I should mention that a <a href="http://www.w3.org/TR/html5/">draft of the HTML5 standard</a> went live today, along with a <a href="http://www.w3.org/TR/html5-diff/">document detailing differences</a> from HTML4.</em>

We, all of us concerned with the web outside of Microsoft, <strong>want</strong> people to update their sites to current specifications, whether of HTML or CSS, or what-have-you. The web is an evolving environment. We should not be encouraging people, in my opinion, to write sites like it is 1999 still, or even like it is 2006, when newer standards come out. Where will we and the web be in five or ten years if we do not encourage people to move forward?

This new mode, and the change to standards mode within IE, just enables IE to continue to hold back the improvement of the web. If this is implemented, I can only hope that web developers get so pissed off about it that they refuse to be co-opted this way by Microsoft. Without public outcry by people, there is very little chance that the IE team will reconsider shipping this.

<strong>Update:</strong> There is a <a href="http://browsing.justdiscourse.com/">well nuanced post</a> on <a href="http://browsing.justdiscourse.com/">Just Browsing</a> about this as well.
