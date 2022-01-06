<?php

namespace Root\core;

abstract class AbstractView
{
    /** @var string[string] */
    private $data;

    protected function getData(): array {
        return $this->data;
    }

    protected function setData(array $data): void {
        $this->data = $data;
    }

    public final function render(): string {
        $template_file = str_replace(
            'View.php',
            'template.php',
            (new \ReflectionClass($this))->getFileName());

        extract($this->getData());
        ob_start();
        include $template_file;
        return ob_get_clean();
    }
}