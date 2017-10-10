<?php
/**
 * A comment.
 *
 * PHP version 5
 *
 * @category Script
 * @package  None
 * @author   Nobody <nobody@example.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://example.com/
 */

spl_autoload_register(
    function ($class) {
        $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
        if (file_exists($path)) {
            include $path;
        }
    }
);
