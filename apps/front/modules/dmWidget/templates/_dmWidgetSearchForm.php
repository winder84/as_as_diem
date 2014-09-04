<?php

echo
$form->open('action=main/search method=get'),

$form['query']->field('.query.searchInput'),

$form->submit(''),

$form->close();