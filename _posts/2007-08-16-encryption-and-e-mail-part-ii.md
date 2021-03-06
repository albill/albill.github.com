---
author: admin
date: '2007-08-16 12:00:46'
layout: post
slug: encryption-and-e-mail-part-ii
status: publish
title: Encryption and E-mail, Part II
wordpress_id: '1778'
categories:
- Technology
---
One of the other things that people should think about with making their e-mail "safe" is that most of the text of your e-mail is transmitted in the "clear." It is just sent as text without any encryption over the net.

For SMTP (Simple Mail Transport Protocol), there is little that can be done about that. SMTP is generally used for the sending or delivery of e-mail to its final destination. You connect to an SMTP relay server, usually run by your internet provider, and give it your message. The message contains the information on who it is for. These days, that SMTP server may directly contact the SMTP server associated with the person you are writing to but, historically, your SMTP server will contact another one that is "closer" to the eventual destination, and give it your message to "relay" along. This server will then contact another SMTP server and continue this process until it reaches its final destination.The only thing you can really do, as far as I know, to protect your e-mail when it is passing from SMTP server to SMTP server, is encrypt the actual message. I've already discussed this in my previous posting on e-mail encryption.

The other end of the e-mail process is that you need to access your own mail. There are two protocols normally used for this: POP3 and IMAP. POP3 is a stateless protocol where you connect to your mail server, it generally gives you your messages to download, and then deletes them from the server. (You can leave them there but we'll leave that aside.) IMAP is a state-based protocol which generally allows you to leave your mail stored on the server, often in separate folders (such as "Mom", "Important_Stuff", etc.). You connect to the server and most mail clients will get a list of messages in the various folders. These will be compared to what is in a local cache on your computer and the mail client will download any new ones to the local cache and if you've deleted any locally or moved them to folders, tell the server to implement these changes. The main point is that your mail stays up on a server and that set of data is the master copy. This allows you to connect to your mail from multiple computers, use a local mail client and even use a webmail client to access it. This makes it a lot more flexible.

At my last two jobs, IMAP was and is the standard used for mail. For my personal mail account, it is the same as well. This allows me to format my hard drive, change computers, etc. and my mail is never affected. Unfortunately, this opens me up to two potential problems for security:
<ol>
	<li>My mail is stored in an unsecured location run by someone other than me.</li>
	<li>Whenever I get my mail, it is transmitted to me as normal text over the internet (not encrypted).</li>
</ol>
Both of these problems also apply to POP3 mail servers except that in the first case, the mail stored on the server is usually only the mail that has showed up since you last checked it. Once you've downloaded it to your local machine, it is deleted from the server. With IMAP, since everything is on the server, you can have years worth of e-mail stored up on a remote mail server.

The second issue above is something that the current lawsuit about government data sniffing really drives home. The government, leaving aside handwaving, has set up rooms at large internet data junctions (run by AT&amp;T here). In these rooms, they receive a diverted copy of all of the internet traffic running through the network there. What they do with it, we don't know, but you can bet they are looking through the content of the data running across their machines in this room. E-mail sent in the clear or accessed via IMAP in the clear is completely open to this sniffing.

This is a huge security hole and people should be aware of this. In a lot of ways, there is not a lot that you can do about this. If you follow my previous post's advice and encrypt all of your e-mail, the <strong>content</strong> of your mail will be encrypted with GnuPG or the like. The source and destination e-mail addresses aren't. Someone looking at the data could know who you are talking to in e-mail and when you did it but that's about it. That is really your only option to deal with the fact that your mail is stored on a remote server.

For the second issue of transmitting text in the clear, there is also a solution though it isn't as strong. If you are using IMAP (POP3 doesn't do this), many mail servers will allow SSL certificates to be set up for the mail connections. SSL is what you use when you connect to Amazon.com or the like to engage in e-commerce. This allows you to avoid sending your credit card number as clear text over the internet. The same solution can be used so that when you connect to your e-mail server over IMAP, you can use SSL to encrypt the transaction back and forth with the server. This means that when you ask for your new e-mail messages, all of the content sent by the server is encrypted. SSL encryption is not as strong as what is used by GnuPG but it is good enough to obfuscate your traffic. For your normal hacker or a government sniffer that is doing terrabytes of data a second, it may be enough as well (though I wish there was something stronger).

I figured it was worthwhile to highlight this to people who might not be aware of some or any of these issues.

So, lesson for the day, if you use IMAP, use SSL and you should still encrypt your mail content!
