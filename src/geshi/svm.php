<?php
/* SVM, Fall 2012 version, (c) 2012 Dan Roche */

$language_data = array (
    'LANG_NAME' => 'SVM',
    'COMMENT_SINGLE' => array(1 => '%'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'NUMBERS' => GESHI_NUMBER_INT_BASIC,
    'KEYWORDS' => array(
        1 => array('literal','pop','print','read',
          'add','sub','mul','div',
          'eq','lt','le',
          'and','or','not',
          'dup','swap','load','store',
          'label','goto','branch',
          'printst','clearst','exit','nop',
          'go','help'),
        2 => array('true','false'),
      ),
    'SYMBOLS' => array(
        '!',';',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #dd2200;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            ),
        'BRACKETS' => array(
            0 => 'color: #008000;'
            ),
        'STRINGS' => array(
            0 => 'color: #FF0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #dd2200;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;'
            ),
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
);
