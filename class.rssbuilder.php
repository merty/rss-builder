<?php
//-------------------------------------------------------------------------------
//  RSS Builder Class
//-------------------------------------------------------------------------------
//  Author		Mert Yazicioglu
//  Author URI  http://www.mertyazicioglu.com
//  Date		13th September 2011
//  License		GNU GPLv2
//-------------------------------------------------------------------------------
//  Builds RSS Feed with given values.
//-------------------------------------------------------------------------------

class RSSBuilder extends DOMDocument {

	private $channel;
	private $currentItem;
	private $rss;

	public function __construct() {

		parent::__construct();

		$this->formatOutput = TRUE;

		$rssElement = $this->createElement( 'rss' );
		$rssElement->setAttribute( 'version', '2.0' );
		$this->rss = $this->appendChild( $rssElement );

	}

	public function addChannel() {

		$channelElement = $this->createElement( 'channel' );
		$this->channel = $this->rss->appendChild( $channelElement );

	}

	public function addChannelElement( $element, $value, $attr = array() ) {

		$element = $this->createElement( $element, $value );

		foreach ( $attr as $key => $value )
			$element->setAttribute( $key, $value );

		$this->channel->appendChild( $element );

	}

	public function addChannelElementWithSub( $element, $sub ) {

		$element = $this->createElement( $element );

		foreach ( $sub as $key => $value ) {
			$subElement = $this->createElement( $key, $value );
			$element->appendChild( $subElement );
		}

		$this->channel->appendChild( $element );
	}

	public function addItem() {

		$item = $this->createElement( 'item' );
		$this->currentItem = $this->channel->appendChild( $item );

	}

	public function addItemElement( $element, $value, $attr = array() ) {

		$element = $this->createElement( $element, $value );

		foreach ( $attr as $key => $value )
			$element->setAttribute( $key, $value );

		$this->currentItem->appendChild( $element );
	}

	public function __toString() {

		return $this->saveXML();

	}
}

?>