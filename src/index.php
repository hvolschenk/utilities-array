<?php
  namespace Hvolschenk\Utilities\Arrays;

  function itemByKey(array $array): callable {
    return function(string $key) {
      return $array[$key] ?? null;
    };
  }
