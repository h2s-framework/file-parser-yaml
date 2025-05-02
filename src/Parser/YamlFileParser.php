<?php

namespace Siarko\FileParserYaml\Parser;

use Siarko\FileParserYaml\Api\Parser\YamlParserInterface;
use Siarko\Files\Api\FileInterface;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class YamlFileParser implements \Siarko\Files\Api\Parse\FileParserInterface, YamlParserInterface
{

    /**
     * @param FileInterface $file
     * @throws ParseException
     * @return mixed
     */
    function parse(FileInterface $file): mixed
    {
        return Yaml::parse($file->getContent(), Yaml::PARSE_CUSTOM_TAGS);
    }

}