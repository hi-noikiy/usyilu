<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-25 14:08:51 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
2016-10-25 14:08:51 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
--
#0 /var/www/gogogous/newtravel/application/bootstrap.php(158): Kohana_Core::modules(Array)
#1 /var/www/gogogous/newtravel/index.php(106): require('/var/www/gogogo...')
#2 {main}
2016-10-25 14:08:54 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
2016-10-25 14:08:54 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
--
#0 /var/www/gogogous/newtravel/application/bootstrap.php(158): Kohana_Core::modules(Array)
#1 /var/www/gogogous/newtravel/index.php(106): require('/var/www/gogogo...')
#2 {main}
2016-10-25 14:09:07 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
2016-10-25 14:09:07 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
--
#0 /var/www/gogogous/newtravel/application/bootstrap.php(158): Kohana_Core::modules(Array)
#1 /var/www/gogogous/newtravel/index.php(106): require('/var/www/gogogo...')
#2 {main}
2016-10-25 14:09:13 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
2016-10-25 14:09:13 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
--
#0 /var/www/gogogous/newtravel/application/bootstrap.php(158): Kohana_Core::modules(Array)
#1 /var/www/gogogous/newtravel/index.php(106): require('/var/www/gogogo...')
#2 {main}
2016-10-25 14:09:33 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
2016-10-25 14:09:33 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'car' at '/var/www/gogogous/plugins/car' ~ SYSPATH/classes/kohana/core.php [ 553 ]
--
#0 /var/www/gogogous/newtravel/application/bootstrap.php(158): Kohana_Core::modules(Array)
#1 /var/www/gogogous/newtravel/index.php(106): require('/var/www/gogogo...')
#2 {main}
2016-10-25 18:31:52 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391512, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391512, 2, '1', '', '', '', '', '', '', '', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:31:52 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391512, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391512, 2, '1', '', '', '', '', '', '', '', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:32:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391521, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391521, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:32:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391521, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391521, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:32:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391523, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391523, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:32:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391523, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391523, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:32:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391534, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391534, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:32:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391534, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391534, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:32:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391571, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391571, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:32:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391571, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391571, 2, '1', '', '', '', '', '', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:32:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391579, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391579, 2, '1', '', '', '', '', '思途测试', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:32:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391579, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391579, 2, '1', '', '', '', '', '思途测试', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:33:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391582, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391582, 2, '1', '', '', '', '', '思途测试', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:33:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391582, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391582, 2, '1', '', '', '', '', '思途测试', '', '思途测试', '', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:33:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391590, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391590, 2, '1', '', '', '', '', '思途测试', '', '思途测试', '​思途测试', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:33:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391590, 0, '思途测试', '', '37', '37', '5', '4', 0, '', '5', '500', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391590, 2, '1', '', '', '', '', '思途测试', '', '思途测试', '​思途测试', '', '75', '飞机', '', '', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png', '/uploads/2016/0819/fff9d73683f0cf7b63b6481daea73b1f.png||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:34:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391655, 0, '思途测试', '', '36', '36', '6', '5', 0, '', '1', '600', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391655, 2, '1', '', '', '', '', '', '', '', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:34:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477391655, 0, '思途测试', '', '36', '36', '6', '5', 0, '', '1', '600', '', 'line_new/line_show.htm', '', 0, 0, 0, '', '', '', '', 1477391655, 2, '1', '', '', '', '', '', '', '', '', '', '75', '飞机', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-25 18:47:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477392431, 0, '思途测试', '', '', '', '2', 0, 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477392431, 2, '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 18:47:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (1, 1477392431, 0, '思途测试', '', '', '', '2', 0, 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477392431, 2, '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}