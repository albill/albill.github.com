# Jekyll for [openbuddha.com](http://openbuddha.com)

Everything in this repository is automatically transformed by [Jekyll](http://github.com/mojombo/jekyll) into a static site whenever I push this repository to GitHub and is uploaded to [openbuddha.com](http://openbuddha.com).

# Features

* On every post + front page latest post
  * [Facebook Send/Like Buttons](https://developers.facebook.com/docs/reference/plugins/like/)
  * [Tweet Button](https://twitter.com/about/resources/tweetbutton)
* On every post
  * [Disqus Comments](http://disqus.com)
  * Pretty permalinks (/year/month/day/post-slug/)
* Plugins
  * rdiscount

# Notes
* If you are planning to fork this blog, please note a few things:
  * Change the hCard at the bottom of default.html to your own
* You may find this useful. Copy paste it into your ~/.bashrc or ~/.bash\_profile and run update\_blog 
  * `alias update_blog='git add . && git commit -a && git push && jekyll && rsync -avz --delete _site/ USERNAME@DOMAIN:/var/www/DOMAIN/'`

# Acknowledgments

* [Robbie Trencheny](http://robbie.io) for the [code that I forked this from](https://github.com/robbiet480/robbie.io).
* [Tom Preston-Werner](http://tom.preston-werner.com/) for [Jekyll](http://github.com/mojombo/jekyll) and his theme, named [tpw](https://github.com/mojombo/tpw).
* [Tate Johnson](http://tatey.com) for his wonderful [theme](https://github.com/tatey/tatey.com).
* [Paul Robert Lloyd](http://paulrobertlloyd.com/2009/06/social_media_icons/) for his [beautiful Social Media Icons](http://paulrobertlloyd.com/2009/06/social_media_icons/)

# License

The following directories and their contents are Copyright, 2002 - 2011 Al Jigen Billings. You may not reuse anything therein without my permission:

* _posts/*
* images/*

All other directories and files are Creative Commons BY 3.0 licensed. Feel free to use the HTML and CSS as you please. 