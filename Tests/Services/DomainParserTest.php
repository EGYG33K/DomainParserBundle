<?php
namespace Egyg33k\DomainParserBundle\Tests\Services;

use Egyg33k\DomainParserBundle\Tests\Services;

class DomainParserTest extends AbstractTestCase {

	function testDomainParserInstance() {
		$parser = $this->container->get('egyg33k.domainParser');
		$this->assertInstanceOf('Pdp\Parser', $parser);
		$host = 'http://user:pass@www.pref.okinawa.jp:8080/path/to/page.html?query=string#fragment';
		$url = $parser->parseUrl($host);
		$this->assertInstanceOf('Pdp\Uri\Url', $url);
	}
}