--- 
layout: default
title: Archive
status: publish
---
<h2>Archive</h2>
<ol id="archive">
  {% for post in site.posts offset:1 %}
    <li>
      <time datetime="{{ post.date | date: '%Y-%m-%dT%H:%M:%S-08:00' }}">{{ post.date | date: "%d %B, %Y" }}</time>
      <p><a href="{{ post.url }}">{{ post.title }}</a></p>
    </li>
  {% endfor %}
