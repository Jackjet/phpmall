<?php
// ����Ӧ��Ŀ¼
define('APP_PATH', __DIR__ . '/application/');
// ���ؿ�������ļ�
require __DIR__ . '/thinkphp/start.php';
// ��ȡ�Զ����ɶ����ļ�
$build = include 'build.php';
// �����Զ�����
\think\Build::module('xcx');