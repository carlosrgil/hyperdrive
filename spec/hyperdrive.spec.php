<?php

namespace hyperdrive\spec;

use function hyperdrive\enter_hyperspace;

describe('hyperdrive', function () {
  describe('enter_hyperspace()', function () {
    it('echos empty script given empty string', function () {
      $closure = function() { enter_hyperspace(''); };
      expect($closure)->toEcho('<script></script>');
    });

    it('echos string in script given string', function () {
      $closure = function() { enter_hyperspace('Danger, Will Robinson!'); };
      expect($closure)->toEcho('<script>Danger, Will Robinson!</script>');
    });

    it('does not echo unexpected string', function () {
      $closure = function() { enter_hyperspace('Danger, Will Robinson!'); };
      expect($closure)->not->toEcho('<script>Smoke \'em if you got \'em</script>');
    });
  });
});
