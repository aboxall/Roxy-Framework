<?php
namespace Roxy\Config;
use Roxy\Config\Parser\IniParser as IniParser;
use Roxy\Config\Parser\PhpParser as PhpParser;
use Roxy\Config\Parser\XmlParser as XmlParser;
class Config
{
	const AUTO = 0;
	const INI = 1;
	const PHP = 2;
	const XML = 3;
	const JSON = 4;

	static private $confExt = array(
			'ini' => '1',
			'php' => '2',
			'xml' => '3',
			'json' => '4'
		);
	//protected function __construct() {}
	protected function __clone() {}
	protected function __wakeup() {}

	public function __parse($file, $fileType = Config::AUTO)
	{
		if($fileType == self::AUTO)
		{
			$fileType = self::$confExt[pathinfo($file, PATHINFO_EXTENSION)];

			switch($fileType)
			{
				case self::INI:
					$this->__parser = new IniParser;
					break;
				case self::PHP:
					echo "PHP Loaded";
					break;
				case self::XML:
					echo "XML Loaded";
				case self::JSON:
					echo "JSON LOADED";
			}
		}
	}
}