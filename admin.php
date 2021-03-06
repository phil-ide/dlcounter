<?php
/**
 * DokuWiki Plugin dlcounter (Admin Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Phil Ide <phil@pbih.eu>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class admin_plugin_dlcounter extends DokuWiki_Admin_Plugin
{

    /**
     * @return int sort number in admin menu
     */
    public function getMenuSort()
    {
        return 200;
    }

    /**
     * @return bool true if only access for superuser, false is for superusers and moderators
     */
    public function forAdminOnly()
    {
        return false;
    }

    /**
     * Should carry out any processing required by the plugin.
     */
    public function handle()
    {

    }

    /**
     * Render HTML output, e.g. helpful text and a form
     */
    public function html()
    {
        ptln('<h1>' . $this->getLang('menu') . '</h1>');
    }
}

