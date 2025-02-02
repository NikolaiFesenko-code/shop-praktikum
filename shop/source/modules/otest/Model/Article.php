<?php
namespace o3test\Model;

class Article extends Article_parent
{
    public function getTestField()
    {
        return $this->getFieldData('oxtestfield');
    }
}