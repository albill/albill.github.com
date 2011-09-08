---
author: admin
date: '2007-08-09 14:53:58'
layout: post
slug: securing-e-mail-communications
status: publish
title: Securing E-mail Communications
wordpress_id: '1771'
categories:
- Technology
---

I promised a few people the other day that I would write a post on
securing your e-mail communications. This post won't be applicable to
everyone, especially webmail users. I'm going to focus on a few tools
that can be used locally on machines. These tools are:

-   [Thunderbird](http://www.mozilla.com/en-US/thunderbird/)
-   The [Enigmail](http://enigmail.mozdev.org/index.html) extension for
    Thunderbird
-   [GNU Privacy Guard](http://www.gnupg.org/) (GnuPG)

I actually use the Mac version of GnuPG available at
[http://macgpg.sourceforge.net/](http://macgpg.sourceforge.net/).
Thunderbird is the free e-mail program created by Mozilla, where I work.
It is cross-platform and based on the same technologies as the Firefox
web browser. It can connect to the IMAP and POP3 mail servers used by
most providers. It can also connect with Gmail accounts but my knowledge
of that is pretty weak (my gmail account forwards to my arcanology.com
account). The Enigmail extension was developed as an add-on for
Thunderbird that would allow seamless integration of cryptography
functionality into Thunderbird. This piece has actually been the one
that was missing in years past, making the use of cryptography with
e-mail a serious pain in the ass. The is under active development and
the last update was just a few days ago on August 4, 2007. GNU Privacy
Guard (called "GnuPG" from here on) is an open source cryptography
program made available by...you guessed it... the [GNU
Project](http://www.gnu.org/). For those without a deep history on the
net or open source, GNU is one of the main providers of open source
tools and philosophy, historically. You may have heard of its seeming
insane head, Richard Stallman, who regularly froths at the mouth on a
variety of technical topics and points of law. GnuPG is an
implementation of OpenPGP, which is an open standard for public/private
key crypto communication. I'm not going to give much more than a quick
glossing over on cryptography here. Basically, with public/private key
crypto, you generate a pair of cryptographic keys for yourself, a public
one and a private one. The public ones is...shared with the public. You
give it away to your friends and family. The private key (also called
the "secret key") is kept secure on your machine and shown to no one.
Messages or files can be encrypted using GnuPG or other implementations
of OpenPGP using your public key. At that point, the only way to extract
the original contents is to use the private key associated with the
public key. So, if you lose your private key, all previous encrypted
data is inaccessible to you. Likewise, if someone gets your private key,
they can extract data encrypted with your private key. The only speed
bump in that process is that your private key also has a passphrase
(like a password but hopefully much longer) associated with it. To
decrypt data, this passphrase must also be entered when the private key
is used. This acts as some security but anyone having a copy of your
private key has a huge leg up on cracking your data. Keep that in mind
(and don't lose your key either). Other than actual encryption of data,
the other use of a public/private key pair is that you can use your
private key to "sign" data, such as files or e-mail. This allows anyone
with access to your public key to verify that the source of the data,
the signer, is the holder of the private key associated with the public
key. This acts as an excellent way (better than a physical signature,
actually) to prove that the person sending a file, for example, really
is you. You can also sign the keys belonging to other people, if you can
verify that it is really that person, and send it to a keyserver on the
Internet that holds public keys for people to see. This allows people to
validate that other people are who they say they are, helping create a
network of trust (so to speak). Enigmail adds a bunch of user interface
(buttons and menus) that allows Thunderbird to easily interact with keys
that you have stored on your system. It will prompt you to enter your
passphrase to decrypt data e-mailed to you or to encrypt or sign data
going out. Here are some sample screenshots of Thunderbird and Enigmail
in action. You can click on these for a larger version.
[![crypto1](http://farm2.static.flickr.com/1359/1065063546_c9c487238f.jpg)](http://www.flickr.com/photos/albill/1065063546/ "Photo Sharing")
This is the UI on an e-mail message when composing after Enigmail is
installed. Notice the "OpenPGP" button.
[![crypto2](http://farm2.static.flickr.com/1422/1064201457_366d2261be.jpg)](http://www.flickr.com/photos/albill/1064201457/ "Photo Sharing")
If you click on theOpenPGP button, you have options to sign or encrypt a
message with a secret key that you have generated.
[![crypto3](http://farm2.static.flickr.com/1091/1065063990_742e7657a6.jpg)](http://www.flickr.com/photos/albill/1065063990/ "Photo Sharing")
If you receive a signed message from someone with Enigmail installed, a
pen icon appears in the message and a notice of the signature is shown
above the message headers.
[![crypto4](http://farm2.static.flickr.com/1279/1065063756_c4dc8f113b.jpg)](http://www.flickr.com/photos/albill/1065063756/ "Photo Sharing")
Clicking on the green bar of the notice above the message will show you
details concerning the signature.
[![crypto5](http://farm2.static.flickr.com/1371/1065063404_ef954d10f5_o.png)](http://www.flickr.com/photos/albill/1065063404/ "Photo Sharing")
This is what a signed message looks like to email programs that do not
have Enigmail installed.
[![crypto6](http://farm2.static.flickr.com/1153/1064200751_a86beb66e7.jpg)](http://www.flickr.com/photos/albill/1064200751/ "Photo Sharing")
If you choose to encrypt a message from the OpenPGP menu above, you are
prompted for which public key to use to encrypt the message. If you
don't have a public key for someone, you won't be able to encrypt mail
to them. I chose myself, obviously.
[![crypto7](http://farm2.static.flickr.com/1049/1065064104_ff306b2585.jpg)](http://www.flickr.com/photos/albill/1065064104/ "Photo Sharing")
This is what an undecoded, encrypted message looks like to someone who
receives it.
[![crypto9](http://farm2.static.flickr.com/1185/1064200855_4cb36ca8d9.jpg)](http://www.flickr.com/photos/albill/1064200855/ "Photo Sharing")
If the user can decode it (they have the appropriate private key), this
is how enigmail within Thunderbird will display the message. Notice that
a key has been added to the icons on the right, to show it is encrypted.
The normal message text will be displayed below this.
[![crypto8](http://farm2.static.flickr.com/1019/1064201789_f63466d905.jpg)](http://www.flickr.com/photos/albill/1064201789/ "Photo Sharing")
Clicking on the key icon will display more data concerning the message
encryption. The Enigmail team does have a help page up on their site at
[http://enigmail.mozdev.org/help.html](http://enigmail.mozdev.org/help.html).
There are also other resources available to help get people going. I'm
joining the [e-mail
list](http://www.mozdev.org/mailman/listinfo/enigmail/) for it as well.
My own public key is:

    -----BEGIN PGP PUBLIC KEY BLOCK-----
    Version: GnuPG v1.4.7 (Darwin)

    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
    pw==
    =CZn8
    -----END PGP PUBLIC KEY BLOCK-----
