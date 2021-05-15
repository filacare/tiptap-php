<?php

namespace Tiptap\Nodes;

class HorizontalRule extends Node
{
    protected $name = 'horizontal_rule';
    protected $tagName = 'hr';

    public function selfClosing()
    {
        return true;
    }
}
