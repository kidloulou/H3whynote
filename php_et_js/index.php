<?php

class Element {
    protected $tag;
    protected $attributes = [];
    protected $children = [];

    public function __construct($tag) {
        $this->tag = $tag;
    }

    public function setAttribute($name, $value) {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function addChild(Element $child) {
        $this->children[] = $child;
        return $this;
    }

    public function render() {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $name => $value) {
            $html .= " $name=\"$value\"";
        }
        $html .= ">";

        foreach ($this->children as $child) {
            $html .= $child->render();
        }

        $html .= "</{$this->tag}>";
        return $html;
    }
}

class Div extends Element {
    public function __construct() {
        parent::__construct('div');
    }
}

class Span extends Element {
    public function __construct() {
        parent::__construct('span');
    }
}

// Exemple d'utilisation
$div = new Div();
$div->setAttribute('class', 'container')
    ->addChild(new Span()->setAttribute('id', 'span1')->addChild(new Element('p')->setAttribute('class', 'paragraph')->addChild(new Element('strong')->addChild(new Element('em')->addChild(new Element('a')->setAttribute('href', '#')->addChild(new Element('img')->setAttribute('src', 'image.jpg')->setAttribute('alt', 'Alt Text')))))));
    
echo $div->render();
