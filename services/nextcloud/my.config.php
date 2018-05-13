<?php
$CONFIG = array(

/**
 * Previews
 *
 * Nextcloud supports previews of image files, the covers of MP3 files, and text
 * files. These options control enabling and disabling previews, and thumbnail
 * size.
 */

/**
 * The maximum width, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 *
 * Defaults to ``2048``
 */
'preview_max_x' => 512,
/**
 * The maximum height, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 *
 * Defaults to ``2048``
 */
'preview_max_y' => 512,
/**
 * If a lot of small pictures are stored on the Nextcloud instance and the
 * preview system generates blurry previews, you might want to consider setting
 * a maximum scale factor. By default, pictures are upscaled to 10 times the
 * original size. A value of ``1`` or ``null`` disables scaling.
 *
 * Defaults to ``2``
 */
'preview_max_scale_factor' => 1,

);
