<?php

namespace src\ItemController;
// src/Controller/ItemController.php
require __DIR__ . '/../Model/ItemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';

class ItemController{}
?>