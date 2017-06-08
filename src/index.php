<?php
  namespace Hvolschenk\Utilities\Array;

  function itemByKey(array $array): callable {
    return function(string $key) {
      return $array[$key] ?? null;
    };
  }
