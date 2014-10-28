<?php
//-------------------------------------------------------------------------------
//  RSS Builder Class
//-------------------------------------------------------------------------------
//  Author      Mert Yazicioglu
//  Author URI  http://www.mertyazicioglu.com
//  Date        13th September 2011
//  License     GNU GPLv2
//-------------------------------------------------------------------------------
//  Builds RSS Feed with given values.
//-------------------------------------------------------------------------------

class RSSBuilder extends DOMDocument {

	private $channel;
	private $currentItem;
	private $rss;

	/**
	 * Class constructor.
	 *
	 * @param  void
	 * @return void
	 */
	public function __construct() {

		parent::__construct();

		$this->formatOutput = TRUE;

		$rssElement = $this->createElement( 'rss' );
		$rssElement->setAttribute( 'version', '2.0' );
		$this->rss = $this->appendChild( $rssElement );

	}

	/**
	 * Adds a new channel to the feed.
	 *
	 * @param  void
	 * @return void
	 */
	public function addChannel() {

		$channelElement = $this->createElement( 'channel' );
		$this->channel = $this->rss->appendChild( $channelElement );

	}

	/**
	 * Adds a new element to the channel.
	 *
	 * @param  string $element Name of the channel element.
	 * @param  string $value   Value for the given element.
	 * @param  array  $attr    Two-dim array of attributes and their values for the element. (Optional)
	 * @return void
	 */
	public function addChannelElement( $element, $value, $attr = array() ) {

		$element = $this->createElement( $element, $value );

		foreach ( $attr as $key => $value )
			$element->setAttribute( $key, $value );

		$this->channel->appendChild( $element );

	}

	/**
	 * Adds a new element with sub elements to the channel.
	 *
	 * @param  string $element Name of the channel element.
	 * @param  array  Two-dim array of sub elements and their values.
	 * @return void
	 */
	public function addChannelElementWithSub( $element, $sub ) {

		$element = $this->createElement( $element );

		foreach ( $sub as $key => $value ) {
			$subElement = $this->createElement( $key, $value );
			$element->appendChild( $subElement );
		}

		$this->channel->appendChild( $element );
	}

	/**
	 * Adds a new channel item.
	 *
	 * @param  void
	 * @return void
	 */
	public function addItem() {

		$item = $this->createElement( 'item' );
		$this->currentItem = $this->channel->appendChild( $item );

	}

	/**
	 * Adds a new sub element to the recently added channel item.
	 *
	 * @param  string $element Name of the sub item element.
	 * @param  string $value   Value for the given element.
	 * @param  array  $attr    Two-dim array of attributes and their values for the element. (Optional)
	 * @return void
	 */
	public function addItemElement( $element, $value, $attr = array() ) {

		$element = $this->createElement( $element, $value );

		foreach ( $attr as $key => $value )
			$element->setAttribute( $key, $value );

		$this->currentItem->appendChild( $element );
	}

	/**
	 * Prints the XML document created.
	 *
	 * @param  void
	 * @return string The created XML document.
	 */
	public function __toString() {

		return $this->saveXML();

	}
}
