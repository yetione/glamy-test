<?php
abstract class AbstractRequest implements IRequest
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var array
     */
    protected $data;

    public function __construct($url)
    {
        $this->setUrl($url);
    }

    public function get()
    {
        $sData = file_get_contents($this->getUrl());
        if (null === ($aData = json_decode($sData, true)) && json_last_error() !== JSON_ERROR_NONE){
            throw new \RuntimeException('JSON invalid');
        }
        $this->setData($aData);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}