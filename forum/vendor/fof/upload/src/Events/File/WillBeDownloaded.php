<?php

/*
 * This file is part of fof/upload.
 *
 * Copyright (c) FriendsOfFlarum.
 * Copyright (c) Flagrow.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FoF\Upload\Events\File;

use FoF\Upload\Download;
use FoF\Upload\File;

class WillBeDownloaded
{
    /**
     * @var File
     */
    public $file;
    public $response;
    /**
     * @var Download
     */
    public $download;

    public function __construct(File $file, &$response, Download $download = null)
    {
        $this->file = $file;
        $this->response = $response;
        $this->download = $download;
    }
}
