<?php

include "php/api/getTableColumns.php";
include "php/api/getTableData.php";

function getTableForCheckbox(string $tableName): array
{
    $columns = getTableColumns($tableName);
    if (empty($columns)) return [];

    $idColumn = $columns[0];
    $nameColumn = $displayColumn ?? ($columns[1] ?? $columns[0]);

    // Szukamy kolumny powiązania z rodzicem (np. ParentID, parent_id itp.)
    $parentCol = null;
    foreach ($columns as $col) {
        if (stripos($col, 'parent') !== false) {
            $parentCol = $col;
            break;
        }
    }

    $rows = getTableData($tableName);
    if (empty($rows)) return [];

    // Etap 1: przetworzenie wszystkich rekordów do prostych obiektów
    $items = [];
    foreach ($rows as $row) {
        $id = $row[$idColumn] ?? null;
        if ($id === null) continue;

        $items[$id] = [
            'ID' => $id,
            'Name' => $row[$nameColumn] ?? 'Brak nazwy',
            'ParentID' => $parentCol && isset($row[$parentCol]) ? $row[$parentCol] : null,
            'Extra' => [],
            'SubItems' => []
        ];

        // Dodajemy pozostałe kolumny jako „Extra”
        foreach ($columns as $col) {
            if (!in_array($col, [$idColumn, $nameColumn, $parentCol]) && isset($row[$col])) {
                $items[$id]['Extra'][$col] = $row[$col];
            }
        }
    }


        // Etap 2: budowanie drzewa
    $tree = [];
    foreach ($items as $id => &$item) {
        $parentId = $item['ParentID'];
        if ($parentId && isset($items[$parentId])) {
            $items[$parentId]['SubItems'][] = &$item;
        } else {
            $tree[] = &$item; // element główny (bez rodzica)
        }
    }
    unset($item); // dobre praktyki przy referencjach

    return $tree;

}
