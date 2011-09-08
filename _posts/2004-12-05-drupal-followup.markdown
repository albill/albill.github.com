---
author: admin
date: '2004-12-05 02:33:06'
layout: post
slug: drupal-followup
status: publish
title: Drupal Followup
wordpress_id: '311'
categories:
- Technology
---

So, I deleted the mysql tables for the **FileStore2** module (and the
underlying **Fsrch** module that was likely to be the problem). I
recreated the tables. Result: no change whatsoever. Hmmm... I went and
looked at my permissions again and whacked with them a bit. It looks
like one internal directory needs to be set to the dreaded '666' or
something. Well, that's whacked. Luckily, it seems to be a temp folder
that doesn't store data for more than a moment. Tried everything again,
now it works **EXCEPT** my initial test file was a word doc. Instead of
getting 'access denied' for it, I get garbage data. I uploaded test
html, pdf, and text files. They all worked fine. It looks like the
server either hates Word (which wouldn't surprise much of the world) or
the mime types are whacked or something. This becomes too complex to
bother with so I just zip up any individual Word files. This has the
added benefit of saving space. Problem solved. I'm going to bed now. For
those that care, I actuall think Drupal is pretty good software. It is
just a mess to upgrade. At least it is all in PHP, unlike my movable
type installation, which is Perl.
