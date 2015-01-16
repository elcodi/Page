<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Component\Page\Entity\Interfaces;

use Elcodi\Component\Core\Entity\Interfaces\DateTimeInterface;
use Elcodi\Component\Core\Entity\Interfaces\EnabledInterface;
use Elcodi\Component\Core\Entity\Interfaces\IdentifiableInterface;
use Elcodi\Component\MetaData\Entity\Interfaces\MetaDataInterface;

/**
 * Interface PageInterface
 *
 * @author Cayetano Soriano <neoshadybeat@gmail.com>
 * @author Jordi Grados <planetzombies@gmail.com>
 * @author Damien Gavard <damien.gavard@gmail.com>
 * @author Berny Cantos <be@rny.cc>
 */
interface PageInterface
    extends
    IdentifiableInterface,
    MetaDataInterface,
    DateTimeInterface,
    EnabledInterface
{
    /**
     * Get the path
     *
     * @return string
     */
    public function getPath();

    /**
     * Set the path
     *
     * @param string $path The path
     *
     * @return $this Self object
     */
    public function setPath($path);

    /**
     * Get the content
     *
     * @return string
     */
    public function getContent();

    /**
     * Set the content
     *
     * @param string $content The content
     *
     * @return $this Self object
     */
    public function setContent($content);

    /**
     * Get the title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set the title
     *
     * @param string $title The title
     *
     * @return $this Self object
     */
    public function setTitle($title);
}
