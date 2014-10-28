<?php
//-------------------------------------------------------------------------------
//  Sample Usage of the RSSBuilder Class
//-------------------------------------------------------------------------------
//  Author      Mert Yazicioglu
//  Author URI  http://www.mertyazicioglu.com
//  Date        13th September 2011
//  License     GNU GPLv2
//-------------------------------------------------------------------------------
//  Creates an exact replica of cyber.law.harvard.edu/rss/examples/rss2sample.xml
//-------------------------------------------------------------------------------

require_once( 'class.rssbuilder.php' );

$RB = new RSSBuilder();

$RB->addChannel();
$RB->addChannelElement( 'title', 'Liftoff News' );
$RB->addChannelElement( 'link', 'http://liftoff.msfc.nasa.gov/' );
$RB->addChannelElement( 'description', 'Liftoff News' );
$RB->addChannelElement( 'language', 'en-us' );
$RB->addChannelElement( 'pubDate', 'Tue, 10 Jun 2003 04:00:00 GMT' );
$RB->addChannelElement( 'lastBuildDate', 'Tue, 10 Jun 2003 09:41:01 GMT' );
$RB->addChannelElement( 'docs', 'http://blogs.law.harvard.edu/tech/rss' );
$RB->addChannelElement( 'generator', 'Weblog Editor 2.0' );
$RB->addChannelElement( 'managingEditor', 'editor@example.com' );
$RB->addChannelElement( 'webMaster', 'webmaster@example.com' );

$RB->addItem();
$RB->addItemElement( 'title', 'Star City' );
$RB->addItemElement( 'link', 'http://liftoff.msfc.nasa.gov/news/2003/news-starcity.asp' );
$RB->addItemElement( 'description', 'How do Americans get ready to work with Russians aboard the International Space Station? They take a crash course in culture, language and protocol at Russia\'s &lt;a href="http://howe.iki.rssi.ru/GCTC/gctc_e.htm"&gt;Star City&lt;/a&gt;.' );
$RB->addItemElement( 'pubDate', 'Tue, 03 Jun 2003 09:39:21 GMT' );
$RB->addItemElement( 'guid', 'http://liftoff.msfc.nasa.gov/2003/06/03.html#item573' );

$RB->addItem();
$RB->addItemElement( 'description', 'Sky watchers in Europe, Asia, and parts of Alaska and Canada will experience a &lt;a href="http://science.nasa.gov/headlines/y2003/30may_solareclipse.htm"&gt;partial eclipse of the Sun&lt;/a&gt; on Saturday, May 31st.' );
$RB->addItemElement( 'pubDate', 'Fri, 30 May 2003 11:06:42 GMT' );
$RB->addItemElement( 'guid', 'http://liftoff.msfc.nasa.gov/2003/05/30.html#item572' );

$RB->addItem();
$RB->addItemElement( 'title', 'The Engine That Does More' );
$RB->addItemElement( 'link', 'http://liftoff.msfc.nasa.gov/news/2003/news-VASIMR.asp' );
$RB->addItemElement( 'description', 'Before man travels to Mars, NASA hopes to design new engines that will let us fly through the Solar System more quickly.  The proposed VASIMR engine would do that.' );
$RB->addItemElement( 'pubDate', 'Tue, 27 May 2003 08:37:32 GMT' );
$RB->addItemElement( 'guid', 'http://liftoff.msfc.nasa.gov/2003/05/27.html#item571' );

$RB->addItem();
$RB->addItemElement( 'title', 'Astronauts\' Dirty Laundry' );
$RB->addItemElement( 'link', 'http://liftoff.msfc.nasa.gov/news/2003/news-laundry.asp' );
$RB->addItemElement( 'description', 'Compared to earlier spacecraft, the International Space Station has many luxuries, but laundry facilities are not one of them.  Instead, astronauts have other options.' );
$RB->addItemElement( 'pubDate', 'Tue, 20 May 2003 08:56:02 GMT' );
$RB->addItemElement( 'guid', 'http://liftoff.msfc.nasa.gov/2003/05/20.html#item570' );

echo $RB;
