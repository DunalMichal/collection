<?php
function MapDBToCheckboxFormat(array $dbRows, array $columnMap): array {
    $mapped = [];
    foreach ($dbRows as $row) {
        $item = [];
        foreach ($columnMap as $key => $colName) {
            $item[$key] = isset($row[$colName]) ? $row[$colName] : null;
        }
        if (!isset($item['SubItems'])) $item['SubItems'] = [];
        $mapped[] = $item;
    }
    return $mapped;
}