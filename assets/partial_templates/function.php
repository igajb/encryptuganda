<?php

/**
 * FontIcons will dynamically introduce fontawesom icon from the passed value
 *
 * PHP version 7.2.15
 *
 * @category PHP
 * @package  Encyrpt_Uganda
 * @author   Iga John <igajohnb@toolboxtechnologies.com>
 * @license  https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD
 * @link     https://toolboxtechnologies.com
 */
class FontIcons
{

    /**
     * FafaIcons
     *
     * @param mixed $icon
     *
     * @return void
     */
    /**
     * FafaIcons
     *
     * @param mixed $icon
     *
     * @return void
     */
    public function fafaIcons($icon)
    {
        $myIcon = '<i class="fa <?php echo $newIcon ?>" aria-hidden="true"></i>';
        return $myIcon;
    }
}
