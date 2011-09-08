---
author: admin
date: '2007-09-04 23:25:33'
layout: post
slug: messaging-clients-in-the-post-web-20-world
status: publish
title: Messaging Clients in the Post-Web 2.0 World
wordpress_id: '1813'
categories:
- Mozilla
- Technology
---

[Asa Dotzler](http://weblogs.mozillazine.org/asa/) and I were discussing
messaging and message clients last week for a bit. The conversation was
about the possibilities around messaging in general and what is wrong
with the current situation. For those that don't know or don't pay
attention, it has been said in a lot of media and by various pundits
that kids these days (you know how it is) don't use e-mail the way that
us older farts do. They use IM instead and consider e-mail to be slow or
less useful. ![Example IM with
Adium](http://www.arcanology.com/images/im-example.png "Example IM with Adium")For
people my age (36), who have been on the net for a long time, e-mail is
the bedrock of our online experience. Sending and receiving e-mail has
formed our Internet experience since before the web was an idea in
anyone's head. I was using e-mail for at least five or six years before
the web came along and ran several bulletin board systems that were all
about group messaging and e-mail between systems. I even ran a uucp node
(pagan.uucp) for a while, which was mainly to get mail and news back
before things like internet service providers even existed. So, I'm
officially old and stuck in my ways and don't dig the newfangled IM
thing as much as people a bit younger than me. Part of the overall
discussion around Thunderbird is about the role e-mail has today on the
Internet and how fixated some people are on the way that e-mail has
functioned for, oh, the last 25 years or so. This isn't condemnation but
simply a statement of opinion. I'm reminded of the people that I know
that still use Usenet news heavily (which I can no longer effectively
use or tolerate and haven't for years) and their discussions of why it
still works, is cool, and relevant. The rest of us, in that instance,
have largely moved to web forums, blogs, etc. for group discussions. I
have a feeling that the e-mail discussion feels the same way for a lot
of people. Then there is the fact that a lot of people are pretty happy
to use webmail and don't even see a need to locally store their mail or
have a dedicated mail server. Asa and I were discussing the idea of an
application devoted to messaging, in all its forms, rather than simply
devoted to e-mail. Some kind of next generation messaging that tries to
switch things up, makes things easy for everyone, and can leverage
Firefox and Mozilla projects for mindshare and community. The idea is a
central clearinghouse for any and all personal messaging and sharing
that comes into your system. The core concept here is that messaging is
no less important than it has been. It is just that the focus of it has
shifted away from e-mail. This doesn't change the underlying desire to
connect and communicate with friends, colleagues, and family. In our
conversation, this also became intermixed with the file sharing that
[AllPeers](http://www.allpeers.com/) is trying to do. The file aspect is
useful because a lot of people tend to e-mail fairly large files to
friends or even to themselves. This is partially to get the files to
people but it is also because of a desire to have a storage location
that is web accessible or not on your local machine. I know that I have
copies of my Master's thesis stored on my mail server just in case my
hard drive and backups somehow go south on me. No matter what, I want
that nearly two megabyte word file to survive so I e-mailed it to
myself. If you think about the original intent and design of e-mail on
the Internet, this is definitely an overloading of its core architecture
and design. I'm hardly the only one that sends large files as well.
Unfortunately, as people have found out, mailing a file greater than a
megabyte or two to someone, even yourself, can be a painful exercise.
The infrastructure created decades ago for e-mail is not well adapted to
the sending of files as big as the ones that people commonly use today.
Because of the potential chain of SMTP servers or the policies that your
Internet Service Provider may (or may not) have around message length
and storage, you may simply never see a file or see it intact. If you
want an example of this, try e-mailing an mp3 to yourself. See how long
it takes to send and whether or not you actually receive the file. If
you don't receive it, see if your sending account actually is sent an
error message or if the file simply dematerializes like a bad
transporter accident. It will be pretty hit or miss, especially if you
are using webmail but even if you aren't.

![AllPeers Torrents
Example](http://www.arcanology.com/images/allpeers-example.png "AllPeers Torrents Example")

In the discussion with Asa, the things that a proposed "messaging
center" application would need to do would be:

1.  Store and retrieve e-mail, whether webmail, pop3, or imap-based
2.  Store and retrieve instant messaging logs
3.  Store and retrieve Usenet news
4.  Store and retrieve files

Other aspects of it, with varying degrees of necessity, would be:

5.  Act as an IM client to all of the different IM networks (and perhaps
    IRC)
6.  Act as a peer to peer IM client
7.  Act as a peer to peer file sharer
8.  Act as a peer to peer e-mail client
9.  Act as a proxy for these services even if you want to use
    traditional IM, e-mail, etc. with existing clients, storing traffic
    locally.

The last point is especially relevant to me. Why do I need to send my
e-mail to my friends through a series of servers if they are logged in
right now and, in fact, I can see them in IM? You could just send them
an instant message them but that medium lends itself to one or two lines
of text and maybe you want to write a detailed e-mail or have a back and
forth discussion by e-mail. You can do it by IM but why be strangled by
the norms of the medium when e-mail is a well understood paradigm as
well. If people were logged into some central service, whether an IM
network or some other cloud service, there is no reason that they
shouldn't be able to e-mail, chat, or share files directly with one
another. This also allows the the avoidance of storing files on servers
(potentially compromised by many parties) between you and your friends
and the use of simple encryption for the actual communication. This
could make for a friendlier and more private Internet in many ways.
There is also the possibility of file storage. Right now, there are a
number of free services that allow people to store a couple of gigabytes
of files online (not to mention people who use their gmail account space
to do the same thing). Why not unify these under one messaging client?
All of this largely constitutes thinking aloud but there is no reason
why the exchanging of messages with friends or the sharing of other data
needs to be limited by the popular paradigms in use. There is no reason
to choose between either instant messaging ***or*** e-mail except that
this is the way that things have been done up until now. There should be
options that allow for more than this. I see XUL and the various Mozilla
technologies, especially given their extensibility, as being uniquely
placed to foster development in these areas. It may take someone with
more vision than me and would obviously take quite a bit of coding but I
think that this is an interesting space. Perhaps I'm alone in these
thoughts and most people are happy with the current models but I somehow
doubt it. The question is how to work out a good design for such
software that would actually fulfill the need, not be painful to use,
and generally work.
