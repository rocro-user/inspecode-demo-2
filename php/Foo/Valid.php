<?php
/**
 * Package comment.
 *
 * PHP version 5
 *
 * @category  File
 * @package   Foo
 * @author    Nobody <nobody@example.com>
 * @copyright 1970-2000 Copyright
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link      http://example.com/
 */
namespace Foo;

/**
 * Class comment.
 *
 * @category  Class
 * @package   Foo
 * @author    Nobody <nobody@example.com>
 * @copyright 1970-2000 Copyright
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link      http://example.com/
 */
class Valid
{
    public $varPublic;

    protected $varProtected;

    private $_varPrivate;

    /**
     * Function comment.
     *
     * @return void
     */
    public function main()
    {
        echo "Hello!\n";
    }

    /**
     * Function comment.
     *
     * @param string $foo foo
     * @param bool   $bar bar
     *
     * @return void
     */
    public function funcArgs($foo, $bar)
    {
    }

    /**
     * Function comment.
     *
     * @return void
     */
    protected function funcProtected()
    {
    }

    /**
     * Function comment.
     *
     * @return void
     */
    private function _funcPrivate()
    {
    }
}
