--- 
layout: post
title: Darknet Thoughts II
published: true
meta: {}

tags: 
- Technology
type: post
status: publish
---
I did have more Darknet thoughts over the weekend.

The Pop Goes the Gmail program got me thinking. It is a program that runs in your system tray in Windows and goes and scrapes gmail for your mail on your account there. It then acts as a local Pop3 and SMTP gateway. You run Outlook Express, Outlook, or any other e-mail client and connect to "localhost" as your Pop3 server to get your gmail. When you send mail, you use "localhost" again for SMTP and PTGM turns around and sends it back out via Gmail for you.

For my Darknet service concept, I thought about having a local service program in a similar manner, running in your systray on a windows box, that connects to your main server. Say you use a mail server that uses some sort of Public-Key Crypto and Pop3 or similar protocol (as opposed to IMAP). The user has a local program that connects to the server, exchanges keys, and downloads the mail for its account to your local machine (and deletes it from the server). Each user has their mail encrypted to their public key (be it PGP or something else), so the data content can only be decrypted locally by the user. One question is whether normal Pop3 logins, which are clear text, would really be secure enough or whether that would need to be hardened in some way.

The immediate question at that point is whether it makes sense for your local service on the client, at this point, to run as a Pop3 server like PGTGM does or not. The value in doing so means that you can read your mail in any client and you can have the service do the decrypting for you before it passes it to you. The disadvantage should be obvious: since your normal Pop3 e-mail client is handling the reading of the content, the data is all stored in a non-encrypted store locally. There is also the disadvantage that unlike using an NNTP server, all of your data will get auto-flattened to one inbox. One solution to that is to have the local service give your mail client the data via IMAP instead of Pop3. This would preserve folders, which could allow you to have multiple discussion groups without flattening things. This doesn't take care of the encryption/plaintext issue though.

A better solution, though more difficult technically, is to have the local service act as its own client rather than passing the data locally out to your normal e-mail program. This loses the utility of allowing you to read your data however you want but has the value of having the data controlled by that service so you could, say, keep it encrypted. 

In this version of the Darknet Data Server (DDS), you would then have:

 <ol><li>A server:<ol><li>encrypts data in server storage in some local manner.</li><li>processes incoming messages out to user and encrypts messages in existing (supplied by user) public key for user.</li><li>handshakes with user client either via cleartext username and password or, better yet, using the same public key for validation since the client has the private key.</li><li>sends data down the pipe to the user's client via Pop3 and deletes local copy.</li><li>receives messages from user's client encrypted with server's public key and processes them locally and re-encrypts for all users on system.</li></ol>
<li>A client:<ol><li>runs as service on local computer, accessible via system tray (or equivilant)</li><li>has a private/public key pair and supplies public key to server.</li><li>connects as a pop3 client to server and downloads messages encrypted via public key to local store.</li><li>local store is encrypted.</li><li>allows using to log in to UI front end, user validates via passphrase for private key to establish credentials.</li><li>allows user to read ain local store, decrypting them in RAM for session.</li><li>sends messag replies or new messages to server after encrypting with server's public key, again storing all data in RAM during process.</li></ol></ol>

 One problem (which is "by design" in a sense) is anyone who joins this overall service at a later date will never get all of the old messages as keeping archives would be very weak security. 

 All of the technology for this exists as separate pieces already.

 Thoughts?

 <b>Addendum:</b> The local client could act as a local webserver, like the Zoe mail program does, which means that you could access the mail through a webmail type html/cgi type application. You can mark pages to not be stored in the cache as well...
