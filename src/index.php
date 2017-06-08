<?php
  namespace Hvolschenk\Utilities\Arrays;

  function itemByKey(array $array): callable {
    return function(string $key) use ($array) {
      return $array[$key] ?? null;
    };
  }
