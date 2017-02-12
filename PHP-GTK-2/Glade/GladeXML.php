<?php

class GladeXML extends GObject
{
    /**
     * GladeXML constructor.
     * @param string $filename
     * @param null|string $root
     * @param null|string $domain
     */
    public function __construct($filename, $root = null, $domain = null)
    {
    }

    /**
     * @param $buffer
     * @param null|string $root
     * @param null|string $domain
     * @return GladeXML
     */
    public static function new_from_buffer($buffer, $root = null, $domain = null)
    {
    }

    /**
     * @param string $name
     * @return GtkWidget
     */
    public function get_widget($name)
    {
    }
}
