<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  tags: 
    label: Tags
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large