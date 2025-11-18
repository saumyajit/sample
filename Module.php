<?php
/**
  *
  *
  * @version 1.0
  * @author Saumyajt Pramanik <saumyajitp8@gmail.com>
  * @license GNU Lesser General Public License v3.0
  *
  * You can redistribute this library and/or modify it under the terms of
  * the GNU LGPL as published by the Free Software Foundation,
  * either version 3 of the License, or any later version.
  * However you must not change author and copyright information.
  */
namespace Modules\MaintenanceCalendar;

use Zabbix\Core\CModule,
    APP,
    CMenuItem;

class Module extends CModule {
    public function init(): void {
        APP::Component()->get('menu.main')
            ->findOrAdd(_('Reports'))
                ->getSubmenu()
                    ->insertAfter(_('Notification'),
                        (new CMenuItem(_('Maintenance Calendar')))->setAction('maintenance.calendar')
                    );
    }
}
