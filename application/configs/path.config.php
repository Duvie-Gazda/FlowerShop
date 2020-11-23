<?php
    define("ROOT", dirname($_SERVER['DOCUMENT_ROOT']).'/');
    
    // folders
    const APPLICATION = ROOT . 'application/';
    const MEDIA = ROOT . 'media/';
    const PUBLIC_ = ROOT . 'public/';
    const VENDOR = ROOT .'vendor/';
    const STYLES = ROOT . 'styles/';
    const VIEWS = APPLICATION . 'application/views/';
    const CONFIGS = APPLICATION . 'application/configs/';
    const CONTROLLERS = APPLICATION .  'application/controllers/';
    const CORE = APPLICATION . 'application/core/';
    const DATA_BASE = APPLICATION . 'application/database/';
    const MODELS = APPLICATION . 'application/models/';
    const LOGS = APPLICATION . 'application/logs/';
    const HELPERS = APPLICATION . 'application/helpers/';
    
    const BOOTSTRAP = ROOT . '';
    const AUTOLOAD = VENDOR . 'autoload.php';
    // logs
    const ERROR = LOGS . 'error.txt';
    const LOG = LOGS . 'log.txt';
    const WARNING = LOGS . 'warning.txt';

