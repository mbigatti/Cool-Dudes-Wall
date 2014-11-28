# Cool Dudes Wall

Fun side project that renders a page of cards about *really cool people*, using data gathered from people own [Twitter](http://twitter.com) profile. Each card shows an avatar, name, description and follower count. Hover the mouse on the avatar for a cool animation and click to open the person Twitter profile.

![image](http://cl.ly/image/3k3a0a1I0106/Cool%20Dude%20Card.png)

Live on my site at [Cool Dudes Wall](http://bigatti.it/cooldudes/) page.

## Features

- responsive design, scales from desktop to mobile;
- two designs: with and without banner image (configurable);
- get live data from Twitter using Twitter 1.1 REST API;
- sort cards by follower count;
- caching of Twitter data;
- automatic banner caching, resizing and blurring;
- CSS animations (title drop in and avatar pop and rotation);
- accepts parameters for page title, screen names and show/hide banner to create dynamic pages;

### Cache

Twitter data lookup is cached and refreshed once in an hour. Banner images are cached and post-processed when they change; they are checked at every page reload.

### Visual Design
Shadows and colors borrowed by [Google Material Design](http://google.com/design).

## Installation

- Install apache httpd, PHP and ImageMagick
- Edit `/etc/php.ini` to tweak PHP execution parameters (like `memory_limit = 128M, max_execution_time = 120`) 
- Create `/usr/share/cooldudes`.
- Copy source files from `src`path into `/usr/share/cooldudes`.
- Copy `sample_configuration.ini` to `/usr/share/cooldudes/configuration.ini`.
- Edit `configuration.ini` to specify your Twitter OAuth access tokens, consumer key and secret.
- Create `/usr/share/cooldudes/cache` and `/usr/share/cooldudes/cache/remote`.

## Requirements

- `yum install httpd`
- `yum install php`
- `yum install ImageMagick`

## Acknowledgments

- Image processing is done by [ImageMagick](http://imagemagick.org).
- ImageMagick management and caching is based on [phpimageresize script](https://github.com/wes/phpimageresize).
- Twitter API is managed by [twitter-api-php](https://github.com/J7mbo/twitter-api-php)
- Some CSS animations by [Animate.css](https://daneden.github.io/animate.css/)

### Contact
[http://bigatti.it](http://bigatti.it)  
[@mbigatti](https://twitter.com/mbigatti)
